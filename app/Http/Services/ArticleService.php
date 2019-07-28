<?php
namespace App\Http\Services;

use App\Models\ArticleCate;
use App\Models\ArticleRecommend;

class ArticleService{

    /**
     * 获取文章分类列表
     * @return mixed
     */
    public function articleCategoryList($where) {
        $articleCate = app(ArticleCate::class)->where($where)->get()->toArray();

//        array_shift($articleCate);
        return $articleCate;
    }

    /**
     * 获取推荐文章
     * @return mixed
     */
    public function articleRecommend() {
        $list = app(ArticleRecommend::class)->limit(10)->get()->toArray();
        return $list;
    }
}