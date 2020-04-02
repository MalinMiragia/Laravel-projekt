@extends('layouts.layout')

@section('content')

<div class="one-post">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content}} </p>
    <p>{{ $post->tags }}</p>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete post</button>
    </form>
    <button><a href="/posts/edit/{{ $post->id }}">Edit post</a></button>
</div>

</div>