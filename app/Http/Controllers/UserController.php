<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getHome(){
    	return view('home.index');
    }

    public function getDashboard(){
    	return view('dashboard');
    }

    public function postSignUp(Request $request){
        $this->validate($request, [
           'email' => 'required|email',
            'pass' => 'required'
        ]);
    	$email = $request['email'];
    	$user_name = $request['user_name'];
    	$password = bcrypt($request['pass']);

        $user = new User();
    	$user->email = $email;
    	$user->name = $user_name;
    	$user->password = $password;
    	$user->role = "normal";
        
        $user->save();
    	Auth::login($user);
    	return redirect()->route('dashboard');
    }
    public function postSignIn(Request $request){
        return redirect()->route('dashboard')->withErrors([
                            'error' => "getFailedLoginMessage",
        ]);
        
    	if ( Auth::attempt(['email' => $request['email'], 'password' => $request['pass']]) ){
    		return redirect()->route('dashboard');
    	}else{
    		return redirect()->back();
                    
    	}

    }
}
