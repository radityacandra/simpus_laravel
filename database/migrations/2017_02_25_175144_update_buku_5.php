<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBuku5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('buku', function (Blueprint $table){
	    	$table->dropColumn('pinjam_langsung');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('buku', function (Blueprint $table){
		    $table->enum('pinjam_langsung', array('Ya', 'Tidak'));
	    });
    }
}
