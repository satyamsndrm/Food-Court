<?php
include "db_access.php";
?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/logol.png" />
  	<title>FCNITJ</title>
	
</head>
<body class="style-3">

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>
    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->
            <div class="header-wrapper style-3">
                <header class="type-1">

				<div class="header-top">
                      <div class="header-top-entry">
                            <div class="title"><img src="" alt="" />Developers <span class="caret caret-down"></span></div>
                            <div class="list">
                                <a href="#" class="list-entry">Satya</a>
                                <a href="https://www.instagram.com/darshandeep7/" class="list-entry" target="_blank">Darshan</a>
                            </div>
                        </div>
                        <div class="header-top-entry">
                            <div class="title"><b>Payment:</b> Rs <span class="caret caret-down"></span></div>
                            <div class="list">
                                <a href="#" class="list-entry">Cash On Delivery</a>
                            </div>
                        </div>
                        <div class="header-top-entry hidden-xs">
                            <div class="title"><i class="fa fa-phone"></i>Any question? Call Us <a href="tel:(+91)8209774463"><b>(+91)8209774463</b></a></div>
                        </div>
                        <div class="socials-box">
                        </div>

                        <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                        <div class="clear"></div>
                    </div>

                    <div class="header-middle">
                        <div class="logo-wrapper">
                            <a id="logo" href="home1.php"><img src="img/logo3.jpg" alt="" /></a>
                        </div>

                        <div class="middle-entry">
                            <a class="icon-entry" href="#">
                                <span class="image">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <span class="text">
                                    <b>Contact Info</b> <br/> (+91) 8209774463
                                </span>
                            </a>
                            <a class="icon-entry" href="#">
                                <span class="image">
                                    <i class="fa fa-car"></i>
                                </span>
                                <span class="text">
                                    <b>Free Delivery</b>
                                </span>
                            </a>
                        </div>
<!--	-->
                        <div class="right-entries">
                            <a class="header-functionality-entry" href="http://www.ezengineering.in" target="_blank"><i class="fa fa-copy"></i><span style="font-size:18px;font-weight:700;">Supported by Ezengineering.com</span></a>
                        </div>

                    </div>

                    <div class="close-header-layer"></div>
                    <div class="navigation">
                        <div class="navigation-header responsive-menu-toggle-class">
                            <div class="title">Navigation</div>
                            <div class="close-menu"></div>
                        </div>
                        <div class="nav-overflow">
 <!-- -->                   
<!--  -->
							<nav>
                                <ul>
								   <li class="full-width-columns">
                                        <a href="#">Food Items</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/pizza.jpg"></div>
                                                <div class="submenu-list-title"><a href="contact.html">Pizza</a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
														 <li><a href="products.php?id=1"><i class="fa fa-angle-right"></i>Veg Pizza( 100 )</a></li>
														 <li><a href="products.php?id=2"><i class="fa fa-angle-right"></i>Cheese Margherita( 80 )</a></li>
														 <li><a href="products.php?id=3"><i class="fa fa-angle-right"></i>Onion Mushroom Caps(100)</a></li>
														 <li><a href="products.php?id=4"><i class="fa fa-angle-right"></i>Chilly Paneer Pizza( 110 )</a></li>
														 <li><a href="products.php?id=5"><i class="fa fa-angle-right"></i>Spicy Mushroom Pizza( 110 )</a></li>
														 <li><a href="products.php?id=6"><i class="fa fa-angle-right"></i>Double Cheese Pizza( 100 )</a></li>
														 <li><a href="products.php?id=7"><i class="fa fa-angle-right"></i>Mushroom Paneer Pizza( 100 )</a></li>
														 <li><a href="products.php?id=8"><i class="fa fa-angle-right"></i>Special Pizza( 120 )</a></li>
														 <li><a href="products.php?id=9"><i class="fa fa-angle-right"></i>Cheese Burst Pizza( 150 )</a></li>
                                                    </ul>
                                                </div>
                                                <div class="hot-mark">hot</div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/burger.jpg"></div>
                                                <div class="submenu-list-title"><a href="about-1.html">Burger</a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
														 <li><a href="products.php?id=10"><i class="fa fa-angle-right"></i>Veg Burger( 25 )</a></li>
														 <li><a href="products.php?id=11"><i class="fa fa-angle-right"></i>Noodles Burger( 30 )</a></li>
														 <li><a href="products.php?id=12"><i class="fa fa-angle-right"></i>Mix Veg Burger(35)</a></li>
														 <li><a href="products.php?id=13"><i class="fa fa-angle-right"></i>Spicy Yummy Burger( 35 )</a></li>
														 <li><a href="products.php?id=14"><i class="fa fa-angle-right"></i>Cheese Burger( 40 )</a></li>
														 <li><a href="products.php?id=15"><i class="fa fa-angle-right"></i>Jumbo Burger( 50 )</a></li>
														 <li><a href="products.php?id=16"><i class="fa fa-angle-right"></i>Italian Burger( 60 )</a></li>
														 <li><a href="products.php?id=17"><i class="fa fa-angle-right"></i>Burger Pizza( 70 )</a></li>
														 <li><a href="products.php?id=18"><i class="fa fa-angle-right"></i>Macroni Burger( 35 )</a></li>
                                                    </ul>
                                                </div>
                                                <div class="hot-mark yellow">sale</div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/wrap.jpg"></div>
                                                <div class="submenu-list-title"><a href="cart.html">Foot Long & Marine</a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
														 <li><a href="products.php?id=19"><i class="fa fa-angle-right"></i>Veg Foot Long( 50 )</a></li>
														 <li><a href="products.php?id=20"><i class="fa fa-angle-right"></i>Paneer Foot Long( 50 )</a></li>
														 <li><a href="products.php?id=21"><i class="fa fa-angle-right"></i>Mushroom Foot Long(50)</a></li>
														 <li><a href="products.php?id=22"><i class="fa fa-angle-right"></i>Veg Marine( 50 )</a></li>
														 <li><a href="products.php?id=23"><i class="fa fa-angle-right"></i>Paneer Marine( 50 )</a></li>
														 <li><a href="products.php?id=24"><i class="fa fa-angle-right"></i>Cheesy Marine( 50 )</a></li>
														 <li><a href="products.php?id=25"><i class="fa fa-angle-right"></i>Seekh Kabab Marine( 50 )</a></li>
														 <li><a href="products.php?id=26"><i class="fa fa-angle-right"></i>Garlic Bread( 70 )</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/shake.jpg"></div>
                                                <div class="submenu-list-title"><a href="teaser-background.html">Shakes</a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
														 <li><a href="products.php?id=27"><i class="fa fa-angle-right"></i>Strawberry Shake( 50 )</a></li>
														 <li><a href="products.php?id=28"><i class="fa fa-angle-right"></i>Chocolate Shake( 50 )</a></li>
														 <li><a href="products.php?id=29"><i class="fa fa-angle-right"></i>Banana Shake( 50 )</a></li>
														 <li><a href="products.php?id=30"><i class="fa fa-angle-right"></i>Mango Shake( 50 )</a></li>
														 <li><a href="products.php?id=31"><i class="fa fa-angle-right"></i>Vanilla Shake( 50 )</a></li>
														 <li><a href="products.php?id=32"><i class="fa fa-angle-right"></i>Butter Scotch Shake( 50 )</a></li>
														 <li><a href="products.php?id=33"><i class="fa fa-angle-right"></i>Black Current Shake( 50 )</a></li>
														 <li><a href="products.php?id=34"><i class="fa fa-angle-right"></i>Sizzing Brownie( 60 )</a></li>
                                                    </ul>
                                                </div>
                                                <div class="hot-mark">hot</div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/sandwich.jpg"></div>
                                                <div class="submenu-list-title"><a href="shop.html">Sandwich</a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
														 <li><a href="products.php?id=35"><i class="fa fa-angle-right"></i>Grilled Potato Sandwich( 40 )</a></li>
														 <li><a href="products.php?id=36"><i class="fa fa-angle-right"></i>Cheese Grilled Sandwich( 50 )</a></li>
														 <li><a href="products.php?id=37"><i class="fa fa-angle-right"></i> Mushroom Grilled Sandwich( 50 )</a></li>
														 <li><a href="products.php?id=38"><i class="fa fa-angle-right"></i>Spicy Paneer Sandwich( 50 )</a></li>
														 <li><a href="products.php?id=39"><i class="fa fa-angle-right"></i>Fruit Cocktail Sandwich( 50 )</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="simple-list">
                                        <a>Pizza</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
												 <li><a href="products.php?id=1"><i class="fa fa-angle-right"></i>Veg Pizza( 100 )</a></li>
												 <li><a href="products.php?id=2"><i class="fa fa-angle-right"></i>Cheese Margherita( 80 )</a></li>
												 <li><a href="products.php?id=3"><i class="fa fa-angle-right"></i>Onion Mushroom Caps(100)</a></li>
												 <li><a href="products.php?id=4"><i class="fa fa-angle-right"></i>Chilly Paneer Pizza( 110 )</a></li>
												 <li><a href="products.php?id=5"><i class="fa fa-angle-right"></i>Spicy Mushroom Pizza( 110 )</a></li>
												 <li><a href="products.php?id=6"><i class="fa fa-angle-right"></i>Double Cheese Pizza( 100 )</a></li>
												 <li><a href="products.php?id=7"><i class="fa fa-angle-right"></i>Mushroom Paneer Pizza( 100 )</a></li>
												 <li><a href="products.php?id=8"><i class="fa fa-angle-right"></i>Special Pizza( 120 )</a></li>
												 <li><a href="products.php?id=9"><i class="fa fa-angle-right"></i>Cheese Burst Pizza( 150 )</a></li>
                                            </ul>
                                        </div>
                                    </li>
									
                                    <li class="simple-list">
                                        <a>Burger</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
												 <li><a href="products.php?id=10"><i class="fa fa-angle-right"></i>Veg Burger( 25 )</a></li>
												 <li><a href="products.php?id=11"><i class="fa fa-angle-right"></i>Noodles Burger( 30 )</a></li>
												 <li><a href="products.php?id=12"><i class="fa fa-angle-right"></i>Mix Veg Burger(35)</a></li>
												 <li><a href="products.php?id=13"><i class="fa fa-angle-right"></i>Spicy Yummy Burger( 35 )</a></li>
												 <li><a href="products.php?id=14"><i class="fa fa-angle-right"></i>Cheese Burger( 40 )</a></li>
												 <li><a href="products.php?id=15"><i class="fa fa-angle-right"></i>Jumbo Burger( 50 )</a></li>
												 <li><a href="products.php?id=16"><i class="fa fa-angle-right"></i>Italian Burger( 60 )</a></li>
												 <li><a href="products.php?id=17"><i class="fa fa-angle-right"></i>Burger Pizza( 70 )</a></li>
												 <li><a href="products.php?id=18"><i class="fa fa-angle-right"></i>Macroni Burger( 35 )</a></li>
                                            </ul>
                                        </div>
                                    </li>
									
                                    <li class="simple-list">
                                        <a>Foot Long & Marine</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
											<ul class="simple-menu-list-column">
												 <li><a href="products.php?id=19"><i class="fa fa-angle-right"></i>Veg Foot Long( 50 )</a></li>
												 <li><a href="products.php?id=20"><i class="fa fa-angle-right"></i>Paneer Foot Long( 50 )</a></li>
												 <li><a href="products.php?id=21"><i class="fa fa-angle-right"></i>Mushroom Foot Long(50)</a></li>
												 <li><a href="products.php?id=22"><i class="fa fa-angle-right"></i>Veg Marine( 50 )</a></li>
												 <li><a href="products.php?id=23"><i class="fa fa-angle-right"></i>Paneer Marine( 50 )</a></li>
												 <li><a href="products.php?id=24"><i class="fa fa-angle-right"></i>Cheesy Marine( 50 )</a></li>
												 <li><a href="products.php?id=25"><i class="fa fa-angle-right"></i>Seekh Kabab Marine( 50 )</a></li>
												 <li><a href="products.php?id=26"><i class="fa fa-angle-right"></i>Garlic Bread( 70 )</a></li>
                                            </ul>
                                        </div>
                                    </li>
									
                                    <li class="simple-list">
                                        <a>Shakes & Beverages</a><i class="fa  fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
												 <li><a href="products.php?id=27"><i class="fa fa-angle-right"></i>Strawberry Shake( 50 )</a></li>
												 <li><a href="products.php?id=28"><i class="fa fa-angle-right"></i>Chocolate Shake( 50 )</a></li>
												 <li><a href="products.php?id=29"><i class="fa fa-angle-right"></i>Banana Shake( 50 )</a></li>
												 <li><a href="products.php?id=30"><i class="fa fa-angle-right"></i>Mango Shake( 50 )</a></li>
												 <li><a href="products.php?id=31"><i class="fa fa-angle-right"></i>Vanilla Shake( 50 )</a></li>
												 <li><a href="products.php?id=32"><i class="fa fa-angle-right"></i>Butter Scotch Shake( 50 )</a></li>
												 <li><a href="products.php?id=33"><i class="fa fa-angle-right"></i>Black Current Shake( 50 )</a></li>
												 <li><a href="products.php?id=34"><i class="fa fa-angle-right"></i>Sizzing Brownie( 60 )</a></li>
												 <li><a href=""><i class="fa fa-angle-right"></i>ColdDrinks</a></li>
                                            </ul>
                                        </div>
                                    </li>
									
                                    <li class="simple-list">
                                        <a>Sandwich</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
												 <li><a href="products.php?id=35"><i class="fa fa-angle-right"></i>Grilled Potato Sandwich( 40 )</a></li>
												 <li><a href="products.php?id=36"><i class="fa fa-angle-right"></i>Cheese Grilled Sandwich( 50 )</a></li>
												 <li><a href="products.php?id=37"><i class="fa fa-angle-right"></i> Mushroom Grilled Sandwich( 50 )</a></li>
												 <li><a href="products.php?id=38"><i class="fa fa-angle-right"></i>Spicy Paneer Sandwich( 50 )</a></li>
												 <li><a href="products.php?id=39"><i class="fa fa-angle-right"></i>Fruit Cocktail Sandwich( 50 )</a></li>
                                            </ul>
                                        </div>
                                    </li>
									
                                    <li class="simple-list">
                                        <a>Wrap</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <ul class="simple-menu-list-column">
												 <li><a href="products.php?id=40"><i class="fa fa-angle-right"></i>Veg Wrap( 40 )</a></li>
												 <li><a href="products.php?id=41"><i class="fa fa-angle-right"></i>Veg kathi Roll( 30 )</a></li>
												 <li><a href="products.php?id=42"><i class="fa fa-angle-right"></i>Cheese kathi Roll( 50 )</a></li>
												 <li><a href="products.php?id=43"><i class="fa fa-angle-right"></i>New Zig Zag Wrap( 50 )</a></li>
												 <li><a href="products.php?id=44"><i class="fa fa-angle-right"></i>Cheese Wrap( 50 )</a></li>
												 <li><a href="products.php?id=45"><i class="fa fa-angle-right"></i>New Dunkin Duck Wrap( 60 )</a></li>
												
											</ul>
                                        </div>
                                    </li>
									
                                    <li class="fixed-header-visible">
                                        <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>

                                <div class="clear"></div>

                                <a class="fixed-header-visible additional-header-logo"><img src="" alt=""/></a>
                            </nav>
                            <div class="navigation-footer responsive-menu-toggle-class">
                            </div>
                        </div>
                    </div>
                </header>
                <div class="clear"></div>
            </div>

            <div class="content-push">
				<div class="information-blocks">
					<div class="mozaic-banners-wrapper type-2">
						<div class="row">
							<div class="banner-column col-md-3 ">
								<div class="row">
									<div class="banner-column col-md-12 col-sm-6">
										<div class="mozaic-banners-wrapper type-3">
											<a class="mozaic-banner-entry type-3" style="background-image: url(img/burger.jpg);">
												<span class="mozaic-banner-content">
													<span class="subtitle">Category</span>
													<span class="title">Burger</span>
													<span class="description"></span>
												</span>
											</a>
										</div>
									</div>
									<div class="banner-column col-md-12 col-sm-6">
										<div class="mozaic-banners-wrapper type-3">
											<a class="mozaic-banner-entry type-3" style="background-image: url(img/shake.jpg);">
												<span class="mozaic-banner-content">
													<span class="subtitle">Category</span>
													<span class="title">Shakes</span>
													<span class="description"></span>
												</span>
											</a>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="banner-column col-md-6">
								
								<div class="mozaic-swiper">
									<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
										<div class="swiper-wrapper">
											<div class="swiper-slide"> 
												<div class="mozaic-banner-entry type-1" style="background-image: url(img/pizza3.jpg);">
													<div class="mozaic-banner-content">
														<h3 class="subtitle" style="color:black;">Rs. (80-150)</h3>
														<h2 class="title">Pizza</h2>
														<div class="description"></div>
														<div class="button style-5" href="#">order now</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide"> 
												<div class="mozaic-banner-entry type-1" style="background-image: url(img/sandwich.jpg);">
													<div class="mozaic-banner-content">
														<h3 class="subtitle" style="color:black;">Rs. (40-50)</h3>
														<h2 class="title">Sandwich</h2>
														<div class="description"></div>
														<div class="button style-5" href="#">order now</div>
													</div>
												</div>
											</div>
										</div>
										<div class="pagination"></div>
									</div>
								</div>
							</div>
							<div class="banner-column col-md-3">
								<div class="row">
									<div class="banner-column col-md-12 col-sm-6">
										<div class="mozaic-banners-wrapper type-3">
											<a class="mozaic-banner-entry type-3" style="background-image: url(img/sandwich1.jpg);">
												<span class="mozaic-banner-content">
													<span class="subtitle">Category</span>
													<span class="title">Sandwich</span>
													<span class="description"></span>
												</span>
											</a>
										</div>
									</div>
									<div class="banner-column col-md-12 col-sm-6">
										 <div class="mozaic-banners-wrapper type-3">
											<a class="mozaic-banner-entry type-3" style="background-image: url(img/wrap.jpg);">
												<span class="mozaic-banner-content">
													<span class="subtitle">Category</span>
													<span class="title">Wrap</span>
													<span class="description"></span>
												</span>
											</a>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
  
				<div class="row">
                    
                    <div class="col-md-9 col-md-push-3">
					
                        <div class="information-blocks">
                            <div class="tabs-container">
                                <div class="swiper-tabs tabs-switch">
                                    <div class="title">Products</div>
                                    <div class="list">
                                        <a class="block-title tab-switcher active">Recommended Products</a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="tabs-entry">
                                        <div class="products-swiper">
                                            <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                                <div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/momos.jpg" alt="" />
                                                                    <div class="bottom-line">
                                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Only in Rs 50</a>
                                                                    </div>
                                                                </div>
                                                                <a class="tag" href="#">Special</a>
                                                                <a class="title" href="#">Veg Momos(10 pcs) </a>
                                                                <div class="price">
                                                                    <div class="current">Rs 50</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide"> 
                                                        <div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/img/smiley.jpg" alt="" />
                                                                    <div class="bottom-line">
                                                                        <div class="left-align">
                                                                            <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Rs 60 only</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="tag" href="#">Special</a>
                                                                <a class="title" href="#">Smileys(12 pcs)</a>
                                                                <div class="price">
                                                                    <div class="current">Rs 60</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide"> 
                                                        <div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/img/french fries.jpg" alt="" />
                                                                    <div class="bottom-line left-attached">
                                                                    </div>
                                                                </div>
                                                                <a class="tag" href="#">Special</a>
                                                                <a class="title" href="products.php?id=47">French Fries</a>
                                                                <div class="price">
                                                                    <div class="current">Rs 50</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide"> 
                                                        <div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/pizza.jpg" alt="" />
                                                                    <div class="bottom-line">
                                                                        <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Only in Rs 100</a>
                                                                    </div>
                                                                </div>
                                                                <a class="tag" href="#">Mushroom Pizza</a>
                                                                <a class="title" href="#">Onion Mushroom Capsicum </a>
                                                                <div class="price">
                                                                    <div class="current">Rs 100</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide"> 
                                                        <div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/burger.jpg" alt="" />
                                                                    <div class="bottom-line">
                                                                        <div class="left-align">
                                                                            <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Rs 40 only</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="tag" href="#">Burger</a>
                                                                <a class="title" href="#">Cheese Cream Burger</a>
                                                                <div class="price">
                                                                    <div class="current">Rs 40</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide"> 
                                                        <div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/sandwich1.jpg" alt="" />
                                                                </div>
                                                                <a class="tag" href="#">Sandwich</a>
                                                                <a class="title" href="#">Paneer Grilled Sandwich</a>
                                                                <div class="price">
                                                                    <div class="current">Rs 50</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide"> 
                                                        <div class="paddings-container">
                                                            <div class="product-slide-entry">
                                                                <div class="product-image">
                                                                    <img src="img/wrap.jpg" alt="" />
                                                                    <div class="bottom-line left-attached">
                                                                    </div>
                                                                </div>
                                                                <a class="tag" href="#">Wrap</a>
                                                                <a class="title" href="#">Cheese Wrap</a>
                                                                <div class="price">
                                                                    <div class="current">Rs 50</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pagination"></div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
						
					<div class="information-entry" style="">
						<h3 class="block-title main-heading">Place Your Order</h3>
						<form method="post" action="orders.php">
							<label>Your Roll No <span>*</span></label>
							<input class="simple-field" type="text" name="rlno" placeholder="Your Roll No" required value="" />
							<label>Your Hostel <span>*</span></label>
							<input class="simple-field" type="text" name="hostel" placeholder="Your Hostel" required value="" />
							<label>Your Email <span>*</span></label>
							<input class="simple-field" type="email" name="email" placeholder="Your email address (required)" required value="" />
							<label>Your Mobile No <span>*</span></label>
							<input class="simple-field" type="text" name="mob_no" placeholder="Your Mobile No (required)" required value="" />
							<label>Your Order <span>*</span></label>
							<div class="row" style="margin-bottom:7px;">
								<div class="col-sm-2 col-xs-3">
										<select id="order-qty" class="form-control" style="height:43px;">
											<option value="1">Quantity</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>		
										</select>
								</div>

								<div class="col-sm-5 col-xs-5">
									<select id="order-item" class="form-control" style="height:43px;">
										<option value="">Choose your item</option>
										<?php
											$sql = 'SELECT i_name FROM items';
											$res=mysqli_query($db,$sql) or mysqli_error($db);
											while($row=mysqli_fetch_array($res)){
												extract($row);
												echo "<option value='$i_name'>$i_name</option>";
											}
										?>		
									</select>
								</div>
								<div class="col-sm-4 col-xs-4">
									<input class="button style-10" type="button" id="add_item" name="add" value="Add Item" />
								</div>
							</div>
							<div class="clear"></div>
							<div class="row">
								<div class="col-sm-12">
									<div id="order-input">
<!--										<div id="1" style="display:inline;margin-right:8px;">
											<input type="text" class="button style-2" name="orders[]" value="1 veg Pizza"/><a id="1" class="fa fa-close cancel-item"></a>
											
										</div>
										<div id="2" style="display:inline;margin-right:8px;">
											<input type="text" class="button style-2" name="orders[]" value="1 veg Pizza"/><a id="2" class="fa fa-close cancel-item"></a>
										</div>
-->
									</div>
								</div>
							</div>
							<input class="button style-10" value="Place Order" name="action" type="submit" />
						</form>
<script type="text/javascript">
$(function(){
	var i=1;
	
	
	$("#add_item").click(function(){
//		alert("hello");
		var item= $("#order-item").val();
		var qty= $("#order-qty").val();
		var toput= qty+" "+item ;
		if(item!=""){
			var pre = $("#order-input").html();
			var toapnd='<div id="'+i+'" style="display:inline;margin-right:8px;"><input type="text" class="button style-2" name="orders[]" value="'+toput+'" readonly/></div>';
			var ht=pre+' '+toapnd;
			$("#order-input").html(ht);
			i=i+1;
		}
		
		$("#order-item").val("");
		$("#order-qty").val("1");
	});
	
	
	$("a.cancel-item").click(function(e){
//		alert('helo');
		var pt=e.target.id;
		$("div#"+pt).remove();
		
	});
});
</script>						
					</div>
                        <div class="clear"></div>

                    </div>
 
					<div class="col-md-3 col-md-pull-9 sidebar-column">
                       
                        <div class="information-blocks">
                            <h3 class="block-title">About FCNITJ</h3>
                            <div class="text-widget">
                                <img class="image" src="img/logol.png" alt="" />
                                <div class="description">Pull up a Chair.Take a Taste.Come join us.Life is so endlessly Delicious.</div>
                               
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

				</div>

                <!-- FOOTER -->
                <div class="footer-wrapper style-3" style="margin-top:8px;">
                    <footer class="type-1">
                        
                        <div class="footer-bottom-navigation">
                            <div class="cell-view">
                                <div class="footer-links">
                                    <a href="#">We deliver a high quality product</a>
                                    <a href="#">No Returns</a>
                                    <a href="#">Contact us on (+91)8209774463</a>
                                </div>
                                <div class="copyright">Created by <a href="https://www.instagram.com/darshandeep7/" target="_blank">Darshan.</a>. All right reserved</div>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>

        </div>
        <div class="clear"></div>

    </div>


    <div class="cart-box popup">
        <div class="popup-container">
            <div class="cart-entry">
                <a class="image"><img src="img/sandwich.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Fruit Cocktail Sandwich</a>
                    <div class="price">Rs 50</div>
                </div>
            </div>
            <div class="cart-entry">
                <a class="image"><img src="img/wrap.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">New Dunkin Duck Wrap</a>
                    <div class="price">Rs 60</div>
                </div>
            </div>
            <div class="cart-buttons">
                <div class="column">
                    <div class="button style-4">recommended</div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

	<div id="product-popup" class="overlay-popup">
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container">

                        <div class="row">
                            <div class="col-sm-6 information-entry">
                                <div class="product-preview-box">
                                    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-1.jpg" alt="" data-zoom="img/product-main-1-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-2.jpg" alt="" data-zoom="img/product-main-2-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-3.jpg" alt="" data-zoom="img/product-main-3-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-4.jpg" alt="" data-zoom="img/product-main-4-zoom.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pagination"></div>
                                        <div class="product-zoom-container">
                                            <div class="move-box">
                                                <img class="default-image" src="img/product-main-1.jpg" alt="" />
                                                <img class="zoomed-image" src="img/product-main-1-zoom.jpg" alt="" />
                                            </div>
                                            <div class="zoom-area"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-hidden-edges">
                                        <div class="swiper-container product-thumbnails-swiper" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide selected">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 information-entry">
                                <div class="product-detail-box">
                                    <h1 class="product-title">T-shirt Basic Stampata</h1>
                                    <h3 class="product-subtitle">Loremous Clothing</h3>
                                    <div class="rating-box">
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="rating-number">25 Reviews</div>
                                    </div>
                                    <div class="product-description detail-info-entry">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur.</div>
                                    <div class="price detail-info-entry">
                                        <div class="prev">$90,00</div>
                                        <div class="current">$70,00</div>
                                    </div>
                                    <div class="size-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Size</div>
                                        <div class="entry active">xs</div>
                                        <div class="entry">s</div>
                                        <div class="entry">m</div>
                                        <div class="entry">l</div>
                                        <div class="entry">xl</div>
                                        <div class="spacer"></div>
                                    </div>
                                    <div class="color-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Color</div>
                                        <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                        <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                        <div class="entry" style="background-color: #000;">&nbsp;</div>
                                        <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                        <div class="spacer"></div>
                                    </div>
                                    <div class="quantity-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Quantity</div>
                                        <div class="entry number-minus">&nbsp;</div>
                                        <div class="entry number">10</div>
                                        <div class="entry number-plus">&nbsp;</div>
                                    </div>
                                    <div class="detail-info-entry">
                                        <a class="button style-10">Add to cart</a>
                                        <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="tags-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Tags:</div>
                                        <a href="#">bootstrap</a>/
                                        <a href="#">collections</a>/
                                        <a href="#">color/</a>
                                        <a href="#">responsive</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="close-popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>
</html>