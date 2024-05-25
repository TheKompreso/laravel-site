<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ContentController;

Route::get('/', [ContentController::class, 'ShowHomePage'])->name('home');
Route::get('/faq', [ContentController::class, 'ShowFAQPage']);
Route::get('/about', [ContentController::class, 'ShowAboutPage']);
Route::get('/games', [ContentController::class, 'ShowGamesPage']);
Route::get('/game/{name_id}/{name}', [ContentController::class, 'ShowGamePage']);

Route::get('/user/auth', [ContentController::class, 'ShowAuthPage']);

Route::post('/home/send-comment', [ContentController::class, 'SendComment']);
