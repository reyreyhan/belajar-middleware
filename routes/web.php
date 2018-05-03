<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', 'UserController@index');
Route::get('/register','UserController@register');
Route::post('/masuk/register','UserController@input');
Route::post('/masuk/check','UserController@check');
Route::get('/masuk/logout','Usercontroller@logout');

Route::get('/dashboard/admin','DashboardController@admin');
Route::get('/dashboard/user','DashboardController@user');
Route::get('/dashboard','DashboardController@index');

/*Route::group(['middleware'=>['Role']], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/dashboard/user','DashboardController@user');
    Route::get('/dashboard/admin','DashboardController@admin');
});*/
