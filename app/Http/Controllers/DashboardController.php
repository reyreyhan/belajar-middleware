<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DashboardController extends Controller
{
    //

    public function index() {

      if(empty(session('sessionUser'))) {
        return redirect('/masuk');
      }
      //print_r(session('sessionUser')->role);
      //print_r(session('sessionUser'));
      //echo "ini admin";
    }

    public function user() {
      echo "ini user";
    }

    public function admin() {
      echo "ini admin";
    }
}
