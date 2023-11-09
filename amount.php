<?php
require_once("config.php");

// 查詢當前指令
$sql = "SELECT weight FROM ESP32 limit 1";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<p>飼料量: " . $row["weight"] . "</p>";
    }
} else {
    echo "沒有找到資料";
}

$mysqli->close();
?>
