<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Hash;

class AdminController extends Controller
{
    //
    public function postSignIn(Request $request)
    {
      # code...
        $this->validate($request, [
            'uname' => 'required|max:30',
            'pasw' => 'required|max:30'
        ]);

        if (!Auth::attempt(['username' => $request['uname'] , 'password' => $request['pasw'] ])) {
            # code...
            alert()->error('Email atau Password Salah', 'Error');
            return redirect('/login');
        }
        alert()->success('Anda Berhasil Login', 'Success');
        return redirect('/mimin');
    }

    public function Logout()
    {
      Auth::logout();
      alert()->success('Anda Berhasil Logout', 'Success');
      return redirect('/login');
    }

    public function showNewUser()
    {
        $data = User::orderBy('id','desc')->get();
        return view('index')->with('siswa', $data);
    }

}
