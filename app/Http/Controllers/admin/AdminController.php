<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function displayAllAdmin()
    {
        $adminModel = new User();

        $listAdmin = $adminModel->where('role', '=', 'admin')
            ->paginate(15);

        $user = Auth::user();

        $viewData               = array();
        $viewData['list_admin'] = $listAdmin;
        $viewData['user']       = $user;

        return view('admin.all_admin')->with('viewData', $viewData);
    }
}
