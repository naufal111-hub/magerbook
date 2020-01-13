<?php
session_start(); // Start sessionnya
session_directory(); // Hapus semua session_directory

include "koneksi.php";
header("location: ".$base_url."homeuser.php"); //redirect ke halaman utama
?>