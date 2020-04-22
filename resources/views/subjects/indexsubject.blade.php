@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($subjects as $subject)
  <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><a href="/subjects/{{ $subject->id }}">{{ $subject->subject_title }}</a></h5>
            <p class="card-text">{{ $subject->subject_name }}</p>
            <p class="card-text"><small class="text-muted">{{ $subject->user->user_name }}created at{{ $subject->created_at }}</small></p>
            <input type="submit" value="Add Post">
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection