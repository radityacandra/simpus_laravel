<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

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
		
		$viewData = array();
		$viewData['list_member'] = $listMember;
		$viewData['list_member_2'] = $listMember2;
		
		return view('all_member')->with('viewData', $viewData);
	}
}