@extends('layouts.app')

@section('content')

<h2>Add Subject</h2>
<form action="/subjects" method="POST">
    @csrf
    <label for="subj_title">Title</label>
    <input type="text" name="subj_title">

    <label for="subj_name">Name</label>
    <input type="text" name="subj_name">

    <input type="submit" value="Add Subject">
</form>
</div>