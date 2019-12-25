<?php
	require ("koneksi.php");

	
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jenis_akses = $_POST['ja'];
	

	$query = "INSERT INTO tb_login_user (nama_user, username, password,id_akses) VALUES ('$nama', '$username', '$password', '$jenis_akses')";

	$result = mysqli_query($koneksi, $query);
header("location:anggota.php");
?>