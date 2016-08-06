<?php

use Illuminate\Database\Seeder;

use App\MessageContainer;

class MessageContainerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$messageContainerModel = new MessageContainer();
		
		$messageContainerModel::create([
			'ticket_id' => 1,
			'created_at'=> \Carbon\Carbon::now(),
			'updated_at'=> \Carbon\Carbon::now(),
			'from_id'   => 401,
			'to_id'     => 501,
			'body'      => 'Pak/Bu, kenapa ya saya tidak bisa melihat PDF yang ada di simpus ini, saya sudah terdaftar sebagai member kan?'
		]);
		
		$messageContainerModel::create([
				'ticket_id' => 1,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now(),
				'from_id'   => 501,
				'to_id'     => 401,
				'body'      => 'Apakah tombol lihat PDF bisa di-klik, ada beberapa buku yang tidak ada versi PDFnya'
		]);
		
		$messageContainerModel::create([
				'ticket_id' => 1,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now(),
				'from_id'   => 401,
				'to_id'     => 501,
				'body'      => 'Bisa, akan tetapi ketika di klik maka software IDM saya terus muncul dan load PDF selalu gagal'
		]);
	}
}
