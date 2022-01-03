<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayhelloController;

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
    return view('welcome');
});
Route::get('/guestbook', 'App\Http\Controllers\guestController@addNewGuest');
Route::post('/save',[
    'uses' => 'App\Http\Controllers\guestController',
    'as' => 'guest.save'
]);





