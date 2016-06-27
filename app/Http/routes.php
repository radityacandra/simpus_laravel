<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('login');
});
Route::get('/login', function(){
  return view('login');
});
Route::get('/home', function(){
  return view('home');
});
Route::get('/search', function(){
  return view('search');
});
Route::get('/detail', function(){
  return view('detail');
});
Route::get('/view_pdf', function(){
  return view('pdf_view');
});

Route::get('/tambah_buku', 'UploadBookController@displayUploadBook');

Route::post('/tambah_buku', 'UploadBookController@retrieveBookData');

Route::get('/semua_buku', function (){
  return view('all_book');
});

Route::get('/kategori', function (){
  return view('all_category');
});

Route::get('/kategori/add', 'AddCategoryController@displayAddCategoryView');

Route::post('/kategori/add', 'AddCategoryController@retrieveAddCategory');

Route::get('/member', function (){
  return view('all_member');
});

Route::get('/admin', function (){
  return view('all_admin');
});

Route::get('/member/add', 'AddMemberController@displayAddMemberPage');
Route::post('/member/add', 'AddMemberController@retrieveMemberData');

Route::get('admin/home', function (){
  return view('dashboard_admin');
});