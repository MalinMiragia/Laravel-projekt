@extends('layouts.app')

@section('content')

<div class="container">

    <h2> Add a tag </h2>

    <form action ="/tags" method="POST">

        @csrf

        <label for="name_tag">Tag name</label>

        <input type="text" id="name_tag" name="name_tag">

        <input type="submit" value="Add a Tag">

    </form>

</div>  

@endsection