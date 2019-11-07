<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SRIKANDI</title>
	<meta charset="UTF-8">
	<meta name="description" content=" SRIKANDI">
	<meta name="keywords" content="ikan,budidaya, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="<?php echo base_url('assets/template/front')?>/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/flaticon.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/slicknav.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/front')?>/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="<?php echo base_url('assets/template/front')?>/img/logosr1.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Pencarian Komoditas ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5 text-lg-right">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="<?php echo base_url('auth/login')?>">Login atau <a href="#">Buat Akun</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Produksi</a></li>
					<li><a href="#">Distribusi
						<span class="new">New</span>
					</a></li>
					<li><a href="#">Komoditas</a>
						<ul class="sub-menu">
							<li><a href="#">Ikan Mas</a></li>
							<li><a href="#">Ikan Lele</a></li>
							<li><a href="#"></a>Ikan Nila</li>
							<li><a href="#">Ikan Gurame</a></li>
							<li><a href="#">Belut</a></li>
						</ul>
					</li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url('assets/template/front')?>/product.html">Halaman Produksi</a></li>
							<li><a href="<?php echo base_url('assets/template/front')?>/category.html">Halaman Distribusi</a></li>
							<li><a href="<?php echo base_url('assets/template/front')?>/cart.html">Halaman Komoditas</a></li>
							<li><a href="<?php echo base_url('assets/template/front')?>/checkout.html">Halaman Petani</a></li>
							<li><a href="<?php echo base_url('assets/template/front')?>/contact.html">Halaman pengembang</a></li>
						</ul>
					</li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/mas1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Komoditas</span>
							<h2>Ikan Mas Merah</h2>
							<p>Siapa sih yang tidak mngenal jenis ikan satu ini. Ikan mas tidak hanya memiliki warna emas, melainkan ada juga ikan mas yang berwarna hitam, kuning, orange, coklat, dan merah. Harga ikan mas per kg yang murah membuat banyak orang mencarinya untuk di konsumsi. Selain harga ikan mas yang murah, ikan mas juga memiliki rasa daging yang enak dan memiliki banyak manfaat bagi tubuh. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-blue">INFO DETAILS</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Harga</span>
						<h2>30K</h2>
						<p>PER KILO</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/nila1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Komoditas</span>
							<h2>Ikan Nila</h2>
							<p>Ikan nila memiliki gizi yang sangat tinggi jika di olah dengan benar jika anda ingin memakan ikan nila anda bisa memakan nya di lamongan atau bahkan anda bisa memasak nya sendiri. Ikan nila memang suatu makanan yang sangat enak sekali jika kita lihat daging nya saja banyak dan juga berisi bisa kita bayangkan bukan ikan nila memang sangat lembut tekstur nya jika anda memang pecinta sea food pasti sangat suka dengan ikan salah satu ini yaitu ikan nila. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-blue">INFO DETAILS</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Harga</span>
						<h2>25K</h2>
						<p>PER KILO</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/lele1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Komoditas</span>
							<h2>Lele Sangkuriang</h2>
							<p>Siapa yang tidak mengenal ikan lele sangkuriang? Jenis ikan lele yang diperkenalkan oleh Balai Besar Pengembangan Budidaya Air Tawar (BBPBAT) Sukabumi pada tahun 2004 ini dengan cepat menjadi primadona para peternak. Namun tahukah Anda bahwa ikan lele Sangkuriang ini masih dari jenis lele dumbo? </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-blue">INFO DETAILS</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Harga</span>
						<h2>15K</h2>
						<p>PER KILO</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>PROFIL PETERNAK</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php
					if($infos){
						foreach ($infos as $info) {
							$filename="assets/template/front/img/product/".$info->namakelompok.".jpg";
					?>
				<div class="product-item">
					<div class="pi-pic">
						
						<img src="<?php echo base_url($filename)?>" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					
					<div class="pi-text">
						<h6><?php echo $info->namakelompok;?> </h6>
						<p>Nama</p>
						<h6><?php echo $info->kota;?> </h6>
						<p>Kota</p>
						
					</div>
					
				</div>
				<?php
						}
					}
					?>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>JENIS IKAN BUDIDAYA AIR TAWAR</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">MUJAIR</a></li>
				<li><a href="#">LELE</a></li>
				<li><a href="#">GURAME</a></li>
				<li><a href="#">MAS</a></li>
				<li><a href="#">PATIN</a></li>
				<li><a href="#">BAWAL</a></li>
				<li><a href="#">NILA</a></li>
				<li><a href="#">BELUT</a></li>
				<li><a href="#">GABUS</a></li>
				<li><a href="#">SIDAT</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url('assets/template/front')?>/img/product/peternak12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-info"></i><span>INFO DETAILS</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">BERITA</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/banner-bg1.jpg">
				<p>Senin, 01 Juli 2019</p>
				<h4>Dasar – Dasar Budidaya Ikan Air Tawar Kolam Tanah</h4>
				<p>Siapa yang tidak mengenal ikan lele sangkuriang? Jenis ikan lele yang diperkenalkan oleh Balai Besar Pengembangan Budidaya Air Tawar (BBPBAT) Sukabumi pada tahun 2004 ini dengan cepat menjadi primadona para peternak.</p>
				<a href="#" class="add-card"><p>Read more...</p></a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->
<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/banner-bg1.jpg">
				<p>Ahad, 30 Juni 2019</p>
				<h4>Potensi Usaha Budidaya Ikan Air Tawar</h4>
				<p>Siapa yang tidak mengenal ikan lele sangkuriang? Jenis ikan lele yang diperkenalkan oleh Balai Besar Pengembangan Budidaya Air Tawar (BBPBAT) Sukabumi pada tahun 2004 ini dengan cepat menjadi primadona para peternak.</p>
				<a href="#" class="add-card"><p>Read more...</p></a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->
	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/banner-bg1.jpg">
				<p>Sabtu, 29 Juni 2019</p>
				<h4>Tujuh Cara Budidaya Ikan Air Tawar Kolam Terpal bagi Pemula</h4>
				<p>Siapa yang tidak mengenal ikan lele sangkuriang? Jenis ikan lele yang diperkenalkan oleh Balai Besar Pengembangan Budidaya Air Tawar (BBPBAT) Sukabumi pada tahun 2004 ini dengan cepat menjadi primadona para peternak.</p>
				<a href="#" class="add-card"><p>Read more...</p></a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="<?php echo base_url('assets/template/front')?>/img/logosr1.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="<?php echo base_url('assets/template/front')?>/img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/blog-thumbs/peternak1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?php echo base_url('assets/template/front')?>/img/blog-thumbs/peternak2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url('assets/template/front')?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/jquery.slicknav.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/jquery.zoom.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('assets/template/front')?>/js/main.js"></script>

	</body>
</html>
