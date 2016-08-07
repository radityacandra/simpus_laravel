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
	
	public function displayDetailMessage($ticket_id){
		$messageContainerModel = new MessageContainer();
		
		$listMessage = $messageContainerModel->where('ticket_id', '=', $ticket_id)
																					->with('senderProfile')
																					->with('receiverProfile')
																					->orderBy('container_id', 'asc')
																					->get()
																					->toArray();
		
		$viewData = array();
		$viewData['list_message'] = $listMessage;
		
		return view('admin.detail_message')->with('viewData', $viewData);
	}
	
	public function displayNewMessage(){
		return view('admin.new_message');
	}
}
