<?php
$db_config = [
    'host' => '',
    'user' => '',
    'password' => '',
    'database' => ''
];

// 建立連線
$mysqli = new mysqli($db_config['host'], $db_config['user'], $db_config['password'], $db_config['database']);

if ($conn->connect_error) {
    die("DB連線失敗: " . $conn->connect_error);
}