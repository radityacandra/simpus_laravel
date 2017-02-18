<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Message;
use App\MessageContainer;

class TicketController extends Controller
{
	public function displayAllTicket(){
		$user = Auth::user();
		$ticketModel = new Message();
		
		$listTicket = $ticketModel->where('associate_member', '=', $user->id)
															->orderBy('created_at', 'desc')
															->paginate(15);
		
		$viewData = array();
		$viewData['listTicket'] = $listTicket;
		$viewData['user'] = $user;
		
		return view('member.ticket.show_ticket')->with('viewData', $viewData);
	}
	
	public function displayDetailTicket($idTicket){
		$user = Auth::user();
		$messageContainerModel = new MessageContainer();
		$messageModel = new Message();
		
		$listMessageContainer = $messageContainerModel->where('ticket_id', '=', $idTicket)
																									->with('senderProfile')
																									->with('receiverProfile')
																									->orderBy('created_at', 'desc')
																									->get()->toArray();
		
		$viewData = array();
		$viewData['listMessageContainer'] = $listMessageContainer;
		$viewData['user'] = $user;
		
		return view('member.ticket.detail_ticket')->with('viewData', $viewData);
	}
}
