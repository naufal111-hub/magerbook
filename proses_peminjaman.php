<?php
	require ("koneksi.php"); //untuk koneksi ke database untuk update/edit data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi variabel
	
	

	//query untuk menedit pada tabel siswa
	$query = "INSERT INTO tb_buku ();"

	$result = mysqli_query($koneksi, $query);
	header("location:transaksi.php");//apanila data berhasil ditambakan maka halaman langsung menuju ke transaksi.php


?>