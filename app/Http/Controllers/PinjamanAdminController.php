<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
		
		$viewData = array();
		$viewData['list_pinjaman'] = $listPinjaman;
		$viewData['list_pinjaman_2'] = $listPinjaman2;
		
		return view('admin.all_pinjaman')->with('viewData', $viewData);
	}
}
