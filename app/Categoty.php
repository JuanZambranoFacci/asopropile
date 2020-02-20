<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoty extends Model
{
     protected $fillable = [
        'name', 'slug', 'body'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
