@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Add Subject</h2>

    <form action="/subjects" method="POST">

        @csrf

        <label for="subject_title">Title</label>

        <input type="text" id="subject_title" name="subject_title">

        <div class="field">

            <label class="label" for="name_tag">Tags</label>

                <div class="control">

                    <select
                    name="tags[]"
                    multiple
                    >
            
                        @foreach ($tags as $tag)

                            <option value="{{ $tag->id }}">{{ $tag->name_tag }}</option>

                        @endforeach 

                    </select>

                </div>

        </div>

        <label for="subject_name">Content</label>

        <textarea class="textarea" id="subject_name" name="subject_name"></textarea>

        <input type="submit" value="Add Subject">

    </form>

</div>

@endsection