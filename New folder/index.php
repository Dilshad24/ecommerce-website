
<?php
include("db.php");
include("functions/functions.php");

?> 
<!DOCTYPE html>
<html>
<head>
	<title>EASY SHOPPING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
<div class="header">
	<div class="header1">
		<h6 class="div1h6">India's Fastest Online Shopping Destination</h6>
		<ul>
			<li><a href="">Gift Card</a></li>
			<li><a href="">Kerala Flood Relief</a></li>
			<li><a href="">Gift Card</a></li>
			<li><a href="">Sell On Easy Shoppi</a></li>
			<li><a href=""> &#xf10b Download App</a></li>
		</ul>	
	</div>
	<div class="header2">
		<img src="logos/logo.png">
	<h5>EASY SHOPPING.COM</h5>	
	<input type="text" name="box" placeholder="Search Anything .......">
	<button style="">&#128269 Search<i class=""></i></button>
	<a href="">Cart</a>
	<div class="loginsignin" style="margin-top: 15px; color: white; ">
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
	</div>


	</div>
</div>	

<div class="contaner">
	<div class="div1">
	
	</div>

	<div class="div2">
		<div class="div21">

			<ul>
				<p>TOP CATAGORIES</p>
				<li><a href="">All Offers</a></li>
				<li><a href="">Mobile & Tablets</a></li>
				<li><a href="">Electronics</a></li>
				<li><a href="">Computers & Gaming</a></li>
				<li><a href="">Home & Kitchen</a></li>
			</ul>
			<ul class="ull">
				<p class="p2" style="padding-bottom: 0px;">MORE CATAGORIES</p>
				<li><a href="" style="font-size: 80%">Men's Fashion</a></li>
				<li><a href="" style="font-size: 80%" >Women's Fashion</a></li>
				<li><a href="" style="font-size: 80%">Toy,Kid's Fashion & More</a></li>
				<li><a href="" style="font-size: 80%">Beauty,Health & Daily Needs</a></li>
				<li><a href="" style="font-size: 80%">Books,Media & Musics</a></li>
				<li><a href="" style="font-size: 80%">Sports,Fitness & Outdoor</a></li>
				<li><a href="" style="font-size: 80%">Car & Motorbike</a></li>
			</ul>

		</div>
		<div class="div22">
			<img src="images/qr-code.png">
		</div>
	</div>
	<div class="div3">	
      <div class="slides">  <!----- slides starts  -->
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">


		<?php
		$get_slide= "select * from  slider limit 0,1"; 
		$run_slider=mysqli_query($connn,$get_slide);
      	while ($row_slide=mysqli_fetch_array($run_slider)) {
        	$slide_name=$row_slide['slide_name'];
        	$slide_image=$row_slide['slide_image'];
    		echo "
    		<div class='slide s1'>
         		 <a href='main.html'><img src='$slide_image' alt=''></a>
        	</div>
			";
		}
        ?>
        <?php
        $get_slide= "select * from  slider limit 1,1"; 
		$run_slider=mysqli_query($connn,$get_slide);
      	while ($row_slide=mysqli_fetch_array($run_slider)) {
        	$slide_name=$row_slide['slide_name'];
        	$slide_image=$row_slide['slide_image'];
    		echo "
    		<div class='slide'>
         		 <a href='main.html'><img src='$slide_image' alt=''></a>
        	</div>
			";
		}
        ?>
        <?php
        $get_slide= "select * from  slider limit 2,1"; 
		$run_slider=mysqli_query($connn,$get_slide);
      	while ($row_slide=mysqli_fetch_array($run_slider)) {
        	$slide_name=$row_slide['slide_name'];
        	$slide_image=$row_slide['slide_image'];
    		echo "
    		<div class='slide'>
         		 <a href='main.html'><img src='$slide_image' alt=''></a>
        	</div>
			";
		}
        ?>
        <?php
        $get_slide= "select * from  slider limit 3,1"; 
		$run_slider=mysqli_query($connn,$get_slide);
      	while ($row_slide=mysqli_fetch_array($run_slider)) {
        	$slide_name=$row_slide['slide_name'];
        	$slide_image=$row_slide['slide_image'];
    		echo "
    		<div class='slide'>
         		 <a href='main.html'><img src='$slide_image' alt=''></a>
        	</div>
			";
		}
        ?>
        <?php
        $get_slide= "select * from  slider limit 4,1"; 
		$run_slider=mysqli_query($connn,$get_slide);
      	while ($row_slide=mysqli_fetch_array($run_slider)) {
        	$slide_name=$row_slide['slide_name'];
        	$slide_image=$row_slide['slide_image'];
    		echo "
    		<div class='slide'>
         		 <a href='main.html'><img src='$slide_image' alt=''></a>
        	</div>
			";
		}
        ?>	

        
      </div>  <!----- slides ends  -->
      <div class="navigation">
	        <label for="r1" class="bar"></label>
	        <label for="r2" class="bar"></label>
	        <label for="r3" class="bar"></label>
	        <label for="r4" class="bar"></label>
	        <label for="r5" class="bar"></label>
      	</div>	
	</div>
	<div class="div4"><a href=""><img src="deals/deal1.png"></a></div>
	<div class="div5"><a href=""><img src="deals/deal2.png"></a></div>
	<div class="div6"><a href=""><img src="deals/deal3.png"></a></div>

		<!---- product section no-1 (Deal of the day product section no-1)  start---->
	<div class="div7">
		<div class="div71">
			<h2>Deals Of The week</h2>
			<img src="logos/clock-logo.png">
			<table class="countdownContainer">
			<tr class="info2" >
				<td>Days</td>
				<td>Hours</td>
				<td>Minutes</td>
				<td>Seconds</td>
			</tr>
			<tr class="info1">
				<td id="days">120</td>
				<td id="hours">4</td>
				<td id="minutes">12</td>
				<td id="seconds">22</td>
			</tr>
			
		</table>
			<a href="">View More</a>
		</div>
		<div class="div72">
			<!---- 1st product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href="product-page/smartphone/product1.html"><img src="products/smart phone/samsung galaxy s20+/cloud-blue/samsung galaxy s20+1.png"></a>
			</div>
			<p class="detail">samsung galaxy s20 plus</p>
			<a href="" class="price">Rs 55000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>

			<!---- 2nd product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href="product-page/smartphone/product2.html"><img src="products/smart phone/iphone11 max pro/iphone11 max pro-1.png"></a>
			</div>

			<p class="detail">iphone11 max pro</p>
			<a href="" class="price">Rs 79000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>


			<!---- 3rd product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/mobile-accessories/earphone/realme-buds-21.png"></a>
			</div>

			<p class="detail">realme-buds-2</p>
			<a href="product-page/smartphone/product1.html" class="price">Rs 600</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 4th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href="product-page/men-women-fashion/product2.html"><img src="products/women-fashion/footwear/shuz-boots1.png"></a>
			</div>

			<p class="detail">shuz boots</p>
			<a href="" class="price">Rs 4000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 5th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/accessories\bands/realme-band1.png"></a>
			</div>

			<p class="detail">Realme Band</p>
			<a href="" class="price">Rs 1799</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			
		</div>
			

	</div>
			<!---- product section no-2 (Deal of the day product section no-1) ends---->
</div>
<div class="div8">
	<div class="div81">
		<!---- 6th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/men-fashion\polo/polo1.png"></a>
			</div>

			<p class="detail">Polo</p>
			<a href="" class="price">Rs 560</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
		<!---- 7th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/women-fashion\saree/saree1.png"></a>
			</div>

			<p class="detail">Saree</p>
			<a href="" class="price">Rs 5000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>

		<!---- 8th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/women-fashion\kurta/kurta1.png"></a>
			</div>

			<p class="detail">Womens Kurta</p>
			<a href="" class="price">Rs 2599</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
		<!---- 9th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/men-fashion\footwear/puma1.png"></a>
			</div>

			<p class="detail">Puma Thin Q</p>
			<a href="" class="price">Rs 3000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>

	</div>
	<div class="div82">
		<a href=""><img src="New folder/2.png"></a>
	</div>
</div>
<div class="div9">
	<div class="div91"><a href=""><img src="New folder/link1.png"></a></div>
	<div class="div91"><a href=""><img src="New folder/link2.png"></a></div>
	<div class="div91"><a href=""><img src="New folder/link3.png"></a></div>
</div>
<!---- product section no-2 (specific type product 1) ---->
<div class="div7">
		<div class="div71">
			<h2> Best SmartPhone Deals</h2>
			<div class="div711">
			<a href="product-space.html">View More</a>
			</div>		</div>
		<div class="div72">
			<!---- 10th product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/men-fashion\shirt/shirt1.png"></a>
			</div>

			<p class="detail">Turtle %100 pure fabric </p> 
			<a href="" class="price">Rs 2000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 11 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/men-fashion\track-pants/track-pant1.png"></a>
			</div>

			<p class="detail">Track Pant</p>
			<a href="" class="price">Rs 999</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 12 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/women-fashion\top/top1.png"></a>
			</div>

			<p class="detail">Top</p>
			<a href="" class="price">Rs 1200</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 13 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/men-fashion\t-shirt/t-shirt1.png"></a>
			</div>

			<p class="detail">T-shirt</p>
			<a href="" class="price">Rs 1499</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 14 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/women-fashion/footwear/shuz-boots1.png"></a>
			</div>

			<p class="detail">Shuz Boot</p>
			<a href="" class="price">Rs 5000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			
		</div>
			

	</div>
</div>
<!---- product section no-3 (specific type product 2) ---->
<div class="div7">
		<div class="div71">
			<h2>Product Type</h2>
			<div class="div711">
			<a href="product-space.html">View More</a>
			</div>
		</div>
		<div class="div72">
			<!---- 15 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/smart phone/samsung galaxy s20 ultra/samsung galaxy s20 ultra-1.png"></a>
			</div>

			<p class="detail">samsung galaxy s20+1</p>
			<a href="" class="price">Rs 55000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 16 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/mobile-accessories\wireless-earphones/apple-airpods1.png"></a>
			</div>

			<p class="detail">apple-airpods</p>
			<a href="" class="price">Rs 17000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 17 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/smart phone/realme x2/realme x2-1.png"></a>
			</div>

			<p class="detail">Realme x2</p>
			<a href="" class="price">Rs 17999</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 18 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/smart phone/samsung z flip/samsung z flip-1.png"></a>
			</div>

			<p class="detail">Samsung Z Flip</p>
			<a href="" class="price">Rs 155000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			<!---- 19 product card ---->
			<div class="slider-box">
			<p class="time">new</p>
			<div class="img-box">
				<a href=""><img src="products/mobile-accessories\headphone/cosmic-byte1.png"></a>
			</div>

			<p class="detail">Cosmic Byte</p>
			<a href="" class="price">Rs 5000</a>
			<div class="cart">
				<a href="">Add to cart</a>
			</div>
			</div>
			
		</div>
			

	</div>
</div>



<div class="aa"> 
 <div class="aa1"><a href=""><img src="images/aa2.jpg"></a></div>
 <div class="aa1"><a href=""><img src="images/aa3.jpg"></a></div>
 <div class="aa1"><a href=""><img src="images/aa4.jpg"></a></div>
 <div class="aa1"><a href=""><img src="images/aa1.png"></a></div>
</div>


<div class="footerup">
	<img src="images/footerup.png" alt="">
</div>




<div class="footer">
   <h4>Copyright 	&copy; 2017, Jasper Infotech Private Limited. All Rights Reserved</h4>
   <p>Made with &#x2764; in india</p>
</div>



<script type="text/javascript">
			 
			 function countdown() {
			 	var now = new Date();
			 	var eventDate = new Date(2020, 2, 24);

			 	var currentTiime = now.getTime();
			 	var eventTime = eventDate.getTime();

			 	var remTime = eventTime - currentTiime;

			 	 var s = Math.floor(remTime / 1000);
			 	 var m = Math.floor(s / 60);
			 	 var h = Math.floor(m / 60);
			 	 var d = Math.floor(h / 24);

			 	  h %=24;
			 	  m %=60;
			 	  s %=60;

			 	   h = (h < 10) ? "0" + h : h;
			 	   m = (m < 10) ? "0" + m : m;
			 	   s = (s < 10) ? "0" + s : s;

			 	   document.getElementById("days").textContent = d+"  :";
			 	   document.getElementById("days").innerText = d+"  :"; 

			 	   document.getElementById("hours").textContent = h +"  :";
			 	   document.getElementById("minutes").textContent = m+"  :";
			 	   document.getElementById("seconds").textContent = s;

			 	   setTimeout(countdown, 1000);
		 }
		 countdown();
		</script>


</body>
</html>