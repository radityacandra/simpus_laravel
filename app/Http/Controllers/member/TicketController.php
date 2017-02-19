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
	
	public function newTicket(){
		if (isset($errors)) echo json_encode($errors);
		$user = Auth::user();
		$viewData['user'] = $user;
		
		
		return view('member.ticket.new_ticket')->with('viewData', $viewData);
	}
	
	public function saveNewTicket(Request $request){
		$ticketModel = new Message();
		$ticketContentModel = new MessageContainer();
		$user = Auth::user();
		
		$this->validate($request, [
			'subject'   => 'required|string',
			'content'   => 'required|string',
			'attachment'=> 'mimes:jpeg,bmp,jpg,pdf,doc,docx|max:5000'
		]);
		
		// lolos validasi
		$uploadDir = public_path().'/img/cover-thumbs/';
		$filename = '';
		if ($request->hasFile('attachment')){
			$attachment = $request->file('attachment');
			$extension = $attachment->getClientOriginalExtension();
			$filename = stripslashes($attachment->getClientOriginalName());
			$filename = trim($filename);
			$filename = str_replace(' ', '_', $filename);
			$filename = time().$filename;
			
			$attachment->move($uploadDir, $filename);
		}
		
		$ticketModel->created_at = \Carbon\Carbon::now();
		$ticketModel->updated_at = \Carbon\Carbon::now();
		$ticketModel->subject = $request->input('subject');
		$ticketModel->status = 'open';
		$ticketModel->response = 'from member';
		$ticketModel->associate_member = $user->id;
		$ticketModel->save();
		
		$ticketContentModel->ticket_id = $ticketModel->id;
		$ticketContentModel->created_at = \Carbon\Carbon::now();
		$ticketContentModel->from_id = $user->id;
		$ticketContentModel->body = $request->input('content');
		$ticketContentModel->attachment_ptr = $filename;
		$ticketContentModel->save();
		
		return redirect('member/ticket');
	}
}
