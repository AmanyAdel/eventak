<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        	'image' => 'required',
        	'gender' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(array $data)
    // {   
        
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //     	'gender' => $data['gender'],
    //     	'image' => $data['image']->store("images"),
    //         'password' => bcrypt($data['password']),
    //     ]);
          
    // }
    protected function create(array $request){

    	$user = new User;
    	$user->name     = $request['name'];
    	$user->email    = $request['email'];
 		$user->gender   = $request['gender'];
    	$user->password = bcrypt($request['password']);
    	$user->image    = $request['image']->store('images');
    	$user->save();

        return view('home');
    }


    //   protected function edit(Auth::id()){

    //     $user = User::find();
    //     $user->name     = $request['name'];
    //     $user->email    = $request['email'];
    //     $user->gender   = $request['gender'];
    //     $user->password = bcrypt($request['password']);
    //     $user->image    = $request['image']->store('images');
    //     $user->save();

    //     return view('home');
    // }

}
