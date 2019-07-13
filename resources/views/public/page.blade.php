{{-- 计算页码 --}}
<?php
echo $total;
echo $page;

$currentPage = ceil($total / $limit);
?>
<ul class="pagination pagination-lg">
    <li><a href="{{ url('admin/article/index') . '?page=1' }}">«</a></li>

    @for($i = 0;$i < 5; $i++)
        <li><a href="{{ url('admin/article/index') . '?page=$currentPage' }}">{{ $i - $currentPage }}</a></li>
    @endfor
    <li><a href="{{ url('admin/article/index') . '?page=1' }}">»</a></li>
</ul>