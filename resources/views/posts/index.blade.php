@extends('layouts.layout')

@section('content')

<div class="content">
    <h2>Our Posts</h2>

@foreach($posts as $post)
    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
@endforeach

<p>{{ session('msg') }}</p>
</div>