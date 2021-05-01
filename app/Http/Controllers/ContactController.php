<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\CommentModel;
use App\UsersModel;
use App\BetweenModel;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $user = new UsersModel();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $comment = new CommentModel();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->theme = $request->input('theme');
        $comment->message = $request->input('message');

        $between = new BetweenModel();
        $between->email = $request->input('email');
        $between->theme = $request->input('theme');

        $user->save();
        $comment->save();
        $between->save();

        return redirect()->route('home')->with('success', 'Message was added to base');
    }

    public function allData(){
        $comment = new CommentModel();
        return view('comments', ['data' => $comment->orderBy('id', 'desc')->get()]);
//        'data' => [$comment->find(1)]
//        'data' => $comment->where('theme', '=', 'any')->get()
//        'data' => $comment->orderBy('id', 'desc')->get()
    }

    public function detailsComment($id){
        $comment = new CommentModel();
        return view('detailsComment', ['data' => $comment->find($id)]);
    }
}
