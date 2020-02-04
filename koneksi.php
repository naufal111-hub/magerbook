<?php 
$koneksi = mysqli_connect("mif-project.com","u8823774_mabook","mif2017","u8823774_mabook");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>