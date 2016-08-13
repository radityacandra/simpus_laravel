<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Jobs\PutNotificationPinjamBuku;

use App\Http\Requests;

class LoginAuthenticateController extends Controller
{
	public function displayLoginPage(){
		$this->dispatch(new PutNotificationPinjamBuku());
		return view('login');
	}
	
	public function handleAuthentication(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		
		if (Auth::attempt(['email'=>$email, 'password'=>$password])){
			$user = Auth::user();
			if ($user['role']=='admin'){
				return redirect()->intended('admin/home');
			} else{
				return redirect()->intended('member/dashboard');
			}
		} else {
			return redirect()->intended('login');
		}
	}
	
	public function handleLogout(){
		Auth::logout();
	}
}