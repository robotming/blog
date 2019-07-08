<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'article';

//    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'cat_id',
    ];
}
