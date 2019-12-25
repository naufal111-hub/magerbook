<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_login_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['id_akses']=="1"){
 	// buat session login dan username
 	$_SESSION['username'] = $username;
 	$_SESSION['id_akses'] = "1";
 	// ini tujuuannya ke tabel admin
 	header("location:homeadmin.php");

 // cek jika user login sebagai pegawai
 }else if($data['id_akses']=="2"){
	// buat session login dan username
 	$_SESSION['username'] = $username;
 	$_SESSION['id_akses'] = "2";
 	// alihkan ke halaman dashboard user
 	header("location:homeuser.html");
 }else{

	// alihkan ke halaman login kembali
 	header("location:index.php?pesan=gagal");
 }

?>