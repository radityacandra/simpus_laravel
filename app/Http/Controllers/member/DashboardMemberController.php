<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Message;
use App\MessageContainer;
use App\PinjamBuku;

use Auth;

class DashboardMemberController extends Controller
{
	public function displayDashboardMember (){
		$messageModel = new Message();
		$pinjamBukuModel = new PinjamBuku();
		
		$user = Auth::user();
		$listMessage = $messageModel->where('associate_member', '=', $user->id)
																->where('status', '=', 'open')
																->orderBy('updated_at', 'desc')
																->get();
		
		$allMessageCount = $messageModel->where('associate_member', '=', $user->id)
																->orderBy('updated_at', 'desc')
																->get();
		
		$listNotifPinjaman = $pinjamBukuModel->where('id_peminjam', '=', $user->id)
																					->where('keterlambatan', '<>', 0)
																					->with('detailBookInfo')
																					->orderBy('jatuh_tempo')
																					->get();
		
		$allPinjamanCount = $pinjamBukuModel->where('id_peminjam', '=', $user->id)
																				->orderBy('jatuh_tempo')
																				->get();
		
		$viewData = array();
		$viewData['list_message'] = $listMessage;
		$viewData['list_pinjaman'] = $listNotifPinjaman;
		$viewData['total_notif'] = sizeof($listNotifPinjaman->toArray());
		$viewData['total_message']['open'] = sizeof($listMessage->toArray());
		$viewData['total_message']['all'] = sizeof($allMessageCount->toArray());
		$viewData['total_pinjaman']['notif']= sizeof($listNotifPinjaman->toArray());
		$viewData['total_pinjaman']['all'] = sizeof($allPinjamanCount->toArray());
		$viewData['user'] = $user;
		
		return view('member.dashboard_member')->with('viewData', $viewData);
	}
}