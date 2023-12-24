<?php
function getall()
{
    $sql = "SELECT giam_thi.id_giam_thi,ca_hoc.ten_ca,ca_thi.ngay_thi,ca_thi.lop_hoc,ca_thi.phong,gv1.ten_giang_vien as gv1 ,gv2.ten_giang_vien as gv2 ,giam_thi.trang_thai FROM `giam_thi` join ca_thi ON ca_thi.id_ca_thi = giam_thi.id_ca_thi JOIN giang_vien as gv1 ON gv1.id_giang_vien = giam_thi.id_gv1 JOIN giang_vien as gv2 on gv2.id_giang_vien = giam_thi.id_gv2 JOIN ca_hoc ON ca_thi.id_ca = ca_hoc.id_ca WHERE 1";
    return getData($sql);
}
function getall_user($id)
{
    $sql = "SELECT giam_thi.id_giam_thi,ca_hoc.ten_ca,ca_thi.ngay_thi,ca_thi.lop_hoc,ca_thi.phong,gv1.ten_giang_vien as gv1 ,gv2.ten_giang_vien as gv2 ,de_thi.de_thi, ca_hoc.thoi_gian_bat_dau FROM `giam_thi` 
    join ca_thi ON ca_thi.id_ca_thi = giam_thi.id_ca_thi 
    JOIN giang_vien as gv1 ON gv1.id_giang_vien = giam_thi.id_gv1 
    JOIN giang_vien as gv2 on gv2.id_giang_vien = giam_thi.id_gv2 
    JOIN ca_hoc ON ca_thi.id_ca = ca_hoc.id_ca 
    JOIN de_thi ON de_thi.id_de_thi = ca_thi.id_de_thi 
     WHERE giam_thi.id_gv1 = $id OR giam_thi.id_gv2 = $id ";
    return getData($sql);
}
function deletegt($id)
{
    $sql = "UPDATE `giam_thi` SET `trang_thai`=0 WHERE id_giam_thi=?";
    return getData($sql, [$id], false);
}
function fixgt($id)
{
    $sql = "SELECT giam_thi.*,mon_hoc.ten_mon_hoc FROM `giam_thi` JOIN ca_thi ON ca_thi.id_ca_thi = giam_thi.id_ca_thi JOIN de_thi ON de_thi.id_de_thi = ca_thi.id_de_thi JOIN mon_hoc ON mon_hoc.id_mon_hoc = de_thi.id_mon_hoc where `id_giam_thi`=?";
    return getData($sql, [$id]);
}
function updategt($id, $gt_1, $gt_2, $trang_thai)
{
    $sql = "UPDATE `giam_thi` SET `id_gv1`=?,`id_gv2`=?,`trang_thai`=? WHERE id_giam_thi=?";
    return getData($sql, [$gt_1, $gt_2, $trang_thai, $id], false);
}
function giang_vien()
{
    $sql = "SELECT * FROM `giang_vien` WHERE 1";
    return getData($sql);
}
function showlop()
{
    $sql = "SELECT  DISTINCT  lop_hoc FROM `ca_thi` WHERE 1";
    return getData($sql);
}
function show_mon()
{
    $sql = "SELECT DISTINCT  mon_hoc.id_mon_hoc,ten_mon_hoc,ca_thi.lop_hoc   FROM `ca_thi`  JOIN de_thi ON de_thi.id_de_thi = ca_thi.id_de_thi JOIN mon_hoc ON mon_hoc.id_mon_hoc = de_thi.id_mon_hoc";
    return getData($sql);
}
function show_ca_thi_()
{
    $sql = "SELECT DISTINCT  ca_thi.id_ca_thi,ca_hoc.id_ca,ca_hoc.ten_ca, mon_hoc.id_mon_hoc  FROM `ca_thi`  JOIN ca_hoc ON ca_thi.id_ca = ca_hoc.id_ca JOIN de_thi ON ca_thi.id_de_thi = de_thi.id_de_thi JOIN mon_hoc on mon_hoc.id_mon_hoc = de_thi.id_mon_hoc
    ORDER BY ca_hoc.id_ca ASC";
    return getData($sql);
}
function showgv_()
{
    $sql = "SELECT * FROM `giang_vien` WHERE giang_vien.role = 0";
    return getData($sql);
}
function addgt($gt1, $gt2, $ca)
{
    $sql = "INSERT INTO `giam_thi`( `id_ca_thi`,`id_gv1`, `id_gv2`) VALUES (?,?,?)";
    return getData($sql, [$ca, $gt1,  $gt2], false);
}
