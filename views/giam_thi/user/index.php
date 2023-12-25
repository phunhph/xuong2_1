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
                <td>Ngay thi</td>
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
                        <td><?php echo $vc['ngay_thi'] ?></td>
                        <td><?php echo $vc['gv1'] ?></td>
                        <td><?php echo $vc['gv2'] ?></td>
                        <td>
                            <?php
                            // Thời gian hiện tại
                            $currentTime = new DateTime();

                            // Ngày thi
                            $examDate = new DateTime($vc['ngay_thi']);
                            // Nếu chưa đến ngày thi
                            if ($currentTime->format('Y-m-d') < $examDate->format('Y-m-d')) {
                                echo 'Chưa tới thời gian nhận đề';
                            } elseif ($currentTime->format('Y-m-d') == $examDate->format('Y-m-d')) {

                                // Thời gian bắt đầu
                                $startTime = new DateTime($vc['ngay_thi'] . ' ' . $vc['thoi_gian_bat_dau']);

                                // Thời gian kết thúc 15 phút trước thời gian bắt đầu
                                $endTime = $startTime->modify('+15 minutes');
                                $startTime =  $startTime->modify('-30 minutes');

                                // Nếu thời gian hiện tại nằm trong khoảng 15 phút trước thời gian bắt đầu
                                if ($currentTime >= $startTime || $currentTime <= $endTime) {
                                    echo '<a href="' . $vc['de_thi'] . '" download>Nhận đề</a>';
                                } elseif ($currentTime > $endTime) {
                                    echo 'Quá thời gian nhận đề';
                                } else {
                                    echo 'Chưa tới thời gian nhận đề';
                                }
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