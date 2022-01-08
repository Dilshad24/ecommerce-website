<?php
include("db.php");
include("functions/functions.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Specific products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="grid.css"><!--------used as main css file ------->
	<link rel="stylesheet" href="product-slider/swiper.min.css"><!--------used for product slider ------->
	<style>
		.candpconatiner{
			display: grid;
			grid-template-rows: auto 600;
			grid-template-columns:290px auto;
			padding-top: 90px;
			margin-bottom: 10px;
			
		}
		.candpconatiner1{
			padding: 10px;
		}

		.candpconatiner1{
			background: lightgray;
			padding: 20px;
			border-radius: 5px;
			cursor: pointer;
			margin-left: 10px;
			
		}
		.cconatner ul{
			list-style-type: none;
		}
		.cconatner ul li{
			font-weight: ;
		}
		.cconatner ul li ul{
			margin-left: 10px;
			margin-top: 5px;
			margin-bottom: 5px;
		}
		.cconatner ul li ul li a{
			font-size: 90%;
			font-weight: normal;
			margin-top: 2px;
			margin-bottom: 2px;
			color: grey;
			text-decoration: none;
		}

		.cconatner ul li ul li a:hover{
			color: white;
		}
		
		.candpconatiner2{
			margin-left: 10px;
			border-radius: 5px;
			margin-right: 10px;	
			display: block;
			padding:5px;

			
		}

		.cont1{
			width: 100%;
			
			border-radius: 5px;
		}
		.pageition{
			display: inline-flex;
		}
		.pageition ul li{
			list-style-type: none;
			padding: 5px;

		}
		.pageition ul li a{
			text-decoration: none;


		}
		.subcontainer11 p{
		padding-top: 0px;
		margin-left: 30px;
		font-size: 24px;
		font-weight: bold;
		font-family: arial;
		}
		@media only screen and (max-width: 560px) {
		.candpconatiner{
			display: grid;
			grid-template-rows: auto auto;
			grid-template-columns:25% 25% 25% 25%;
			margin-bottom: 0px;
		}
		.candpconatiner1{
			grid-column-start: 1;
			grid-column-end: 5;
			display: inline-flex;
			justify-content: center;
			margin-left: 5px;
			margin-right: 5px;
			
		}
		.cconatner1 {
		margin-right: 20px;


		}
		.cconatner2 {
			margin-left: 20px;
		}
		.cconatner ul{
			list-style-type: none;


		}
		.cconatner ul li{
			
		}
		.cconatner ul li ul{
			display: none;
		}
		.cconatner ul li:hover ul{
			display: block;
		}
		.cconatner ul li ul li {
			
		}
		.candpconatiner2{
			grid-column-start: 1;
			grid-column-end: 5;
			margin-left: 0px;
			border-radius: 5px;
			margin-right: 0px;	
			display: block;
			padding:0px;
			width: 100%;

			
		}

		.cont1{
			border-radius: 5px;
		}
	
		}
	</style>
	
</head>
<body>
	<div class="header"><!------ header starts----->
		<div class="header1"><!---- header1 starts ------>
			<h6 class="div1h6">India's Fastest Online Shopping Destination</h6>
			<ul>
				<li><span style='font-size:25px;'>&#9776;</span>
					<ul>
						<li><a href="">Gift Card</a></li>
						<li><a href="">Kerala Flood Relief</a></li>
						<li><a href="">Gift Card</a></li>
						<li><a href="">Sell On Easy Shoppi</a></li>
						<li><a href=""> &#xf10b Download App</a></li>
						
					</ul>
				</li>
			</ul>	
		</div><!---- header1 ends ------>
		<div class="header2"><!---- header2 starts ------>
			<img src="images/logos/logo.png">
			<h5>EASY SHOPPING.COM</h5>	
			<input type="text" name="box" placeholder="Search Anything .......">
			<button style="">&#128269<i class="button_i">Search</i></button>
			<a href="" class="addtocart">Cart</a>
			<div class="loginsignin" style="margin-top: 15px; color: white; "><!---- log in with php starts ------>
				<?php 
				include 'login-signup-page1/logincheck.php';
				if( isset($_SESSION['removelogin']) && !empty($_SESSION['removelogin']) )
		        {
		        ?>
		        <div class="useracc">
		        	<ul>
		        		<li><p class="userpre"><?php echo $_SESSION['username'] ?>
							<ul>
		        			<li style=""><a href="">Account</a></li>
		        			<li style=""><a href="">Settings</a></li>
		        			<li style=""><a href="login-signup-page1/logout.php">Logout</a></li>
		        		</ul>

		        		</li>
		        	</ul>
		        	<!--- <p class="userpre"><?php echo $_SESSION['username'] ?></p> -->
		        	<div >
		        		
		        	</div>
		        </div>
				<?php }else{ ?>
		     		<a href="login-signup-page1/login-signup.php" ">Login</a>
				<?php } ?>
			</div><!---- log in with php ends ------>
		</div><!---- header2 endss ------>
	</div><!------ header ends----->
	<div class="candpconatiner">
		<div class="candpconatiner1">
			<div class="cconatner1 cconatner">
				<ul>
					<li>TOP CATAGORIES
						<ul>
							<?php
								getallCats();
							?>
						</ul>
					</li>
				</ul>
			</div>
			<div class="cconatner2 cconatner">
				<ul>
					<li>MORE CATAGORIES
						<ul>
							<?php
								getallpCats();
							?>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="candpconatiner2">
			<div class="cont1">
				<div class="productcontainer"><!------main productcontainer starts------->
					<div class="productsubcontainer1"><!------ productsubcontainer1 starts------->
						<div class="subcontainer11">
							<?php
								if (!isset($_GET['p_cat'])){
									if (!isset($_GET['cat'])){
										echo "
											<p>Shop</p>
										";

									}	
								}
							?>
						</div>
					</div><!------ productsubcontainer1 ends------->
					<div class="productsubcontainer2"><!------ productsubcontainer2 starts------->
						<div class="swiper-container"><!------Product Slider Starts -----> 
						    <div class="swiper-wrapper">
								<?php
								getProSmartphoneAccessories()
								?>
						    </div><!----- swiper-wrapper ends  --->
						</div><!------Product Slider Ends -----> 
					</div><!------ productsubcontainer2 ends------->
				</div><!------main productcontainer Ends------->
				<div class="productcontainer"><!------ productcontainer starts------->
					<div class="productsubcontainer2"><!------ productsubcontainer2 starts------->
						<div class="swiper-container"><!------Product Slider Starts -----> 
						    <div class="swiper-wrapper">
								<?php
								getProSmartphoneAccessories()
								?>
						    </div><!----- swiper-wrapper ends  --->
						</div><!------Product Slider Ends -----> 
					</div><!------ productsubcontainer2 ends------->
				</div><!------ productcontainer Ends------->
				<div class="productcontainer"><!------ productcontainer starts------->
					<div class="productsubcontainer2"><!------ productsubcontainer2 starts------->
						<div class="swiper-container"><!------Product Slider Starts -----> 
						    <div class="swiper-wrapper">
								<?php
								getProSmartphoneAccessories()
								?>
						    </div><!----- swiper-wrapper ends  --->
						</div><!------Product Slider Ends -----> 
					</div><!------ productsubcontainer2 ends------->
				</div><!------ productcontainer Ends------->
			</div>
		</div>	
	</div>
	<center>
		
	</center>



	<div class="footer"><!------ footer starts------->
		<div class="footerp1 footerp">
	   		<p>Copyright &copy; 2017, EasyShopping Private Limited. All Rights Reserved</p>
	   	</div>
	   	<div class="footerp2 footerp">	
	   		<p>Made with &#x2764; in india</p>
		</div>
	</div><!------ footer Ends------->
<script type="text/javascript" src="product-slider/swiper.min.js"></script><!--------used for product slider ------->
<script type="" src="product-slider/slider.js"></script><!--------used for product slider ------->
</body>
</html>
