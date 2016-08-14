<?php

namespace App\Http\Controllers\admin;

use App\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;

class KategoriController extends Controller
{
	public function displayAllCategory(){
		$kategoriModel = new Kategori();
		$listKategori = $kategoriModel->orderBy('id', 'desc')
																	->paginate(15);
		
		$user = Auth::user();
		
		$viewData = array();
		$viewData['list_kategori'] = $listKategori;
		$viewData['user'] = $user;
		
		return view('admin.all_category')->with('viewData', $viewData);
	}
}
