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
	
Route::get('/home', 'HomeMemberController@displayHomeView');

Route::get('/search', 'SpecificSearchController@displaySearchView');

Route::get('/detail/{buku_id}', 'DetailBookController@displayDetailBookView');

Route::get('/view_pdf/{buku_id}', 'ViewPdfController@displayViewPdf');

Route::get('/tambah_buku', 'UploadBookController@displayUploadBook');

Route::post('/tambah_buku', 'UploadBookController@retrieveBookData');

Route::get('/semua_buku', 'AdminBookController@displayListBook');

Route::get('/kategori', 'KategoriController@displayAllCategory');

Route::get('/kategori/add', 'AddCategoryController@displayAddCategoryView');

Route::post('/kategori/add', 'AddCategoryController@retrieveAddCategory');

Route::get('/member', 'MemberController@displayAllMember');

Route::get('/admin', 'AdminController@displayAllAdmin');

Route::get('/member/add', 'AddMemberController@displayAddMemberPage');

Route::post('/member/add', 'AddMemberController@retrieveMemberData');

Route::get('admin/home', 'AdminHomeController@displayAdminHome');

Route::get('admin/test_qr', 'PrintBookDataController@testQR');

Route::get('admin/kelola_buku/{id_buku}', 'PrintBookDataController@displayGeneralPage');