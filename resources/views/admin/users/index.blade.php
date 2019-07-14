@extends('public/layout')
@section('content')
    <div class="row state-overview">
        <ul class="breadcrumb">
            <li><a href="#"><i class="icon-home"></i> 首页</a></li>
            <li><a href="#">用户</a></li>
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
                        <th>姓名</th>
                        <th>邮箱</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $k => $user)
                        <tr>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td align="center">
                                <a href="{{ url('admin/user/update?id=') . $user['id'] }}">编辑</a>
                                <a href="javascript:window.open('{{ url('admin/user/permission?id=') . $user['id'] }}', '', width=100, height=100)">权限</a>
                                <a href="{{ url('admin/user/del?id=') . $user['id'] }}">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>

        </div>
        <div class="col-lg-4">
            <a class="btn btn-shadow btn-info" href="{{ url('admin/user/add') }}">添加</a>
        </div>
    </div>
    <div class="row">
        @include('public.page')
    </div>


@endsection
