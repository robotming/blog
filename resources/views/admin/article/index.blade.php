<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>标题</th>
        <th>内容</th>
        <th>操作</th>
    </tr>
    @foreach($list as $k => $article)
    <tr>
        <td>{{ $article['title'] }}</td>
        <td>{{ $article['content'] }}</td>
        <td>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ url('admin/article/add') }}">添加</a>