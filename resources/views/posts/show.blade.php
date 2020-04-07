@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
        <div class="col-md-4">
            <img src="..." class="card-img" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            {{-- <h5 class="card-tag">{{ $post->tags }}</h5> --}}
            <p class="card-text">{{ $post->content}}</p>
            <p class="card-text"><small class="text-muted">{{ $post->timestamps }}</small></p>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete post</button>
            
            </div>
        </div>
        </div>
    </div>
    
</div>
@endsection