<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=giam_thi&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Ca thi</td>
                <td>Lớp thi</td>
                <td>Phòng thi</td>
                <td>Ngay thi</td>
                <td>Giám thị 1</td>
                <td>Giám thị 2</td>
                <td>Trạng thái</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $vc['ten_ca'] ?></td>
                <td><?php echo $vc['lop_hoc'] ?></td>
                <td><?php echo $vc['phong'] ?></td>
                <td><?php echo $vc['ngay_thi'] ?></td>

                <td><?php echo $vc['gv1'] ?></td>
                <td><?php echo $vc['gv2'] ?></td>
                <td><?php echo $vc['trang_thai'] ?></td>

                <td>
                    <a href="index.php?act=giam_thi&nt=fix&id=<?php echo $vc['id_giam_thi'] ?>">sửa</a>
                    <a href="index.php?act=giam_thi&nt=delete&id=<?php echo $vc['id_giam_thi'] ?>">xoá</a>
                </td>

            </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>