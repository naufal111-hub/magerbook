<?php
require ("koneksi.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin MaBook</title>
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
                <a class="navbar-brand" href="index.html" style="color: white">Admin MaBook</a> 
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
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                      <li  >
                        <a  href="anggota.php"><i class="fa fa-table fa-3x"></i> Anggota </a>
                    </li>
                    <li  >
                        <a  href="bukuadmin.php"><i class="fa fa-edit fa-3x"></i> Buku </a>
                    </li>				
					 <li  >
                        <a   href="index.php"><i class="fa fa-bolt fa-3x"></i> Logout </a>
                    </li>	             
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin MaBook</h2>   
                        <h5>Selamat Datang Di Halaman Admin MaBook</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                 
                 <!-- /. ROW  -->
                <hr />                
                     
                 <!-- /. ROW  -->
                <div class="row">   
                 <!-- /. ROW  -->
                <div class="row" >
                    <div class="col-md-3 col-sm-12 col-xs-12">
  <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <h4>  </h4>
                             <h4> Buku </h4>
                        </div>
                        <div class="panel-footer back-footer-green"> 
                            Aku rela di penjara asalkan bersama buku, karena dengan buku aku bebas.
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Responsive Table Example
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
                                    		<th>User</th>
                                            <th>Kode Buku</th>
                                            <th>Status Peminjaman</th>
                                            <th>Tanggal Menminjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Tenggang Waktu</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
                                        <tr>
                                        	<td><?php echo $data ['id_user'];?></td>
                                              <td><?php echo $data ['id_buku'];?></td>
                                              <td><?php echo $data ['id_status'];?></td>
                                              <td><?php echo $data ['tgl_pinjam'];?></td>
                                              <td><?php echo $data ['tgl_kembali'];?></td>
                                              <td><?php echo $data ['lama_pinjam'];?></td>
                                            <td><a href="hapus_peminjaman.php?id=<?php echo $data['id_peminjaman'];?>"  onclick="return confirm('yakin ingin menghapus buku ini?');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a></td>
                                        </tr>

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
