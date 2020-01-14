<?php
error_reporting(0);
include "koneksi.php";
session_start();

$username = $_SESSION['username'];

$sql = "SELECT * FROM tb_login_user WHERE username='$username'";
$ses_sql = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['id_user'];
$akses =$row['id_akses'];
$password = $row['password'];
$user = $row['nama_user'];
// $id_user = $row['id_user'];
 ?>