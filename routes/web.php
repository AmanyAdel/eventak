<?php

use App\Feedback;
use App\Event;
use App\User;
use App\Category;
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

// Route::get('event', function(){
// 	$event              = new Event;
// 	$event->title       = 'relationship session';
// 	$event->date        = '2017-03-31 16:29:01';
// 	$event->category    = 'Laravel';
// 	$event->start_time  = date('h:i:s');
// 	$event->end_time    = date('h:i:s') + 30;
// 	$event->description = 'my name is ahmed hussien';
// 	$event->image       = bcrypt('123').'.jpg';
// 	// $event->location_id = 1;
// 	$event->save();
// });

// Route::get('user', function(){
// 	$user = new User;
// 	$user->name     = 'Ahmad Hussien';
// 	$user->email    = 'a.7ussien2013@gmail.com';
// 	$user->password = bcrypt('123456');
// 	$user->gender   = 'male';
// 	$user->image    = bcrypt('123').'.jpg';
// 	$user->save();
// });

// Route::get('admin', function() {
// 	$admin = new Admin;
// 	$admin->name     = 'Ahmad Hussien';
// 	$admin->email    = 'a.7ussien2013@gmail.com';
// 	$admin->password = bcrypt('123456');
// 	$admin->gender   = 'male';
// 	$admin->save();
// });

Route::get('events', function(){
	return Event::all();
});

// Route::get('users', function(){
// 	return User::all();
// });

// Route::get('admins', function(){
// 	return Admin::all();
// });

Route::get('relation', function(){
	//return Event::find(1)->location_id; // event->location
   // $x =Event::all();
   // return view("test",compact('x'));

});

Route::get('amany', function(){
//$a=Event::all();
$users = User::all();
$events =Event::all();
$feedbacks=Feedback::all();
$categories = Category::all();




return view("test", compact('events'));

});                                   