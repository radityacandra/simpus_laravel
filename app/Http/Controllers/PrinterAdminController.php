<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\Http\Requests;

use App\User;

class PrinterAdminController extends Controller
{
	public function printMemberReport(){
		$userModel = new User();
		$listMember = $userModel->where('role', '=', 'member')
				->orderBy('nim', 'asc')
				->get()
				->toArray();
		
		$currentDate = \Carbon\Carbon::now();
		$currentDate = $currentDate->format('l F jS Y');
		
		//per page: 14 items
		$counterPage = 0;
		$counterItemPage = 0;
		$pageContainer = array();
		foreach ($listMember as $member){
			$member['last_login'] = \Carbon\Carbon::createFromTimestamp(strtotime($member['last_login']))
					->format('F jS Y');
			if ($counterPage==0){
				if($counterItemPage<15){
					$pageContainer[$counterPage][$counterItemPage] = $member;
					$counterItemPage++;
				} else {
					$counterPage++;
					$counterItemPage = 0;
					$pageContainer[$counterPage][$counterItemPage] = $member;
				}
			} else {
				if($counterItemPage<19){
					$pageContainer[$counterPage][$counterItemPage] = $member;
					$counterItemPage++;
				} else {
					$counterPage++;
					$counterItemPage = 0;
					$pageContainer[$counterPage][$counterItemPage] = $member;
				}
			}
		}
		
		$viewData = array();
		$viewData['total_member'] = sizeof($listMember);
		$viewData['list_member'] = $pageContainer;
		$viewData['current_date'] = $currentDate;
		
		//$pdf = PDF::loadView('report.all_member', ['viewData' => $viewData]);
		
		return PDF::loadFile('http://www.github.com')->inline('github.pdf');
		
		//return $pdf->stream();
	}
}
