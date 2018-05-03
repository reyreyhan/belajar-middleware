<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$role = User::where('role',session('sessionUser')->role)->first();
        //$role = "user";

        if(empty($request->session('sessionUser'))) {
          return redirect('/masuk');
        } /*else if($request->session('sessionUser') == "user") {
          return redirect('/dashboard/user');
        } else if($request->session('sessionUser') == "admin") {
          return redirect('/dashboard/admin');
        }*/
        return $next($request);
      /*if(empty(session('sessionUser')) {
        return redirect('/masuk');
        //return $next($request);
      } else if(session('sessionUser')->role == "admin"){
        return redirect('/dashboard');
      } else if(session('sessionUser')->role == "user"){
        return redirect('/dashboard/user');
      }*/
    }
}
