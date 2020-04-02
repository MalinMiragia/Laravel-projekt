@extends('layouts.layout')

@section('content')

<div class="container">
    <h2>update posts {{ $post->id }}</h2>
<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    <label for="title">Title</label>
<input type="text" name="title" placeholder="{{ $post->title}}">

<label for="content"> Content</label>
<input type="text" name="content" placeholder="{{ $post->content }}">

<label for="tags"> Tags</label>
<input type="text" name="tags" placeholder="{{ $post->tags }}">

<input type="submit" value="Update post">
    </form>
</div>