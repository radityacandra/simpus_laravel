<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('buku', function (Blueprint $table) {
      $table->increments('buku_id');
      $table->timestamps();
      $table->string('judul');
      $table->string('penulis');
      $table->string('thumb_cover_ptr');
      $table->string('penerbit');
      $table->integer('tahun_terbit');
      $table->text('abstrak');
      $table->string('ebook_ptr');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('buku');
  }
}
