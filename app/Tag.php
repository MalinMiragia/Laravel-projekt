<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function path()
    {
        return route('tags.showtag', $this);
    }
    public function subject()
        {
            return $this->belongsToMany(Subject::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }


        protected $fillable = [

            'name_tag'

        ];


}
