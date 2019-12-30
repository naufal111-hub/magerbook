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
                                                                                        <strong class="label switcher-label">
                                                                                                <span>My Account</span>
                                                                                        </strong>
                                                                                        <div class="switcher-options">
                                                                                                <div class="switcher-currency-trigger">
                                                                                                        <div class="setting__menu">
                                                                                                                <span><a href="#" value="<?php $data['nama_user']?>"> </a></span>
                                                                                                                <span><a href="#">Sign In</a></span>
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
                                                <article class="blog__post d-flex flex-wrap">
                                                        <div class="thumb">
                                                                <a href="blog-details.html">
                                                                        <img src="images/blog/blog-3/1.jpg" alt="blog images">
                                                                </a>
                                                        </div>
                                                        <div class="content">
                                                                <h4><a href="blog-details.html">IPS X</a></h4>
                                                                <ul class="post__meta">
                                                                        <li>Posts by : <a href="#">road theme</a></li>
                                                                        <li class="post_separator">/</li>
                                                                        <li>Mar 10 2018</li>
                                                                </ul>
                                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
                                                                <div class="blog__btn">
                                                                        <a href="blog-details.html">Baca</a>
                                                                </div>
                                                        </div>
                                                </article>
                                                <!-- End Single Post -->
                                                <!-- Start Single Post -->
                                                <article class="blog__post d-flex flex-wrap">
                                                        <div class="thumb">
                                                                <a href="blog-details.html">
                                                                        <img src="images/blog/blog-3/2.jpg" alt="blog images">
                                                                </a>
                                                        </div>
                                                        <div class="content">
                                                                <h4><a href="blog-details.html">IPA X</a></h4>
                                                                <ul class="post__meta">
                                                                        <li>Posts by : <a href="#">road theme</a></li>
                                                                        <li class="post_separator">/</li>
                                                                        <li>Mar 10 2018</li>
                                                                </ul>
                                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
                                                                <div class="blog__btn">
                                                                        <a href="blog-details.html">Baca</a>
                                                                </div>
                                                        </div>
                                                </article>
                                                <!-- End Single Post -->
                                                <!-- Start Single Post -->
                                                <article class="blog__post d-flex flex-wrap">
                                                        <div class="thumb">
                                                                <a href="blog-details.html">
                                                                        <img src="images/blog/blog-3/3.jpg" alt="blog images">
                                                                </a>
                                                        </div>
                                                        <div class="content">
                                                                <h4><a href="blog-details.html">PKN X</a></h4>
                                                                <ul class="post__meta">
                                                                        <li>Posts by : <a href="#">road theme</a></li>
                                                                        <li class="post_separator">/</li>
                                                                        <li>Mar 10 2018</li>
                                                                </ul>
                                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
                                                                <div class="blog__btn">
                                                                        <a href="blog-details.html">Baca</a>
                                                                </div>
                                                        </div>
                                                </article>
                                                <!-- End Single Post -->
                                                <!-- Start Single Post -->
                                                <article class="blog__post d-flex flex-wrap">
                                                        <div class="thumb">
                                                                <a href="blog-details.html">
                                                                        <img src="images/blog/blog-3/4.jpg" alt="blog images">
                                                                </a>
                                                        </div>
                                                        <div class="content">
                                                                <h4><a href="blog-details.html">Bahasa Indonesia X</a></h4>
                                                                <ul class="post__meta">
                                                                        <li>Posts by : <a href="#">road theme</a></li>
                                                                        <li class="post_separator">/</li>
                                                                        <li>Mar 10 2018</li>
                                                                </ul>
                                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
                                                                <div class="blog__btn">
                                                                        <a href="blog-details.html">Baca</a>
                                                                </div>
                                                        </div>
                                                </article>
                                                <!-- End Single Post -->
                                                <!-- Start Single Post -->
                                                <article class="blog__post d-flex flex-wrap">
                                                        <div class="thumb">
                                                                <a href="blog-details.html">
                                                                        <img src="images/blog/blog-3/5.jpg" alt="blog images">
                                                                </a>
                                                        </div>
                                                        <div class="content">
                                                                <h4><a href="blog-details.html"></a>Agama X</h4>
                                                                <ul class="post__meta">
                                                                        <li>Posts by : <a href="#">road theme</a></li>
                                                                        <li class="post_separator">/</li>
                                                                        <li>Mar 10 2018</li>
                                                                </ul>
                                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
                                                                <div class="blog__btn">
                                                                        <a href="blog-details.html">Baca</a>
                                                                </div>
                                                        </div>
                                                </article>
                                                <!-- End Single Post -->
                                        </div>
                                        <ul class="wn__pagination">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                        </ul>
                                </div>
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
                        </div>
                </div>
        </div>
        <!-- End Blog Area -->

                <!-- Footer Area -->
                <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
                        <div class="footer-static-top">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                        <div class="footer__widget footer__menu">
                                                                <div class="ft__logo">
                                                                        <a href="index.html">
                                                                                <img src="images/logo/3.png" alt="logo">
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
                                                                        <ul class="mainmenu d-flex justify-content-center">
                                                                                <li><a href="index.html">Trending</a></li>
                                                                                <li><a href="index.html">Best Seller</a></li>
                                                                                <li><a href="index.html">All Product</a></li>
                                                                                <li><a href="index.html">Wishlist</a></li>
                                                                                <li><a href="index.html">Blog</a></li>
                                                                                <li><a href="index.html">Contact</a></li>
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
                                                                <img src="images/icons/payment.png" alt=""  style="height: 80px; width: 80px;" /> 
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