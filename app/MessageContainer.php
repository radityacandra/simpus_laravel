<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageContainer extends Model
{
	protected $table = 'message_container';
	public $timestamps = true;
	
	public function hasMessageSubject(){
		return $this->belongsTo('App\Message', 'ticket_id', 'ticket_id');
	}
	
	public function senderProfile(){
		return $this->belongsTo('App\User', 'from_id', 'id');
	}
	
	public function receiverProfile(){
		return $this->belongsTo('App\User', 'to_id', 'id');
	}
}
