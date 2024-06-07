<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;

Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', [ContentController::class, 'ShowHomePage'])->name('home');
    Route::get('/faq', [ContentController::class, 'ShowFAQPage']);
    Route::get('/about', [ContentController::class, 'ShowAboutPage']);
    
    Route::get('/game/all', [ContentController::class, 'ShowGamesPage'])->name('games');
    Route::get('/games', function () { return redirect()->route('games'); });
    Route::get('/game/{id}/{name?}', [ContentController::class, 'ShowGamePage'])->where('name', '[a-z0-9_-]+');
    
    Route::get('/user/auth', [ContentController::class, 'ShowAuthPage'])->name('login');
    
    Route::post('/home/send-comment', [ContentController::class, 'SendComment']);
});

Route::domain('{subdomain}.'. env('APP_URL'))->group(function () {
    Route::get('/', function (string $subdomain) {
        return $subdomain;
    });
    Route::get('/{url?}', function (string $subdomain = null, string $url) {
        return $subdomain . ' | '. env('APP_URL') .' | ' . $url;
    });
});

Route::domain('{domain}')->group(function() {
    Route::get('/{url?}', function (string $domain, string $url = null) {
        return $domain . ' | ' . $url;
    });
});

Route::domain('{domain}.{host}')->group(function() {
    Route::get('/{url?}', function (string $domain, string $host, string $url = null) {
        return $domain . ' | '.$host .' | ' . $url;
    });
});
