<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\User;
use App\Subject;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        print_r($tags);
    }
    
    public function show($tag_id)  {
        $tag = Tag::findOrFail($tag_id);
        print_r($tag);
        return view('tags.showtag', [
            'tag'=> $tag,

        ]);


    }

    public function create()    {
        

        return view('tags.createtag',
    
        );

    }

    public function store() {

        $tag = new Tag();
        $tag->user_id = Auth::user()->user_name;
        $tag->name_tag = request('name_tag');


        $tag->save();


        return redirect('/tags/createtag');
    }
}




