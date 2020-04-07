@extends('layout.app')

@section('content')

{{ $subject->subject_titel }}
    @foreach($subject->posts as $post)
    {{ $post->title }}
    {{ $post->content }}
    @endforeach
    
@endsection