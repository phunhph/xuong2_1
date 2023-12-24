<main class="sach">
    <div class="ttSach-admin">
        <?php if ($vl != []) {
            foreach ($vl as $key => $vc) { ?>
        <form action="index.php?act=giang_vien&nt=fix" method="post">
            <label for="">ten ky hoc</label>
            <input type="text" name="ten_gv" value="<?php echo $vc['ten_giang_vien'] ?>">
            <label>Account</label>
            <input type="text" name="account" value="<?php echo $vc['account'] ?>">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $vc['email'] ?>">
            <input type="hidden" name="id" id="" value="<?php echo $vc['id_giang_vien'] ?>">
            <select name="role" id="">
                <?php if ($vc['role'] == 1) { ?>
                <option value="1">admin</option>
                <option value="0">user</option>
                <?php } else { ?>
                <option value="0">user</option>
                <option value="1">admin</option>

                <?php } ?>
            </select>
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