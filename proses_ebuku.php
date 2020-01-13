<?php
	require ("koneksi.php"); //untuk koneksi ke database untuk update/edit data ke database lalu menangkap data yang dikirim dari form dan memasukkan ke variabel masing-masing
	//deklarasi variabel
	$id_buku=$_POST['id'];
	$gambar =$_POST['gambar'];
	$gambar = upload();
	
	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$pengarang = $_POST['pengarang'];
	$halaman = $_POST['halaman'];
	$tahun_terbit = $_POST['tahun'];
	$link_path =$_POST['buku'];
	$link_path = upload1();

	//query untuk menedit pada tabel siswa
	$query = "UPDATE tb_buku SET gambar='$gambar', judul='$judul', id_kategori='$kategori', pengarang='$pengarang', halaman='$halaman', thn_terbit='$tahun_terbit', link='$link_path' WHERE id_buku='$id_buku'";

	$result = mysqli_query($koneksi, $query);
	header("location:bukuadmin.php");//apanila data berhasil ditambakan maka halaman langsung menuju ke bukuadmin.php


function upload1() {

	$namafile = $_FILES['buku']['name'];
	$ukuranfile = $_FILES['buku']['size'];
	$error = $_FILES['buku']['error'];
	$tmpname = $_FILES['buku']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	




	move_uploaded_file($tmpname, 'e-book/' . $namafile);

	return $namafile;

}

function upload() {

	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	




	move_uploaded_file($tmpname, 'img/' . $namafile);

	return $namafile;
}

?>