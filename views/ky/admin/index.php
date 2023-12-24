<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=ky_hoc&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Kỳ học</td>
                <td>Ngày bắt đầu</td>
                <td>Ngày kết thúc</td>
                <td>trang thai</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $vc['ten_ky'] ?></td>
                <td><?php echo $vc['ngay_bat_dau'] ?></td>
                <td><?php echo $vc['ngay_ket_thuc'] ?></td>
                <td><?php echo $vc['trang_thai'] ?></td>
                <td>
                    <a href="index.php?act=ky_hoc&nt=fix&id=<?php echo $vc['id_ky'] ?>">sửa</a>
                    <a href="index.php?act=ky_hoc&nt=delete&id=<?php echo $vc['id_ky'] ?>">xoá</a>
                </td>
            </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>