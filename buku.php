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
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="height: 50px; width: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN</a> 
            </div>
  <div style="color: white;
padding: 20px 20px 10px 10px;
float: right;
font-size: 18px;"> Perpustakaan Online &nbsp;</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/anisa.jpg" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="admin.php"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>   
                    <li  >
                        <a  href="anggota.php"><i class="fa fa-table fa-3x"></i> Anggota</a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="buku.html"><i class="fa fa-edit fa-3x"></i> Buku </a>
                    </li>				
					<li  >
                        <a   href="index.php"><i class="fa fa-bolt fa-3x"></i> Logout</a>
                    </li>		
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="text-align: center;"><span style="color: black;">Buku</span></h2>    
                    <h5 style="text-align: center;"><span style="color: black;">Selamat Datang di Halaman Admin</span>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /> 
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Input Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                        
                                    <form action="simpan.php" method="post" enctype="multipart/form-data">
                                    <table>
                                    <tr><td>Judul Buku</td><td><input type="text" name="judul" placeholder="Judul Buku"></td></tr>
                                    <tr><td>Cover</td><td><input type="file" name="cover"></td></tr>
                                    <tr><td></td><td><button type="submit">Simpan Data</button></td></tr>
                                    </table>
                                    </form>
 
         
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
