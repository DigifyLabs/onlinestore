<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Product;
use App\Profile;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test' , function(){



});

Route::get('/users/signup', 'UsersController@showSignup');

Route::post('/users/signup', 'UsersController@doSignup');

Route::get('/', "HomeController@home")->name('home');

Route::get('/users/login', 'UsersController@showLogin');

Route::post('/users/login', 'UsersController@doLogin');

Route::controller('products', 'ProductsController');
