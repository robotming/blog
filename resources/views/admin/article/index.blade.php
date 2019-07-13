@extends('public/layout')
@section('content')
    <div class="row state-overview">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home"></i> 首页</a></li>
            <li><a href="#">文章</a></li>
            <li class="active">列表</li>
        </ul>
    </div>
<div class="row"></div>
<div class="row"></div>
    <div class="row">
        <div class="col-lg-8">
            <section class="panel">
                <table class="table table-hover personal-task">
                    <thead>
                    <tr>
                        <th>标题</th>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $k => $article)
                        <tr>
                            <td>{{ $article['title'] }}</td>
                            <td>{{ $article['content'] }}</td>
                            <td align="center">
                                <span class="badge bg-important">75%</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>

        </div>
        <div class="col-lg-4">
            <a class="btn btn-shadow btn-info" href="{{ url('admin/article/add') }}">添加</a>
        </div>
    </div>
    <div class="row">
        @include('public.page')
    </div>


@endsection
