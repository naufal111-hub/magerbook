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
        <title>Transaksi</title>
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
                                                                
                                                                <li class="drop"><a href="buku user.php" style="color: black">Books</a>
                                                                        <div class="megamenu mega03" style="height: 200px; width: 150px;">
                                                                                <ul class="item item03">
                                                                                        <li class="title">Kategori</li>
                                                                                        <li><a href="ipa.php">IPA </a></li>
                                                                                        <li><a href="ips.php">IPS </a></li>
                                                                                        <li><a href="bahasa.php">BAHASA </a></li>
                                                                                        <li><a href="umum.php">UMUM </a></li>
                                                                                </ul>
                                                                        </div>
                                                                </li>
                                                                <li class="drop"><a href="Transaksi.php" style="color: black">Transaksi</a>
                                                        </ul>
                                                </nav>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shop_search"><a class="search__active" href="#" ></a></li>
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">
                                        <div class="switcher-currency">
                                            <?php
                                                $query = mysqli_query($koneksi, "SELECT * FROM tb_login_user WHERE username = '$sess'"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                                                while($data = mysqli_fetch_array($query)) {//untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                                                ?>
                                            <strong class="label switcher-label">
                                                <span><a href="#"><?php echo $data['nama_user']?></a></span>
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
                                <!-- End Shopping Cart -->                      
                                <!-- Start Mobile Menu -->
                                <div class="row d-none">
                                        <div class="col-lg-12 d-none">
                                                <nav class="mobilemenu__nav">
                                                        <ul class="meninmenu">
                                                                <li><a href="index.html">Home</a></li>
                                                                <li><a href="#">Pages</a>
                                                                        <ul>
                                                                                <li><a href="about.html">About Page</a></li>
                                                                                <li><a href="portfolio.html">Portfolio</a>
                                                                                        <ul>
                                                                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                                                        </ul>
                                                                                </li>
                                                                                <li><a href="my-account.html">My Account</a></li>
                                                                                <li><a href="cart.html">Cart Page</a></li>
                                                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                                                <li><a href="error404.html">404 Page</a></li>
                                                                                <li><a href="faq.html">Faq Page</a></li>
                                                                                <li><a href="team.html">Team Page</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a href="shop-grid.html">Shop</a>
                                                                        <ul>
                                                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                                <li><a href="single-product.html">Single Product</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a href="blog.html">Blog</a>
                                                                        <ul>
                                                                                <li><a href="blog.html">Blog Page</a></li>
                                                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a href="contact.html">Contact</a></li>
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
        <!-- Start Bradcaump area -->
        <!-- End Bradcaump area -->
        <!-- Start Blog Area -->
        <div class="page-blog bg--white section-padding--lg blog-sidebar right-sidebar">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-9 col-12">
                                        <div class="blog-page">
                                                <div class="page__header">
                                                        <h2>Transaksi Peminjaman</h2>
                                                </div>
                                                <!-- Start Single Post -->
                                                <div class="container">
                                                     <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                                        <div class="wn__sidebar">
                                                <!-- Start Single Widget -->
                                                <aside class="widget search_widget">
                                                        <h3 class="widget-title">Search</h3>
                                                        <form action="#">
                                                                <div class="form-input">
                                                                        <input type="text" placeholder="Search...">
                                                                        <button><i class="fa fa-search"></i></button>
                                                                </div>
                                                        </form>
                                                </aside>
                                                <!-- End Single Widget -->
                                        </div>
                                </div>
                <div class="row">
                    <div class="col-md-13 col-sm-13 ol-lg-13">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
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
                                              <td><?php echo $data ['id_buku'];?></td>
                                              <td><?php echo $data ['id_status'];?></td>
                                              <td><?php echo $data ['tgl_pinjam'];?></td>
                                              <td><?php echo $data ['tgl_kembali'];?></td>
                                              <td><?php echo $data ['lama_pinjam'];?></td>
                                            <td><a href="pdf.php" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Baca Kembali</a><a href="hapus_peminjaman.php?id=<?php echo $data['id_peminjaman'];?>"  onclick="return confirm('yakin ingin menghapus buku ini?');" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a></td>
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
                                                <!-- End Single Post -->
                                        
                               
                        </div>
                </div>
        </div>
        <!-- End Blog Area -->
                <!-- Footer Area -->
                </div>
                                        
                                </div>
                <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
                        <div class="footer-static-top">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                        <div class="footer__widget footer__menu">
                                                                <div class="ft__logo">
                                                                        <a href="index.html">
                                                                                <img src="images/logo/3.png" alt="logo" style="height: 80px; width: 80px; border-radius: 50%;">
                                                                        </a>
                                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
                                                                </div>
                                                                <div class="footer__content">
                                                                        <ul class="social__net social__net--2 d-flex justify-content-center">
                                                                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                                                                <li><a href="#"><i class="bi bi-google"></i></a></li>
                                                                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                                                                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                                                                <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="copyright__wrapper">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="copyright">
                                                                <div class="copy__right__inner text-left">
                                                                        <p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="payment text-right">
                                                                <img src="images/icons/payment.png" alt="logo"/> 
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