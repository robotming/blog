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
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">姓名</label>
                <div class="col-lg-10">
                    {{ $user['name'] }}
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">邮箱</label>
                <div class="col-lg-10">
                    {{ $user['email'] }}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <a class="btn btn-shadow btn-info" href="{{ url('admin/user/list') }}">返回列表</a>
        </div>
    </div>
@endsection




