 <!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | MaBook</title>
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
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="homeuser.php">
 								<img src="images/logo/logo.png" alt="logo images" style="height: 90px; width: 90px; border-radius: 50%;	">
							</a>
						</div>
					</div>
					
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								
								<li class="drop with--one--item"><a href="homeuser.php" style="color: white">Home</a></li>
								
								<li class="drop"><a href="buku user.php" style="color: white">Books</a>
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
								<li class="drop"><a href="Transaksi.php" style="color: white">Transaksi</a>
							</ul>
						</nav>
					</div>
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span><a href="my-account.php">My Account</a></span>
											</strong>
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
								
								<li><a href="buku user.php">Shop</a>
									<ul>
										<li><a href="shop-grid.php">Shop Grid</a></li>
										<li><a href="single-product.html">Single Product</a></li>
								
									</ul>
								</li>
								
								
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
		<div class="brown--color box-search-content search_active block-bg close__top">
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
        <!-- Start Slider area -->
        <div class="slider-area black__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2 style="color: white;">Mau <span style="color: yellow;"> Baca Buku??? </span></h2> 
		            				<h2 style="color: white;">Baca <span style="color: yellow;">Disini  </span></h2>
		            				<h2 style="color: white;">Aja <span style="color: yellow;">Bro</span></h2>
				                   	<a class="shopbtn" href="buku user.php" style="color : white;">Lihat Sekarang  </a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
        	<div class="slide animation__style10 bg-image--8 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2 style="color: black;">Mau <span style="color: green;"> Baca Buku??? </span></h2> 
		            				<h2 style="color: black;">Baca <span style="color: green;">Disini  </span></h2>
		            				<h2 style="color: black;">Aja <span style="color: green;">Bro</span></h2>
				                   	<a class="shopbtn" href="buku user.php" style="color : black;">Lihat Sekarang  </a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--70  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2" style="color: black">New <span style="color: black">Products</span></h2>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href=" "><img src="images/books/2.png" alt="product image" style="height: 200px; height: 400px;"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="ips.php">SBMPTN SOSHUM 2019</a></h4>
								<ul class="prize d-flex">
								</ul>
								<div class="action">
									<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
										<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal1"><i class="bi bi-search"></i></a></li>
									</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/3.png" alt="product image" style="height: 200px; height: 400px;"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="ipa.php">SBMPTN SAINTEK 2019-2020</a></h4>
								<ul class="prize d-flex">
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/4.png" alt="product image" style="height: 200px; height: 400px;"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="umum.php">Victoria Tereliye</a></h4>
								<ul class="prize d-flex">
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/5.png" alt="product image" style="height: 200px; height: 400px;"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="umum.php">Si Anak Kuat Tereliye</a></h4>
								<ul class="prize d-flex">
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/6.png" alt="product image" style="height: 200px; height: 400px;"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALER</span>
								</div>
							</div>
							<div class="product__content content--center content--center">
								<h4><a href="umum.php">Si Anak Cahaya Tereliye</a></h4>
								<ul class="prize d-flex">
								</ul>
							</div>
						</div>
						<!-- Start Single Product -->
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		
		<!-- End NEwsletter Area -->
		<!-- Start Best Seller Area -->
		 								 
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
										<img src="images/logo/logo.png" alt="logo" style="height: 100px; width: 100px; border-radius: 50%;">
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
		<!-- QUICKVIEW PRODUCT -->
		<div class="modal fade" id="productmodal1" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document" style="height: 400px; width: 800px;">
		            <div class="modal-content" >
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <!-- Start product images -->
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="images/books/2.png">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="buku-info">
		                            <h3>SBMPTN SOSHUM 2019</h3>
		                            <div class="rating__and__review">
		                                <ul class="rating">
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                </ul>
		                            </div>
		                            <div class="quick-desc">
										<h6>Judul	 		: SBMPTN SOSHUM 2019</h6>
										<h6>Penerbit 		: Pusat Perbukuan</h6>
										<h6>Penulis  		: Moch.Anshori</h6>
										<h6>Halaman Buku 	: 262</h6>
		                            </div>
		                            <div class="addtocart-btn">
										<a href="pdf1.php">Read Now</a>
										
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- END QUICKVIEW PRODUCT -->
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