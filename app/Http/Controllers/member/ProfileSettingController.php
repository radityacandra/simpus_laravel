<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class ProfileSettingController extends Controller
{
	public function displayProfileSetting(){
		$user = Auth::user();
		
		$viewData = array();
		$viewData['user'] = $user;
		
		return view('member.profile_setting')->with('viewData', $viewData);
	}
	
	public function handleUpdateProfile(Request $request){
		$userModel = new User;
		$user = Auth::user();
		
		$uploadDir = public_path().'/img/member-cover/';
		if ($request->hasFile('profile_picture')){
			$thumbnailCover = $request->file('profile_picture');
			$extension = $thumbnailCover->getClientOriginalExtension();
			
			$filename = stripslashes($thumbnailCover->getClientOriginalName());
			$filename = trim($filename);
			$filename = str_replace(' ', '_', $filename);
			$filename = time().$filename;
			
			$thumbnailCover->move($uploadDir, $filename);
			echo '<img src="'.url('img/member-cover').'/'.$filename.'" class="imgList col-md-2 col-xs-12">';
			
			if (in_array($extension, array(".jpg", ".png", ".gif", ".bmp",".jpeg"))){
				
			}
			
			$userModel->where('id', '=', $user->id)
								->update([
										'profile_picture_ptr' => 'img/member-cover/'.$filename
								]);
			
			header("Access-Control-Allow-Origin: *");
			return null;
		}
		
		$name = '';
		$email = '';
		$address = '';
		$no_telp = '';
		
		if ($request->exists('name')){
			$name = $request->input('name');
		}
		
		if ($request->exists('email')){
			$email = $request->input('email');
		}
		
		if ($request->exists('address')){
			$address = $request->input('address');
		}
		
		if ($request->exists('no_telp')){
			$no_telp = $request->input('no_telp');
		}
		
		$userModel->where('id', '=', $user->id)
				->update([
						'name'  => $name,
						'email' => $email,
						'nomor_hp'  => $no_telp,
						'alamat_rumah'  => $address
				]);
		
		header("Access-Control-Allow-Origin: *");
		return null;
	}
}
