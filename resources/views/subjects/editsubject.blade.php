@extends('layouts.app')

@section('content')

<div class="container">
<input type="submit" value="Update Subject">
    </form>
    <h2>update Subject {{ $subject->id }}</h2>
<form action="/subjects/{{ $subject->id }}" method="POST">
    @csrf
    <label for="subject_title">Title</label>
<input type="text" name="subject_title" placeholder="{{ $subject->subject_title}}">

<label for="subject_name"> Name</label>
<input type="text" name="subject_name" placeholder="{{ $subject->subject_name }}">


<input type="submit" value="Update subject">
    </form>
</div>
@endsection