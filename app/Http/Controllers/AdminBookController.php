<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminBookController extends Controller
{
	public function displayListBook(){
		$bukuModel = new Buku();
		$listBuku = $bukuModel->orderBy('buku_id', 'desc')
													->paginate(5);
		
		$viewData = array();
		$viewData['list_buku'] = $listBuku;
		
		return view('all_book')->with('viewData', $viewData);
	}
}
