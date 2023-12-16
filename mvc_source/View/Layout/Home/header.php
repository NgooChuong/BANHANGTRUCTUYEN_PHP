<header id="header">
				<div class="container">
					<div class="row m-0">
						<div class="col-lg-3 col-md-4 col-4 p-0">
			            	<div class="navbar-header">
				                <a class="navbar-brand page-scroll" href="index.html">
				                	<img alt="xpoge" src="<?php echo URL_LAYOUT?>/images/logo.png">
				                </a> 
			            	</div>
				        </div>
				        <div class="col-lg-9 col-md-8 col-8 p-0">
				        	<div class="right-side">
					        	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle d-block d-lg-none d-xl-none" type="button"><i class="fa fa-bars"></i>
					        	</button>
					        	<div class="overlay"></div>
					        	<div id="menu" class="navbar-collapse collapse" >
					                <ul class="nav navbar-nav">
						                <li class="level">
						                  	<a href="<?php echo URL?>" class="nav-link">Home</a>
						                </li>
						                <li class="level dropdown">
						                	<span class="opener plus"></span>
						                  	<a href="shop.html" class="nav-link">Men</a>
						                  	<div class="megamenu mobile-sub-menu">
							                    <div class="megamenu-inner-top">
							                      <ul class="sub-menu-level1">
							                        <li class="level2 "> <a href="shop.html"><span>Men Cloths</span></a>
							                          <ul class="sub-menu-level2">
							                            <li class="level3"><a href="shop.html"><span>■</span>Navy Blazer</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Sleeveless Shirt</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
							                          </ul>
							                        </li>
							                        <li class="level2"> <a href="shop.html"><span>Men Fashion</span></a>
							                          <ul class="sub-menu-level2 ">
							                            <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Belt</a></li>
							                          </ul>
							                        </li>
							                        <li class="level2"> <a href="shop.html"><span>Accessories</span></a>
							                          <ul class="sub-menu-level2 ">
							                            <li class="level3"><a href="shop.html"><span>■</span>Sunglasses</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Pocket Watch</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Gloves</a></li>
							                            <li class="level3"><a href="shop.html"><span>■</span>Socks</a></li>
							                          </ul>
							                        </li>
							                      </ul>
							                    </div>
							                </div>
						                </li>
						                <li class="level">
						                  	<a href="shop.html" class="nav-link">Women</a>
						                </li>
						                <li class="level">
						                  	<a href="shop.html" class="nav-link">Juniors</a>
						                </li>
						                <li class="level dropdown">
						                	<span class="opener plus"></span>
						                  	<a href="blog-left-col.html">Blog</a>
						                  	<div class="megamenu mobile-sub-menu">
							                    <div class="megamenu-inner-top">
							                      <ul class="sub-menu-level1">
							                        <li class="level2 ">
							                        	<ul class="sub-menu-level2">
								                            <li class="level3"><a href="blog-left-col.html"><span>■</span>Blog Left-Sidebar</a></li>
								                            <li class="level3"><a href="blog-right-col.html"><span>■</span>Blog Right-Sidebar</a></li>
								                            <li class="level3"><a href="blog-detail.html"><span>■</span>Singal Blog</a></li>
								                        </ul>
							                        </li>
							                      </ul>
							                    </div>
							                </div>
						                </li>
						                <li class="level dropdown">
						                	<span class="opener plus"></span>
						                  	<a href="#" class="nav-link">Pages</a>
						                  	<div class="megamenu mobile-sub-menu">
							                    <div class="megamenu-inner-top">
							                      <ul class="sub-menu-level1">
							                        <li class="level2 ">
							                        	<ul class="sub-menu-level2">
								                            <li class="level3"><a href="contact.html"><span>■</span>Contact</a></li>
								                            <li class="level3"><a href="checkout.html"><span>■</span>Checkout</a></li>
								                            <li class="level3"><a href="wishlist.html"><span>■</span>Wishlist</a></li>
								                            <li class="level3"><a href="404.html"><span>■</span>404</a></li>
								                        </ul>
							                        </li>
							                      </ul>
							                    </div>
							                </div>
						                </li>
					                </ul>
					            </div>
					            <div class="header-right-link">
					              <ul>
					                <li class="search-box">
					                  <a href="#"><span></span></a>
					                </li>
					                <li class="account-icon"> 
					                	<a href="#"><span></span></a>
						                <div class="header-link-dropdown account-link-dropdown">
						                    <ul class="link-dropdown-list">
						                      <li> <span class="dropdown-title">Default welcome msg!</span>
						                        <ul>
						                          <li><a href="
												  <?php echo URL?>Login"><?php
												  		$logout = '';
														if(isset($_SESSION['customer']['username'])){
															echo $_SESSION['customer']['username'];
															$logout ='Log Out';
														}
														else {
															echo $dataCustomer;
															$logout = "";
														}
												  	?>
												  </a></li>
						                          <li><a href="register.html">Create an Account</a></li>

												  <li><a href="<?php echo URL."Layout/logout";?>"><?php echo $logout?></a></li>
						                        </ul>
						                      </li>
						                      <li> <span class="dropdown-title">Language :</span>
						                        <ul>
						                          <li><a class="active" href="#">English</a></li>
						                          <li><a href="#">French</a></li>
						                          <li><a href="#">German</a></li>
						                        </ul>
						                      </li>
						                      <li> <span class="dropdown-title">Currency :</span>
						                        <ul>
						                          <li><a class="active" href="#">USD</a></li>
						                          <li><a href="#">AUD</a></li>
						                          <li><a href="#">EUR</a></li>
						                        </ul>
						                      </li>
						                    </ul>
						                </div>
					                </li>
					                <li class="cart-icon"> 
					                	<a href="<?php echo URL.'Cart'?>"> <span> <small class="cart-notification">
											<?php 
												if(isset($_SESSION['cart'])){
													echo count($_SESSION['cart']);
												}
												else echo 0;
											?>
										</small> </span> </a>
					                </li>
					              </ul>
					            </div>
				            </div>
				        </div>
					</div>
				</div>
			</header>