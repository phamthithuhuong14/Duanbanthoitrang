<?php
// function loadall_binhluan($idsp)
// {
//     $sql = "select * from binhluan where 1";
//     if($idsp>0)
//     $sql.=" AND idpro ='" .$idsp."'";
//     $sql.=" order by id desc"  ;
//     $listbinhluan = pdo_query($sql);
//     return $listbinhluan;
// }
function loadall_binhluan($idpro) {
    $sql = "SELECT binhluan.*, taikhoan.user
            FROM binhluan
            INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id
            WHERE 1";
    if ($idpro > 0) {
        $sql .= " AND idpro = '" . $idpro . "'";
    }

    $sql .= " ORDER BY binhluan.id DESC";

    $listbl = pdo_query($sql);
    return $listbl;
}
function insert_binhluan($idpro, $noidung,$iduser){
    $date = date('Y-m-d');
    $sql = "
        INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) 
        VALUES ('$noidung','$iduser','$idpro','$date');
    ";
    pdo_execute($sql);
}

// function insert_binhluan($idsp, $text)
// {
//     $iduser = $_SESSION['user']['id'];
//     $date = date('Y-m-d');
//     $sql = "insert into binhluan (noidung, iduser, idpro, ngaybinhluan) values ('$text','$iduser', '$idsp', '$date')";
//     $result = pdo_execute($sql);
//     return $result;
// }
function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id =" .$id;
    pdo_execute($sql);
}