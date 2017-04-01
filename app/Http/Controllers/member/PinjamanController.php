<?php

namespace App\Http\Controllers\member;

use App\Buku;
use App\Http\Controllers\Controller;
use App\Peminjaman;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index()
    {
        $user         = Auth::user();
        $data['user'] = $user;

        $peminjamanModel    = new Peminjaman;
        $data['peminjaman'] = $peminjamanModel->where('id_peminjam', '=', $user->id)
            ->with('detailBookInfo')
            ->with('detailApprover')
            ->get();

        return view('member.pinjaman.show_pinjaman', $data);
    }

    public function buatPeminjaman($idBuku)
    {
        $user           = Auth::user();
        $data['user']   = $user;
        $data['idBuku'] = $idBuku;

        try {
            $bukuModel    = new Buku();
            $data['buku'] = $bukuModel->where('buku_id', '=', $idBuku)
                ->firstOrFail();
        } catch (\Exception $e) {
            return redirect('member/dashboard');
        }

        return view('member.pinjaman.buat_pinjaman', $data);
    }

    public function handlePeminjaman(Request $request)
    {
        $this->validate($request, [
            'id_buku' => 'required|integer',
            'member'  => 'required|integer',
        ]);

        $idBuku = $request->input('id_buku');

        try {
            $bukuModel = new Buku();
            $user      = Auth::user();
            $buku      = $bukuModel->where('buku_id', '=', $idBuku)
                ->firstOrFail();

            $peminjamanModel                  = new Peminjaman();
            $peminjamanModel->created_at      = \Carbon\Carbon::now();
            $peminjamanModel->id_buku         = $buku->buku_id;
            $peminjamanModel->id_peminjam     = $user->id;
            $peminjamanModel->jatuh_tempo     = date("Y-m-d", strtotime("now +7 days"));
            $peminjamanModel->mekanisme       = 'Langsung';
            $peminjamanModel->status_approval = 'Waiting For Approval';
            $peminjamanModel->save();

            return redirect('member/pinjaman');
        } catch (\Exception $e) {
            return redirect('member/dashboard');
        }
    }
}
