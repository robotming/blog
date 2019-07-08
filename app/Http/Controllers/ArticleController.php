<?php
/**
 * 文章
 */

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCate;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * 文章列表
     */
    public function index(Request $request) {
        $list = app(Article::class)->get()->toArray();

        return response()->view('article/index', [
            'list' => $list
        ]);
    }

    public function add (Request $request) {
        if ($request->method() == 'POST') {
            if (!$request->filled('title')) {
                return response()->json([
                    'code' => 400,
                    'msg' => '不能为空',
                ]);
            }

            //
            $title = $request->post('title');
            $content = $request->post('content');
            $catId = $request->post('cat_id');
            app(Article::class)->create([
                'title' => $title,
                'content' => $content,
                'cat_id' => $catId,
            ]);
            return redirect('article/index');
        }

        // 获取分类
        $catList = app(ArticleCate::class)->get()->toArray();

        return response()->view('article/add', [
            'cat_list' => $catList
        ]);
    }

    public function detail (Request $request) {

    }

    public function update (Request $request) {

    }

    public function del (Request $request) {

    }
}
