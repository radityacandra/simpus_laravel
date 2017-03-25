<?php

namespace App\Http\Controllers;

use App\Buku;
use PDF;

class ViewPdfController extends Controller
{
    public function displayViewPdf($buku_id)
    {
        $bukuModel = new Buku();
        $buku      = $bukuModel->where('buku_id', '=', $buku_id)
            ->first();

        $bukuModel->where('buku_id', '=', $buku_id)
            ->update([
                'view' => $buku['view'] + 1,
            ]);

        return view('pdf_view')->with('buku', $buku);
    }

    public function identitasBuku($buku_id)
    {
        $bukuModel = new Buku();

        $viewData['buku'] = $bukuModel->where('buku_id', '=', $buku_id)
            ->first();

        $pdf = PDF::loadView('admin.cetak.identitas_buku', $viewData);
        return $pdf->stream();
    }

    public function kartuBuku($buku_id)
    {
        $bukuModel = new Buku();

        $viewData['buku'] = $bukuModel->where('buku_id', '=', $buku_id)
            ->first();

        $pdf = PDF::loadView('admin.cetak.kartu_buku', $viewData);
        return $pdf->stream();
    }
}
