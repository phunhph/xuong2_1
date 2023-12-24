<main class="sach">
    <div class="ttSach-admin">
        <form action="index.php?act=ca_thi&nt=add" method="post" enctype="multipart/form-data">

            <label>ca thi</label>
            <select name="ca_thi" id="">
                <?php if ($vl1 != []) {
                    foreach ($vl1 as $key => $vc) {
                ?>
                <option value="<?php echo $vc['id_ca'] ?>"><?php echo $vc['ten_ca'] ?></option>
                <?php }
                } ?>
            </select>
            <label for="">ngày thi</label>
            <input type="date" name="ngay_thi" id="">
            <label>kỳ học</label>
            <select name="ky_thi" id="">
                <?php if ($vl2 != []) {
                    foreach ($vl2 as $key => $vc) {
                ?>
                <option value="<?php echo $vc['id_ky'] ?>"><?php echo $vc['ten_ky'] ?></option>
                <?php }
                } ?>
            </select>
            <label for="">phòng thi</label>
            <input type="text" name="phong" id="">
            <label for="">Lớp thi</label>
            <input type="text" name="lop" id="">
            <label for="">đề thi</label>
            <select name="de_thi" id="">
                <?php if ($vl3 != []) {
                    foreach ($vl3 as $key => $vc) {
                ?>
                <option value="<?php echo $vc['id_de_thi'] ?>"><?php echo $vc['id_de_thi'] ?></option>

                <?php }
                } ?>
            </select>
            <button type="submit">Đăng</button>
        </form>
    </div>
</main>