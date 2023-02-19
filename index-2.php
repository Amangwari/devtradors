<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homepage</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/agricul.png">

		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/all.min.css">
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<?php include 'modal.php'; ?> 
	</head>
	<style>
		.overlay-counter-img{
			background-image: url("./assets/images/about/about-bg.jpg");
			opacity: 0.9;
		}
		.bwt-logo{
			width: 300px;
			margin-top: 70px;
		}
		.goog-logo-link {
        	display: none !important;
    	}
    	.goog-te-gadget {
    		color: transparent !important;
    	}
		.language{
			height: 30px;
			margin-top: 23px;
			
		}
		@media(max-width: 991px){
			.language{
				display: none;
			}
		}
		.mfp-iframe{
        width: 150px;
        height: 50px;
        font-size: 18px;
        font-weight: 500;
        color: white;
        border-radius: 5px;
        background-color: #feb020;
    	}
    .mfp-iframe:hover{
        color: white;
        background-color: #273b51;
        font-weight: 700;
    }
    .mfp-iframe-btn{    
        width: 130px;
        height: 40px;
        font-size: 16px;
        font-weight: 500;
        display: flex;
		justify-content: center;
        align-items: center;
        color: white;
        border-radius: 3px;
        background-color: #feb020;
    }
	/* .mfp-iframe-btn:hover{
		color: white;
		background-color: #feb020;
	} */
	</style>
	<body>
		<!-- preloader start here -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
		<!-- preloader ending here -->
		
		<!--search area-->
		<div class="search-input">
			<div class="search-close">
				<i class="fas fa-times"></i>
			</div>
			<form>
				<input type="text" name="text" placeholder="Search Heare">
				<button class="search-btn" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
		<!-- search area -->
		
		<!-- Header section start here -->
		<header class="header-section">
			<div class="header-top bg-black d-none d-lg-block">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-7 col-12">
							<div class="ht-left">
								<ul class="agri-ul d-flex flex-wrap">
									<li><i class="icofont-envelope"></i><span>Prajaptidev410@gmail.com</span></li>
									<li><i class="icofont-phone"></i><span>+91-7879286209</span></li>
									<!-- <li><i class="icofont-stopwatch"></i><span>Mon - Fri 09:00 - 18:00</span></li> -->
								</ul>
							</div>
						</div>
						<div class="col-lg-5 col-12">
							<div class="ht-right">
								<div class="scocial-media">
									<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
									<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
									<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
									<!-- <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-area">
				<div class="container">
					<nav class="navbar navbar-expand-lg">
						<div class="primary-menu">
							<div class="logo d-lg-none">
								<a href="index-2.php"><img src="assets/images/logo/01.png" alt="logo"></a>
							</div>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<i class="icofont-navigation-menu"></i>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<div class="main-area">
									<div class="main-menu  d-flex flex-wrap align-items-center justify-content-center w-100">
										<ul class="agri-ul">
											<li class="active"><a href="index-2.php">Home</a>
												<!-- <ul class="agri-ul">
													<li><a href="index.html">Agricul Farm</a></li>
													<li class="active"><a href="index-2.html">Agricul Farm2</a></li>
													<li><a href="index-3.html">Agricul Farm3</a></li>
													<li><a href="index-4.html">Agricul Farm4</a></li>
												</ul> -->
											</li>
											<li>
												<a href="about.html">About Us</a>
												<!-- <ul class="agri-ul">
													<li><a href="about.html">About Page</a></li>
													<li><a href="team.html">Team Page</a></li>
													<li><a href="faq-page.html">Faq Page</a></li>
													<li><a href="404.html">404 Page</a></li>
												</ul> -->
											</li>
											
										</ul>
										<div class="logo px-4 d-none d-lg-block">
											<a href="index-2.php"><img src="assets/images/logo/devtrader.png" alt="logo"></a>
										</div>
										<ul class="agri-ul">
											<li>
												<a href="gallery-grid2.php">Gallery</a>
												<!-- <ul class="agri-ul">
													<li><a href="gallery-grid2.html">Gallery 2 Grid</a></li>
													<li><a href="gallery-masonary.html">Gallery Masonary</a></li>
												</ul> -->
											</li>
											<!-- <li>
												<a href="#">Blog</a>
												<ul>
													<li><a href="blog.html">Blog Right Sidebar</a></li>
													<li><a href="blog-ls.html">Blog Left Sidebar</a></li>
													<li><a href="blog-single.html">Blog Single Page</a></li>
												</ul>
											</li> -->
											<!-- <li>
												<a href="product-page.html">Shop</a>
												<ul class="agri-ul">
													<li><a href="product-page.html">Product</a></li>
													<li><a href="product-single.html">Product Single</a></li>
													<li><a href="cart-page.html">Cart Page</a></li>
												</ul>
											</li> -->
											<li><a href="contact-us.html">Contact Us</a></li>
											<div class="language"><a id="google_translate_element"></a></div>
										</ul>
										<!-- <ul class="agri-ul search-cart">
											<li>
												<div class="cart-option">
													<i class="fas fa-cart-arrow-down"></i>
													<div class="cart-content">
														<div class="cart-item">
															<div class="cart-img">
																<a href="#"><img src="assets/images/product/11.jpg" alt="cart"></a>
															</div>
															<div class="cart-des">
																<a href="#">Product Title Hore</a>
																<p>$20.00</p>
															</div>
															<div class="cart-btn">
																<a href="#"><i class="fa fa-times"></i></a>
															</div>
														</div>
														<div class="cart-item">
															<div class="cart-img">
																<a href="#"><img src="assets/images/product/12.jpg" alt="cart"></a>
															</div>
															<div class="cart-des">
																<a href="#">Product Title Hore</a>
																<p>$20.00</p>
															</div>
															<div class="cart-btn">
																<a href="#"><i class="fa fa-times"></i></a>
															</div>
														</div>
														<div class="cart-bottom">
															<div class="cart-subtotal">
																<p>Total: <b class="float-right">$40.00</b></p>
															</div>
															<div class="cart-action">
																<a href="#" class="lab-btn"><span>View Cart</span></a>
																<a href="#" class="lab-btn"><span>Check Out</span></a>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="search-option">
													<i class="fas fa-search"></i>
												</div>
											</li> 
										</ul> -->
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- Header section ending here -->

		
        <!-- Banner Section Start Here -->
        <section class="banner banner-2">
            <div class="banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="banner-item">
                                <div class="banner-inner">
                                    <div class="banner-thumb">
                                        <img src="assets/images/product/banner-mahua.jpg" alt="banner-slider">
                                    </div>
                                    <div class="banner-content">
                                        <!-- <h3>Slider-1</h3> -->
                                        <div class="banner-title">Mahua Fruits</div>
                                        <div class="banner-desc">In order to cater the diversified demands of our clients, we have been able to provide a unique range of Mahua Fruit.</div>
                                        <!-- <a href="#" class="lab-btn"><span>Shop Now</span></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="banner-item">
                                <div class="banner-inner">
                                    <div class="banner-thumb">
                                        <img src="assets/images/product/img-4.webp" alt="banner-slider">
                                    </div>
                                    <div class="banner-content">
                                        <!-- <h3>Slider-2</h3> -->
                                        <div class="banner-title">Mahua</div>
                                        <div class="banner-desc">Exotic Mahua fruits can be eaten raw, or cooked as vegetables or even added to drinks and sweets.</div>
                                        <!-- <a href="#" class="lab-btn"><span>Shop Now</span></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="banner-item">
                                <div class="banner-inner">
                                    <div class="banner-thumb">
                                        <img src="assets/images/product/mahua-banner2.png" alt="banner-slider">
                                    </div>
                                    <div class="banner-content">
                                        <!-- <h3>Slider-3</h3> -->
                                        <div class="banner-title">Mahua Fruits</div>
                                        <div class="banner-desc">(Mahua) is an Indian tropical tree that grows to around 20 meters and belongs to family Sapotaceae. The seed oil extracted is used as ointment in curing rheumatism as well as in preventing cracks in skin during winters.</div>
                                        <!-- <a href="#" class="lab-btn"><span>Shop Now</span></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="banner-pagination"></div>
            </div>
        </section>
		<!-- Banner Section Ending Here -->

		<!-- Feature Secton Start Here -->
		<section class="feature-section padding-tb">
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>Fruits & Vegetable For Your Health</h3>
					<p>Fresh Farm Fruits & Vegatables To Your Doorsteps.</p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="feature-item-2">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img style="width: 110px;" src="assets/images/product/img-1.webp" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>Mahua</h5></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="feature-item-2">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img style="width: 150px;" src="assets/images/product/img-4.webp" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>Mahua</h5></a>
										<p> Temporibus pariatur nemo officia.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
							<div class="feature-item-2">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img style="width: 85px;" src="assets/images/product/mahua-img1.jpg" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>Mahua</h5></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
							<div class="feature-item-2">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img style="width: 80px;" src="assets/images/product/mahua-img2.jpg" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>Mahua</h5></a>
										<p> Temporibus pariatur nemo officia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Secton ending Here -->

		<!-- about section start here -->
		<section class="about-us home-2 padding-tb">
			<div class="shape-image">
				<img src="assets/images/about/shape/01.png" alt="abs-thumb" class="shape-1">
				<img src="assets/images/about/shape/02.png" alt="abs-thumb" class="shape-2">
			</div>
			<div class="container">
				<div class="about-wrapper">
					<div class="row">
						<div class="col-xl-8 col-12">
							<div class="section-header text-center text-xl-start wow fadeInUp" data-wow-delay="0.3s">
								<h3>We Are Best Organic Mahua Farm.</h3>
								<p>Lorem ipsum dolor, asperiores laudantium praesentium. etc.</p>
							</div>
							<div class="section-wrapper">
								<div class="row justify-content-center">
									<div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
										<div class="about-item">
											<div class="about-inner">
												<div class="about-thumb">
													<img  src="assets/images/product/img-m1.jpg" alt="about">
												</div>
												<div class="about-content">
													<a href="#"><h5>Organic and non-gmo</h5></a>
													<p>We sell fruits and vegetables of the highest quality. </p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
										<div class="about-item">
											<div class="about-inner">
												<div class="about-thumb">
													<img src="assets/images/product/img-m2.jpg" alt="about">
												</div>
												<div class="about-content">
													<a href="#"><h5>Best Organic products</h5></a>
													<p>No preservatives or added chemicals used in fruits & vegetables</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
										<div class="about-item">
											<div class="about-inner">
												<div class="about-thumb">
													<img src="assets/images/product/img-m3.jpg" alt="about">
												</div>
												<div class="about-content">
													<a href="#"><h5>Healthy and nutritious</h5></a>
													<p>Best quality products available at our farms.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
										<div class="about-item">
											<div class="about-inner">
												<div class="about-thumb">
													<img src="assets/images/product/img-1.webp" alt="about">
												</div>
												<div class="about-content">
													<a href="#"><h5>500 acres of pasture</h5></a>
													<p>Large farm lands for better farming and agriculture.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="about-thumb-2 wow fadeInUp" data-wow-delay="0.4s">
								<img style="border-radius:45% 55% 84% 16% / 71% 14% 86% 29% ;" src="assets/images/product/m-img-2.png" alt="about-thumb">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about section ending here -->

		<!-- product section start here -->
		<section class="product-section product-style2 padding-tb">
			<div class="shape-image">
				<img src="assets/images/product/shape/01.png" alt="abs-thumb" class="shape-1">
				<img src="assets/images/product/shape/02.png" alt="abs-thumb" class="shape-2">
			</div>
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>We  Have Mahua Products</h3>
					<p>Enjoy all the delicious goodness of fruits & vegetables.</p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/mahua-img.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
											<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span><button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button></span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/img-2.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
										<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>	
										<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/images.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
											<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/mahua-img1.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
										<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/img-3.webp" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
										<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.9s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/mahua-banner2.png" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
										<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="1.1s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/img-m3.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
										<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="1.2s">
							<div class="product-item-2">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 250px;" src="assets/images/product/img-m1.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#"><h5>Mahua</h5></a>
										<!-- <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
										</div> -->
										<!-- <h6 class="price">$39.99</h6> -->
										<div class="cart-option">
										<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
											<!-- <a href="#" class="lab-btn"><span>Add To Cart</span></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center wow fadeInUp" data-wow-delay="0.5s">
						<a href="gallery-grid2.php" class="lab-btn"><span>Gallery</span></a>
					</div>
				</div>
			</div>
		</section>
		<!-- product section ending here -->

		<!-- counter up section start here -->
		<!-- <div class="counterup-section padding-tb bg_counter bg_img">
			<div class="overlay overlay-counter-img "></div>
			<div class="container">
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-xl-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
							<div class="counter-item">
								<div class="counter-inner">
									<div class="counter-thumb">
										<img src="assets/images/counter/counter-tomato.jpg" alt="counter">
									</div>
									<div class="counter-content">
										<h3 class="count-number">5050</h3>
										<p class="count-title">Organic Tomato</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="counter-item">
								<div class="counter-inner">
									<div class="counter-thumb">
										<img src="assets/images/counter/counter-potato.jpg" alt="counter">
									</div>
									<div class="counter-content">
										<h3 class="count-number">6200</h3>
										<p class="count-title">Organic Potato</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="counter-item">
								<div class="counter-inner">
									<div class="counter-thumb">
										<img src="assets/images/counter/counter-guava.jpg" alt="counter">
									</div>
									<div class="counter-content">
										<h3 class="count-number">8100</h3>
										<p class="count-title">Pink Guava</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
							<div class="counter-item">
								<div class="counter-inner">
									<div class="counter-thumb">
										<img src="assets/images/counter/counter-carrot.jpg" alt="counter">
									</div>
									<div class="counter-content">
										<h3 class="count-number">6300</h3>
										<p class="count-title">Organic Carrot</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- counter up section ending here -->

		<!-- product section start here -->
		<section class="product-section product-style3 padding-tb">
			<div class="container-fluid">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>Mahua Fruits Farm Gallery</h3>
					<p>Enjoy all the delicious goodness of fruits & vegetables.</p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center g-0">
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="product-item">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 300px;" src="assets/images/product/mahua-img.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#" class="product-name">Mahua</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="product-item">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 300px;" src="assets/images/product/mahua-banner2.png" alt="product">
									</div>
									<div class="product-content">
										<a href="#" class="product-name">Mahua Fruits</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
							<div class="product-item">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 300px;" src="assets/images/product/mahua-img1.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#" class="product-name">Mahua</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
							<div class="product-item">
								<div class="product-inner">
									<div class="product-thumb">
										<img style="height: 300px;" src="assets/images/product/img-m1.jpg" alt="product">
									</div>
									<div class="product-content">
										<a href="#" class="product-name">Mahua Fruit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- product section ending here -->

		<!-- offer section start here -->
		<div class="offer-section padding-tb pt-0">
			<div class="container">
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
							<div class="offer-item bgc-1">
								<div class="offer-inner">
									<div class="offer-thumb">
										<img src="assets/images/product/mahua-icone.webp" alt="offer">
									</div>
									<div class="offer-content">
										<a href="#" class="catagory"><h5>Fruits</h5></a>
										<h3>100% Natural Fruits <span>30% Off</span></h3>
										<!-- <a href="#" class="lab-btn"><span>View Product</span></a> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="offer-item bgc-2">
								<div class="offer-inner">
									<div class="offer-thumb">
										<img style="height: 190px;" src="assets/images/product/mahua-img10.jpg	" alt="offer">
									</div>
									<div class="offer-content">
										<a href="#" class="catagory"><h5>Fruits</h5></a>
										<h3>Organic Natural Friuts<span>30% Off</span></h3>
										<!-- <a href="#" class="lab-btn"><span>View Product</span></a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- offer section ending here -->

		<!-- testimonial section start here -->
		<section class="testimonial-section home-2 padding-tb">
			<div class="container">
				<div class="section-wrapper">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
							<div class="testi-slider-2">
								<div class="section-header text-start">
									<h3>20k+ Customers love Our Fruits | Mahuaa Farm</h3>
								</div>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="testi-item style-2">
											<div class="testi-inner">
												<div class="testi-head">
													<div class="testi-thumb">
														<img src="assets/images/testimonial/01.jpg" alt="testimonial">
													</div>
													<div class="testi-clients">
														<a href="#"><h5>Jeson Smith</h5></a>
														<p>Founder & Ceo</p>
														<!-- <div class="rating">
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
														</div> -->
													</div>
												</div>
												<div class="testi-body">
													<p>Continually Onceptualizef Technically invs Professionally monetizeturkeyf Testingdu Frofessionally oe-enablfunctaizede-come rce Onceptualize Technically initiatives.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="testi-item style-2">
											<div class="testi-inner">
												<div class="testi-head">
													<div class="testi-thumb">
														<img src="assets/images/testimonial/02.jpg" alt="testimonial">
													</div>
													<div class="testi-clients">
														<a href="#"><h5>Rajib Raj</h5></a>
														<p>Founder & Ceo</p>
														<!-- <div class="rating">
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
														</div> -->
													</div>
												</div>
												<div class="testi-body">
													<p>Continually Onceptualizef Technically invs Professionally monetizeturkeyf Testingdu Frofessionally oe-enablfunctaizede-come rce Onceptualize Technically initiatives.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="testi-item style-2">
											<div class="testi-inner">
												<div class="testi-head">
													<div class="testi-thumb">
														<img src="assets/images/testimonial/03.jpg" alt="testimonial">
													</div>
													<div class="testi-clients">
														<a href="#"><h5>Zinat Zaara</h5></a>
														<p>Founder & Ceo</p>
														<!-- <div class="rating">
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>
														</div> -->
													</div>
												</div>
												<div class="testi-body">
													<p>Continually Onceptualizef Technically invs Professionally monetizeturkeyf Testingdu Frofessionally oe-enablfunctaizede-come rce Onceptualize Technically initiatives.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="testi-navigation d-flex flex-wrap">
									<div class="testi-nav testi-slider-prev"><i class="icofont-simple-left"></i></div>
									<div class="testi-nav testi-slider-next"><i class="icofont-simple-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="testi-thumb-part d-none d-lg-block">
								<div class="testi-thumb">
									<img style="width: 450px; margin-bottom: 40px; border-radius:69% 31% 81% 19% / 77% 33% 67% 23% ;" src="assets/images/product/img-2.jpg" alt="testi-about">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- testimonial section ending here -->

		<!-- blog section start here -->
		<!-- <section class="blog-section padding-tb">
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>Agricul Farm Recent Blog</h3>
					<p>Conveniently customize proactive  services leveraged interfaces without Globally </p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="post-item">
								<div class="post-inner">
									<div class="post-thumb">
										<a href="blog-single.html">
											<img src="assets/images/blog/01.jpg" alt="blog">
										</a>
										<div class="meta-date">
											<div class="md-pre">
												<h5>24</h5>
												<p>Aug</p>
											</div>
										</div>
									</div>
									<div class="post-content">
										<a href="blog-single.html"><h5>Tips For Ripening Your Fruits & Vegetable</h5></a>
										<div class="meta-post">
											<p><span class="admin-name">Admin <a href="#">Rajib Raj</a></span><span class="comment-name"><a href="#">10 comments</a></span></p>
										</div>
										<div class="text-btn">
											<a href="blog-single.html">Read More</a>
										</div>   
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="post-item">
								<div class="post-inner">
									<div class="post-thumb">
										<a href="blog-single.html">
											<img src="assets/images/blog/02.jpg" alt="blog">
										</a>
										<div class="meta-date">
											<div class="md-pre">
												<h5>25</h5>
												<p>Aug</p>
											</div>
										</div>
									</div>
									<div class="post-content">
										<a href="blog-single.html"><h5>Benefits of a Raw Food for your Health </h5></a>
										<div class="meta-post">
											<p><span class="admin-name">Admin <a href="#">Somrat Islam</a></span><span class="comment-name"><a href="#">10 comments</a></span></p>
										</div>
										<div class="text-btn">
											<a href="blog-single.html">Read More</a>
										</div>   
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
							<div class="post-item">
								<div class="post-inner">
									<div class="post-thumb">
										<a href="blog-single.html">
											<img src="assets/images/blog/03.jpg" alt="blog">
										</a>
										<div class="meta-date">
											<div class="md-pre">
												<h5>26</h5>
												<p>Aug</p>
											</div>
										</div>
									</div>
									<div class="post-content">
										<a href="blog-single.html"><h5>Superfoods You Should be Eating For Health</h5></a>
										<div class="meta-post">
											<p><span class="admin-name">Admin <a href="#">Sajahan Sagor</a></span><span class="comment-name"><a href="#">10 comments</a></span></p>
										</div>
										<div class="text-btn">
											<a href="blog-single.html">Read More</a>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- blog section ending here -->

		<!-- sponsor section start here -->
		<!-- <div class="sponsor-section bg-sopnsor1 padding-tb">
			<div class="container">
				<div class="section-wrapper wow fadeInUp" data-wow-delay="0.3s">
					<div class="sponsor-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/01.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/02.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/03.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/04.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="assets/images/sponsor/05.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- sponsor section ending here -->

		<!-- footer section start here -->
		<footer class="footer-section padding-tb pb-0">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-logo">
										<img src="assets/images/logo/devtrader.png" alt="footer-logo">
									</div>
									<div class="footer-desc">
										<p>Welcome to our company.  We are a well-known firm in the food industry with our quality products. </p>
										<p>It has made us quality oriented, having focus on its customers for the best results.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-addtess">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>About Us</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li>
												<div class="icon">
													<i class="icofont-google-map"></i>
												</div>
												<div class="detalis">
													<p>Schhindwara, Madhya Pradesh 480559</p>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="icofont-phone"></i>
												</div>
												<div class="detalis">
													<p>+91-7879286209</p>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="icofont-envelope"></i>
												</div>
												<div class="detalis">
													<p>Prajaptidev410@gmail.com</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-blog">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>Gallery</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li>
												<div class="thumb">
													<a href="#"><img src="assets/images/product/img-m3.jpg" alt="footer-blog"></a>
												</div>
												<div class="detalis">
													<a href="#"><h5>Mahua</h5></a>
													<!-- <h6>$24.99</h6> -->
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img src="assets/images/product/img-4.webp" alt="footer-blog"></a>
												</div>
												<div class="detalis">
													<a href="#"><h5>Friuts</h5></a>
													<!-- <h6>$25.99</h6> -->
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-gallery">
								<!-- <div class="footer-inner">
									<div class="footer-title">
										<h5>Products</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li><a href="#"><img src="assets/images/gallery/footer-products (1).jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/footer-products (2).jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/footer-products (4).jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/footer-products (6).jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/footer-products (3).jpg" alt="footer-gallery"></a></li>
											<li><a href="#"><img src="assets/images/gallery/footer-products (5).jpg" alt="footer-gallery"></a></li>
										</ul>
									</div>
								</div> -->
								<div class="bwt-logo">
									<img src="./assets/images/logo/bwt-white.png" alt="">
								</div>
							</div>
						</div>       
					</div>
				</div>
				<div class="footer-bottom">
					<p>&copy; 2015<a href="#" target="_blank"><span>Dev Traders</span></a>All Rights Reserved <a href="#" target="_blank"><span></span></a></p>
				</div>
			</div>
		</footer>
		<!-- footer section ending here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/fontawesome.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
        <script src="assets/js/functions.js"></script>


		<!-- ENQUIRY NOW/LANGUAGE CONVERTER
============================================ -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript">
    (function () {
        var gtConstEvalStartTime = new Date();
        /*
      
         Copyright The Closure Library Authors.
         SPDX-License-Identifier: Apache-2.0
        */
        var h = this || self,
            l = /^[\w+/_-]+[=]{0,2}$/,
            m = null;

        function n(a) {
            return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
        }

        function p(a, b) {
            function c() { }
            c.prototype = b.prototype;
            a.i = b.prototype;
            a.prototype = new c;
            a.prototype.constructor = a;
            a.h = function (g, f, k) {
                for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
                return b.prototype[f].apply(g, e)
            }
        }

        function q(a) {
            return a
        };

        function r(a) {
            if (Error.captureStackTrace) Error.captureStackTrace(this, r);
            else {
                var b = Error().stack;
                b && (this.stack = b)
            }
            a && (this.message = String(a))
        }
        p(r, Error);
        r.prototype.name = "CustomError";

        function u(a, b) {
            a = a.split("%s");
            for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
            r.call(this, c + a[g])
        }
        p(u, r);
  
        u.prototype.name = "AssertionError";

        function v(a, b) {
            throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
        };
        var w;

        function x(a, b) {
            this.g = b === y ? a : ""
        }
        x.prototype.toString = function () {
            return this.g + ""
        };
        var y = {};

        function z(a) {
            var b = document.getElementsByTagName("head")[0];
            b || (b = document.body.parentNode.appendChild(document.createElement("head")));
            b.appendChild(a)
        }

        function _loadJs(a) {
            var b = document;
            var c = "SCRIPT";
            "application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
            c = b.createElement(c);
            c.type = "text/javascript";
            c.charset = "UTF-8";
            if (void 0 === w) {
                b = null;
                var g = h.trustedTypes;
                if (g && g.createPolicy) {
                    try {
                        b = g.createPolicy("goog#html", {
                            createHTML: q,
                            createScript: q,
                            createScriptURL: q
                        })
                    } catch (t) {
                        h.console && h.console.error(t.message)
                    }
                    w = b
                } else w = b
            }
            a = (b = w) ? b.createScriptURL(a) : a;
            a = new x(a, y);
            a: {
                try {
                    var f = c && c.ownerDocument,
                        k = f && (f.defaultView || f.parentWindow);
                    k = k || h;
                    if (k.Element && k.Location) {
                        var e = k;
                        break a
                    }
                } catch (t) { }
                e = null
            }
            if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
                e = typeof c;
                if ("object" == e && null != c || "function" == e) try {
                    var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
                } catch (t) {
                    d = "<object could not be stringified>"
                } else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
                v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
                    "HTMLScriptElement", d)
            }
            a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
            c.src = d;
            (d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
            d && c.setAttribute("nonce", d);
            z(c)
        }

        function _loadCss(a) {
            var b = document.createElement("link");
            b.type = "text/css";
            b.rel = "stylesheet";
            b.charset = "UTF-8";
            b.href = a;
            z(b)
        }

        function _isNS(a) {
            a = a.split(".");
            for (var b = window, c = 0; c < a.length; ++c)
                if (!(b = b[a[c]])) return !1;
            return !0
        }

        function _setupNS(a) {
            a = a.split(".");
            for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
            return b
        }
        window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
            document.readyState = "complete"
        }, !1);
        if (_isNS('google.translate.Element')) {
            return
        } (function () {
            var c = _setupNS('google.translate._const');
            c._cest = gtConstEvalStartTime;
            gtConstEvalStartTime = undefined;
            c._cl = 'en';
            c._cuc = 'googleTranslateElementInit';
            c._cac = '';
            c._cam = '';
            c._ctkk = '449532.3786053938';
            var h = 'translate.googleapis.com';
            var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
            var b = s + h;
            c._pah = h;
            c._pas = s;
            c._pbi = b + '/translate_static/img/te_bk.gif';
            c._pci = b + '/translate_static/img/te_ctrl3.gif';
            c._pli = b + '/translate_static/img/loading.gif';
            c._plla = h + '/translate_a/l';
            c._pmi = b + '/translate_static/img/mini_google.png';
            c._ps = b + '/translate_static/css/translateelement.css';
            c._puh = 'translate.google.com';
            _loadCss(c._ps);
            _loadJs(b + '/translate_static/js/element/main.js');
        })();
    })();
</script>
<!-- End Language Converter -->
<!-- Including Jquery -->
<script src="assets/js/vendor/jquery-min.js"></script>
<script src="assets/js/vendor/js.cookie.js"></script>
<!--Including Javascript-->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<!--Newsletter Popup Cookies-->
<script>
    function newsletter_popup() {
        var cookieSignup = "cookieSignup", date = new Date();
        if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
            setTimeout(function () {
                $.magnificPopup.open({
                    items: {
                        src: '#newsletter-modal'
                    }
                    , type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
                }
                );
            }
                , 5000);
        }
        $.magnificPopup.instance.close = function () {
            if ($("#dontshow").prop("checked") == true) {
                $.cookie(cookieSignup, 'true', {
                    expires: 1, path: '/'
                }
                );
            }
            $.magnificPopup.proto.close.call(this);
        }
    }
    newsletter_popup();
</script>



</body>



