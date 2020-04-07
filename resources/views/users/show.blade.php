@extends('layouts.app')

@section('content')
    
<p>{{ $user->user_name }}</p>
@foreach($user->subjects as $subject)
    {{ $subject->subject_title }}
    @endforeach


@endsection