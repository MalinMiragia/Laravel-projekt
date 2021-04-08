<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function subject()
        {
            return $this->belongsToMany(Subject::class);
        }

        protected $fillable = [

            'tag_name',

        ];

}
