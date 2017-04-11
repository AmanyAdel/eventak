<?php

use App\Admin;
use App\Event;
use App\User;
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
Route::group(["middleware"=>"auth"], function(){

Route::get('/home', 'HomeController@index');

Route::get('/home/{id}', 'UserProfileController@viewProfile');

Route::post('/home/{id}', 'UserProfileController@editProfile');

});
	

Route::get('user','TestController@displayloc');


Auth::routes();


