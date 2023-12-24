<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=giang_vien&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Tên giảng viên</td>
                <td>account</td>
                <td>Email</td>
                <td>Role</td>
                <td>trang thai</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $vc['ten_giang_vien'] ?></td>
                        <td><?php echo $vc['account'] ?></td>
                        <td><?php echo $vc['email'] ?></td>
                        <?php if ($vc['role'] == 0) {
                        ?> <td>User</td> <?php
                                        } else { ?>
                            <td>admin</td>
                        <?php } ?>
                        <td><?php echo $vc['trang_thai'] ?></td>
                        <td>
                            <a href="index.php?act=giang_vien&nt=fix&id=<?php echo $vc['id_giang_vien'] ?>">sửa</a>
                            <a href="index.php?act=giang_vien&nt=delete&id=<?php echo $vc['id_giang_vien'] ?>">xoá</a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>