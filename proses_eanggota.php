<?php
	require ("koneksi.php"); //untuk koneksi ke database untuk update/edit data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi variabel
	$id_user=$_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jenis_akses = $_POST['ja'];
	//query untuk menedit pada tabel siswa
	$query = "UPDATE tb_login_user SET nama_user='$nama', username='$username', password='$password', id_akses='$jenis_akses' WHERE id_user='$id_user'";

	$result = mysqli_query($koneksi, $query);
	header("location:anggota.php");//apanila data berhasil ditambakan maka halaman langsung menuju ke anggota.php

?>