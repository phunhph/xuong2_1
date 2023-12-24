<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=ca_hoc&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Tên ca</td>
                <td>thoi gian bat dau</td>
                <td>thoi gian ket thuc</td>
                <td>trang thai</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $vc['ten_ca'] ?></td>
                        <td><?php echo $vc['thoi_gian_bat_dau'] ?></td>
                        <td><?php echo $vc['thoi_gian_ket_thuc'] ?></td>
                        <td><?php echo $vc['trang_thai'] ?></td>
                        <td>
                            <a href="index.php?act=ca_hoc&nt=fix&id=<?php echo $vc['id_ca'] ?>">sửa</a>
                            <a href="index.php?act=ca_hoc&nt=delete&id=<?php echo $vc['id_ca'] ?>">xoá</a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>