<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

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
<<<<<<< HEAD
                'email'     => 'required|email|unique:users',
                'user_name' => 'required|max:100',
                'pass'  => 'required|min:6'
            ]);
=======
           'email' => 'required|email',
            'pass' => 'required'
        ]);
>>>>>>> b341588afc813179008bd5ee15208805bc53bdd4
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
<<<<<<< HEAD
    		return redirect()->route('home')->with([
                'loi' => 'Sai sai sai!',
                ]);
=======
    		return redirect()->back();
                    
>>>>>>> b341588afc813179008bd5ee15208805bc53bdd4
    	}

    }
}
