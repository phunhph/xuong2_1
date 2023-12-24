<?php


function addgv($name, $account, $email, $password, $role)
{
    $sql = "INSERT INTO `giang_vien`( `account`, `ten_giang_vien`, `email`, `passwords`, `role`) VALUES (?,?,?,?,?)";
    return getData($sql, [$account, $name,  $email, $password, $role], false);
}
function showgv()
{
    $sql = "SELECT * FROM `giang_vien`";
    return getData($sql);
}
function deletegv($id)
{
    $sql = "UPDATE `giang_vien` SET `trang_thai`=0 WHERE id_giang_vien=?";
    return getData($sql, [$id], false);
}
function fixgv($id)
{
    $sql = "SELECT * FROM `giang_vien` where `id_giang_vien`=?";
    return getData($sql, [$id]);
}
function updategv($id, $ten, $account, $email, $role, $trang_thai)
{
    $sql = "UPDATE `giang_vien` SET `account`=?,`ten_giang_vien`=?,`email`=?,`role`=?,`trang_thai`=? WHERE  id_giang_vien=?";
    return getData($sql, [$account, $ten, $email, $role, $trang_thai, $id], false);
}
