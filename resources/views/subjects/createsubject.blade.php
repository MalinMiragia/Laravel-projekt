@extends('layouts.app')

@section('content')

<div class="container">
<h2>Add Subject</h2>
<form action="/subjects" method="POST">
    @csrf
    <label for="subject_title">Title</label>
    <input type="text" name="subject_title">

    <label for="subject_name">Content</label>
    <input type="text" name="subject_name">

    <input type="submit" value="Add Subject">
</form>
</div>
@endsection