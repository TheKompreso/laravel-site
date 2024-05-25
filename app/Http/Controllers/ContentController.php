<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

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

    #[NoReturn] public function SendComment(Request $request) : void
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:30',
            'username' => 'required|min:3|max:30',
            'email' => 'nullable|email|min:5|max:100',
            'comment' => 'required|min:5|max:500'
            ]);
        //dd($request);
    }
}
