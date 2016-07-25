<?php

namespace App\Http\Controllers;

use App\Buku;
use App\BukuKategori;
use App\User;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminHomeController extends Controller
{
	public function displayAdminHome(){
		$bukuModel = new Buku();
		$bukuPopular = $bukuModel->orderBy('view', 'desc')
															->take(5)
															->get()
															->toArray();
		
		$userModel = new User();
		$recentLogin = $userModel->where('role', '=', 'member')
														->orderBy('last_login')
														->take(5)
														->get()
														->toArray();
		
		for ($i = 0; $i<sizeof($recentLogin); $i++){
			$recentLogin[$i]['last_login'] = \Carbon\Carbon::createFromTimestamp(strtotime($recentLogin[$i]['last_login']))
																											->diffForHumans();
		}
		
		$bukuKategoriModel = new BukuKategori();
		$bukuKategori = $bukuKategoriModel->select('kategori', DB::raw('count(*) as total'))
																			->groupBy('kategori')
																			->orderBy('total', 'desc')
																			->get()
																			->toArray();
		$viewData = array();
		$viewData['buku_popular'] = $bukuPopular;
		$viewData['recent_login'] = $recentLogin;
		$viewData['buku_kategori'] = $bukuKategori;
		
		return view('dashboard_admin')->with('viewData', $viewData);
	}
}
