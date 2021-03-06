<?php
require ("koneksi.php");
session_start();
@$sess = $_SESSION['username'];

if( isset($_POST["submit"]) ) {

    //cek apakah data dapt ditambahkan atau tidak
    if( tambah_buku($_POST) > 0 ) {
        echo " 
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'bukuadmin.php';
                </script>";
    } else {
        echo " 
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'bukuadmin.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin MaBook </title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_login_user WHERE username = '$sess'"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) {//untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
                <a class="navbar-brand" href="homeadmin.php" style="color: white"><?php echo $data['nama_user']?>
                      <?php } ?> </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Perpustakaan Online &nbsp; </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="homeadmin.php"><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                    <li >
                        <a   href="anggota.php"><i class="fa fa-table fa-3x"></i> Anggota </a>
                    </li>
                    <li  >
                        <a class="active-menu" href="bukuadmin.php"><i class="fa fa-edit fa-3x"></i> Buku </a>
                    </li>				
					<li  >
                        <a   href="index.php"><i class="fa fa-bolt fa-3x"></i> Logout </a>
                    </li>	   
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Buku</h2>   
                        <h5>Selamat Datang Di Halaman Admin MaBook</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Form Tambah Buku
                        </div>
    <form  action="proses_tbuku.php" method="post" enctype="multipart/form-data">
        <table>
            
            <tr>
			    <td>Cover</td>
			    <td>: <input type="file" name="gambar"></td>
  			</tr>

			<tr>
				<td>Judul</td>
				<td>: <input type="text" name="judul" placeholder="Judul Buku"></td>
			</tr>
			<tr>
                <td>Kategori</td>
                <td> : <input type="radio" name="kategori" value="1">IPA<input type="radio" name="kategori" value="2">IPS<input type="radio" name="kategori" value="3">BAHASA</td>
            </tr>
			<tr>
				<td>Pengarang</td>
				<td>: <input type="text" name="pengarang" placeholder="Pengarang"></td>
			</tr>
			<tr>
				<td>Halaman</td>
				<td>: <input type="text" name="halaman" placeholder="Halaman"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td>: <input type="text" name="tahun" placeholder="Tahun Terbit"></td>
			</tr>
			<tr>
			    <td>e-book</td>
			    <td>: <input type="file" name="buku"></td>
  			</tr>
                <tr>
                    <td colspan="3">
                    <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
