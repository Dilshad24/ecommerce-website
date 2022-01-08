<?php
// include("db.php");
include("functions/functions.php");

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Easy Shopping.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="grid.css"><!--------used as main css file ------->
	<link rel="stylesheet" href="product-slider/swiper.min.css"><!--------used for product slider ------->



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
		        			<li style=""><a href="my_account.php">My Account</a></li>
		        			<li style=""><a href="">Settings</a></li>
		        			<li style=""><a href="login-signup-page1/logout.php">Logout</a></li>
		        		</ul>

		        		</li>
		        	</ul>
		        	<!--- <p class="userpre"><?php echo $_SESSION['username'] ?></p> -->
		        </div>
				<?php }else{ ?>
		     		<a  href="login-signup-page1/login-signup.php" >Login</a>
				<?php } ?>
			</div><!---- log in with php ends ------>
		</div><!---- header2 endss ------>
	</div><!------ header ends----->
	<div class="contaner"><!---- conainer start-->
		<div class="div1">
				<a href="specifictypeproduct.php">Shop</a>
		</div>
		<div class="div2"><!---- sidebar  start-->
			<div class="div21">
					<ul>
						<li><p>TOP CATAGORIES</p>
							<ul>
								<?php
									getCats();
								?>
							</ul>		
						</li>
					</ul>
					<ul class="ull">
						<li><p class="p2" style="padding-bottom: 0px;">MORE CATAGORIES</p>
							<ul>
								<?php
									getPCats();
								?>
							</ul>
						</li>
					</ul>
			</div>
			<div class="div22">
				<img src="images/qr-code.png">
			</div>
		</div> <!---- sidebar  ends-->
		<div class="div3 middle"><!---- slider  start-->
	      <div class="slides">
		        <input type="radio" name="r" id="r1" checked>
		        <input type="radio" name="r" id="r2">
		        <input type="radio" name="r" id="r3">
		        <input type="radio" name="r" id="r4">
		        <input type="radio" name="r" id="r5">
		        <!------ Slide1 starts ------>
		        <?php
					$get_slide= "select * from  slider limit 0,1"; 
					$run_slider=mysqli_query(db(),$get_slide);
			      	while ($row_slide=mysqli_fetch_array($run_slider)) {
			        	$slide_name=$row_slide['slide_name'];
			        	$slide_image=$row_slide['slide_image'];
			    		echo "
			    		<div class='slide s1'>
			         		 <a href='product.php?pro_id=41'><img src='$slide_image' alt=''></a>
			        	</div>
						";
					}
			    ?><!------ Slide1 ends ------>
			    <!------ Slide2 starts ------>
			    <?php
			        $get_slide= "select * from  slider limit 1,1"; 
					$run_slider=mysqli_query(db(),$get_slide);
			      	while ($row_slide=mysqli_fetch_array($run_slider)) {
			        	$slide_name=$row_slide['slide_name'];
			        	$slide_image=$row_slide['slide_image'];
			    		echo "
			    		<div class='slide'>
			         		 <a href='index.php'><img src='$slide_image' alt=''></a>
			        	</div>
						";
					}
			    ?><!------ Slide2 ends ------>
			    <!------ Slide3 starts ------>
			   	<?php
			        $get_slide= "select * from  slider limit 2,1"; 
					$run_slider=mysqli_query(db(),$get_slide);
			      	while ($row_slide=mysqli_fetch_array($run_slider)) {
			        	$slide_name=$row_slide['slide_name'];
			        	$slide_image=$row_slide['slide_image'];
			    		echo "
			    		<div class='slide'>
			         		 <a href='index.php'><img src='$slide_image' alt=''></a>
			        	</div>
						";
					}
			    ?><!------ Slide3 ends ------>
			    <!------ Slide4 starts ------>
			    <?php
			        $get_slide= "select * from  slider limit 3,1"; 
					$run_slider=mysqli_query(db(),$get_slide);
			      	while ($row_slide=mysqli_fetch_array($run_slider)) {
			        	$slide_name=$row_slide['slide_name'];
			        	$slide_image=$row_slide['slide_image'];
			    		echo "
			    		<div class='slide'>
			         		 <a href='index.php'><img src='$slide_image' alt=''></a>
			        	</div>
						";
					}
			    ?><!------ Slide4 ends ------>
			    <!------ Slide5 starts ------>
			    <?php
			        $get_slide= "select * from  slider limit 4,1"; 
					$run_slider=mysqli_query(db(),$get_slide);
			      	while ($row_slide=mysqli_fetch_array($run_slider)) {
			        	$slide_name=$row_slide['slide_name'];
			        	$slide_image=$row_slide['slide_image'];
			    		echo "
			    		<div class='slide'>
			         		 <a href='index.php'><img src='$slide_image' alt=''></a>
			        	</div>
						";
					}
			    ?><!------ Slide5 ends ------>
		      </div> 
		      <div class="navigationdiv">
			      <div class="navigation">
			        <label for="r1" class="bar"></label>
			        <label for="r2" class="bar"></label>
			        <label for="r3" class="bar"></label>
			        <label for="r4" class="bar"></label>
			        <label for="r5" class="bar"></label>
			      </div>
	      		</div>
		</div><!---- slider  ends-->
		<div class="div4"><!-----product-poster1---------->
			<?php
			        $get_p_poster= "select * from   product_poster limit 0,1"; 
					$run_p_poster=mysqli_query(db(),$get_p_poster);
			      	while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			        	$poster_name=$row_p_poster['p_poster_name'];
			        	$poster_image=$row_p_poster['p_poster_image'];
			    		echo "
							<a href=''><img src='$poster_image'></a>
						";
					}
			    ?>
		</div><!-----product-poster1---------->
		<div class="div5">
			<?php
			        $get_p_poster= "select * from   product_poster limit 1,1"; 
					$run_p_poster=mysqli_query(db(),$get_p_poster);
			      	while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			        	$poster_name=$row_p_poster['p_poster_name'];
			        	$poster_image=$row_p_poster['p_poster_image'];
			    		echo "
							<a href=''><img src='$poster_image'></a>
						";
					}
			    ?>
		</div><!-----product-poster2---------->
		<div class="div6">
			<?php
		        $get_p_poster= "select * from   product_poster limit 2,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!-----product-poster3---------->
	</div> <!---- conainer end -->
	<!------ Product Section 1 -------------->
	<div class="productcontainer"><!------ productcontainer starts------->
		<div class="productsubcontainer1"><!------ productsubcontainer1 starts------->
			<div class="subcontainer11">
				<p>Smartphones Deals</p>
			</div>
			<div class="subcontainer12">
				<a href="specifictypeproduct.php?p_cat=1">view More</a>
			</div>
		</div><!------ productsubcontainer1 ends------->
		<div class="productsubcontainer2"><!------ productsubcontainer2 starts------->
			<div class="swiper-container"><!------Product Slider Starts -----> 
			    <div class="swiper-wrapper">
					<!------- Product slider For Smartphone and Accessories 1-8 ---------->
					<?php 
						getProSmartphoneAndAccessories();
					?>
					<!------- Product slider For Smartphone and Accessories 1-8 Ends---------->
			    </div><!----- swiper-wrapper ends  --->
			</div><!------Product Slider Ends -----> 
		</div><!------ productsubcontainer2 ends------->
	</div><!------ productcontainer Ends------->
	<!------ Product Section 1 End -------------->
	<!------ Product Link Section 1 -------------->
	<div class="productimagelinks"><!-- productimagelinks starts-,-contain product-poster 4,5,6-->
		<div class="pimagelink1">
			<?php
		        $get_p_poster= "select * from   product_poster limit 3,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!---------product-poster4---------->
		<div class="pimagelink1">
			<?php
		        $get_p_poster= "select * from   product_poster limit 4,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!---------product-poster5---------->
		<div class="pimagelink1 removeinmobile">
			<?php
		        $get_p_poster= "select * from   product_poster limit 5,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!---------product-poster6---------->
	</div><!------ productimagelinks ends------->
	<!------ Product Link Section 1 Ends -------------->
	<!------ Product Section 2 -------------->
	<div class="productcontainer"><!------ productcontainer starts------->
		<div class="productsubcontainer1"><!------ productsubcontainer1 starts------->
			<div class="subcontainer11">
				<p>Mens Fashion</p>
			</div>
			<div class="subcontainer12">
				<a href="specifictypeproduct.php?cat=4">view More</a>
			</div>
		</div><!------ productsubcontainer1 ends------->
		<div class="productsubcontainer2"><!------ productsubcontainer2 starts------->
			<div class="swiper-container"><!------Product Slider Starts -----> 
			    <div class="swiper-wrapper">
					<?php
					getProMenFashion()
					?>
			    </div><!----- swiper-wrapper ends  --->
			</div><!------Product Slider Ends -----> 
		</div><!------ productsubcontainer2 ends------->
	</div><!------ productcontainer Ends------->
	<!------ Product Section 2 End-------------->
	<!------ Product Section 3 -------------->
	<div class="productcontainer"><!------ productcontainer starts------->
		<div class="productsubcontainer1"><!------ productsubcontainer1 starts------->
			<div class="subcontainer11">
				<p>Womens Fashion</p>
			</div>
			<div class="subcontainer12">
				<a href="specifictypeproduct.php?cat=5">view More</a>
			</div>
		</div><!------ productsubcontainer1 ends------->
		<div class="productsubcontainer2"><!------ productsubcontainer2 starts------->
			<div class="swiper-container"><!------Product Slider Starts -----> 
			    <div class="swiper-wrapper">
				<?php
					getProWomenFashion()
				?>
			    </div><!----- swiper-wrapper ends  --->
			</div><!------Product Slider Ends -----> 
		</div><!------ productsubcontainer2 ends------->
	</div><!------ productcontainer Ends------->
	<!------ Product Section 3 End -------------->
		<!------ Product Section 4 -------------->
	<div class="productcontainer"><!------ productcontainer starts------->
		<div class="productsubcontainer1"><!------ productsubcontainer1 starts------->
			<div class="subcontainer11">
				<p>Mobile And Accessories</p>
			</div>
			<div class="subcontainer12">
				<a href="specifictypeproduct.php?cat=1">view More</a>
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
	</div><!------ productcontainer Ends------->
	<!------ Product Section 4 End-------------->
	<!------ Product Link Section 1 -------------->
	<div class="productimagelinks"><!-- productimagelinks starts-,-contain product-poster 7,8,9-->
		<div class="pimagelink1">
			<?php
		        $get_p_poster= "select * from   product_poster limit 6,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!---------product-poster7---------->
		<div class="pimagelink1">
			<?php
		        $get_p_poster= "select * from   product_poster limit 4,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!---------product-poster8---------->
		<div class="pimagelink1 removeinmobile">
			<?php
		        $get_p_poster= "select * from   product_poster limit 5,1"; 
				$run_p_poster=mysqli_query(db(),$get_p_poster);
			    while ($row_p_poster=mysqli_fetch_array($run_p_poster)) {
			       	$poster_name=$row_p_poster['p_poster_name'];
			       	$poster_image=$row_p_poster['p_poster_image'];
			   		echo "
						<a href=''><img src='$poster_image'></a>
					";
				}
			?>
		</div><!---------product-poster9---------->
	</div><!------ productimagelinks Ends------->
	<!------ Product Link Section 1 Ends -------------->
	<div class="additionalcontent"><!------ additionalcontent starts------->
		 <div class="contentcode11"><a href=""><img src="images/aa2.jpg"></a></div>
		 <div class="contentcode11"><a href=""><img src="images/aa3.jpg"></a></div>
		 <div class="contentcode11"><a href=""><img src="images/aa4.jpg"></a></div>
		 <div class="contentcode11"><a href=""><img src="images/aa1.png"></a></div>

		 <div class="contentcode12"><a href=""><img src="images/aa2.jpg"></a></div>
		 <div class="contentcode12"><a href=""><img src="images/aa3.jpg"></a></div>
		 <div class="contentcode12"><a href=""><img src="images/aa4.jpg"></a></div>
		 <div class="contentcode12"><a href=""><img src="images/aa1.png"></a></div>
	</div><!------ additionalcontent ends------->
	<div class="aditionallist"><!------ aditionallist starts------->
	<!-- 	<img src="images/footerup.png" alt=""> -->
	</div><!------ aditionallist Ends------->
	<div class="footer"><!------ footer starts------->
		<div class="footerp1 footerp">
	   		<p>Copyright &copy; 2017, EasyShopping Private Limited. All Rights Reserved</p>
	   	</div>
	   	<div class="footerp2 footerp">	
	   		<p>Made with &#x2764; in india</p>
		</div>
	</div><!------ footer Ends------->

<!------	
<script type="text/javascript">
	$(document).ready(function(){
		$("#searchtextf").keyup(function(){
			var searchText=$(this).val();
			if(searchText!=''){
				$.ajax({
					url:'action.php',
					method:'post',
					data:{query:searchText},
					success:function(responce){
						$("#show_list").html(responce);
					}
				});
			}
			else{
				$("#show_list").html('');

			}
		});
		$(document).on('click','a',function(){
			$("#show_list").val($(this).text());
			$("#show_list").html('');

		});
	});
</script>	
---->
<script type="text/javascript" src="product-slider/swiper.min.js"></script><!--------used for product slider ------->
<script type="" src="product-slider/slider.js"></script><!--------used for product slider ------->
</body>
</html>


