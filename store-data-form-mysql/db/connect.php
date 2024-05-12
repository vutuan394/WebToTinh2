<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "loginfb2-data";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die ("Kết Nối không thành công: ". $conn->connect_error);
}

?>