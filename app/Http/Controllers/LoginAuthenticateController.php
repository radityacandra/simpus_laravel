<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class LoginAuthenticateController extends Controller
{
    public function displayLoginPage()
    {
        //$this->dispatch(new PutNotificationPinjamBuku());
        return view('login');
    }

    public function handleAuthentication(Request $request)
    {
        $userModel = new User();
        $email     = $request->input('email');
        $password  = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            $userModel->where('id', '=', $user->id)
                ->update(['last_login' => \Carbon\Carbon::now()]);
            if ($user['role'] == 'admin') {
                return redirect()->intended('admin/home');
            } else {
                return redirect()->intended('member/dashboard');
            }
        } else {
            return redirect()->intended('login');
        }
    }

    public function handleLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
