<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use App\Models\GameModel;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function ShowHomePage()
    {
        return view('home', [
            'comments' => CommentModel::where('public', 1)->orderBy('id', 'desc')->take(5)->get()
        ]);
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
        return view('games', [
            'games' => GameModel::orderBy('id', 'desc')->take(5)->get()
        ]);
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

    public function SendComment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:30',
            'username' => 'required|min:3|max:30',
            'email' => 'nullable|email|min:5|max:100',
            'comment' => 'required|min:5|max:500',
            'notify' => 'nullable|integer'
            ]);

        $comment = new CommentModel();
        $comment->name = $request->input('name');
        $comment->username = $request->input('username');
        $comment->comment = $request->input('comment');

        $comment->email = $request->input('email');
        if(is_null($comment->email))
        {
            $comment->email = "";
            $comment->sendmail = 0;
        }
        else $comment->sendmail = $request->input('notify');

        $comment->save();

        return redirect()->route('home');
        //dd($request);
    }
}
