<?php
function addmon($name)
{
    $sql = "INSERT INTO `mon_hoc`(`ten_mon_hoc`) VALUES (?)";
    return getData($sql, [$name], false);
}
function showMon()
{
    $sql = "SELECT * FROM `mon_hoc` ";
    return getData($sql);
}
function deletemon($id)
{
    $sql = "UPDATE `mon_hoc` SET `trang_thai`=0 WHERE id_mon_hoc=?";
    return getData($sql, [$id], false);
}
function fixmon($id)
{
    $sql = "SELECT * FROM `mon_hoc` where `id_mon_hoc`=?";
    return getData($sql, [$id]);
}
function updatemon($id, $ten,  $trang_thai)
{
    $sql = "UPDATE `mon_hoc` SET`ten_mon_hoc`=?,`trang_thai`=? WHERE id_mon_hoc=?";
    return getData($sql, [$ten,  $trang_thai, $id], false);
}
