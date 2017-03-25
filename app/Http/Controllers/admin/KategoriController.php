<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use Auth;

class KategoriController extends Controller
{
    public function displayAllCategory()
    {
        $kategoriModel = new Kategori();
        $listKategori  = $kategoriModel->orderBy('id', 'desc')
            ->paginate(15);

        $user = Auth::user();

        $viewData                  = array();
        $viewData['list_kategori'] = $listKategori;
        $viewData['user']          = $user;

        return view('admin.all_category')->with('viewData', $viewData);
    }
}
