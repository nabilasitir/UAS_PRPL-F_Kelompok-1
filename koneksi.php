<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "doa";

$connect = new mysqli($localhost, $username, $password, $database);

mysqli_query($connect, "SET CHARACTER SET utf8");

if($connect -> connect_error){
	echo "Koneksi Database Gagal";
}
?>	