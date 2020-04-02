@extends('layouts.layout')

@section('content')

<div class ="container">
    <h2>Add post</h2>
    <form action="/posts" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title">

        <label for="content">Content</label>
        <input type="text" name="content">

        <label for="tags">Tag</label>
        <input type="text" name="tags">

        <input type="submit" value="Add Post">
    </form>
</div>