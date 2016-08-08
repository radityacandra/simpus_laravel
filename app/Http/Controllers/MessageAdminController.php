<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\MessageContainer;
use App\User;

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
		$userModel = new User;
		$listUser = $userModel->select('name')
													->where('role', '=', 'member')
													->get()
													->toArray();
		
		$arrayOfName = array();
		for ($i = 0; $i<sizeof($listUser); $i++){
			$arrayOfName[$i] = $listUser[$i]['name'];
		}
		$arrayOfName = json_encode($arrayOfName);
		
		$viewData = array();
		$viewData['dataset_name'] = $arrayOfName;
		
		return view('admin.new_message')->with('viewData', $viewData);
	}
	
	public function handleSubmitMessage(Request $request){
		$messageModel = new Message();
		$messageContainerModel = new MessageContainer();
		$userModel = new User();
		
		$uploadAttachmentDir = public_path().'/attachment-message/';
		$attachmentPointer = "";
		
		if ($request->hasFile('attachment')){
			$pdfEbook = $request->file('attachment');
			
			$filename = stripslashes($pdfEbook->getClientOriginalName());
			$filename = trim($filename);
			$filename = str_replace(' ', '_', $filename);
			$filename = time().$filename;
			
			$pdfEbook->move($uploadAttachmentDir, $filename);
			
			$attachmentPointer = 'attachment-message/'.$filename;
		}
		
		if($request->exists('sender_name')){
			$fromName = $request->input('sender_name');
			$fromUser = $userModel->select('id', 'role')
														->where('name', '=', $fromName)
														->first();
		}
		
		if($request->exists('destination')){
			$destinationName = $request->input('destination');
			$toUser = $userModel->select('id', 'role')
													->where('name', '=', $destinationName)
													->first();
		}
		
		if ($request->exists('subject')){
			$subject = $request->input('subject');
		}
		
		if ($request->exists('body')){
			$messageBody = $request->input('body');
		}
		
		$messageModel->created_at = \Carbon\Carbon::now();
		$messageModel->updated_at = \Carbon\Carbon::now();
		$messageModel->subject = $subject;
		$messageModel->status = "open";
		if ($fromUser['role'] == 'member'){
			$messageModel->response = "from member";
		} elseif ($fromUser['role'] == 'admin') {
			$messageModel->response = "from admin";
		}
		$messageModel->save();
		
		$ticketId = $messageModel->select('ticket_id')
														->where('subject', '=', $subject)
														->first();
		
		$messageContainerModel->ticket_id = $ticketId['ticket_id'];
		$messageContainerModel->created_at = \Carbon\Carbon::now();
		$messageContainerModel->updated_at = \Carbon\Carbon::now();
		$messageContainerModel->from_id = $fromUser['id'];
		$messageContainerModel->to_id = $toUser['id'];
		$messageContainerModel->body = $messageBody;
		$messageContainerModel->attachment_ptr = $attachmentPointer;
		$messageContainerModel->save();
		
		return redirect('/admin/message');
	}
}
