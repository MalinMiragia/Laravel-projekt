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
            return $this->hasOne(User::class, 'subject_user_id' );
        }
    public function post()
        {
            return $this->hasMany(Post::class);
        }

        protected $fillable = [
            'subj_title','subj_name'
        ];
}
