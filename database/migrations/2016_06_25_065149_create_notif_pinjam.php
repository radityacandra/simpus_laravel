<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifPinjam extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('notification_pinjam', function (Blueprint $table) {
      $table->increments('kode_notifikasi');
      $table->timestamps();
      $table->integer('id_peminjam')->unsigned();
      $table->integer('id_buku_dipinjam')->unsigned();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('notification_pinjam');
  }
}
