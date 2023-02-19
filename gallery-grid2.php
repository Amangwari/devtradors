<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gallery</title>
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
		.overlay-gallery{
			background-image: url("./assets/images/product/mahua-img.jpg");
			opacity: 0.88;
		}
		.enquiry-button-div{
			width: 150px;
			height: 55px;
			margin: auto;
			margin-bottom: 20px;
		}
		.enquiry-button-div button{
			width: 150px;
			height: 45px;
			border: 1px solid white;
			background-color: #feb020;
			font-weight: 500;
			border-radius: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.enquiry-button-div button:hover{
			background-color: #273b51;
			color: white;
			font-weight: 700;
			transition: all 0.4s linear;
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
		
		<!-- Header section start here -->
		<header class="header-section">
            <div class="header-top d-none d-lg-block">
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
							<div class="logo">
								<a href="index-2.php"><img src="assets/images/logo/devtrader.png" alt="logo"></a>
							</div>
						  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<i class="icofont-navigation-menu"></i>
						  	</button>
						 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<div class="main-area">
									<div class="main-menu">
										<ul class="agri-ul">
											<li><a href="index-2.php">Home</a>
												<!-- <ul class="agri-ul">
													<li><a href="index.html">Agricul Farm</a></li>
													<li><a href="index-2.html">Agricul Farm2</a></li>
													<li><a href="index-3.html">Agricul Farm3</a></li>
													<li><a href="index-4.html">Agricul Farm4</a></li>
												</ul> -->
											</li>
											<li>
												<a href="about.html">About Us</a>
												<!-- <ul class="agri-ul">
													<li><a href="about.html">About Page</a></li>
													<li>
														<a href="#0">Services Page</a>
														<ul class="agri-ul">
															<li><a href="service.html">Services Page</a></li>
															<li><a href="service-single.html">Services detalis Page</a></li>
														</ul>
													</li>
													<li><a href="team.html">Team Page</a></li>
													<li><a href="faq-page.html">Faq Page</a></li>
													<li><a href="404.html">404 Page</a></li>
												</ul> -->
											</li>
											<li class="active">
												<a href="gallery-grid2.php">Gallery</a>
												<!-- <ul class="agri-ul">
													<li class="active"><a href="gallery-grid2.html">Gallery 2 Grid</a></li>
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
												<a href="#">Shop</a>
												<ul class="agri-ul">
													<li><a href="product-page.html">Product</a></li>
													<li><a href="product-single.html">Product Single</a></li>
													<li><a href="cart-page.html">Cart Page</a></li>
												</ul>
											</li> -->
											<li><a href="contact-us.html">Contact Us</a></li>
											<div class="language"><a id="google_translate_element"></a></div>
										</ul>
									</div>
									<!-- <div class="header-btn">
										<a href="#" class="lab-btn"><span>Get in Touch</span></a>
									</div> -->
								</div>
						  	</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!-- Header section ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay overlay-gallery"></div>
            <div class="container">
                <div class="page-header-content-area">
                    <h4 class="ph-title">Our Gallery</h4>
					<p style="text-align: center; color: white;">We here at Fruits Gallery are here to provide the customers needs. Come in today and get your fruits at its best.</p>
                    <!-- <ul class="agri-ul">
                        <li><a href="index.html">Home</a></li>
                        <li><a class="active">Gallery 2 Columns</a></li>
                    </ul> -->
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
		
        <!-- product section start here -->
		<div class="product-section grid-2 padding-tb">
			<div class="container">
				<div class="section-wrapper">
					<div class="row justify-content-center">
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/mahua-icone.webp" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
									
                                </div>
								<div class="enquiry-button-div">
								<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/mahua-img.jpg" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
								<div class="enquiry-button-div">
								<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/img-4.webp" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
								<div class="enquiry-button-div">
									<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/img-2.jpg" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
								<div class="enquiry-button-div">
									<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/img-3.webp" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
								<div class="enquiry-button-div">
									<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/mahua-img1.jpg" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
								<div class="enquiry-button-div">
									<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
										<img style="height:450px" src="assets/images/product/mahua-img2.jpg" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
								<div class="enquiry-button-div">
									<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
								</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <img style="height:450px" src="assets/images/product/mahua-img10.jpg" alt="product">
                                    </div>
                                    <div class="product-content">
                                        <a href="#" class="product-name">MAHUA</a>
                                    </div>
                                </div>
                            </div>
							<div class="enquiry-button-div">
								<button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- product section ending here -->
        
        <!-- newsletters section start here -->
		<!-- <div class="newsletter-section">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<div class="newsletter-title">
							<h4>Subscribe Our Newsletter</h4>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="newsletter-form">
							<form action="/" class="d-flex flex-wrap">
								<input type="text" placeholder="Enter Your Email" class="input-email">
								<input type="submit" value="Subscribe" class="subscribe-btn">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- newsletters section ending here -->
        
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
</html>