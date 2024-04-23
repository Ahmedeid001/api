<?php

// معلومات اتصال قاعدة البيانات
$servername = "sql201.ezyro.com";
$username = "ezyro_36419189";
$password = "d2b0f5910";
$dbname = "ezyro_36419189_nfwe";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 header("Location: home.php");
    exit;

// إغلاق اتصال قاعدة البيانات

?>
