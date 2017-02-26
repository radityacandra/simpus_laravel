<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePeminjamanConstraint extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('peminjaman', function (Blueprint $table) {
			$table->foreign('id_buku')
						->references('buku_id')->on('buku')
						->onUpdate('cascade')
						->onDelete('cascade');
			
			$table->foreign('id_peminjam')
					->references('id')->on('users')
					->onUpdate('cascade')
					->onDelete('cascade');
			
			$table->foreign('id_approver')
					->references('id')->on('users')
					->onUpdate('cascade')
					->onDelete('cascade');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('peminjaman', function (Blueprint $table) {
			$table->dropForeign(['id_buku', 'id_peminjam', 'id_approver']);
		});
	}
}
