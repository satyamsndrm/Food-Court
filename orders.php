<?php
include "db_access.php";

session_start();
if(isset($_POST['action'])){
	$rlno=(isset($_POST['rlno']))?mysqli_real_escape_string($db,$_POST['rlno']):"";
	$hlno=(isset($_POST['hostel']))?mysqli_real_escape_string($db,$_POST['hostel']):"";
	$email=(isset($_POST['email']))?mysqli_real_escape_string($db,$_POST['email']):"";
	$mob_no=(isset($_POST['mob_no']))?mysqli_real_escape_string($db,$_POST['mob_no']):"";
	$orders=(isset($_POST['orders']))?$_POST['orders']:"";
//	print_r($orders);
//	echo $orders;
$message="";
	$order='';
	$fail=false;
	
	
	if((count($orders)!=0) AND $orders!=""){
		for($i=0;$i<count($orders);$i++){
			$order.= $orders[$i];
			if($i<count($orders)-1){
				$order.=' , ';
			}
		}
	}
	if(!empty($rlno) AND !empty($hlno) AND !empty($email) AND !empty($mob_no) AND !empty($order) ){
		$sql="INSERT INTO orders 
			(id,roll_no,hostel,email,mob_no,ordr,d_upl)
			VALUES
			(NUlL,'$rlno','hlno','$email','$mob_no','$order','".date('Y-m-d H:i:s')."')";
		mysqli_query($db, $sql) or die(mysqli_error($db));
		$idd=mysqli_insert_id($db);
		
		$to1="satyamsndrm@gmail.com , akshaypanwar025168@gmail.com";
		
		$to="8209774463@vtext.com , 9936822713@vtext.com";
		$message=wordwrap("Hostel:-$hlno \n Mob No:-$mob_no \n Order:-\n $order " , 70 );
		$subject="";
		$headers = 'From: sundaramsatyam0@gmail.com'."\r\n";
		
		mail($to,$subject,$message,$headers);
		
		mail($to1,"FCNITJ ORDER",$message,$headers);
		
	}else{
		$fail=true;
		$head="Order-Failed";
		$msg="Somehow Your Order has been failed.</br>Make sure you have added the product by clicking add items.</br> If problem persist, Contact us on (+91)8209774463.";
	}
/*	*/
}



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
                                <a href="#" class="list-entry">Satyam</a>
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

			<div class="">
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6 col-xs-12">
<?php
if(isset($fail)){
if(!$fail){

?>
						<div class="panel panel-success">
							<div class="panel-heading" style="font-size:20px;"><b style="font-size:22px; font-weight:800;">Voila ! </b>. Your order has been received. We will soon deliver it to you.</div>
							<div class="panel-body" style="font-size:22px;">We will soon call you on the Mobile No provided to confirm the order.</br><b style="font-weight:800;">If you don't recieve call in 10 minutes do call us to confirm your order.</b></div>
						</div>
<?php
}elseif($fail){
	
?>		
						<div class="panel panel-danger">
							<div class="panel-heading" style="font-size:20px;"><?php echo $head; ?></div>
							<div class="panel-body" style="font-size:22px;"><?php echo $msg; ?></div>
						</div>
<?php

}
}else{
	echo '<img src="img/nothing.jpg" class="img-responsive" >';
}
if(isset($_GET['showme'])){
	$sql='SELECT * from orders ORDER BY d_upl DeSC LIMIT 20 ';
	$res=mysqli_query($db,$sql) or die(mysqli_error($db));
	echo '<table class="table table-bordered">
			<tr><th>S.No</th><th>Mob No</th><th>Hostel</th><th>Order</th></tr>';
	while($row=mysqli_fetch_assoc($res)){
		extract($row);
		echo "<tr><td>$id</td><td>$mob_no</td><td>$hostel</td><td>$ordr</td></tr>";
	}
	echo '</table>';
}

?>
					</div>
				</div>
			<div class="row" style="height:400px;">
			
			</div>
			</div>

        </div>
        <div class="clear"></div>

    </div>

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