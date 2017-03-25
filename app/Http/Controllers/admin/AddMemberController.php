<?php

namespace App\Http\Controllers\admin;

use App\Helper\RandomString;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    public function displayAddMemberPage()
    {
        $randomString = RandomString::randomString(20);
        $user         = Auth::user();

        $viewData          = array();
        $viewData['token'] = $randomString;
        $viewData['user']  = $user;

        return view('admin.add_member')->with('viewData', $viewData);
    }

    public function retrieveMemberData(Request $request)
    {
        $userModel = new User();
        $uploadDir = public_path() . '/img/member-cover/';

        $token = $request->input('_token');

        if ($request->hasFile('img_cover')) {
            $thumbnailCover = $request->file('img_cover');
            $extension      = $thumbnailCover->getClientOriginalExtension();

            $filename = stripslashes($thumbnailCover->getClientOriginalName());
            $filename = trim($filename);
            $filename = str_replace(' ', '_', $filename);
            $filename = time() . $filename;

            $thumbnailCover->move($uploadDir, $filename);
            echo '<img src="' . url('img/member-cover') . '/' . $filename . '" class="imgList col-md-12">';

            if (in_array($extension, array(".jpg", ".png", ".gif", ".bmp", ".jpeg"))) {

            }

            $userModel->profile_picture_ptr = 'img/member-cover/' . $filename;
            $userModel->remember_token      = $token;
            $userModel->save();

            header("Access-Control-Allow-Origin: *");
            return null;
        }

        $nama_siswa = '';
        if ($request->exists('nama_siswa')) {
            $nama_siswa = $request->input('nama_siswa');
        }

        $nim_siswa = '';
        if ($request->exists('nim_siswa')) {
            $nim_siswa = $request->input('nim_siswa');
        }

        $alamat_email = '';
        if ($request->exists('alamat_email')) {
            $alamat_email = $request->input('alamat_email');
        }

        $no_telp = '';
        if ($request->exists('no_telp')) {
            $no_telp = $request->input('no_telp');
        }

        $kelas_siswa = '';
        if ($request->exists('kelas_siswa')) {
            $kelas_siswa = $request->input('kelas_siswa');
        }

        if ($request->exists('kelas_baru')) {
            if ($request->input('kelas_baru') != "") {
                $kelas_siswa = $request->input('kelas_baru');
            }
        }

        $alamat_rumah = '';
        if ($request->exists('alamat_rumah')) {
            $alamat_rumah = $request->input('alamat_rumah');
        }

        $userModel->where('remember_token', '=', $token)
            ->update([
                'name'         => $nama_siswa,
                'email'        => $alamat_email,
                'password'     => bcrypt($nim_siswa),
                'nim'          => $nim_siswa,
                'role'         => 'member',
                'nomor_hp'     => $no_telp,
                'alamat_rumah' => $alamat_rumah,
                'kelas'        => $kelas_siswa,
            ]);

        header("Access-Control-Allow-Origin: *");
        return null;
    }
}
