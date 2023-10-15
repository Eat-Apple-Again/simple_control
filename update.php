<?php
require_once("config.php");

// 獲取指令
$mode = $_POST['mode'];
$angle = $_POST['angle'];
$period = $_POST['period'];
$amount = $_POST['amount'];
$fetch_interval = $_POST['fetch_interval'];

// update
$query = "UPDATE decision SET mode='$mode', angle='$angle', period='$period', amount='$amount', fetch_interval='$fetch_interval' WHERE id='1'";

if ($mysqli->query($query) === TRUE) {
    echo "Data update SUCCESSFULLY。";
} else {
    echo "Data update UNSECCESSFULLY： " . $mysqli->error;
}
echo "<p><a href='http://.../arDB/simple_control/main.html'>返回原本的網頁</a></p>";
$mysqli->close();
?>