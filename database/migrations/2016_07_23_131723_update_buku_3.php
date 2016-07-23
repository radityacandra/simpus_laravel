<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBuku3 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('buku', function (Blueprint $table) {
			$table->string('nomor_panggil');
			$table->string('tebal_buku');
			$table->integer('id_penunggah');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('buku', function (Blueprint $table) {
			$table->dropColumn('nomor_panggil');
			$table->dropColumn('tebal_buku');
			$table->dropColumn('id_pengunggah');
		});
	}
}
