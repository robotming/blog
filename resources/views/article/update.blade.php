<form action="{{ url('admin/user/update') }}" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        {{ csrf_field() }}
        <tr>
            <th>姓名</th>
            <th>邮箱</th>
            <th>密码</th>
        </tr>
        <tr>
            <td><input type="text" name="name" value="{{ $user['name'] }}" autocomplete="off" /></td>
            <td><input type="email" name="email" value="{{ $user['email'] }}" autocomplete="off" /></td>
            <td><input type="password" name="password" autocomplete="off" /></td>
            <input type="hidden" name="id" value="{{ $user['id'] }}">
        </tr>
    </table>
    <input type="submit">
</form>
