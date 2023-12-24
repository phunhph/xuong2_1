<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=de_thi&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Đề</td>
                <td>môn học</td>
                <td>trang thai</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo pathinfo($vc['de_thi'], PATHINFO_FILENAME); ?></td>

                <td><?php echo $vc['ten_mon_hoc'] ?></td>
                <td><?php echo $vc['trang_thai'] ?></td>
                <td>
                    <a href="index.php?act=de_thi&nt=fix&id=<?php echo $vc['id_de_thi'] ?>">sửa</a>
                    <a href="index.php?act=de_thi&nt=delete&id=<?php echo $vc['id_de_thi'] ?>">xoá</a>
                </td>
            </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>