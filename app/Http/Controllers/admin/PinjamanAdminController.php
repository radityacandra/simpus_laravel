<?php

namespace App\Http\Controllers\admin;

use App\Buku;
use App\Http\Controllers\Controller;
use App\Peminjaman;
use App\PinjamBuku;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PinjamanAdminController extends Controller
{
    public function displayAllPinjaman()
    {
        $pinjamBukuModel = new PinjamBuku();
        $listPinjaman    = $pinjamBukuModel->where('keterlambatan', '>', -1)
            ->with('detailMemberInfo')
            ->with('detailBookInfo')
            ->orderBy('jatuh_tempo', 'desc')
            ->paginate(15)
            ->toArray();
        $listPinjaman2 = $pinjamBukuModel->where('keterlambatan', '>', -1)
            ->with('detailMemberInfo')
            ->with('detailBookInfo')
            ->orderBy('jatuh_tempo', 'desc')
            ->paginate(15);

        for ($i = 0; $i < sizeof($listPinjaman['data']); $i++) {
            $listPinjaman['data'][$i]['created_at'] = \Carbon\Carbon::createFromTimestamp(strtotime($listPinjaman['data'][$i]['created_at']));

            $now                                     = \Carbon\Carbon::now();
            $listPinjaman['data'][$i]['jatuh_tempo'] = \Carbon\Carbon::createFromTimestamp(strtotime($listPinjaman['data'][$i]['jatuh_tempo']));

            $difference = $now->diffInSeconds($listPinjaman['data'][$i]['jatuh_tempo'], false);

            if ($difference > 0) {
                $listPinjaman['data'][$i]['status'] = 'aktif';
            } else {
                $listPinjaman['data'][$i]['status'] = 'overdue';
            }

            $listPinjaman['data'][$i]['jatuh_tempo'] = $listPinjaman['data'][$i]['jatuh_tempo']->diffForHumans();

        }

        $user = Auth::user();

        $viewData                    = array();
        $viewData['list_pinjaman']   = $listPinjaman;
        $viewData['list_pinjaman_2'] = $listPinjaman2;
        $viewData['user']            = $user;

        return view('admin.pinjaman.all_pinjaman')->with('viewData', $viewData);
    }

    public function detailPeminjaman($idPeminjaman)
    {
        $user = Auth::user();

        $peminjamanModel = new Peminjaman();

        try {
            $pinjaman = $peminjamanModel->where('id_peminjaman', '=', $idPeminjaman)
                ->with('detailBookInfo')
                ->with('detailMemberInfo')
                ->with('detailApprover')
                ->firstOrFail();

            $now                   = \Carbon\Carbon::now();
            $pinjaman->jatuh_tempo = \Carbon\Carbon::createFromTimestamp(strtotime($pinjaman->jatuh_tempo));
            $pinjaman->created_at  = \Carbon\Carbon::createFromTimestamp(strtotime($pinjaman->created_at));

            $fullDifference    = $pinjaman->created_at->diffInDays($pinjaman->jatuh_tempo, false);
            $currentDifference = $now->diffInDays($pinjaman->jatuh_tempo, false);

            if ($currentDifference > 0) {
                $pinjaman->status = 'aktif';
            } else {
                $pinjaman->status = 'overdue';
            }

            if ($currentDifference <= $fullDifference) {
                $percentProgress = ($currentDifference / $fullDifference) * 100;
            } else {
                $percentProgress = 100;
            }

            $pinjaman->progress = $percentProgress . '%';

            $viewData             = array();
            $viewData['pinjaman'] = $pinjaman;
            $viewData['user']     = $user;

            return view('admin.pinjaman.detail_peminjaman', $viewData);
        } catch (\Exception $e) {
            return redirect('admin/pinjaman');
        }
    }

    public function buatPeminjaman()
    {
        $memberModel         = new User();
        $viewData['members'] = $memberModel->where('role', '=', 'member')
            ->get();

        $bukuModel         = new Buku();
        $viewData['bukus'] = $bukuModel->get();

        $user             = Auth::user();
        $viewData['user'] = $user;

        return view('admin.pinjaman.new_pinjaman', $viewData);
    }

    public function handleBuatPeminjaman(Request $request)
    {
        $this->validate($request, [
            'member'      => 'required|integer',
            'tgl_pinjam'  => 'required|date',
            'tgl_kembali' => 'required|date',
        ]);

        $user = Auth::user();

        $member     = $request->input('peminjam');
        $bukus      = $request->input('buku');
        $tglPinjam  = $request->input('tgl_pinjam');
        $tglKembali = $request->input('tgl_kembali');

        $bukuModel   = new Buku();
        $memberModel = new User();

        $existingMember = $memberModel->where('id', '=', $member)
            ->where('role', '=', 'member')
            ->get()
            ->toArray();

        if (sizeof($existingMember) > 0) {
            foreach ($bukus as $index => $buku) {
                $existingBook = $bukuModel->where('buku_id', '=', $buku)
                    ->get()
                    ->toArray();

                if (sizeof($existingBook) > 0) {
                    $peminjamanModel = new Peminjaman();

                    $peminjamanModel->created_at      = $tglPinjam;
                    $peminjamanModel->id_buku         = $buku;
                    $peminjamanModel->id_peminjam     = $member;
                    $peminjamanModel->id_approver     = $user->id;
                    $peminjamanModel->jatuh_tempo     = $tglKembali;
                    $peminjamanModel->mekanisme       = 'Klasik';
                    $peminjamanModel->status_approval = 'Approved';
                    $peminjamanModel->save();
                } else {
                    return redirect('/admin/pinjaman/tambah');
                }
            }

            return redirect('/admin/pinjaman');
        } else {
            return redirect('/admin/pinjaman/tambah');
        }
    }

    public function ajaxInfoPeminjam($idUser)
    {
        $memberModel = new User();

        $member = $memberModel->where('id', '=', $idUser)
            ->where('role', '=', 'member')
            ->first()
            ->toArray();

        return response()->json($member);
    }

    public function ajaxSemuaMember()
    {
        $memberModel = new User();

        $member = $memberModel->where('role', '=', 'member')
            ->get()
            ->toArray();

        return response()->json($member);
    }

    public function ajaxSemuaBuku()
    {
        $bukuModel = new Buku();

        $buku = $bukuModel->get()->toArray();

        return response()->json($buku);
    }

    public function ajaxInfoBuku($idBuku)
    {
        $bukuModel = new Buku();

        $buku = $bukuModel->where('buku_id', '=', $idBuku)
            ->first()
            ->toArray();

        return response()->json($buku);
    }

    /**
     * Approve pinjaman yang diterbitkan melalui mekanisme pinjam langsung
     *
     * @param  integer  $idPeminjaman    id peminjaman  yang ingin di-approve
     * @return void                      alamat redirect
     */
    public function approvePinjaman($idPeminjaman)
    {
        $user = Auth::user();

        $peminjamanModel = new Peminjaman();

        try {
            $peminjaman = $peminjamanModel->where('id_peminjaman', '=', $idPeminjaman)
                ->firstOrFail();

            if ($peminjaman->status_approval == 'Waiting For Approval') {
                $peminjamanModel->where('id_peminjaman', '=', $idPeminjaman)
                    ->update([
                        'status_approval' => 'Approved',
                        'id_approver'     => $user->id,
                        'updated_at'      => \Carbon\Carbon::now(),
                    ]);
            }

            return redirect('admin/pinjaman/detail/' . $idPeminjaman);
        } catch (\Exception $e) {
            return redirect('admin/pinjaman');
        }
    }

    public function selesaikanPinjaman($idPeminjaman)
    {
        $user = Auth::user();

        $peminjamanModel = new Peminjaman();

        try {
            $peminjaman = $peminjamanModel->where('id_peminjaman', '=', $idPeminjaman)
                ->firstOrFail();

            if ($peminjaman->status_pinjam == 'Aktif') {
                $peminjamanModel->where('id_peminjaman', '=', $idPeminjaman)
                    ->update([
                        'status_pinjam' => 'Selesai',
                        'id_approver'   => $user->id,
                        'updated_at'    => \Carbon\Carbon::now(),
                    ]);
            }

            return redirect('admin/pinjaman/detail/' . $idPeminjaman);
        } catch (\Exception $e) {
            return redirect('admin/pinjaman');
        }
    }
}
