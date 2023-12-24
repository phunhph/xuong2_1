<?php
function addKy($ten, $start, $end)
{
    $sql = "INSERT INTO `ky_hoc`( `ten_ky`, `ngay_bat_dau`, `ngay_ket_thuc`) VALUES (?,?,?)";
    return getData($sql, [$ten, $start, $end], false);
}
function showKy()
{
    $sql = "SELECT * FROM `ky_hoc` WHERE 1";
    return getData($sql);
}
function deleteKy($id)
{
    $sql = "UPDATE `ky_hoc` SET `trang_thai`=0 WHERE id_ky=?";
    return getData($sql, [$id], false);
}
function fixKy($id)
{
    $sql = "SELECT * FROM `ky_hoc` WHERE id_ky=?";
    return getData($sql, [$id]);
}
function updateKy($id, $ten, $start, $end,  $trang_thai)
{
    $sql = "UPDATE `ky_hoc` SET `ten_ky`=?,`ngay_bat_dau`=?,`ngay_ket_thuc`=?,`trang_thai`=? WHERE id_ky=?";
    return getData($sql, [$ten, $start, $end,  $trang_thai, $id], false);
}
