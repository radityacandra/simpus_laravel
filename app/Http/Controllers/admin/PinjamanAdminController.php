<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

use App\PinjamBuku;

class PinjamanAdminController extends Controller
{
	public function displayAllPinjaman(){
		$pinjamBukuModel = new PinjamBuku();
		$listPinjaman = $pinjamBukuModel->where('keterlambatan', '>', -1)
																		->with('detailMemberInfo')
																		->with('detailBookInfo')
																		->orderBy('jatuh_tempo', 'desc')
																		->paginate(15)
																		->toArray();
		$listPinjaman2 = $pinjamBukuModel->where('keterlambatan', '>', -1)
																		->with('detailMemberInfo')
																		->with('detailBookInfo')
																		->orderBy('jatuh_tempo', 'desc')
																		->paginate(15);
		
		for($i = 0; $i<sizeof($listPinjaman['data']); $i++){
			$listPinjaman['data'][$i]['created_at'] = \Carbon\Carbon::createFromTimestamp(strtotime($listPinjaman['data'][$i]['created_at']))
																															->format('l F jS Y');
			
			$now = \Carbon\Carbon::now();
			$listPinjaman['data'][$i]['jatuh_tempo'] = \Carbon\Carbon::createFromTimestamp(strtotime($listPinjaman['data'][$i]['jatuh_tempo']));
			
			$difference = $now->diffInSeconds($listPinjaman['data'][$i]['jatuh_tempo'], false);
			
			if ($difference>0){
				$listPinjaman['data'][$i]['status'] = 'aktif';
			} else {
				$listPinjaman['data'][$i]['status'] = 'overdue';
			}
			
			$listPinjaman['data'][$i]['jatuh_tempo'] = $listPinjaman['data'][$i]['jatuh_tempo']->diffForHumans();
			
		}
		
		$user = Auth::user();
		
		$viewData = array();
		$viewData['list_pinjaman'] = $listPinjaman;
		$viewData['list_pinjaman_2'] = $listPinjaman2;
		$viewData['user'] = $user;
		
		return view('admin.all_pinjaman')->with('viewData', $viewData);
	}
	
	public function detailPinjaman($kode_pinjam){
		$pinjamBukuModel = new PinjamBuku();
		$pinjaman = $pinjamBukuModel->where('kode_pinjam', '=', $kode_pinjam)
																->with('detailMemberInfo')
																->with('detailBookInfo')
																->first()
																->toArray();
		
		$now = \Carbon\Carbon::now();
		$pinjaman['jatuh_tempo'] = \Carbon\Carbon::createFromTimestamp(strtotime($pinjaman['jatuh_tempo']));
		$pinjaman['created_at'] = \Carbon\Carbon::createFromTimestamp(strtotime($pinjaman['created_at']));
		
		$fullDifference = $pinjaman['created_at']->diffInSeconds($pinjaman['jatuh_tempo']);
		$currentDifference = $now->diffInSeconds($pinjaman['jatuh_tempo']);
		
		if ($currentDifference>0){
			$pinjaman['status'] = 'aktif';
		} else {
			$pinjaman['status'] = 'overdue';
		}
		
		$percentProgress = (($fullDifference-$currentDifference)/$fullDifference)*100;
		$pinjaman['progress'] = $percentProgress.'%';
		
		$pinjaman['created_at'] = $pinjaman['created_at']->format('l F jS Y');
		$pinjaman['jatuh_tempo'] = $pinjaman['jatuh_tempo']->format('l F jS Y');
		
		$user = Auth::user();
		
		$viewData = array();
		$viewData['pinjaman'] = $pinjaman;
		$viewData['user'] = $user;
		
		return view('admin.detail_pinjaman')->with('viewData', $viewData);
	}
}
