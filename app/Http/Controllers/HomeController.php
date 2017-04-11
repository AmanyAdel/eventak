<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth::id());
        return view('home',compact('user'));
    }

    // public function profile()
    // {
    //     $user = User::find($id);
    //     return view('home',compact('user'));
    // }
    
}
