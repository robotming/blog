<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleRecommend extends Model
{

    protected $table = 'article_recommend';

//    public $timestamps = false;

    protected $fillable = [
        'cat_name',
        'pid',
    ];
}
