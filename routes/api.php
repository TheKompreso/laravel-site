<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/', function (Request $request) {
       dd($request);
    });
    Route::resource('game',App\Http\Controllers\Api\V1\GameController::class);

    #Route::get('/user', function (Request $request) {
    #    return $request->user();
    #})->middleware('auth:sanctum');
});
