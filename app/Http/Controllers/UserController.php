<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Auth;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserController extends Controller
{


    protected $userRepositoryInterface;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }
    public function getHome(){
    	return view('home');
    }

    public function postSignUp(SignupRequest $request){
        $this->validate($request, [
                'email'     => 'required|email|unique:users',
                'user_name' => 'required|max:100',
                'pass'      => 'required|min:6'
            ]);
    	$email = $request['email'];
    	$user_name = $request['user_name'];
    	$password = bcrypt($request['pass']);
    }

    public function getHome()
    {
        return view('home');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'user_name' => 'required|max:100',
            'pass' => 'required|min:6'
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
        return redirect()->route('home');
    }

    public function postSignIn(Request $request){
    	if ( Auth::attempt(['email' => $request['email'], 'password' => $request['pass']]) ){
    		return redirect()->route('home');
    	}
    }

    public function getLogout(Request $request){
        if ( Auth::check() ) 
        {
            Auth::logout();
            $request->session()->flush();
            return redirect()->route('home');

    public function postSignIn(Request $request)
    {
        // return redirect()->route('home')->withErrors([
        //                     'error' => "getFailedLoginMessage",
        // ]);
        return redirect()->route('home');
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['pass']])) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function getAll()
    {
        return dd($this->userRepositoryInterface->all());
    }
}
