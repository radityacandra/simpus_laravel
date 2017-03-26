<?php

namespace App\Http\Controllers\member;

use App\Buku;
use App\Http\Controllers\Controller;
use App\Peminjaman;
use Auth;

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
        $user         = Auth::user();
        $data['user'] = $user;

        try {
            $bukuModel    = new Buku();
            $data['buku'] = $bukuModel->where('buku_id', '=', $idBuku)
                ->firstOrFail();
        } catch (\Exception $e) {
            return redirect('member/dashboard');
        }

        return view('member.pinjaman.buat_pinjaman', $data);
    }
}
