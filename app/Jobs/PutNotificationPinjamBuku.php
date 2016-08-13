<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\PinjamBuku;

class PutNotificationPinjamBuku extends Job implements ShouldQueue
{
	use InteractsWithQueue, SerializesModels;
	
	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}
	
	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		$pinjamBukuModel = new PinjamBuku();
		$listPinjaman = $pinjamBukuModel->get()
																		->toArray();
		
		$now = \Carbon\Carbon::now();
		foreach ($listPinjaman as $pinjaman){
			if ($now->diffInDays(\Carbon\Carbon::createFromTimestamp(strtotime($pinjaman['jatuh_tempo'])), false)==1){
				//insert new active -- expired soon notification
				//keterlambatan -1 means that user have to return the book tomorrow
				$pinjamBukuModel->where('kode_pinjam', '=', $pinjaman['kode_pinjam'])
												->update([
													'keterlambatan' => -1,
													'updated_at'    => \Carbon\Carbon::now()
												]);
			} elseif ($now->diffInDays(\Carbon\Carbon::createFromTimestamp(strtotime($pinjaman['jatuh_tempo'])), false)==0){
				//insert last day notification
				//keterlambatan -2 means that user have to return the book this day
				$pinjamBukuModel->where('kode_pinjam', '=', $pinjaman['kode_pinjam'])
												->update([
														'keterlambatan' => -2,
														'updated_at'    => \Carbon\Carbon::now()
												]);
			} elseif ($now->diffInDays(\Carbon\Carbon::createFromTimestamp(strtotime($pinjaman['jatuh_tempo'])), false)<0){
				//insert overdue notification
				$pinjamBukuModel->where('kode_pinjam', '=', $pinjaman['kode_pinjam'])
												->update([
														'keterlambatan' => $now->diffInDays(\Carbon\Carbon::createFromTimestamp(strtotime($pinjaman['jatuh_tempo']))),
														'updated_at'    => \Carbon\Carbon::now()
												]);
			}
		}
	}
}
