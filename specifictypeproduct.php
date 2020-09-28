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
	<link rel="stylesheet" type="text/css" href="specifictypeproduct.css">
	<link rel="stylesheet" href="product-slider/swiper.min.css"><!--------used for product slider ------->
	<style>

		.candpconatiner{
			display: grid;
			grid-template-rows: auto 600;
			grid-template-columns:290px auto;
			padding-top: 10px;
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
	
		@media only screen and (max-width: 560px) {
		.candpconatiner{
			display: grid;
			grid-template-rows: auto auto;
			grid-template-columns:25% 25% 25% 25%;
			margin-bottom: 0px;
			margin-top: -5px;
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
			<div class="searchcontainer">
				<div class="searchbox">
					<form action=""  method="post">
						<input type="text" name="searchbox" id="searchtextf" placeholder="Search Anything .......">
						<button type="submit" name="searchsubmit" style="">&#128269<i class="button_i">Search</i></button>
					</form>
				</div>
				<div class="mainsearcha">
					<?php  getProsearch(); ?>
				</div>
			</div>
			<a href="cart.php" class="addtocart">Cart</a>
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
		     		<a href="login-signup-page1/login-signup.php">Login</a>
				<?php } ?>
			</div><!---- log in with php ends ------>
		</div><!---- header2 endss ------>
	</div><!------ header ends----->
	<div class="backtoprevious">
		<div class="btp">
			
			<p id="slash11"></p>
			<a href="index.php" id="b2home"  class="b2hc" style="color: #00b7ff;">Home</a>
			<p>></p>
			<a href="specifictypeproduct.php" id="b2cart" class="b2hc">Shop</a>
		</div>
	</div>
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
							<?php getpcatprotitle(); ?>
							<?php getcatprotitle(); ?>
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
					</div>
			<?php 
			if (!isset($_GET['p_cat'])){
			if (!isset($_GET['cat'])){
			$start_from=0;
			$per_slide=8;
			$query = "select * from products";                
            $result = mysqli_query($con,$query);               
            $total_records = mysqli_num_rows($result);
         	for ($start_from; $start_from <=$total_records ; $start_from=$start_from+$per_slide) { 
			echo "
				<div class='productsubcontainer2'>
					<div class='swiper-container'>
						<div class='swiper-wrapper'>
				";
			?>						
							<?php
										$get_products= "Select * from products order by 1 DESC LIMIT $start_from,$per_slide";
										$run_products=mysqli_query($connn,$get_products);
										while ($row_products= mysqli_fetch_array($run_products)) {
											$pro_id=$row_products['id'];
											$pro_title=$row_products['product_title'];
											$pro_price=$row_products['product_price'];
											$pro_img1=$row_products['product_img1'];
											echo"
											<div class='swiper-slide'>
												<div class='slider-box'>
													<p class='time'>new</p>
													<div class='img-box'>
														<a href='product.php?pro_id=$pro_id'>
															<img src='products/$pro_img1'>
														</a>
													</div>
													<p class='detail'>$pro_title</p>
													<a href='product.php?pro_id=$pro_id' class='price'>Rs $pro_price</a>
													<div class='cart'>
														<a href='product.php?pro_id=$pro_id'>More Details</a>
														<!---- <a href=''>Add to cart</a>  ---->
													</div>
												</div>
											</div>	
											";
										}
									
									
							?>
							<?php					
							echo "	
						    </div>
						</div>
					</div>
				";
			}
			}
			}		
			?>
			<?php
			if(isset($_GET['p_cat'])){
	        $p_cat_id = $_GET['p_cat'];
	        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
	        $run_p_cat = mysqli_query($connn,$get_p_cat);
	        $row_p_cat = mysqli_fetch_array($run_p_cat);
	        $p_cat_title = $row_p_cat['p_cat_title'];
	        $p_cat_desc = $row_p_cat['p_cat_desc'];
        	$start_from=0;
			$per_slide=8;
			$get_products= "Select * from products where p_cat_id='$p_cat_id'";
			$run_products=mysqli_query($connn,$get_products);
            $total_records = mysqli_num_rows($run_products);
         	for ($start_from; $start_from <=$total_records ; $start_from=$start_from+$per_slide) { 
			echo "
					<div class='productsubcontainer2'>
						<div class='swiper-container'>
						    <div class='swiper-wrapper'>
				";

			?>						
								<?php
										$get_products= "Select * from products where p_cat_id='$p_cat_id' order by 1 DESC LIMIT $start_from,$per_slide";
										$run_products=mysqli_query($connn,$get_products);
										while ($row_products= mysqli_fetch_array($run_products)) {
											$pro_id=$row_products['id'];
												$pro_title=$row_products['product_title'];
												$pro_price=$row_products['product_price'];
												$pro_img1=$row_products['product_img1'];
												echo"
												<div class='swiper-slide'>
													<div class='slider-box'>
														<p class='time'>new</p>
														<div class='img-box'>
															<a href='product.php?pro_id=$pro_id'>
																<img src='products/$pro_img1'>
															</a>
														</div>
														<p class='detail'>$pro_title</p>
														<a href='product.php?pro_id=$pro_id' class='price'>Rs $pro_price</a>
														<div class='cart'>
															<a href='product.php?pro_id=$pro_id'>More Details</a>
														</div>
													</div>
												</div>	
												";
										}	
								?>

			<?php					
							echo "	
						    </div>
						</div>
					</div>
				";
			
			}
			}		
			?>
			<?php
			if(isset($_GET['cat'])){
	        $cat_id = $_GET['cat'];
	        $get_cat ="select * from categories where cat_id='$cat_id'";
        	$run_cat = mysqli_query($connn,$get_cat);
        	$row_cat = mysqli_fetch_array($run_cat);
	        $cat_title = $row_cat['cat_title'];
	        $cat_desc = $row_cat['cat_desc'];
        	$start_from=0;
			$per_slide=8;
			$get_products= "Select * from products where cat_id='$cat_id'";
			$run_products=mysqli_query($connn,$get_products);
            $total_records = mysqli_num_rows($run_products);
         	for ($start_from; $start_from <=$total_records ; $start_from=$start_from+$per_slide) { 
			echo "
					<div class='productsubcontainer2'>
						<div class='swiper-container'>
						    <div class='swiper-wrapper'>
				";

			?>						
								<?php
										$get_products= "Select * from products where cat_id='$cat_id' order by 1 DESC LIMIT $start_from,$per_slide";
										$run_products=mysqli_query($connn,$get_products);
										while ($row_products= mysqli_fetch_array($run_products)) {
											$pro_id=$row_products['id'];
												$pro_title=$row_products['product_title'];
												$pro_price=$row_products['product_price'];
												$pro_img1=$row_products['product_img1'];
												echo"
												<div class='swiper-slide'>
													<div class='slider-box'>
														<p class='time'>new</p>
														<div class='img-box'>
															<a href='product.php?pro_id=$pro_id'>
																<img src='products/$pro_img1'>
															</a>
														</div>
														<p class='detail'>$pro_title</p>
														<a href='product.php?pro_id=$pro_id' class='price'>Rs $pro_price</a>
														<div class='cart'>
															<a href='product.php?pro_id=$pro_id'>More Details</a>
															<!---<a href=''>Add to cart</a>----->
														</div>
													</div>
												</div>	
												";
										}			
								?>

			<?php					
							echo "	
						    </div>
						</div>
					</div>
				";
			
			}
			}		
			?>		
				</div>
			</div>
		</div>	
	</div>




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
<script>
	if  (screen.width <= 500 ) {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 8,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
}
</script>
</body>
</html>
