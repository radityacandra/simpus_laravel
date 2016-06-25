<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBukuKategori1 extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('buku_kategori', function (Blueprint $table) {
      $table->dropColumn('id_buku');
      $table->dropColumn('id_kategori');
      $table->string('kategori');
      $table->string('judul_buku');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('buku_kategori', function (Blueprint $table) {
      $table->integer('id_buku')->unsigned();
      $table->integer('id_kategori')->unsigned();
      $table->dropColumn('kategori');
      $table->dropColumn('judul_buku');
    });
  }
}
