<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable2 extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->string('nomor_hp');
      $table->text('alamat_rumah');
      $table->string('kelas');
      $table->string('profile_picture_ptr');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('nomor_hp');
      $table->dropColumn('alamat_rumah');
      $table->dropColumn('kelas');
      $table->dropColumn('profile_picture_ptr');
    });
  }
}
