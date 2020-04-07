<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // public function index() {
    //     $posts = Post::all();

    //     return view('posts.index', [
    //         'posts' => $posts,
    //     ]);
    // }

    // public function show($id)  {
    //     $post = Post::findOrFail($id);

    //     return view('posts.show', [
    //         'post' => $post
    //     ]);
    // }

    // public function create()     {
    //     return view('posts.create');
    // }

    // public function store() {

    //     $post = new Post();

    //     $post->title = request('title');
    //     $post->content = request('content');
        

    //     $post->save();

    //     return redirect('/posts');
    // }

    // public function destroy($id) {

    //     $post = Post::findOrFail($id);
    //     $post->delete();

    //     return  redirect('/post')->with('msg', $post->title . ' was deleted');
    // }

    // public function edit($id) {
    //     $post = Post::find($id);
    //     print_r($post->title);
    //     return view('posts.edit')->with('post', $post);
    // }

    // public function update($id) {
    //     $post = Post::find($id);

    //     $post->title = request('title');
    //     $post->content = request('content');
        

    //     $post->save();

    //     return redirect('posts/' . $post->id);
    // }
}
