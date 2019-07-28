<?php

namespace App\Http\Controllers;

use App\Http\Services\ArticleService;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * 新闻列表
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request) {
        $page = (int)$request->get('page', 1);
        $limit = (int)$request->get('limit', 10);

        $offset = ($page - 1) * $limit;

        //
        $where = [
            'status' => 1
        ];
        $articleList = app(Article::class)
            ->where($where)
            ->offset($offset)->limit($limit)->get()->toArray();
        $total = app(Article::class)->where($where)->count();
        //
        $articleCate = app(ArticleService::class)->articleCategoryList();
        $recommends = app(ArticleService::class)->articleRecommend();
        return view('blog.list', [
            'article_cate' => $articleCate,
            'article' => $articleList,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'recommend_list' => $recommends,
        ]);
    }

    /**
     * 详情页
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail(Request $request) {
        $id = (int)$request->route('id');
        $articleCate = app(ArticleService::class)->articleCategoryList();

        $article = app(Article::class)->find($id)->toArray();

        //
        $recommends = app(ArticleService::class)->articleRecommend();
        return view('blog.detail', [
            'article' => $article,
            'article_cate' => $articleCate,
            'recommend_list' => $recommends,
        ]);
    }
}
