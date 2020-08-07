<?php

use Illuminate\Support\Facades\Auth;
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

Route::view('/','welcome');


Route::get('payments/create','paymentsController@create')->middleware('auth');
Route::post('payments','paymentsController@store')->middleware('auth');
Route::get('notifications','UserNotificationsController@show')->middleware('auth');

Auth::routes();

