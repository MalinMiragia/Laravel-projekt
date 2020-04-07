<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Comment;

class CommentController extends Controller
{
    // public function index() {
    //     $comments = Comment::all();

    //     return view('posts.index', [
    //         'comments' => $comments,
    //     ]);
    // }

    // public function show($id)  {
    //     $comment = Comment::findOrFail($id);

    //     return view('posts.show', [
    //         'comment' => $comment
    //     ]);
    // }

    // public function create()     {
    //     return view('posts.create');
    // }

    // public function store() {

    //     $comment = new Comment();

    //     $comment->comment_content = request('comment_content');
        

    //     $comment->save();

    //     return redirect('/posts');
    // }
}
