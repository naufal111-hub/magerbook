<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Buku</title>
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
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
							<a href="homeuser.html">
								<img src="images/logo/logo.png" alt="logo images" style="height: 100px; width: 100px; border-radius: 50%;">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="homeuser.php" style="color: white"> Home </a> </li>
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
								<li><a href="transaksi.php" style="color: white">Transaksi</a></li>
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
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="homeuser.html">Home</a></li>
									<ul>
										<li><a href="about.html">About Page</a></li>
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
        <div class="slide animation__style10 bg-image--8 fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
		            			<div class="contentbox">
		            				<h2 style="text-align: center;"><span style="color: white;">My Library</span></h2><h2 style="text-align: center;"><span style="color: white;">Is</span></h2>
		            				<h2 style="text-align: center;"><span style="color: white;">My Book</span></h2>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
        <!-- End Bradcaump area -->
		<!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Kategori</h3>
        						<ul>
        							<li><a href="Ipa.php">IPA <span>(6)</span></a></li>
        							<li><a href="Ips.php">IPS <span>(1)</span></a></li>
        							<li><a href="Bahasa.php">BAHASA <span>(3)</span></a></li>
        							<li><a href="Umum.php">UMUM <span>(4)</span></a></li>
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="product__content content--center"> </div>
			                       IPA 
			                        <div class="orderby__wrapper">
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" ><img src="images/books/14.png" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label">BEST</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">BIOLOGI</a></h4>
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
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="images/books/15.png" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">Buku Fisika Kelas X Kurikulum 2013</a></h4>
											<ul class="prize d-flex">
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal2"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="images/books/12.png" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">TOP BOOK</a></h4>
											<ul class="prize d-flex">
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal3"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="images/books/13.png" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">SUPER BOOK</a></h4>
											<ul class="prize d-flex">
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal4"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="images/books/11.png" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product.html">Brankas SOAL KIMIA</a></h4>
											<ul class="prize d-flex">
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img src="images/books/3.png" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product.html">SBMPTN SAINTEK</a></h4>
											<ul class="prize d-flex">
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
		        					<!-- End Single Product -->
	        					</div> 
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
	        						<!-- Start Single Product -->
	        						<div class="list__view">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product.html"><img src="images/product/1.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product.html"><img src="images/product/2.jpg" alt="product images" ></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product.html">Ali Smith</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart.html">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product.html"><img src="images/product/2.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product.html"><img src="images/product/4.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product.html">Blood In Water</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart.html">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product.html"><img src="images/product/3.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product.html"><img src="images/product/6.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product.html">Madeness Overated</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart.html">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product.html"><img src="images/product/4.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product.html"><img src="images/product/6.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product.html">Watching You</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart.html">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li>
	        								</ul>

	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        						<!-- Start Single Product -->
	        						<div class="list__view mt--40">
	        							<div class="thumb">
	        								<a class="first__img" href="single-product.html"><img src="images/product/5.jpg" alt="product images"></a>
	        								<a class="second__img animation1" href="single-product.html"><img src="images/product/9.jpg" alt="product images"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="single-product.html">Court Wings Run</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>$111.00</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
	        								<ul class="cart__action d-flex">
	        									<li class="cart"><a href="cart.html">Add to cart</a></li>
	        									<li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li>
	        								</ul>
	        							</div>
	        						</div>
	        						<!-- End Single Product -->
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
		<!-- Footer Area -->
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
		</footer>
		<!-- //Footer Area -->
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		    <!-- Modal -->
		    <div class="modal fade" id="productmodal1" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document" style="height: 500px; width: 500px;">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <!-- Start product images -->
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="images/product/big-img/14.png">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="buku-info">
		                            <h3>Biologi Kelas X Kurikulum 2006</h3>
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
										<h6>Judul	 		: Biologi Kelas X Kurikulum 2006</h6>
										<h6>Penerbit 		: Pusat Perbukuan</h6>
										<h6>Penulis  		: Moch.Anshori</h6>
										<h6>Halaman Buku 	: 262</h6>
		                            </div>
		                            <div class="addtocart-btn">
										<a href="pdf.php">Read Now</a>
										
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="modal fade" id="productmodal2" tabindex="-1" role="dialog">
			<div class="modal-dialog modal__container" role="document">
				<div class="modal-content">
					<div class="modal-header modal__header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<!-- Start product images -->
							<div class="product-images">
								<div class="main-image images">
									<img alt="big images" src="images/product/big-img/3.png">
								</div>
							</div>
							<!-- end product images -->
							<div class="buku-info">
								<h3>Brankas Kimia Kelas X,XI,XII</h3>
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
									<h6>Judul	 : Brankas Kimia Kelas X,XI,XII</h6>
									<h6>Penerbit : PT Antariksa</h6>
									<h6>Penulis  : Media</h6>
								</div>
								<div class="read-btn">
									<a href="baca.php">Read Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="productmodal3" tabindex="-1" role="dialog">
		<div class="modal-dialog modal__container" role="document">
			<div class="modal-content">
				<div class="modal-header modal__header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="modal-product">
						<!-- Start product images -->
						<div class="product-images">
							<div class="main-image images">
								<img alt="big images" src="images/product/big-img/8.png">
							</div>
						</div>
						<!-- end product images -->
						<div class="buku-info">
							<h3>Brankas Kimia Kelas X,XI,XII</h3>
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
								<h6>Judul	 : Brankas Kimia Kelas X,XI,XII</h6>
								<h6>Penerbit : PT Antariksa</h6>
								<h6>Penulis  : Media</h6>
							</div>
							<div class="read-btn">
								<a href="baca.php">Read Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="productmodal4" tabindex="-1" role="dialog">
	<div class="modal-dialog modal__container" role="document">
		<div class="modal-content">
			<div class="modal-header modal__header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="modal-product">
					<!-- Start product images -->
					<div class="product-images">
						<div class="main-image images">
							<img alt="big images" src="images/product/big-img/9.png">
						</div>
					</div>
					<!-- end product images -->
					<div class="buku-info">
						<h3>Brankas Kimia Kelas X,XI,XII</h3>
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
							<h6>Judul	 : Brankas Kimia Kelas X,XI,XII</h6>
							<h6>Penerbit : PT Antariksa</h6>
							<h6>Penulis  : Media</h6>
						</div>
						<div class="read-btn">
							<a href="baca.php">Read Now</a>
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