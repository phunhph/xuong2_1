<?php
//include('config/PDO.php');
function checkInfo($email, $pass)
{
    $sql = "SELECT * FROM giang_vien WHERE email = ? AND passwords = ?";
    $info = getData($sql, [$email, $pass]);
    if (count($info) > 0) {
        return $info[0];
    } else {
        return null;
    }
}
function dangXuat(){

}