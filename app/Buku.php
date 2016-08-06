<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
  /**
   * tell if this model belongs to Buku table
   * @var $table string
   */
  protected $table = 'buku';

  public $timestamps = true;
  
  public function pinjamanBuku(){
  	return $this->hasMany('App\PinjamBuku', 'id_buku', 'buku_id');
  }
}
