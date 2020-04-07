@extends('layouts.app')

@section('content')

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
    <div class="col-md-4">
        <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
    <div class="card-body">
        <h3 class="card-title">{{ $subject->subj_title }}</h3>
        <h5 class="card-creator">{{ $subject->subj_name}}</h5>
        <p class="card-text">{{ $subject->user->name }} }}</p>
        <p class="card-text"><small class="text-muted">{{ $subject->timestamps }}</small></p>
        <form action="/subjects/{{ $subject->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Subject</button>
        
        </div>
    </div>
    </div>
</div>
@endsection