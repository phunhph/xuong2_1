<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    main {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        text-align: center;
    }

    label {
        width: 100%;
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        text-align: left;
    }

    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #result {
        font-weight: bold;
        margin-top: 15px;
    }

    .container {
        width: 100%;
    }
</style>

<body>
    <main class="sach">
        <div class="ttSach-admin">
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
                    <form action="index.php?act=giam_thi&nt=fix" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $vc['id_giam_thi'] ?>">

                        <label for="">Giám thị 1:</label>
                        <select name="gt1" id="gt1">
                            <?php foreach ($gv as $key => $value) {

                                if ($vc['id_gv1'] == $value['id_giang_vien']) { ?>
                                    <option selected value="<?php echo $value['id_giang_vien'] ?>">
                                        <?php echo $value['ten_giang_vien'] ?>
                                    </option>
                                <?php } elseif ($vc['id_gv2'] == $value['id_giang_vien']) {
                                } else { ?>
                                    <option value="<?php echo $value['id_giang_vien'] ?>"><?php echo $value['ten_giang_vien'] ?>
                                    </option>
                            <?php }
                            }
                            ?>
                        </select>
                        <label for="">Giám thị 2:</label>
                        <select name="gt2" id="gt2">
                            <?php foreach ($gv as $key => $value) {

                                if ($vc['id_gv2'] == $value['id_giang_vien']) { ?>
                                    <option selected value="<?php echo $value['id_giang_vien'] ?>">
                                        <?php echo $value['ten_giang_vien'] ?>
                                    </option>
                                <?php } elseif ($vc['id_gv1'] == $value['id_giang_vien']) {
                                } else { ?>
                                    <option value="<?php echo $value['id_giang_vien'] ?>"><?php echo $value['ten_giang_vien'] ?>
                                    </option>
                            <?php }
                            }
                            ?>
                        </select>

                        <label for="">Môn học:</label>
                        <td><?php echo $vc['ten_mon_hoc'] ?></td>
                        <label>Trạng thái:</label>
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
</body>

</html>