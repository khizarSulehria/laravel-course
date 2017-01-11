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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


// for Admin User controller
Route::resource('/admin/user', 'AdminUserController');



// admin
Route::get('/admin', function(){
    return view('layouts.admin');
})->name('admin');

//
//Route::get('/admin/user/store','AdminUserController@store')->name('create');