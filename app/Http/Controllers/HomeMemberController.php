<?php

namespace App\Http\Controllers;

use App\Buku;

class HomeMemberController extends Controller
{
    public function displayHomeView()
    {
        $bukuModel  = new Buku();
        $bukuLatest = $bukuModel->orderBy('buku_id', 'asc')
            ->take(8)
            ->get()
            ->toArray();

        $bukuPopular = $bukuModel->orderBy('view', 'desc')
            ->take(8)
            ->get()
            ->toArray();

        $viewData                 = array();
        $viewData['buku_latest']  = $bukuLatest;
        $viewData['buku_popular'] = $bukuPopular;

        return view('home')->with('viewData', $viewData);
    }
}
