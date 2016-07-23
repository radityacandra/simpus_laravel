<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

use App\Http\Requests;

class SpecificSearchController extends Controller
{
	public function displaySearchView(){
		$bukuModel = new Buku();
		$buku = $bukuModel->orderBy('buku_id', 'asc')
											->paginate(15);
		
		$viewData = array();
		$viewData['result_buku'] = $buku;
		
		return view('search')->with('viewData', $viewData);
	}
}
