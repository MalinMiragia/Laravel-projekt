@extends('layouts.app')

@section('content')

    <div class="container">

        <input type="submit" value="Update Subject">

        <h2>update Subject {{ $subject->id }}</h2>

    <form method="POST" action="/subjects/{{ $subject->id }}">

        @method('PUT')

        @csrf

        <label for="subject_title">Title</label>

        <input type="text" id="subject_title" name="subject_title" placeholder="{{ $subject->subject_title}}">

        <label for="subject_name"> Content</label>

        <input type="text" id="subject_name" name="subject_name" placeholder="{{ $subject->subject_name }}">

        <label for="tag_name"> Tags</label>

        <input type="select" id="tag_name" name="tag_name" placeholder="{{ $tag->tag_name }}">


        <input type="submit" value="Update subject">

    </form>

</div>

@endsection