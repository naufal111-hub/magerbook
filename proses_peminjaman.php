<?php
	require ("koneksi.php"); //untuk koneksi ke database untuk update/edit data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi variabel
	$buku=$_POST['judul'];
	$pinjam=$_POST['pinjam'];
	
	$lpinjam=$_POST['lamapinjam'];
	$kembali=$_POST['kembali'];
	
	$status=$_POST['status'];
	

	//query untuk menambah pada tabel peminjaman
	$query = "INSERT INTO tb_peminjaman (id_buku, tgl_pinjam, tgl_kembali, lama_pinjam, id_status) values ('$buku', '$pinjam', '$kembali', '$lpinjam', '$status')";

	$result = mysqli_query($koneksi, $query);
	header("location:transaksi.php");//apanila data berhasil ditambakan maka halaman langsung menuju ke transaksi.php


?>