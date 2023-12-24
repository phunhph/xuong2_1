<main class="sach">
    <div class="ttSach-admin">
        <h1>Danh sach ca hoc</h1>
        <button><a href="index.php?act=giam_thi&nt=add">thêm mới</a></button>
        <table>
            <tr class="line">
                <td>Stt</td>
                <td>Ca thi</td>
                <td>Lớp thi</td>
                <td>Phòng thi</td>
                <td>Giám thị 1</td>
                <td>Giám thị 2</td>
                <td>Lấy đề</td>
            </tr>
            <?php if ($vl != []) {
                foreach ($vl as $key => $vc) { ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $vc['ten_ca'] ?></td>
                        <td><?php echo $vc['lop_hoc'] ?></td>
                        <td><?php echo $vc['phong'] ?></td>
                        <td><?php echo $vc['gv1'] ?></td>
                        <td><?php echo $vc['gv2'] ?></td>
                        <td>
                            <?php
                            // Thời gian hiện tại
                            $currentTime = time();

                            // Thời gian bắt đầu
                            $startTime = strtotime($vc['thoi_gian_bat_dau']);

                            // Chênh lệch thời gian (đơn vị là giây)
                            $timeDiff = $currentTime - $startTime;

                            // Nếu chênh lệch thời gian không quá 15 phút
                            if ($timeDiff <= (15 * 60)) {
                                echo '<a href="' . $vc['de_thi'] . '" download>Nhận đề</a>';
                            } else {
                                echo 'Quá thời gian nhận đề';
                            }
                            ?>
                        </td>

                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>