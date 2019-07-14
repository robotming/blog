@extends('public/layout')
@section('content')
    <div class="row state-overview">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home"></i> 首页</a></li>
            <li><a href="#">用户</a></li>
            <li class="active">添加</li>
        </ul>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">
        <div class="col-lg-8">
            <form action="{{ url('admin/user/update') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $user['id'] }}">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">姓名</label>
                    <div class="col-lg-10">
                        <input type="text" name="name" value="{{ $user['name'] }}"  class="form-control" placeholder="姓名" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">邮箱</label>
                    <div class="col-lg-10">
                        <textarea class="form-control ckeditor" name="email" rows="6">{{ $user['email'] }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">密码</label>
                    <div class="col-lg-2">
                        <input type="text" name="password" class="form-control" placeholder="密码" autocomplete="off">
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
            <a class="btn btn-shadow btn-info" href="{{ url('admin/user/list') }}">返回列表</a>
        </div>
    </div>
@endsection




