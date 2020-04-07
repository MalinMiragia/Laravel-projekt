@extends('layouts.app')

@section('content')
    
{{-- <p>{{ $user->user_name }}</p>
@foreach($user->subjects as $subject)
    {{ $subject->subject_title }}
    {{ $subject->subject_name }}
    @endforeach --}}
    <div class="container">
    @foreach($user->subjects as $subject)
    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">{{ $subject->subject_title }}</h4>
              <p class="card-text">{{ $subject->subject_name }}</p>
              <p class="card-text"><small class="text-muted">{{ $user->user_name }}</small></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    {{ $user->user_name }}
    @foreach($user->posts as $post)
    {{ $post->title }}
    {{ $post->content }}
    @endforeach
@endsection