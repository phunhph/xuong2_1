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
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
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
            <form action="index.php?act=giam_thi&nt=add" method="post" enctype="multipart/form-data">
                <label for="lop">Chọn lớp Thi:</label>
                <select id="lop">
                    <?php foreach ($lop as $key => $value) { ?>
                        <option value="<?php echo $value['lop_hoc'] ?>"><?php echo $value['lop_hoc'] ?></option>
                    <?php } ?>
                </select>
                <label for="mon">Chọn môn Thi:</label>
                <select id="mon">
                    <?php foreach ($mon as $key => $value) { ?>
                        <option value="<?php echo $value['id_mon_hoc'] ?>" lop="<?php echo $value['lop_hoc'] ?>">
                            <?php echo $value['ten_mon_hoc'] ?>
                        </option>
                    <?php } ?>
                </select>
                <label for="caThi">Chọn Ca Thi:</label>
                <select id="caThi" name="cathi">
                    <?php foreach ($ca as $key => $value) { ?>
                        <option value="<?php echo $value['id_ca_thi'] ?>" mon="<?php echo $value['id_mon_hoc'] ?>">
                            <?php echo $value['ten_ca'] ?>
                        </option>
                    <?php } ?>
                </select>
                <label for="giamThi1">Chọn Giám Thị 1:</label>
                <select id="giamThi1" name="gt1">
                    <?php foreach ($gv as $key => $value) { ?>
                        <option value="<?php echo $value['id_giang_vien'] ?>"><?php echo $value['ten_giang_vien'] ?>
                        </option>
                    <?php } ?>
                </select>

                <label for="giamThi2">Chọn Giám Thị 2:</label>
                <select id="giamThi2" name="gt2">
                    <?php foreach ($gv as $key => $value) { ?>
                        <option value="<?php echo $value['id_giang_vien'] ?>"><?php echo $value['ten_giang_vien'] ?>
                        </option>
                    <?php } ?>
                </select>

                <button type="submit" ">thêm mới</button>

                <div id=" result">
        </div>
        </form>
        </div>
    </main>

    <script>
        <?php

        // Chuyển đổi dữ liệu PHP thành chuỗi JSON
        $json_data_mon = json_encode($mon);
        $json_data_ca = json_encode($ca);
        $json_data_gv = json_encode($gv);
        ?>
        var list_mon = <?php echo $json_data_mon; ?>;
        var list_ca = <?php echo $json_data_ca; ?>;
        var list_gv = <?php echo $json_data_gv; ?>;
        var mon = document.getElementById("mon");
        var ca = document.getElementById("caThi");
        var lopValue = document.getElementById("lop").value;
        var gt1 = document.getElementById('giamThi1')
        var gt2 = document.getElementById('giamThi2')
        remove_mon()
        remove_gt2()
        remove_gt1()
        remove_ca()
        document.getElementById("lop").onchange = remove_mon; // Không gọi hàm remove() ở đây

        // gt2.onchange = remove_gt1
        gt1.onchange = remove_gt2

        function remove_mon() {
            add_mon()
            // Lặp qua tất cả các option trong select
            for (var i = mon.options.length - 1; i >= 0; i--) {
                // So sánh giá trị của thuộc tính lop
                if (mon.options[i].getAttribute("lop") !== document.getElementById("lop").value) {
                    // Xóa phần tử nếu không khớp
                    mon.remove(i);
                }
            }
        }

        function add_mon() {
            // Đảm bảo mon là một phần tử select hợp lệ
            if (mon && mon.tagName.toLowerCase() === 'select') {
                mon.innerHTML = ''; // Xóa toàn bộ nội dung của select
            }
            // Các bước thêm mới option không thay đổi
            list_mon.forEach(element => {

                var option = document.createElement("option");
                option.value = element.id_mon_hoc;
                option.text = element.ten_mon_hoc;
                option.setAttribute("lop", element.lop_hoc)

                mon.add(option);
            });
        }


        function remove_ca() {
            add_ca()
            // Lặp qua tất cả các option trong select
            for (var i = ca.options.length - 1; i >= 0; i--) {
                // So sánh giá trị của thuộc tính lop
                if (ca.options[i].getAttribute("mon") !== document.getElementById("mon").value) {

                    // Xóa phần tử nếu không khớp
                    ca.remove(i);
                }
            }
        }

        function add_ca() {
            // Đảm bảo mon là một phần tử select hợp lệ
            if (ca && ca.tagName.toLowerCase() === 'select') {
                ca.innerHTML = ''; // Xóa toàn bộ nội dung của select
            }
            // Các bước thêm mới option không thay đổi
            list_ca.forEach(element => {
                var option = document.createElement("option");
                option.value = element.id_ca_thi;
                option.text = element.ten_ca;
                option.setAttribute("mon", element.id_mon_hoc)
                ca.add(option);
            });
        }


        function remove_gt1() {
            add_gt1()
            // Lặp qua tất cả các option trong select
            for (var i = gt1.options.length - 1; i >= 0; i--) {
                // So sánh giá trị của thuộc tính lop
                if (gt1.options[i].value === document.getElementById("giamThi2").value) {
                    // Xóa phần tử nếu không khớp
                    gt1.remove(i);
                }
            }
        }

        function add_gt1() {
            // Đảm bảo mon là một phần tử select hợp lệ
            if (gt1 && gt1.tagName.toLowerCase() === 'select') {
                gt1.innerHTML = ''; // Xóa toàn bộ nội dung của select
            }
            // Các bước thêm mới option không thay đổi
            list_gv.forEach(element => {

                var option = document.createElement("option");
                option.value = element.id_giang_vien;
                option.text = element.ten_giang_vien;
                gt1.add(option);
            });
        }


        function remove_gt2() {
            add_gt2()
            // Lặp qua tất cả các option trong select
            for (var i = gt2.options.length - 1; i >= 0; i--) {
                // So sánh giá trị của thuộc tính lop
                if (gt2.options[i].value === document.getElementById("giamThi1").value) {
                    // Xóa phần tử nếu không khớp
                    gt2.remove(i);
                }
            }
        }

        function add_gt2() {
            // Đảm bảo mon là một phần tử select hợp lệ
            if (gt2 && gt2.tagName.toLowerCase() === 'select') {
                gt2.innerHTML = ''; // Xóa toàn bộ nội dung của select
            }
            // Các bước thêm mới option không thay đổi
            list_gv.forEach(element => {

                var option = document.createElement("option");
                option.value = element.id_giang_vien;
                option.text = element.ten_giang_vien;
                gt2.add(option);
            });
        }
    </script>

</body>

</html>