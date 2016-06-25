<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('ticket', function (Blueprint $table){
      $table->increments('ticket_id');
      $table->timestamps();
      $table->integer('id_student')->unsigned();
      $table->integer('id_admin')->unsigned();
      $table->text('pesan');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('ticket');
  }
}
