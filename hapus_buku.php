<?php
if(isset($_GET['id'])){
	include('koneksi.php');//digunakan untuk memaggil file koneksi.php
	$id_buku=$_GET['id'];
	$cek=mysqli_query($koneksi,"SELECT id_buku FROM tb_buku where id_buku='$id_buku'")or die(mysql_error());
	if(mysqli_num_rows($cek)==0){
	  	echo'<script>window.history.back()</script>'; //apabila terjadi keslahan dalam menampilkan data maka akan kembali ke halaman sebelumnya
	 }else{
		$del=mysqli_query($koneksi,"DELETE FROM tb_buku WHERE id_buku='$id_buku'");//query untuk menghapus data pada kolom
		if($del){
	  			header("location:bukuadmin.php"); //apabila file berhasil dihapus maka langsung menuju halaman pendaftar.php
		}else{
	  		header("location:bukuadmin.php");//apabila file yang akan dihapus gagl terhapus maka akan menuju halaman pendaftar.php
	  	}
	 }
}else{
	 echo'<script>window.history.back()</script>';//apabila terjadi keslahan dalam menampilkan data maka akan kembali ke halaman sebelumnya
}
?>