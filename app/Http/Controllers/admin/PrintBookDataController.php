<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Controller;
use Auth;

use App\PinjamBuku;

class PrintBookDataController extends Controller
{
	public function testQR(){
		echo QrCode::size(100)->generate('1');
	}
	
	public function displayGeneralPage($id_buku){
		$pinjamanBukuModel = new PinjamBuku();
		
		$idBuku = $id_buku;
		
		$pinjamanBuku = $pinjamanBukuModel->where('id_buku', '=', $idBuku)
																			->orderBy('jatuh_tempo', 'desc')
																			->with('detailMemberInfo')
																			->paginate(15)
																			->toArray();
		
		$pinjamanBuku2 = $pinjamanBukuModel->where('id_buku', '=', $idBuku)
																			->orderBy('jatuh_tempo', 'desc')
																			->with('detailMemberInfo')
																			->paginate(15);
		
		$user = Auth::user();
		
		$viewData = array();
		$viewData['id_buku'] = $idBuku;
		$viewData['pinjaman_buku'] = $pinjamanBuku;
		$viewData['pinjaman_buku_2'] = $pinjamanBuku2;
		$viewData['user'] = $user;
		
		return view('admin.manage_book')->with('viewData', $viewData);
	}
	
	public function filterPeminjamBuku(Request $request){
		$idBuku = $request->input('id_buku');
		$namaMember = $request->input('name');
		$statusPinjam = $request->input('status_pinjam');
		$sort = $request->input('sort');
		
		
	}
}
