<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('auth', function () {
   // return view('auth');
//});

Route::get('auth', ['uses' => 'MyController@avto_show']);

Route::post('auth', ['uses' => 'MyController@avto']);
Route::get('home', function () {
    return view('home');
});






