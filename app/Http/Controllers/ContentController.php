<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function ShowHomePage()
    {
        return view('home');
    }
    public function ShowFAQPage()
    {
        return view('faq');
    }
    public function ShowAboutPage()
    {
        return view('about');
    }
    public function ShowGamesPage()
    {
        return view('games');
    }
    public function ShowAuthPage()
    {
        return view('user.auth');
    }
    public function ShowGamePage(string $name_id)
    {
        return view('game', [
            'name_id' => $name_id
        ]);
    }
}
