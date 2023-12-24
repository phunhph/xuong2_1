<?php
include('config/PDO.php');

function addca($name, $start, $end)
{
    $sql = "INSERT INTO `ca_hoc`(`ten_ca`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`) VALUES (?,?,?)";
    return getData($sql, [$name, $start, $end], false);
}
function showCa()
{
    $sql = "SELECT * FROM `ca_hoc` ";
    return getData($sql);
}
function delete($id)
{
    $sql = "UPDATE `ca_hoc` SET `trang_thai`=0 WHERE id_ca=?";
    return getData($sql, [$id], false);
}
function fix($id)
{
    $sql = "SELECT * FROM `ca_hoc` where `id_ca`=?";
    return getData($sql, [$id]);
}
function update($id, $ten, $start, $end, $trang_thai)
{
    $sql = "UPDATE `ca_hoc` SET `ten_ca`=?,`thoi_gian_bat_dau`=?,`thoi_gian_ket_thuc`=?,`trang_thai`=? WHERE id_ca=?";
    return getData($sql, [$ten, $start, $end, $trang_thai, $id], false);
}
