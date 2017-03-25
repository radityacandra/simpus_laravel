<?php

namespace App\Http\Controllers\admin;

use App\BukuKategori;
use App\Http\Controllers\Controller;
use App\Kategori;
use Auth;
use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public function displayAddCategoryView()
    {
        $user = Auth::user();

        $viewData         = array();
        $viewData['user'] = $user;

        return view('admin.add_category')->with('viewData', $viewData);
    }

    public function retrieveAddCategory(Request $request)
    {
        $kategoriModel = new Kategori();

        $nama_kategori = '';
        if ($request->exists('nama_kategori')) {
            $nama_kategori       = $request->input('nama_kategori');
            $kategoriModel->nama = $nama_kategori;
            $kategoriModel->save();
        }

        foreach ($request->input('buku_included') as $buku_included) {
            if ($nama_kategori != '') {
                echo $nama_kategori;
                $bukuKategoriModel             = new BukuKategori();
                $bukuKategoriModel->kategori   = $nama_kategori;
                $bukuKategoriModel->judul_buku = $buku_included;
                $bukuKategoriModel->save();
            }
        }
    }
}
