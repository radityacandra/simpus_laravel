<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
  protected $table = 'pinjam_buku';

  public $timestamps = true;
  
	public function detailMemberInfo(){
		return $this->belongsTo('App\User', 'id_peminjam', 'id');
	}
}
