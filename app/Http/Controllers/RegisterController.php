<?php

namespace App\Http\Controllers;

use Sentinel;

use Illuminate\Http\Request;
use App\User;



class RegisterController extends Controller
{
    public function register(){
    	$user = User::all();
    	// dd($user->toArray());
    	return view('authentication.register');
    }

    public function registerUser(Request $request){
        // dd($request->all());
    	$user=Sentinel::register($request->all());
    	//dd($user);
    	return redirect('/');
    }
}
