<main class="sach">
    <div class="ttSach-admin">
        <?php if ($vl != []) {
            foreach ($vl as $key => $vc) { ?>
                <form action="index.php?act=mon_hoc&nt=fix" method="post">
                    <label for="">ten ca hoc</label>
                    <input type="text" name="ten_mon_hoc" value="<?php echo $vc['ten_mon_hoc'] ?>">
                    <input type="hidden" name="id" id="" value="<?php echo $vc['id_mon_hoc'] ?>">
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