<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table = 'message';
	public $timestamps = 'true';
	
	public function detailMessage(){
		return $this->hasMany('App\MessageContainer', 'ticket_id', 'ticket_id');
	}
}
