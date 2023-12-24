<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca thi</h1>
        <button><a href="index.php?act=ca_thi&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>ca thi</td>
                <td> ngày thi</td>
                <td>Lớp</td>
                <td>phòng</td>
                <td> kỳ học</td>
                <td>đề thi</td>
                <td>trang thai</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $vc['ten_ca'] ?></td>
                        <td><?php echo $vc['ngay_thi'] ?></td>
                        <td><?php echo $vc['lop_hoc'] ?></td>
                        <td><?php echo $vc['phong'] ?></td>
                        <td><?php echo $vc['ten_ky'] ?></td>
                        <td><?php echo pathinfo($vc['de_thi'], PATHINFO_FILENAME); ?></td>
                        <td><?php echo $vc['trang_thai'] ?></td>
                        <td>
                            <a href="index.php?act=ca_thi&nt=fix&id=<?php echo $vc['id_ca_thi'] ?>">sửa</a>
                            <a href="index.php?act=ca_thi&nt=delete&id=<?php echo $vc['id_ca_thi'] ?>">xoá</a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>