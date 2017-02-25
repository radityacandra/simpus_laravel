<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peminjaman', function (Blueprint $table){
			$table->increments('id_peminjaman');
			$table->timestamps();
			$table->integer('id_buku')->unsigned();
			$table->integer('id_peminjam')->unsigned();
			$table->integer('id_approver')->unsigned();
			$table->date('jatuh_tempo');
			$table->enum('mekanisme', array('Klasik', 'Langsung'));
			$table->enum('status_approval', array('Approved', 'Waiting For Approval'));
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('peminjaman');
	}
}
