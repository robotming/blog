<form action="{{ url('article/add') }}" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        {{ csrf_field() }}
        <tr>
            <th>标题</th>
            <th>内容</th>
            <th></th>
        </tr>
        <tr>
            <td><input type="text" name="title" autocomplete="off" /></td>
            <td><input type="text" name="content" autocomplete="off" /></td>
            <td>
                <select name="cat_id">
                    @foreach ($cat_list as $k => $item)
                    <option value="{{ $item['id'] }}">{{ $item['cat_name'] }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
    </table>
    <input type="submit">
</form>
