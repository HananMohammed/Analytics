<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
//Route::redirect('/','/en');
Route::get('language/{locale}', 'LanguageController@language')->name('language');
Route::group(["prefix"=>"{language}"],function (){
    Route::get('/', function () {
        return view('components.front.hompage');
    })->name('home');

    Route::get('/login',function (){
        return view('components.front.admin-login');
    })->name('login');

    Route::get('/subscriber',function (){
        return view('components.youtube-subscriber');
    })->name('subscriber');
    Route::post('subscribe','SubscriberController@subscribe')->name('youtube');
    Route::resource('adminlogin','AdminLoginController');
});
