<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message', function (Blueprint $table) {
			$table->increments('ticket_id');
			$table->timestamps();
			$table->string('subject');
			$table->enum('status', ['open', 'closed']);
			$table->enum('response', ['from member', 'from admin']);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message');
	}
}
