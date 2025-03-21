<?php
$servername = "db"; // Tên service MySQL trong docker-compose.yml
$username = "root";
$password = "root"; // Mật khẩu được định nghĩa trong docker-compose.yml
$dbname = "phpapp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>