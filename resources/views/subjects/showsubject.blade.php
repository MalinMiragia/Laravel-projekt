@extends('layouts.app')

@section('content')

<div class="container">
<div class="card mb-3">
    <div class="row no-gutters">
    <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
    <div class="card-body">
        <h3 class="card-title">{{ $subject->subject_title }}</h3>
        <h5 class="card-creator">{{ $subject->subject_name}}</h5>
        <p class="card-text">{{ $subject->user->name }} }}</p>
        <p class="card-text"><small class="text-muted">{{ $user->user_name }} created at{{ $subject->created_at }}</small></p>
        @can ('update-subject', $subject)
        <form action="/subjects/{{ $subject->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Subject</button>
        @endcan
        </div>
    </div>
    </div>
    <h2> {{ $subject->subject_titel }}</h2>
    @foreach($subject->posts as $post)
    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <p>
                    @foreach ($subject->tags as $tag)
                        <a href="/subjects?tag={{ $tag->name }}">{{ $tag->name }}</a>
              </p>
              <p class="card-text"><small class="text-muted">
                  {{ $user->user_name }}created at</small></p>
                  <form action="/subjects/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete Subject</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
</div>
@endsection