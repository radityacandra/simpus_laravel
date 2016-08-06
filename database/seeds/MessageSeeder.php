<?php

use Illuminate\Database\Seeder;

use App\Message;

class MessageSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$messageModel = new Message();
		
		$messageModel::create([
			'created_at'  => \Carbon\Carbon::now(),
			'updated_at'  => \Carbon\Carbon::now(),
			'subject'     => 'Tidak Bisa Download PDF',
			'status'      => 'open',
			'response'    => 'from member'
		]);
	}
}
