<main class="sach">
    <div class="ttSach-admin">
        <?php if ($vl != []) {
            foreach ($vl as $key => $vc) { ?>
                <form action="index.php?act=ca_hoc&nt=fix" method="post">
                    <label for="">ten ca hoc</label>
                    <input type="text" name="ten_ca" value="<?php echo $vc['ten_ca'] ?>">
                    <label>thoi gian bat dau</label>
                    <input type="time" name="start" value="<?php echo $vc['thoi_gian_bat_dau'] ?>">
                    <label>thoi gian ket thuc</label>
                    <input type="time" name="end" value="<?php echo $vc['thoi_gian_ket_thuc'] ?>">
                    <input type="hidden" name="id" id="" value="<?php echo $vc['id_ca'] ?>">
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