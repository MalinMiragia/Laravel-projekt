<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();

        return view('subjects.subjectindex', [
            'posts' => $posts,
        ]);
    }

    public function show($id)  {
        $post = Post::findOrFail($id);

        return view('subjects.subjectshow', [
            'post' => $post
        ]);
    }

    public function create()     {
        return view('subjects.subjectcreate');
    }

    public function store() {

        $post = new Post();

        $post->title = request('title');
        $post->content = request('content');
        

        $post->save();

        return redirect('/subjects');
    }

    public function destroy($id) {

        $post = Post::findOrFail($id);
        $post->delete();

        return  redirect('/subject')->with('msg', $post->title . ' was deleted');
    }

    public function edit($id) {
        $post = Post::find($id);
        print_r($post->title);
        return view('subjects.subjectedit')->with('post', $post);
    }

    public function update($id) {
        $post = Post::find($id);

        $post->title = request('title');
        $post->content = request('content');
        

        $post->save();

        return redirect('subjects/' . $post->id);
    }
}
