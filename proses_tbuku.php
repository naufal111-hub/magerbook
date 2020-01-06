<?php
	require ("koneksi.php");

	
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$pengarang = $_POST['pengarang'];
	$halaman = $_POST['halaman'];
	$tahun_terbit = $_POST['tahun'];
	$link_path = upload1();
	if( !$link_path ) {
		return false;
	}
	

	$query = "INSERT INTO tb_buku (gambar, judul, id_kategori, pengarang, halaman, thn_terbit, link) VALUES ( '$gambar', '$judul', '$kategori', '$pengarang', '$halaman', '$tahun_terbit', '$link_path')";

$result = mysqli_query($koneksi, $query);
header("location:bukuadmin.php");

function upload1() {

	$namafile = $_FILES['buku']['name'];
	$ukuranfile = $_FILES['buku']['size'];
	$error = $_FILES['buku']['error'];
	$tmpname = $_FILES['buku']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('Pilih pdf terlebih dahulu!'); 
				</script>";
				return false;


	}

	move_uploaded_file($tmpname, 'e-book/' . $namafile);

	return $namafile;

}



function upload() {

	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('Pilih gambar terlebih dahulu!'); 
				</script>";
				return false;


	}

	move_uploaded_file($tmpname, 'img/' . $namafile);

	return $namafile;
}
?>