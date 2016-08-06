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
}
