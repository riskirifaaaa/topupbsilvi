<?php
$host ="localhost";
$user ="root";
$pass="";
$db="apkbsilvi";
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Gagal Koneksi ke apkbsilvi: " . $conn->connect_error);
}
return $conn;

?>
