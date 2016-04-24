<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\SignupRequest;
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
}
