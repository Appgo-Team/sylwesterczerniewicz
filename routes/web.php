<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guestcontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('guest','guestAdd');
Route::post('guest', [guestcontroller::class,'save']);
Route::view('thankyou', 'thankYou' );


