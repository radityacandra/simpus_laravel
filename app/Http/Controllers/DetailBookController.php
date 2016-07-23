<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

use App\Http\Requests;

class DetailBookController extends Controller
{
	public function displayDetailBookView($buku_id){
		$bukuModel = new Buku();
		$buku = $bukuModel->where('buku_id', '=', $buku_id)
											->first();
		
		return view('detail')->with('buku', $buku);
	}
}
