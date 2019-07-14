{{-- 计算页码 --}}
<?php
$totalPage = ceil($total / $limit);
?>
<ul class="pagination pagination-lg">
    <li><a href="{{ '?page=1' }}">«</a></li>

    @for($i = 0;$i < 5; $i++)
        <?php
            $p = $page + $i - 2;
            if ($p < 1 || $p > $totalPage) continue;
        ?>
        <li><a href="{{ "?page=$p" }}">{{ $p }}</a></li>
    @endfor
    <li><a href="{{ "?page=$totalPage" }}">»</a></li>
</ul>