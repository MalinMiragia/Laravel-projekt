<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function path()
        {
            return route('subjects.showsubject', $this);
        }
    
    public function subject()
        {
            return $this->hasOne(Subject::class);
        }

    public function user()
        {
            return $this->belongsTo(User::class);
        }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    protected $fillable =[
        'title', 'content',
    ];
    
}

