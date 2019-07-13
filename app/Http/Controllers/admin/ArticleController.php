<?php
/**
 * 文章
 */

namespace App\Http\Controllers\admin;

use App\Models\Article;
use App\Models\ArticleCate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    /**
     * 文章列表
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request) {
        $page = $request->get('page', 1);
        $pageSize = $request->get('limit', 2);

        $offset = ($page - 1) * $pageSize;
        $list = app(Article::class)->offset($offset)->limit($pageSize)->orderby('id', 'desc')->get()->toArray();
        $total = app(Article::class)->count();

        return response()->view('admin/article/index', [
            'list' => $list,
            'total' => $total,
            'page' => $page,
            'limit' => $pageSize,
        ]);
    }

    /**
     * 添加
     * @param Request $request
     * @return mixed
     */
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
            return redirect('admin/article/index');
        }

        // 获取分类
        $catList = app(ArticleCate::class)->get()->toArray();

        return response()->view('admin/article/add', [
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
