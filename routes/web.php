<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    redirect(\route('home'));
})->name('logout');

//Assets
Route::get('/images/logo.svg')->name('logo');//Logo
Route::get('/images/profile_banner.jpg')->name('banner');//Banner

Auth::routes();

Route::middleware('auth')->group( function() {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store')->name('tweets');
    Route::post('/profile/{user:tag}/follow', 'FollowController@store');
});

//Tweets


//Profiles
Route::get('/profile/{user:tag}', 'ProfileController@show')->name('profile');

