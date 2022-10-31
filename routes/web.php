<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uuuuuController;
use App\Http\Controllers\NewController;

use App\Http\Controllers\Front\UserController;

use App\Http\Controllers\SecondController;

use App\Http\Controllers\last\LastController;

use App\Http\Controllers\WebGroup\WebGroupController;

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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


Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});


Route::get('/m' , function(){
    return view('zse');
});