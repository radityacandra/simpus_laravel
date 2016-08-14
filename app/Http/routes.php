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
  return redirect('login');
});

Route::get('/login', 'LoginAuthenticateController@displayLoginPage');

Route::post('/login', 'LoginAuthenticateController@handleAuthentication');

Route::get('/logout', 'LoginAuthenticateController@handleLogout');
	
Route::get('/home', 'HomeMemberController@displayHomeView');

Route::get('/search', 'SpecificSearchController@displaySearchView');

Route::get('/detail/{buku_id}', 'DetailBookController@displayDetailBookView');

Route::get('/view_pdf/{buku_id}', 'ViewPdfController@displayViewPdf');

//admin private area
Route::group(['middleware'  => 'auth'], function (){
	Route::get('/tambah_buku', 'admin\UploadBookController@displayUploadBook');
	
	Route::post('/tambah_buku', 'admin\UploadBookController@retrieveBookData');
	
	Route::get('/semua_buku', 'admin\AdminBookController@displayListBook');
	
	Route::get('/kategori', 'admin\KategoriController@displayAllCategory');
	
	Route::get('/kategori/add', 'admin\AddCategoryController@displayAddCategoryView');
	
	Route::post('/kategori/add', 'admin\AddCategoryController@retrieveAddCategory');
	
	Route::get('/member', 'admin\MemberController@displayAllMember');
	
	Route::get('/member/detail/{user_id}', 'admin\MemberController@displayDetailMember');
	
	Route::get('/admin', 'admin\AdminController@displayAllAdmin');
	
	Route::get('/member/add', 'admin\AddMemberController@displayAddMemberPage');
	
	Route::post('/member/add', 'admin\AddMemberController@retrieveMemberData');
	
	Route::get('admin/home', 'admin\AdminHomeController@displayAdminHome');
	
	Route::get('admin/test_qr', 'admin\PrintBookDataController@testQR');
	
	Route::get('admin/kelola_buku/{id_buku}', 'admin\PrintBookDataController@displayGeneralPage');
	
	Route::get('admin/message', 'admin\MessageAdminController@displayAllMessage');
	
	Route::get('admin/message/new', 'admin\MessageAdminController@displayNewMessage');
	
	Route::post('admin/message/new', 'admin\MessageAdminController@handleSubmitMessage');
	
	Route::get('admin/message/detail/{ticket_id}', 'admin\MessageAdminController@displayDetailMessage');
	
	Route::get('admin/pinjaman', 'admin\PinjamanAdminController@displayAllPinjaman');
	
	Route::get('admin/pinjaman/detail/{kode_pinjam}', 'admin\PinjamanAdminController@detailPinjaman');
	
	Route::get('admin/report/member', 'PrinterAdminController@printMemberReport');
});

//member private area
Route::group(['middleware'  => 'auth'], function (){
	Route::get('member/dashboard', 'member\DashboardMemberController@displayDashboardMember');
	
	Route::get('member/settings', 'member\ProfileSettingController@displayProfileSetting');
	
	Route::post('member/settings', 'member\ProfileSettingController@handleUpdateProfile');
	
	Route::get('member/settings/password', function (){
		return view('member.manage_password');
	});
});
