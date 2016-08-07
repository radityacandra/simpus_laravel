<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\MessageContainer;

use App\Http\Requests;

class MessageAdminController extends Controller
{
	public function displayAllMessage(){
		$messageModel = new Message();
		$listMessage = $messageModel->paginate(15);
		
		$viewData = array();
		$viewData['list_message'] = $listMessage;
		
		return view('admin.all_message')->with('viewData', $viewData);
	}
}
