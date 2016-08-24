<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getHome(){
    	return view('home.index');
    }

    public function getDashboard(){
    	return view('dashboard');
    }

    public function postSignUp(Request $request){
    	$email = $request['email'];
    	$user_name = $request['user_name'];
    	$password = bcrypt($request['pass']);

    	$user = new User();
    	$user->email = $email;
    	$user->name = $user_name;
    	$user->password = $password;
    	$user->role = "normal";
        
        $user->save();
    	// Auth::check($user);
    	return redirect()->route('dashboard');
    }
    public function postSignIn(Request $request){
    	if ( Auth::attemp(['email' => $request['email'], 'password' => $request['pass']]) ){
    		return redirect()->route('dashboard');
    	}else{
    		return redirect()->back();
                    
    	}

    }
}
