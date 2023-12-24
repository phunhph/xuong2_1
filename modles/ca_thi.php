<?php
function addCa_thi($ca, $ngay, $lop, $phong, $ky, $de)
{
    $sql = "INSERT INTO `ca_thi`(`ngay_thi`, `id_ca`, `id_ky`, `phong`, `lop_hoc`,`id_de_thi`) VALUES (?,?,?,?,?,?)";
    return getData($sql, [$ngay, $ca, $ky, $phong, $lop, $de], false);
}
function showCa_thi()
{
    $sql = "SELECT ca_thi.id_ca_thi,ngay_thi,phong,lop_hoc,de_thi.de_thi,ca_hoc.ten_ca,ky_hoc.ten_ky, de_thi.de_thi,ca_thi.trang_thai FROM `ca_thi` JOIN ca_hoc ON ca_thi.id_ca=ca_hoc.id_ca JOIN de_thi on ca_thi.id_de_thi=de_thi.id_de_thi JOIN ky_hoc ON ky_hoc.id_ky=ca_thi.id_ky WHERE 1";
    return getData($sql);
}
function deleteCa_thi($id)
{
    $sql = "UPDATE `ca_thi` SET `trang_thai`=0 WHERE  id_ca_thi=?";
    return getData($sql, [$id], false);
}
function fixCa_thi($id)
{
    $sql = "SELECT de_thi.id_de_thi,de_thi.de_thi,de_thi.trang_thai,mon_hoc.ten_mon_hoc FROM `de_thi` join mon_hoc ON de_thi.id_mon_hoc=mon_hoc.id_mon_hoc WHERE `id_de_thi`=?";
    return getData($sql, [$id]);
}
function updateCa_thi($id, $ten,  $trang_thai)
{
    $sql = "UPDATE `de_thi` SET `de_thi`=?,`trang_thai`=? WHERE id_de_thi=?";
    return getData($sql, [$ten,  $trang_thai, $id], false);
}
