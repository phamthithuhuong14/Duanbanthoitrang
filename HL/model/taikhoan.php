<?php

function insert_taikhoan($user, $pass, $email,$address,$tel)
{
    $sql = "INSERT INTO taikhoan(user,pass,email,address,tel) values (?,?,?,?,?)";
    pdo_execute($sql,$user, $pass, $email,$address,$tel);
}
function check_user($user, $pass)
{
    $sql = "SELECT *FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function  update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE taikhoan SET user='" . $user . "' ,pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT *FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
