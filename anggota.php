<?php
require ("koneksi.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin MaBook </title>
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
                <a class="navbar-brand" href="index.html">Admin MaBook</a> 
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
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="homeadmin.php"><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                    <li >
                        <a class="active-menu"  href="anggota.html"><i class="fa fa-table fa-3x"></i> Anggota </a>
                    </li>
                    <li  >
                        <a  href="bukuadmin.php"><i class="fa fa-edit fa-3x"></i> Buku </a>
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
                    <h2>Anggota</h2>   
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
                             Tabel Anggota
                        </div>

            <a href="tambah_anggota.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-address-card fa-sm text-white-50"></i> Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <th>Nama User</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Jenis Akses</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_login_user"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
                        <tr> <!-- untuk menampilakan data dari database ke tabel -->
                          <td><?php echo $data ['id_user'];?></td>  
                          <td><?php echo $data ['nama_user'];?></td>
                          <td><?php echo $data ['username'];?></td>
                          <td><?php echo $data ['password'];?></td>
                          <td><?php echo $data ['id_akses'];?></td>
                          <td><a href="edit_anggota.php?id=<?php echo $data['id_user'];?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Edit</a>|<a href="hapus_anggota.php?id=<?php echo $data['id_user'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a></td>
                        </tr>
                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
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
