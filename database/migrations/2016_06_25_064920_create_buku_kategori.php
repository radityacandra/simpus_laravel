<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuKategori extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('buku_kategori', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->integer('id_buku')->unsigned();
      $table->integer('id_kategori')->unsigned();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('buku_kategori');
  }
}
