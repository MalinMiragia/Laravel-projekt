@extends('layouts.app')

@section('content')

{{-- {{ $subject->subject_titel }}
    @foreach($subject->posts as $post)
    {{ $post->title }}
    {{ $post->content }}
    @endforeach --}}
    <div class="container">
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
              <p class="card-text"><small class="text-muted">
                  {{ $user->user_name }}</small></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
@endsection