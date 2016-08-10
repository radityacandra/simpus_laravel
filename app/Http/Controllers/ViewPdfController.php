<?php

namespace App\Http\Controllers;

use App\Buku;

use PDF;
use Illuminate\Http\Request;
use App\Http\Requests;

class ViewPdfController extends Controller
{
	public function displayViewPdf($buku_id){
		$bukuModel = new Buku();
		$buku = $bukuModel->where('buku_id', '=', $buku_id)
											->first();
		
		$bukuModel->where('buku_id', '=', $buku_id)
											->update([
												'view' => $buku['view'] + 1
											]);
		
		return view('pdf_view')->with('buku', $buku);
	}
}
