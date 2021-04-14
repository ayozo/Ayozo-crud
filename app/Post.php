<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $post = 'laravel7-crud';
    protected $fillable = [
        'title', 'description', 'price',
    ];
}
