<?php
require ("koneksi.php");

session_start();
@$sess = $_SESSION['username'];


?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transaksi | MaBook</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
                
                <!-- Header -->
               <header id="wn__header" class="header__area header__absolute sticky__header">
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                                                <div class="logo">
                                                        <a href="homeuser.php">
                                                                <img src="images/logo/logo.png" alt="logo images" style="height: 80px; width: 80px; border-radius: 50%; ">
                                                        </a>
                                                </div>
                                        </div>
                                        
                                        <div class="col-lg-8 d-none d-lg-block">
                                                <nav class="mainmenu__nav">
                                                        <ul class="meninmenu d-flex justify-content-start">
                                                                
                                                                <li class="drop with--one--item"><a href="homeuser.php" style="color: black">Home</a></li>
                                                                
                                                                <li class="drop"><a href="buku user.php" style="color: black">Buku</a>
                                                                        <div class="megamenu mega03" style="height: 180px; width: 150px;">
                                                                                <ul class="item item03">
                                                                                        <li class="title">Kategori</li>
                                                                                        <li><a href="ipa.php">IPA </a></li>
                                                                                        <li><a href="ips.php">IPS </a></li>
                                                                                        <li><a href="bahasa.php">BAHASA </a></li>
                                                                                    
                                                                                </ul>
                                                                        </div>
                                                                </li>
                                                                <li class="drop"><a href="Transaksi.php" style="color: black">Transaksi</a>
                                                        </ul>
                                                </nav>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">
                                        <div class="switcher-currency">
                                            <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM tb_login_user WHERE username = '$sess'"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                                                while($data = mysqli_fetch_array($query)) {//untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                                                ?>
                                            <strong class="label switcher-label">
                                                <span><a><?php echo $data['nama_user']?></a></span>
                                            </strong>
                                            <?php } ?>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <div class="setting__menu">
                                                        <span><a href="#" value="<?php $data['nama_user']?>"> </a></span>
                                                        <span><a href="index.php">Logout</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="row d-none">
                    <div class="col-lg-12 d-none">
                        <nav class="mobilemenu__nav">
                            <ul class="meninmenu">
                                <li><a href="homeuser.php">Home</a></li>
                                
                                <li><a href="buku user.php">Buku</a>
                                    <ul>
                                        <li><a href="IPA.php">IPA</a></li>
                                        <li><a href="IPS.php">IPS</a></li>
                                        <li><a href="bahasa.php">BAHASA</a></li>
                                    </ul>
                                </li>
                                <li><a href="transaksi.php">Transaksi</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                </div>
                <!-- Mobile Menu -->    
            </div>      
        </header>
        <!-- //Header -->
        <!-- Start Search Popup -->
        <div class="box-search-content search_active block-bg close__top">
            <form id="search_mini_form" class="minisearch" action="#">
                <div class="field__search">
                    <input type="text" placeholder="Search entire store here...">
                    <div class="action">
                        <a href="#"><i class="zmdi zmdi-search"></i></a>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>close</span>
            </div>
        </div>
        <!-- End Search Popup -->
          <!-- Start Blog Area -->
        <div class="page-blog bg--white section-padding--lg blog-sidebar right-sidebar">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-9 col-12">
                                        <div class="blog-page">
                                                <div class="page__header">
                                                        
                                                </div>
                                                <!-- Start Single Post -->
                                                <div class="container">
                                                     <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                                        <div class="wn__sidebar">
                                                <!-- Start Single Widget -->
                                               
                                                <!-- End Single Widget -->
                                        </div>
                                </div>
                                  <div class="panel panel-default">
                        <div class="panel-heading">
                             <h5>Form Edit Buku
                        </div>
   <form method="post" action="proses_peminjaman.php">

        <table>
            
            

            <tr>
                <td>Judul</td>
                <td>: <select name="judul">
                    <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_buku"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
                        <option value:"<?php echo $data['id_buku']?>"><?php echo $data ['judul'];?></option>
                        <?php } ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td>:<input type="text" name="pinjam" value=<?php 
echo " " . date("d/m/Y") . "";

?>> </td>
            </tr>
            <tr>
                <td>Lama Pinjam</td>
                <td> : <select name="lamapinjam">
                        <option value="7">7 Hari</option>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Tanggal Kembali</td>
                <td>:<input type="text" name="kembali" value=<?php 
echo " " . date("d/m/Y",strtotime('+7 days')) . "";

?>></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <select name="status">
                        <option value="1">Dipinjam</option>
                        
                    </select></td>
            </tr>
            
            <tr>
                    <td colspan="3">
                    <input type="submit" name="submit" value="Pinjam" class="btn btn-primary">
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
                                                <!-- End Single Post -->
                                        
                               
                        </div>
                </div>
        </div>
        <!-- End Blog Area --> 
        <!-- Start BEst Seller Area -->
        <!-- Start Recent Post Area -->
        <section class="wn__recent__post bg--gray ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">    
                </div>
            </div>
        </section>
        <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
            <div class="footer-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__widget footer__menu">
                                <div class="ft__logo">
                                    <a href="homeuser.html">
                                        <img src="images/logo/logo.png" alt="logo" style="height: 90px; width: 90px; border-radius: 50%;">
                                    </a>
                                    <p>Aku Rela Di Penjara Asalkan Bersama Buku, Karena Dengan Buku Aku Bebas</p>
                                </div> 
                            </div>
                        </div>

                    </div>
                </div>
            </div>
             
                    </div>
                </div>
            </div>
        </footer>
        <!-- //Footer Area -->
       
        
    
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
    
</body>
</html>