<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageContainer extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message_container', function (Blueprint $table) {
			$table->increments('container_id');
			$table->integer('ticket_id');
			$table->timestamps();
			$table->integer('from_id');
			$table->integer('to_id');
			$table->text('body');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message_container');
	}
}
