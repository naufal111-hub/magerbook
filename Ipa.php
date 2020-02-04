<?php
include ("koneksi.php");

session_start();
@$sess = $_SESSION['username'];


?>
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
								
								<li class="drop"><a href="buku user.php" style="color: white">Buku</a>
									<div class="megamenu mega03" style="height: 180px; width: 150px;">
										<ul class="item item03">
											<li class="title">Kategori</li>
											<li><a href="ipa.php">IPA </a></li>
											<li><a href="ips.php">IPS </a></li>
											<li><a href="bahasa.php">BAHASA </a></li>
										
										</ul>
									</div>
								</li>
								<li class="drop"><a href="Transaksi.php" style="color: white">Transaksi</a>
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
	
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="homeuser.php">Home</a></li>
								
								<li><a href="buku user.php">Buku</a>
									<ul>
										<li><a href="ipa.php">IPA</a></li>
										<li><a href="ips.php">IPS</a></li>
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
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="hasil_pencarian.php" method="POST">
				<div class="field__search">
					<input type="text" name="q" placeholder="Masukan yang ingin anda cari ...">
						<input type="submit">
<!-- 						<a href="hasil_pencarian.php"><i class="zmdi zmdi-search"></i></a> -->
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
        							<li><a href="Ipa.php">IPA <span>(1)</span></a></li>
        							<li><a href="Ips.php">IPS <span>(1)</span></a></li>
        							<li><a href="Bahasa.php">BAHASA <span>(1)</span></a></li>
        						
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			     
			                        </div>
			                        <p>IPA</p>
			                        <div class="orderby__wrapper">
		                        </div>
        					</div>
        				</div>
        			</div>
        				<div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
						<!-- Start Single Product -->
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>

		<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
	        						 <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_buku where id_kategori=1"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" ><img src="img/<?php echo $data ['gambar'];?>" alt="product image" style="height: 200px; height: 400px;"></a>
											<div class="hot__box">
												<span class="hot-label"></span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a><?php echo $data ['judul'];?></a></h4>
											
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="wishlist" href="transaksi.php"><img src="images/icons/rak.png"></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal1"><img src="images/icons/books.png"></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
											</div>
										</div>
		        					</div>
		        					<?php } ?>
		        					<!-- End Single Product -->
	        						<!-- Start Single Product -->

	        					</div>
	        					<ul class="wn__pagination">
	        					</ul>
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
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
									<a href="index.html">
										<img src="images/logo/3.png" alt="logo" style="height: 80px; width: 80px; border-radius: 50%;">
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
		   <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_buku"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                        while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal
                        ?>
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
		                                <img src="img/<?php echo $data ['gambar'];?>" alt="big images">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                         
		                        <div class="buku-info">
		                            <h3><?php echo $data ['judul'];?></h3>
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
										<h6>Judul	 		: <?php echo $data ['judul'];?></h6>
										<h6>Penulis 		: <?php echo $data ['pengarang'];?></h6>
										<h6>TahunTerbit  	: <?php echo $data ['thn_terbit'];?></h6>
										<h6>Jumlah Halaman 	: <?php echo $data ['halaman'];?> Halaman</h6>
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
<?php } ?>
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