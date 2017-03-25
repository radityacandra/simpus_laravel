<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class SpecificSearchController extends Controller
{
    public function displaySearchView(Request $request)
    {
        $viewData = array();

        if (!$request->exists('submit')) {
            $bukuModel = new Buku();
            $buku      = $bukuModel->orderBy('buku_id', 'asc')
                ->paginate(15);

            $viewData['result_buku'] = $buku;

            return view('search')->with('viewData', $viewData);
        } else {
            $viewData['result_buku'] = $this->searchBook($request);

            return view('search')->with('viewData', $viewData);
        }
    }

    public function searchBook(Request $request)
    {
        $bukuModel = new Buku();
        $judul     = $request->input('judul_buku');
        $tahun     = $request->input('tahun_terbit');
        $pengarang = $request->input('nama_pengarang');
        $penerbit  = $request->input('nama_penerbit');

        $resultBuku = $bukuModel->where('judul', 'like', '%' . $judul . '%')
            ->where('tahun_terbit', 'like', '%' . $tahun . '%')
            ->where('penulis', 'like', '%' . $pengarang . '%')
            ->where('penerbit', 'like', '%' . $penerbit . '%')
            ->paginate(15);

        return $resultBuku;
    }
}
