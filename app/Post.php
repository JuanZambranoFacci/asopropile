<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function category()
    {
        return $this->belongsTo(Categoty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}