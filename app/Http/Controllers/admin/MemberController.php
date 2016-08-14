<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use App\User;
use App\PinjamBuku;

class MemberController extends Controller
{
	/**
	 * Display all member page, get data from user table where role is member
	 * then display the result in the paginate view
	 *
	 * @return $this->view() all_member
	 */
	public function displayAllMember(){
		$memberModel = new User();
		$listMember = $memberModel->where('role', '=', 'member')
															->with('punyaPinjaman')
															->paginate(15)
															->toArray();
		
		$listMember2 = $memberModel->where('role', '=', 'member')
																->paginate(15);
		
		for($i = 0; $i<sizeof($listMember['data']); $i++){
			$listMember['data'][$i]['last_login'] = \Carbon\Carbon::createFromTimestamp(strtotime($listMember['data'][$i]['last_login']))
																														->diffForHumans();
			
			$listMember['data'][$i]['jumlah_pinjaman'] = sizeof($listMember['data'][$i]['punya_pinjaman']);
			unset($listMember['data'][$i]['punya_pinjaman']);
		}
		
		$user = Auth::user();
		
		$viewData = array();
		$viewData['list_member'] = $listMember;
		$viewData['list_member_2'] = $listMember2;
		$viewData['user'] = $user;
		
		return view('admin.all_member')->with('viewData', $viewData);
	}
	
	public function displayDetailMember($user_id){
		$memberModel = new User();
		$pinjamanModel = new PinjamBuku();
		
		$member = $memberModel->where('id', '=', $user_id)
													->first();
		
		$member['last_login'] = \Carbon\Carbon::createFromTimestamp(strtotime($member['last_login']))
																					->diffForHumans();
		
		$listPinjaman = $pinjamanModel->where('id_peminjam', '=', $user_id)
																	->with('detailBookInfo')
																	->paginate(5)
																	->toArray();
		
		$listPinjaman2 = $pinjamanModel->where('id_peminjam', '=', $user_id)
																	->paginate(5);
		
		for ($i = 0; $i<sizeof($listPinjaman['data']); $i++){
			$listPinjaman['data'][$i]['jatuh_tempo'] = \Carbon\Carbon::createFromTimestamp(strtotime($listPinjaman['data'][$i]['jatuh_tempo']))
																																->diffForHumans();
			
			$listPinjaman['data'][$i]['created_at'] = \Carbon\Carbon::createFromTimestamp(strtotime($listPinjaman['data'][$i]['created_at']))
																															->format('l F jS Y');
		}
		
		$user = Auth::user();
		
		$viewData = array();
		$viewData['member'] = $member;
		$viewData['list_pinjaman'] = $listPinjaman;
		$viewData['list_pinjaman_2'] = $listPinjaman2;
		$viewData['user'] = $user;
		
		return view('admin.detail_member')->with('viewData', $viewData);
	}
}