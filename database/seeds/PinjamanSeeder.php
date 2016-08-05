<?php

use Illuminate\Database\Seeder;
use App\PinjamBuku;
use Faker\Factory;

class PinjamanSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = new Factory();
		$faker = $faker->create();
		
		for ($i=0; $i<1000; $i++){
			PinjamBuku::create([
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now(),
					'id_peminjam' => $faker->numberBetween(401,601),
					'id_buku'     => $faker->numberBetween(34,44),
					'id_accessor' => 1,
					'jatuh_tempo' => \Carbon\Carbon::now()->addWeek(1),
					'keterlambatan' => 0
			]);
		}
	}
}
