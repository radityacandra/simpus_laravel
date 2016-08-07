<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
			'name', 'email', 'password',
	];
	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
			'password', 'remember_token',
	];
	
	public function punyaPinjaman(){
		return $this->hasMany('App\PinjamBuku', 'id_peminjam', 'id');
	}
	
	public function sentMessage(){
		return $this->hasMany('App\MessageContainer', 'from_id', 'id');
	}
	
	public function receivedMessage(){
		return $this->hasMany('App\MessageContainer', 'to_id', 'id');
	}
}
