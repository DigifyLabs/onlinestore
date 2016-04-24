<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !\Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'name' => 'required'
        ];
    }

    function response(Array $errors)
    {
        return \Redirect::back()->withErrors($errors);
    }

    function messages()
    {
        return [

            'email.required' => "we need to know your email ! "
        ];
    }
}
