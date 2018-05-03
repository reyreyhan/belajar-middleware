<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index() {
      return view('login');
    }

    public function register() {
      return view('register');
    }

    public function input(Request $request) {
      $data = new User();
      $data->username = $request->username;
      $data->password = $request->password;
      $data->email = $request->email;
      $data->role = $request->role;
      $data->save();
      return redirect('/masuk');
    }

    public function check(Request $request) {
      $data = User::where('username',$request->username)->where('password',$request->password)->first();
      $request->session()->put('sessionUser', $data);
      //print_r(session('sessionUser'));
      /*if(!empty(session('sessionUser'))) {
          //print_r($data);
          return redirect('/dashboard');
      }*/
      return redirect('/dashboard');
    }

    public function logout(Request $request) {
      $request->session()->forget('sessionUser');
      return redirect('/masuk');
    }
}
