<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>姓名</th>
        <th>邮箱</th>
        <th>操作</th>
    </tr>
    @foreach($users as $k => $user)
    <tr>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['email'] }}</td>
        <td>
            <a href="{{ url('admin/user/update?id=') . $user['id'] }}">编辑</a>
            <a href="{{ url('admin/user/del?id=') . $user['id'] }}">删除</a>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ url('admin/user/add') }}">添加</a>