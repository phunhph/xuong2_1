<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=mon_hoc&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Tên Môn học</td>
                <td>trang thai</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $vc['ten_mon_hoc'] ?></td>
                        <td><?php echo $vc['trang_thai'] ?></td>
                        <td>
                            <a href="index.php?act=mon_hoc&nt=fix&id=<?php echo $vc['id_mon_hoc'] ?>">sửa</a>
                            <a href="index.php?act=mon_hoc&nt=delete&id=<?php echo $vc['id_mon_hoc'] ?>">xoá</a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>