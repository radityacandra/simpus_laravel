<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AdminController extends Controller
{
	public function displayAllAdmin(){
		$adminModel = new User();
		
		$listAdmin = $adminModel->where('role', '=', 'admin')
														->paginate(15);
		
		$viewData = array();
		$viewData['list_admin'] = $listAdmin;
		
		return view('all_admin')->with('viewData', $viewData);
	}
}