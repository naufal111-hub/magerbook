<?php
include('./koneksi.php');
session_start();
$username = $_POST['username'];
$redirect = 'index.php';
if (isset($_POST['ganti'])) {
  $password = $_POST['password'];
  $conpas = $_POST['conpas'];

  $result = mysqli_query($koneksi, "SELECT * FROM tb_login_user WHERE username='$username'");
  if (mysqli_num_rows($result)==0) {
    echo "<script>alert('MAAF, Username $username Tidak Ditemukan! :('); window.location='$redirect';</script>";
  }else {
    $cek = mysqli_fetch_array($result);
    if ($password=='' || $conpas=='') {
      echo "<script>alert('Form tidak boleh ada yang kosong'); window.location='$redirect';</script>";
      }else{
        if ($password <> $conpas) {
          echo "<script>alert('Password Baru & Konfirmasi Password Baru tidak cocok'); window.location='$redirect';</script>";
        }else {
          $sql = mysqli_query($koneksi, "UPDATE tb_login_user SET password='$password' WHERE username='$username'");
          if ($sql) {
            echo "<script>alert('PASSWORD BERHASIL DI UBAH! :)'); window.location='$redirect';</script>";
          }else {
            echo "<script>alert('PASSWORD GAGAL DI UBAH! :('); window.location='$redirect';</script>";
          }
        }
      }
    }
  }


?>
