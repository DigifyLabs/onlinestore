<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use App\User;

class UsersController extends Controller
{
    public function showSignup()
    {
		return view('users.signup');
    }

    public function doSignup(SignupRequest $request)
    {
        $user = new User($request->all());
        if($user->save())
        {
            \Auth::login($user);
            return \Redirect::route('home');
        }
        else
        {
            return \Redirect::back()->withErrors($user->errors());
        }

    }

    public function showLogin()
    {
        return view('users.login');
    }

    public function doLogin(LoginRequest $request)
    {
        if(\Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            return redirect()->route('home');
        else
            return redirect()->back()->with('message','Invalid username or password');
    }
}
