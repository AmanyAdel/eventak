<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;

class UserProfileController extends Controller
{
    public function viewProfile($id)
	{
		$user = User::find($id);
		
		return view('editprofile',compact('user'));

	}


	public function editProfile(Request $request)
	{
		$user = User::find(auth::id());
		
		if($request->save){

			$this->validate($request,[
			'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        	'image' => 'required',
			]);
			
			$user->name     = $request->name;
			$user->email    = $request->email;
			$user->password = $request->password;
			$user->image    = $request->file('image')->store('images');
			$user->save();
			return view("home",compact('user'));
		
		}else {
			return view("home",compact('user'));
		}
		
	}
}
