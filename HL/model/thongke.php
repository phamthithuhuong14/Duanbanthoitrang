<?php
function load_thongke_sanpham_danhmuc()
{
    $sql = "SELECT dm.id, dm.name, COUNT(*) 'soluong', MIN(giamoi) 'gia_min', MAX(giamoi) 'gia_max', AVG(giamoi) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id=sp.iddm GROUP BY dm.id, dm.name ORDER BY soluong DESC";
    return pdo_query($sql);
}
