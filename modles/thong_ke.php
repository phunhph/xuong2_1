<?php
function thong_ke_all()
{
    $sql = "SELECT
    mon_hoc.id_mon_hoc,
    mon_hoc.ten_mon_hoc,
    COUNT(ca_thi.id_ca) AS so_luong_ca_thi,
    SUM(CASE WHEN ca_thi.ngay_thi >= NOW() THEN 1 ELSE 0 END) AS so_luong_ca_thi_chua_thi,
    SUM(CASE WHEN ca_thi.ngay_thi < NOW() THEN 1 ELSE 0 END) AS so_luong_ca_thi_da_thi
FROM
    mon_hoc
LEFT JOIN
    de_thi ON mon_hoc.id_mon_hoc = de_thi.id_mon_hoc
LEFT JOIN
    ca_thi ON de_thi.id_de_thi = ca_thi.id_de_thi
LEFT JOIN
    ca_hoc ON ca_thi.id_ca = ca_hoc.id_ca
GROUP BY
    mon_hoc.id_mon_hoc, mon_hoc.ten_mon_hoc;
";
    return getData($sql);
}
