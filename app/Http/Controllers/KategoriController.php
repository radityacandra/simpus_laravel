<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

use App\Http\Requests;

class KategoriController extends Controller
{
	public function displayAllCategory(){
		$kategoriModel = new Kategori();
		$listKategori = $kategoriModel->orderBy('id', 'desc')
																	->paginate(15);
		
		$viewData = array();
		$viewData['list_kategori'] = $listKategori;
		
		return view('all_category')->with('viewData', $viewData);
	}
}
