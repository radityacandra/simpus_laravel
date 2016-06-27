<?php

namespace App\Http\Controllers;

use App\Helper\RandomString;
use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use League\Flysystem\Config;

use App\Buku;
use App\BukuKategori;

class UploadBookController extends Controller
{
  public function displayUploadBook(){
    $randomString = RandomString::randomString(20);

    return view('upload_book')->with('token', $randomString);
  }


  public function retrieveBookData(Request $request){
    $bukuModel = new Buku();
    $bukuKategoriModel = new BukuKategori();

    $uploadDir = public_path().'/img/cover-thumbs/';

    $token = $request->input('_token');

    if ($request->hasFile('img_cover')){
      if($request->hasFile('file_pdf') != true){
        $thumbnailCover = $request->file('img_cover');
        $extension = $thumbnailCover->getClientOriginalExtension();

        $filename = stripslashes($thumbnailCover->getClientOriginalName());
        $filename = trim($filename);
        $filename = str_replace(' ', '_', $filename);
        $filename = time().$filename;

        $thumbnailCover->move($uploadDir, $filename);
        echo '<img src="'.url('img/cover-thumbs').'/'.$filename.'" class="imgList col-md-12">';

        if (in_array($extension, array(".jpg", ".png", ".gif", ".bmp",".jpeg"))){

        }
        $bukuModel->update([
            'thumb_cover_ptr' => 'img/cover-thumbs/'.$filename,
            'token'           => $token
        ]);
        $bukuModel->thumb_cover_ptr = 'img/cover-thumbs/'.$filename;
        $bukuModel->token = $token;
        $bukuModel->save();

        header("Access-Control-Allow-Origin: *");
        return null;
      }
    }

    $this->validate($request, [
        'file_pdf' => 'max:10240',
    ]);

    $uploadFileDir = public_path().'/pdf-ebook/';
    //TODO handle ebook pdf upload request
    if ($request->hasFile('file_pdf')){
      $pdfEbook = $request->file('file_pdf');

      $filename = stripslashes($pdfEbook->getClientOriginalName());
      $filename = trim($filename);
      $filename = str_replace(' ', '_', $filename);
      $filename = time().$filename;

      $pdfEbook->move($uploadFileDir, $filename);

      $bukuModel->where('token', '=', $token)
                ->update([
                  'ebook_ptr' => 'pdf-ebook/'.$filename
                ]);

      header("Access-Control-Allow-Origin: *");
      return null;
    }

    $judul_buku = "";
    if($request->exists("judul_buku")){
      $judul_buku = $request->input("judul_buku");
    }
    $penulis_buku = "";
    if ($request->exists("penulis_buku")){
      $penulis_buku = $request->input("penulis_buku");
    }
    $penerbit_buku = "";
    if ($request->exists("penerbit_buku")){
      $penerbit_buku = $request->input("penerbit_buku");
    }
    $tahun_terbit = "";
    if ($request->exists("tahun_terbit")){
      $tahun_terbit = $request->input("tahun_terbit");
    }
    $deskripsi_buku = "";
    if ($request->exists('deskripsi_buku')){
      $deskripsi_buku = $request->input('deskripsi_buku');
    }
    $kategori_buku = "";
    if ($request->exists("kategori_buku")){
      $kategori_buku = $request->input("kategori_buku");
    }

    $bukuModel->where('token', '=', $token)
              ->update([
                'judul'   => $judul_buku,
                'penulis' => $penulis_buku,
                'penerbit'=> $penerbit_buku,
                'tahun_terbit'  => $tahun_terbit,
                'abstrak' => $deskripsi_buku
              ]);

    $bukuKategoriModel->kategori = $kategori_buku;
    $bukuKategoriModel->judul_buku = $judul_buku;
    $bukuKategoriModel->save();

    header("Access-Control-Allow-Origin: *");
    return null;
  }
}
