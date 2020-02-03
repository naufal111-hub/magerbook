<?php
require ("koneksi.php");
if(isset($_GET['id'])){
    $id_buku = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE tb_buku.id_buku='$id_buku'"); 
    $no=1;
    while ($data = mysqli_fetch_array($query)) {
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
                <a class="navbar-brand" href="homeadmin.php">Admin MaBook</a> 
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
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                    <li >
                        <a href="anggota.php"><i class="fa fa-table fa-3x"></i> Anggota </a>
                    </li>
                    <li  >
                        <a  class="active-menu" href="bukuadmin.php"><i class="fa fa-edit fa-3x"></i> Buku </a>
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
                             Form Edit Buku
                        </div>
   <form method="post" action="proses_ebuku.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id_buku'];?>">
        <table>
            
            <tr>
                <td>Cover</td>
                <td>: <input type="text" name="gambar" value="<?php echo $data['gambar']?>"></td>
            </tr>

            <tr>
                <td>Judul</td>
                <td>: <input type="text" name="judul" placeholder="Judul Buku" value="<?php echo $data['judul']?>"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td> :
                <?php
                    if($data['id_kategori']=='1'){
                        echo "<input type='radio' name='kategori' value='1' checked>IPA<input type='radio' name='kategori' value='2'>IPS<input type='radio' name='kategori' value='3'>BAHASA";
                    }else if($data['id_kategori']=='2'){
                        echo "<input type='radio' name='kategori' value='1' checked>IPA<input type='radio' name='kategori' value='2' checked>IPS<input type='radio' name='kategori' value='3'>BAHASA";
                    }else{
                        echo "<input type='radio' name='kategori' value='1' checked>IPA<input type='radio' name='kategori' value='2' checked>IPS<input type='radio' name='kategori' value='3' checked>BAHASA";
                    }
                    ?> 
                </td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>: <input type="text" name="pengarang" placeholder="Pengarang" value="<?php echo $data['pengarang']?>"></td>
            </tr>
            <tr>
                <td>Halaman</td>
                <td>: <input type="text" name="halaman" placeholder="Halaman" value="<?php echo $data['halaman']?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td>: <input type="text" name="tahun" placeholder="Tahun Terbit" value="<?php echo $data['thn_terbit']?>"></td>
            </tr>
            <tr>
                <td>e-book</td>
                <td>: <input type="text" name="buku" value="<?php echo $data['link']?>"></td>
            </tr>
            
            <tr>
                    <td colspan="3">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
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
    <script src="js/active.js"></script>
</body>
</html>
<?php
}
}else{
    echo "<script>window.history.back()</script>";
}
?>