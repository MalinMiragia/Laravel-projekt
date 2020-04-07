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
            <h5 class="card-title"><a href="/subjects/{{ $subject->id }}">{{ $subject->subj_title }}</a></h5>
            <p class="card-text">{{ $subject->subj_name }}</p>
            <p class="card-text"><small class="text-muted">{{ $subject->timestamps }}</small></p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection