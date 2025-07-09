<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{ //table post
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
?>