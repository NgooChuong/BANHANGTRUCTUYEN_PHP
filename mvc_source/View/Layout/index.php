<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Xpoge</title>

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="<?php echo URL_LAYOUT?>/images/fav-icon.png" rel="icon">
    <?php
        require_once 'Home/css.php';
    ?>

	</head>
	<body>
		<!-- Start preloader -->
		<div id="preloader"></div>
		<!-- End preloader -->

		<!-- Search Screen start -->
		<div class="sidebar-search-wrap">
		    <div class="sidebar-table-container">
			    <div class="sidebar-align-container">
			        <div class="search-closer right-side"></div>
			        <div class="search-container">
			          <form method="get" id="search-form">
			            <input type="text" id="s" class="search-input" name="s" placeholder="Start Searching">
			          </form>
			          <span>Search and Press Enter</span>
			        </div>
			    </div>
		    </div>
		</div>
		<!-- Search Screen end -->

		<div class="main">
			<!-- Header start -->
            <?php
                require_once 'Home/header.php';
            ?>
			<!-- Header end -->

			<!-- Product list contant start -->
            <div class="contant">
				<div id="banner-part" class="banner inner-banner">
					<div class="container">
						<div class="bread-crumb-main">
							<h1 class="banner-title">Shop</h1>
							<div class="breadcrumb">
			                    <ul class="inline">
			                        <li><a href="index.html">Home</a></li>
			                        <li>Shop</li>
			                    </ul>
			                </div>
		                </div>
					</div>
				</div>
				<?php
                    require_once $main.'.php';
                ?>
			</div>
			
			<!-- Product list contant end -->

			<!-- Newslatter section start -->
			<section class="newsletter-section align-center ptb-100">
	            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9 col-12">
                            <div class="newsletter-title">
                                <h2 class="main_title">Sign up for Newsletter </h2>
                                <p>Wants to get latest updates! sign up for Free </p>
                            </div>
                            <div class="newsletter-input">
                                <form>
                                    <div class="form-group m-0">
                                        <input type="email" placeholder="Your email address" required="">
                                    </div>
                                    <button type="submit" class="btn btn-color"><span class="d-none d-sm-block">Subscribe</span> <i class="fa fa-send d-block d-sm-none"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
	            </div>
	        </section>
	        <!-- Newslatter section end -->

			<!-- Footer section start -->
			<footer class="footer-part">
				<div class="container">
					<div class="footer-top ptb-100">
						<div class="mb_-30">
							<div class="row">
								<div class="col-12 col-lg-3 col-md-6">
									<div class="footer-about mb-sm-30">
										<div class="footer-logo">
											<a href="index.html">
												<img src="<?php echo URL_LAYOUT?>/images/logo.png" alt="logo">
											</a>
										</div>
										<p class="footer-p">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh mauris sit amet nibh. Donec sodales sagittis</p>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-6">
									<div class="footer-static-block">
										<span class="opener plus"></span>
										<h3 class="head-three">Information</h3>
										<ul class="footer-menu footer-block-contant">
											<li><a href="contact.html">Contact Us</a></li>
											<li><a href="javascript:void(0)">Brands</a></li>
											<li><a href="blog-left-col.html">Blog</a></li>
											<li><a href="javascript:void(0)">Returns</a></li>
											<li><a href="javascript:void(0)">Privacy Policy</a></li>
										</ul>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-6">
									<div class="footer-static-block">
										<span class="opener plus"></span>
										<h3 class="head-three">My Account</h3>
										<ul class="footer-menu footer-block-contant">
											<li><a href="javascript:void(0)">Order History</a></li>
											<li><a href="wishlist.html">Wish List</a></li>
											<li><a href="javascript:void(0)">Newsletter</a></li>
											<li><a href="javascript:void(0)">Specials</a></li>
											<li><a href="javascript:void(0)">Gift Certificates</a></li>
										</ul>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-6">
									<div class="footer-static-block">
										<span class="opener plus"></span>
										<h3 class="head-three">Contact us</h3>
										<div class="contact-box footer-block-contant">
				                			<ul>
				                				<li>
				                					<div class="contact-thumb">
				                						<img src="<?php echo URL_LAYOUT?>/images/address-icon.svg" alt="xpoge">
				                					</div>
				                					<div class="contact-box-detail">
				                						<p>869 Lexington Ave, New York, NY 10065, USA</p>
				                					</div>
				                				</li>
				                				<li>
				                					<div class="contact-thumb">
				                						<img src="<?php echo URL_LAYOUT?>/images/phone-icon.svg" alt="xpoge">
				                					</div>
				                					<div class="contact-box-detail">
				                						<p>+91 123 456 789 0</p>
				                					</div>
				                				</li>
				                				<li>
				                					<div class="contact-thumb">
				                						<img src="<?php echo URL_LAYOUT?>/images/mail-icon.svg" alt="xpoge">
				                					</div>
				                					<div class="contact-box-detail">
				                						<p>xpoge@hi123.com</p>
				                					</div>
				                				</li>
				                			</ul>
				                		</div>
				                	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom align-center">
						<div class="row">
							<div class="col-12">
								<div class="w-100">
									<p class="mb-0">© Xpoge all Rights Reserverd theme by <a href="https://TemplatesCoder.com/" target="_blank" title="TemplatesCoder">TemplatesCoder</a></p>
								</div>
							</div>
							<div class="col-12">
								<div class="social-media">
									<ul>
										<li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer section end -->
		</div>
		<!-- <script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/custom.js"></script> -->
        <?php
             require_once 'Home/js.php';
        ?>
	</body>
	
</html>
