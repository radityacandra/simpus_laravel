<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Config;

class UploadBookController extends Controller
{
  public function displayUploadBook(){
    return view('upload_book');
  }


  public function retrieveBookData(Request $request){
    $uploadDir = public_path().'/img/cover-thumbs/';

    if ($request->hasFile('img_cover')){
      $thumbnailCover = $request->file('img_cover');
      /*echo $thumbnailCover->getClientOriginalName();
      echo $thumbnailCover->getClientOriginalExtension();*/
      $extension = $thumbnailCover->getClientOriginalExtension();

      $filename = stripslashes($thumbnailCover->getClientOriginalName());
      $filename = trim($filename);
      $filename = str_replace(' ', '_', $filename);
      $filename = time().$filename;

      $thumbnailCover->move($uploadDir, $filename);
      echo '<img src="'.url('img/cover-thumbs').'/'.$filename.'" class="imgList col-md-12">';

      if (in_array($extension, array(".jpg", ".png", ".gif", ".bmp",".jpeg"))){

      }
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
    $kategori_buku = "";
    if ($request->exists("kategori_buku")){
      $kategori_buku = $request->input("kategori_buku");
    }

    header("Access-Control-Allow-Origin: *");
  }
}
