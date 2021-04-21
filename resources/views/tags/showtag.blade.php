@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>{{ $tag->name_tag }}</h3>
        <h4>{{ $tag->user_id }}</h4>
    <?php
        
        print_r($tag);
    ?>

    </div>
@endsection