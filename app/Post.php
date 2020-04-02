<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function path()
        {
            return route('posts.show', $this);
        }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
        {
            return $this->belongsTo(User::class); // select * from user where post_id = current post
        }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }    
}
