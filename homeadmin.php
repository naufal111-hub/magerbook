<?php
include ("session.php");

session_start();
@$sess = $_SESSION['username'];

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['id_akses']==""){
    header("location:index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin MaBook</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="style.css">
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
font-size: 16px;"> Perpustakaan Online &nbsp;</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
          <img class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu"  href="homeadmin.php"><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                      <li  >
                        <a  href="anggota.php"><i class="fa fa-table fa-3x"></i> Anggota </a>
                    </li>
                    <li  >
                        <a  href="bukuadmin.php"><i class="fa fa-edit fa-3x"></i> Buku </a>
                    </li>				
					 <li  >
                        <a   href="logout.php"><i class="fa fa-bolt fa-3x"></i> Logout </a>
                    </li>	             
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                   <h2 style="text-align: center;">Selamat Datang</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                 
                 <!-- /. ROW  -->
                <hr />                
                     
                 <!-- /. ROW  -->
                <div class="row">   
                 <!-- /. ROW  -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Transaksi Peminjaman
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                               
            
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-sm-11 ol-lg-11">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                     <thead>
                                        <tr class="title-top">
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Judul Buku</th>
                                            <th>Tanggal Meminjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Tenggang Waktu</th>
                                            <th>Status Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i = 1; ?>
                                         <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman, tb_buku, tb_login_user, tb_status WHERE tb_peminjaman.id_buku = tb_buku.id_buku and tb_peminjaman.id_user = tb_login_user.id_user and tb_peminjaman.id_status = tb_status.id_status order by id_peminjaman"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
                                        <tr>
                                              <td><?= $i; ?></td> 
                                              <td><?php echo $data ['nama_user'];?></td>
                                              <td><?php echo $data ['judul'];?></td>
                                              <td><?php echo $data ['tgl_pinjam'];?></td>
                                              <td><?php echo $data ['tgl_kembali'];?></td>
                                              <td><?php echo $data ['lama_pinjam'];?> Hari</td>
                                              <td><?php echo $data ['status'];?></td>
                                            <td><a href="hapus_peminjamanadmin.php?id=<?php echo $data['id_peminjaman'];?>"  onclick="return confirm('yakin ingin menghapus buku ini?');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a></td>
                                        </tr>
                                          <?php $i++; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>                          
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                  
                      
                    </div>
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>	
</body>
</html>
