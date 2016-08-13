<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
  protected $table = 'pinjam_buku';

  public $timestamps = true;
  
	protected $dates = ['created_at', 'updated_at', 'jatuh_tempo'];
	
	public function detailMemberInfo(){
		return $this->belongsTo('App\User', 'id_peminjam', 'id');
	}
	
	public function detailBookInfo(){
		return $this->belongsTo('App\Buku', 'id_buku', 'buku_id');
	}
}
