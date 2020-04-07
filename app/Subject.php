<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function path()
        {
            return route('subjects.showsubj', $this);
        }

    public function user()
        {
            return $this->belongsTo(User::class);
        }
    public function post()
        {
            return $this->hasMany(Post::class);
        }

        protected $fillable = [
            'subject_title','subject_name'
        ];
}
