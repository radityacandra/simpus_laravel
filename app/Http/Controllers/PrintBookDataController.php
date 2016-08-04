<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PrintBookDataController extends Controller
{
	public function testQR(){
		echo QrCode::size(100)->generate('1');
	}
	
	public function displayGeneralPage(){
		
	}
}
