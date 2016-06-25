<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pinjam_buku', function (Blueprint $table) {
      $table->increments('kode_pinjam');
      $table->timestamps();
      $table->integer('id_peminjam')->unsigned();
      $table->integer('id_buku')->unsigned();
      $table->integer('id_accessor')->unsigned();
      $table->dateTime('jatuh_tempo');
      $table->integer('keterlambatan');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('pinjam_buku');
  }
}
