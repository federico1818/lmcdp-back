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
use App\User;
use App\Notifications\PasswordResetNotification;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notification', function () {
    $user = User::first();
    
    return (new PasswordResetNotification('dsdadadas'))->toMail($user);
});