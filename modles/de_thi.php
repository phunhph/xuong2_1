<?php
function addde($dethi, $mon)
{
    $sql = "INSERT INTO `de_thi`( `de_thi`, `id_mon_hoc`) VALUES (?,?)";
    return getData($sql, [$dethi, $mon], false);
}
function showde()
{
    $sql = "SELECT de_thi.id_de_thi,de_thi.de_thi,de_thi.trang_thai,mon_hoc.ten_mon_hoc FROM `de_thi` join mon_hoc ON de_thi.id_mon_hoc=mon_hoc.id_mon_hoc WHERE 1";
    return getData($sql);
}
function deletede($id)
{
    $sql = "UPDATE `de_thi` SET `trang_thai`=0 WHERE id_de_thi=?";
    return getData($sql, [$id], false);
}
function fixde($id)
{
    $sql = "SELECT de_thi.id_de_thi,de_thi.de_thi,de_thi.trang_thai,mon_hoc.ten_mon_hoc FROM `de_thi` join mon_hoc ON de_thi.id_mon_hoc=mon_hoc.id_mon_hoc WHERE `id_de_thi`=?";
    return getData($sql, [$id]);
}
function updatede($id, $ten,  $trang_thai)
{
    $sql = "    UPDATE `de_thi` SET `de_thi`=?,`trang_thai`=? WHERE id_de_thi=?";
    return getData($sql, [$ten,  $trang_thai, $id], false);
}
