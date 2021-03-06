<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth:api'], function() {
    
    Route::resource('/games', 'GameController')->only([
        'index', 'store', 'show', 'destroy'
    ]);
    
    Route::resource('/games/{game}/requests', 'GameRequestController');
    Route::resource('/games/{game}/start', 'GameStartController');
    Route::resource('/games/{game}/finish', 'GameFinishController');
    Route::resource('/games/{game}/report', 'ReportController');
    Route::post('/requests/{gameRequest}/accept', 'GameRequestController@accept');
});