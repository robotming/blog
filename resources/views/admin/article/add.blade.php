@extends('public/layout')
@section('content')
    <div class="row state-overview">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home"></i> 首页</a></li>
            <li><a href="#">文章</a></li>
            <li class="active">添加</li>
        </ul>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">
        <div class="col-lg-8">
                <form action="{{ url('admin/article/add') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">标题</label>
                    <div class="col-lg-10">
                        <input type="text" name="title" class="form-control" placeholder="标题" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">内容</label>
                    <div class="col-lg-10">
                        <textarea class="form-control ckeditor" name="content" rows="6"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">选择分类</label>
                    <div class="col-lg-2">
                        <select name="cat_id" class="form-control m-bot15">
                            @foreach ($cat_list as $k => $item)
                                <option value="{{ $item['cat_id'] }}">{{ $item['cat_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="submit" class="btn btn-danger" value="提交" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <a class="btn btn-shadow btn-info" href="{{ url('admin/article/index') }}">返回列表</a>
        </div>
    </div>
@endsection




