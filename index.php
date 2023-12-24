<?php
include('modles/ca_hoc.php');
include('modles/monhoc.php');
include('modles/de_thi.php');
include('modles/ky_hoc.php');
include('modles/ca_thi.php');
include('modles/giang_vien.php');
include('modles/gian_thi.php');
session_start();
require_once "modles/user.php";

require_once "config/PDO.php";
//$_SESSION['idus'] = 1;
//$_SESSION['quyen'] = 1;
if (isset($_SESSION['idus']) && isset($_SESSION['quyen']) && $_SESSION['quyen'] == 1) {
    include('views/base/admin/header.php');
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                break;
            case 'ky_hoc':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['ten_moi'])) {
                            addKy($_POST['ten_moi'], $_POST['start'], $_POST['end']);
                            $vl = showKy();
                            include('views/ky/admin/index.php');
                        } else {
                            include('views/ky/admin/add.php');
                        }
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $ten = $_POST['ten_ca'];
                            $start = $_POST['start'];
                            $end = $_POST['end'];
                            $trang_thai = $_POST['trang_thai'];
                            $id = $_POST['id'];
                            updateKy($id, $ten, $start, $end, $trang_thai);
                            $vl = showKy();
                            include('views/ky/admin/index.php');
                        } else {
                            $vl = fixKy($_GET['id']);
                            include('views/ky/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        deleteKy($_GET['id']);
                        $vl = showKy();
                        include('views/ky/admin/index.php');
                    }
                } else {
                    $vl = showKy();
                    include('views/ky/admin/index.php');
                }
                break;
            case 'mon_hoc':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['ten_moi'])) {
                            addmon($_POST['ten_moi']);
                            $vl = showMon();
                            include('views/monhoc/admin/index.php');
                        } else {
                            include('views/monhoc/admin/add.php');
                        }
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $ten = $_POST['ten_mon_hoc'];
                            $trang_thai = $_POST['trang_thai'];
                            $id = $_POST['id'];
                            updatemon($id, $ten, $trang_thai);
                            $vl = showMon();
                            include('views/monhoc/admin/index.php');
                        } else {
                            $vl = fixmon($_GET['id']);
                            include('views/monhoc/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        deletemon($_GET['id']);
                        $vl = showMon();
                        include('views/monhoc/admin/index.php');
                    }
                } else {
                    $vl = showMon();
                    include('views/monhoc/admin/index.php');
                }
                break;
            case 'ca_thi':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['ca_thi'])) {
                            addCa_thi($_POST['ca_thi'], $_POST['ngay_thi'], $_POST['lop'], $_POST['phong'], $_POST['ky_thi'], $_POST['de_thi']);
                            $vl = showCa_thi();
                            include('views/ca_thi/admin/index.php');
                        } else {
                            $vl1 = showCa();
                            $vl2 = showKy();
                            $vl3 = showde();
                            include('views/ca_thi/admin/add.php');
                        }
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $ten = $_POST['ten_mon_hoc'];
                            $trang_thai = $_POST['trang_thai'];
                            $id = $_POST['id'];
                            updatemon($id, $ten, $trang_thai);
                            $vl = showCa_thi();
                            include('views/ca_thi/admin/index.php');
                        } else {
                            $vl = fixmon($_GET['id']);
                            include('views/ca_thi/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        deleteCa_thi($_GET['id']);
                        $vl = showCa_thi();
                        include('views/ca_thi/admin/index.php');
                    }
                } else {
                    $vl = showCa_thi();
                    include('views/ca_thi/admin/index.php');
                }
                break;
            case 'ca_hoc':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['tenca_moi'])) {
                            addca($_POST['tenca_moi'], $_POST['start'], $_POST['end']);
                        }
                        include('views/ca_hoc/admin/add.php');
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            $ten = $_POST['ten_ca'];
                            $start = $_POST['start'];
                            $end = $_POST['end'];
                            $trang_thai = $_POST['trang_thai'];
                            $id = $_POST['id'];
                            update($id, $ten, $start, $end, $trang_thai);
                            $vl = showCa();
                            include('views/ca_hoc/admin/index.php');
                        } else {
                            $vl = fix($_GET['id']);
                            include('views/ca_hoc/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        delete($_GET['id']);
                        $vl = showCa();
                        include('views/ca_hoc/admin/index.php');
                    }
                } else {
                    $vl = showCa();
                    include('views/ca_hoc/admin/index.php');
                }
                break;
            case 'de_thi':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['mon_hoc'])) {
                            $img = img();
                            addde($img, $_POST['mon_hoc']);
                            $vl = showde();
                            include('views/de_thi/admin/index.php');
                        } else {
                            $vl = showMon();
                            include('views/de_thi/admin/add.php');
                        }
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {

                            $hinhAnh = $_POST["oldimg"];
                            if (isset($_FILES['hinhAnh']) && $_FILES['hinhAnh']['error'] === UPLOAD_ERR_OK) {
                                $hinhAnh = img(); // kiểm tra lếu có ảnh mới thì lấy đường dẫn ảnh mới
                            }

                            $trang_thai = $_POST['trang_thai'];
                            $id = $_POST['id'];
                            updatede($id, $hinhAnh, $trang_thai);
                            $vl = showde();

                            header('location: index.php?act=de_thi');
                            exit();
                        } else {
                            // $img = img();
                            // addde($img, $_POST['mon_hoc']);
                            $vl = fixde($_GET['id']);;
                            include('views/de_thi/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        deletede($_GET['id']);
                        $vl = showde();
                        include('views/de_thi/admin/index.php');
                    }
                } else {
                    $vl = showde();
                    include('views/de_thi/admin/index.php');
                }
                break;
            case 'giang_vien':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['ten_moi'])) {

                            addgv($_POST['account'], $_POST['ten_moi'], $_POST['email'], $_POST['password'], $_POST['role']);
                            $vl = showgv();
                            include('views/giang_vien/admin/index.php');
                        } else {
                            $vl = showgv();
                            include('views/giang_vien/admin/add.php');
                        }
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            updatede($_POST['id'], $_POST['ten_gv'], $_POST['account'], $_POST['email'], $_POST['role'], $_POST['trang_thai']);
                            $vl = showgv();
                            include('views/giang_vien/admin/index.php');
                        } else {
                            // $img = img();
                            // addde($img, $_POST['mon_hoc']);
                            $vl = fixgv($_GET['id']);;
                            include('views/giang_vien/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        deletegv($_GET['id']);
                        $vl = showgv();
                        include('views/giang_vien/admin/index.php');
                    }
                } else {
                    $vl = showgv();
                    include('views/giang_vien/admin/index.php');
                }
                break;
            case 'giam_thi':
                if (isset($_GET['nt'])) {
                    if ($_GET['nt'] == 'add') {
                        if (isset($_POST['gt1'])) {

                            addgt($_POST['gt1'], $_POST['gt2'], $_POST['cathi']);
                            $vl = getall();
                            include('views/giam_thi/admin/index.php');
                        } else {
                            $lop = showlop();
                            $mon = show_mon();
                            $ca = show_ca_thi_();
                            $gv = showgv_();
                            include('views/giam_thi/admin/add.php');
                        }
                    } elseif ($_GET['nt'] == 'fix') {
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            updategt($_POST['id'], $_POST['gt1'], $_POST['gt2'], $_POST['trang_thai']);
                            $vl = getall();
                            include('views/giam_thi/admin/index.php');
                        } else {
                            // $img = img();
                            // addde($img, $_POST['mon_hoc']);
                            $gv = giang_vien();
                            $vl = fixgt($_GET['id']);;
                            include('views/giam_thi/admin/update.php');
                        }
                    } elseif ($_GET['nt'] == 'delete') {
                        deletegt($_GET['id']);
                        $vl = getall();
                        include('views/giam_thi/admin/index.php');
                    }
                } else {
                    $vl = getall();
                    include('views/giam_thi/admin/index.php');
                }
                break;
            case 'dang_xuat':
                unset($_SESSION['idus']);
                unset($_SESSION['quyen']);
                header("Location: index.php");
                header("Refresh:0");
                break;
        }
    } else {
        $vl = showCa();
        include('views/ca_hoc/admin/index.php');
    }
    include('views/base/admin/footer.php');
} elseif (isset($_SESSION['idus']) && isset($_SESSION['quyen']) && $_SESSION['quyen'] == 0) {
    include('views/base/user/header.php');
    $vl = getall_user($_SESSION['idus']);
    include('views/giam_thi/user/index.php');
    include('views/base/user/footer.php');
    echo "<a href='index.php?act=dangXuat'>Đăng xuất</a>";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'dangXuat':
                unset($_SESSION['idus']);
                unset($_SESSION['quyen']);
                header("Location: index.php");
                header("Refresh:0");
                break;
        }
    }
} else {
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'dangNhap':
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $user = checkInfo($email, $pass);
                    if ($user == null) {
                        header("Location: index.php");
                        header("Refresh:0");
                    } else {
                        $_SESSION['idus'] = $user['id_giang_vien'];
                        $_SESSION['quyen'] = $user['role'];
                        header("Location: index.php");
                        header("Refresh:0");
                    }
                }
                break;
            case 'dangXuat':
                unset($_SESSION['idus']);
                unset($_SESSION['quyen']);
                header("Location: index.php");
                header("Refresh:0");
                break;
        }
    } else {
        require_once "views/login.php";
    }
}
