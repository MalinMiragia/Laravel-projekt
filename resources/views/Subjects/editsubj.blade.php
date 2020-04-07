@extends('layouts.app')

@section('content')

<div class="container">
<input type="submit" value="Update Subject">
    </form>
    <h2>update Subject {{ $subject->id }}</h2>
<form action="/subjects/{{ $subject->id }}" method="POST">
    @csrf
    <label for="subj_title">Title</label>
<input type="text" name="subj_title" placeholder="{{ $subject->subj_title}}">

<label for="subj_name"> Name</label>
<input type="text" name="subj_name" placeholder="{{ $subject->subj_name }}">


<input type="submit" value="Update subject">
    </form>
</div>