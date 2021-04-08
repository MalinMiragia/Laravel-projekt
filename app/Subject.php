<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function path()
        {
            return route('subjects.showsubject', $this);
        }

    public function user()
        {
            return $this->belongsTo(User::class);
        }

    public function posts()
        {
            return $this->hasMany(Post::class);
        }

    public function tags()
        {
            return $this->belongsTomany(Tag::class);
        }

        protected $fillable = [
            'subject_title','subject_name', 'tag_name'
        ];
}
