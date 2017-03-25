<?php

namespace App\Http\Controllers\admin;

use App\Buku;
use App\Http\Controllers\Controller;
use Auth;

class AdminBookController extends Controller
{
    public function displayListBook()
    {
        $bukuModel = new Buku();
        $listBuku  = $bukuModel->orderBy('buku_id', 'desc')
            ->paginate(5);

        $user = Auth::user();

        $viewData              = array();
        $viewData['list_buku'] = $listBuku;
        $viewData['user']      = $user;

        return view('admin.all_book')->with('viewData', $viewData);
    }
}
