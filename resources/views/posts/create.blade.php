@extends('layouts.app')

@section('content')

<div class ="container">
    <h2>Add post</h2>

    <form action="/posts" method="POST">

        @csrf

        <label for="title">Title</label>

        <input type="text" name="title">

        <label for="content">Content</label>

        <input type="text" name="content">

        <input type="submit" value="Add Post">

    </form>
</div>    
    @endsection
