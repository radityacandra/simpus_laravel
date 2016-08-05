<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\PinjamBuku;

class PrintBookDataController extends Controller
{
	public function testQR(){
		echo QrCode::size(100)->generate('1');
	}
	
	public function displayGeneralPage(){
		$pinjamanBukuModel = new PinjamBuku();
		
		$idBuku = 37;
		
		$pinjamanBuku = $pinjamanBukuModel->where('id_buku', '=', $idBuku)
																			->orderBy('jatuh_tempo', 'desc')
																			->with('detailMemberInfo')
																			->paginate(15)
																			->toArray();
		
		$pinjamanBuku2 = $pinjamanBukuModel->where('id_buku', '=', $idBuku)
																			->orderBy('jatuh_tempo', 'desc')
																			->with('detailMemberInfo')
																			->paginate(15);
		
		$viewData = array();
		$viewData['id_buku'] = $idBuku;
		$viewData['pinjaman_buku'] = $pinjamanBuku;
		$viewData['pinjaman_buku_2'] = $pinjamanBuku2;
		
		return view('manage_book')->with('viewData', $viewData);
	}
}
