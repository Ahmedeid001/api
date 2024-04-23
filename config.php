<?php

// معلومات اتصال قاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articles";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// إغلاق اتصال قاعدة البيانات

?>