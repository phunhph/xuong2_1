<main class="sach">
    <div class="ttSach-admin">
        <form action="index.php?act=de_thi&nt=add" method="post" enctype="multipart/form-data">
            <label for="">đề thi</label>
            <input type="file" name="hinhAnh">
            <label>Môn học</label>
            <select name="mon_hoc" id="">
                <?php if ($vl != []) {
                    foreach ($vl as $key => $vc) {
                ?>
                        <option value="<?php echo $vc['id_mon_hoc'] ?>"><?php echo $vc['ten_mon_hoc'] ?></option>
                <?php }
                } ?>
            </select>
            <button type="submit">Đăng</button>
        </form>
    </div>
</main>