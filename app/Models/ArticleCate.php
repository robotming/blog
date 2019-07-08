<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCate extends Model
{

    protected $table = 'article_cate';

//    public $timestamps = false;

    protected $fillable = [
        'cat_name',
        'pid',
    ];
}
