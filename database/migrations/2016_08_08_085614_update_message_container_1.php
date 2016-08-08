<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMessageContainer1 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('message_container', function (Blueprint $table) {
			$table->string('attachment_ptr');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('message_container', function (Blueprint $table) {
			$table->dropColumn('attachment_ptr');
		});
	}
}
