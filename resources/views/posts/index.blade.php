{{-- @extends('layouts.layout') --}}
@extends('layouts.app')

@section('content')


    <h2>Our Posts</h2>

{{-- @foreach($posts as $post)
    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
@endforeach --}}

<p>{{ session('msg') }}</p>

<div class="container">
  @foreach($posts as $post)
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h5>
          <p class="card-text">{{ $post->content }}</p>
          <p class="card-text"><small class="text-muted">{{ $user }} - {{ $user->subject }}</small></p>
        </div>
      </div>
    </div>
  </div>
  @endforeach

@endsection