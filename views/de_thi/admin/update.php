<main class="sach">
    <div class="ttSach-admin">
        <?php if ($vl != []) {
            foreach ($vl as $key => $vc) { ?>
                <form action="index.php?act=de_thi&nt=fix" method="post" enctype="multipart/form-data">
                    <label for="">Đề thi</label>
                    <img src='<?php echo $vc['de_thi'] ?>' alt="" width="10%">
                    <input type="hidden" name="id" id="" value="<?php echo $vc['id_de_thi'] ?>">
                    <input type="hidden" value="<?php echo $vc['de_thi'] ?>" name="oldimg">
                    <input type="file" name="hinhAnh" id="">
                    <label for="">Môn học</label>
                    <td><?php echo $vc['ten_mon_hoc'] ?></td>
                    <label>Trạng thái</label>
                    <select name="trang_thai" id="">
                        <?php if ($vc['trang_thai'] == 1) { ?>
                            <option value="1">Hoạt động</option>
                            <option value="0">Dừng hoạt động</option>
                        <?php } else { ?>
                            <option value="0">Dừng hoạt động</option>
                            <option value="1">Hoạt động</option>

                        <?php } ?>
                    </select>
                    <button type="submit">Sửa</button>
                </form>
        <?php }
        } ?>
    </div>
</main>