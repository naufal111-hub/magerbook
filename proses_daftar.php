<?php
include "koneksi.php";
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$id_akses = $_POST['id_akses'];

if (empty($nama_user)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($id_akses))
if($data['id_akses']=="1"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['id_akses'] = "1";
    // ini tujuuannya ke tabel admin
    header("location:daftar.php");

// cek jika user login sebagai pegawai
}else if($data['id_akses']=="2"){
   // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['id_akses'] = "2";
    // alihkan ke halaman dashboard user
    header("location:daftar.php");
}else{

   // alihkan ke halaman login kembali
    header("location:proses_daftar.php?pesan=gagal");
}
if ($data){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
?>