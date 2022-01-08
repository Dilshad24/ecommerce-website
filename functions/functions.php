<?php



function db(){
	$db=mysqli_connect('localhost','root',"","website");
	return $db;
}



function getProsearch(){
	if (isset($_POST['searchsubmit'])) {
		if ($_POST['searchbox']!='') {
			$searchtext =$_POST['searchbox'];
			$db=db();
			$psquery="select * from products where product_title LIKE '%$searchtext%'";
			$run_psquery=mysqli_query($db,$psquery);
			while ($row_psquery= mysqli_fetch_array($run_psquery)) {
				$pro_title=$row_psquery['product_title'];
				$pro_id=$row_psquery['id'];
				echo"
					<div class='searcha'>
						<a href='product.php?pro_id=$pro_id'>$pro_title</a>
					</div>		
					";
			}
		}

	}
}




/// finish getProSmartphoneAndAccessories function ///
function getProSmartphoneAndAccessories(){
	$db=db();
	$get_pro= "select * from products where p_cat_id=1 limit 0,8"; 

	$run_pro=mysqli_query($db,$get_pro);
	while ($row_pro= mysqli_fetch_array($run_pro)) {

		$pro_id=$row_pro['id'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_img1=$row_pro['product_img1'];
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
					<!---	<a href=''>Add to cart</a> ---->
				</div>
			</div>
		</div>	
		";
	}
}
/// finish getProSmartphoneAndAccessories function ///
/// finish getProMenFashion function ///
function getProMenFashion(){
	
	// $db=mysqli_connect('localhost','root',"","website");
	$get_pro= "select * from products where cat_id=4 limit 0,8"; 

	$run_pro=mysqli_query(db(),$get_pro);
	while ($row_pro= mysqli_fetch_array($run_pro)) {

		$pro_id=$row_pro['id'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_img1=$row_pro['product_img1'];
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
					<!---	<a href=''>Add to cart</a> ---->
				</div>
			</div>
		</div>	
		";
	}
}
/// finish getProMenFashion function ///
/// finish getProWomenFashion function ///
function getProWomenFashion(){
	
	$get_pro= "select * from products where cat_id=5 limit 0,8"; 

	$run_pro=mysqli_query(db(),$get_pro);
	while ($row_pro= mysqli_fetch_array($run_pro)) {

		$pro_id=$row_pro['id'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_img1=$row_pro['product_img1'];
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
					<!---	<a href=''>Add to cart</a> ---->
				</div>
			</div>
		</div>	
		";
	}
}
/// finish getProWomenFashion function ///
/// finish getProSmartphoneAccessories function ///
function getProSmartphoneAccessories(){
	
	$get_pro= "select * from products where cat_id=1 limit 6,8"; 

	$run_pro=mysqli_query(db(),$get_pro);
	while ($row_pro= mysqli_fetch_array($run_pro)) {

		$pro_id=$row_pro['id'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_img1=$row_pro['product_img1'];
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
				<!---	<a href=''>Add to cart</a> ---->
				</div>
			</div>
		</div>	
		";
	}
}
/// finish getProSmartphoneAccessories function ///













// bring getcats function ///
function getCats(){
	
	$get_cats= "select * from categories limit 0,9"; 

	$run_cats=mysqli_query(db(),$get_cats);
	while ($row_cats= mysqli_fetch_array($run_cats)) {

		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		echo"
			<li>
				<a href='specifictypeproduct.php?cat=$cat_id'>$cat_title</a>
			</li>
		";
	}
}
/// finish getcats function ///
/// bring getpcats function ///
function getPCats(){
	
	$sql= "select * from product_categories limit 0,5"; 

	$query=mysqli_query(db(),$sql);
	while ($row = mysqli_fetch_array($query)) {

		$p_cat_id=$row['p_cat_id'];
		$p_cat_title=$row['p_cat_title'];
		echo"
			<li>
				<a href='specifictypeproduct.php?p_cat=$p_cat_id'>$p_cat_title</a>
			</li>
		";
	}
}
/// finish getpcats function ///


// bring getallcats function ///
function getallCats(){
	
	$get_cats= "select * from categories"; 

	$run_cats=mysqli_query(db(),$get_cats);
	while ($row_cats= mysqli_fetch_array($run_cats)) {

		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		echo"
			<li>
				<a href='specifictypeproduct.php?cat=$cat_id'>$cat_title</a>
			</li>
		";
	}
}
/// finish getallcats function ///
/// bring getallpcats function ///
function getallPCats(){
	
	$sql= "select * from product_categories  "; 

	$query=mysqli_query(db(),$sql);
	while ($row = mysqli_fetch_array($query)) {

		$p_cat_id=$row['p_cat_id'];
		$p_cat_title=$row['p_cat_title'];
		echo"
			<li>
				<a href='specifictypeproduct.php?p_cat=$p_cat_id'>$p_cat_title</a>
			</li>
		";
	}
}
/// finish getallpcats function ///


/// begin getpcatprotitle functions ///

function getpcatprotitle(){
    
    
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query(db(),$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query(db(),$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
                    <p> No Product Found </p>
            ";
            
        }else{
            
            echo "
                    <p> $p_cat_title <p>
            ";
            
        }
        
    }
    
}

/// finish getpcatprotitle functions ///

/// begin getcatprotitle functions ///

function getcatprotitle(){
    
    

    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat ="select * from categories where cat_id='$cat_id'";
        
        $run_cat = mysqli_query(db(),$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_products ="select * from products where cat_id='$cat_id'";
        
        $run_products = mysqli_query(db(),$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
                    <p> No Product Found </p>
            ";
            
        }else{
            
            echo "
                    <p> $cat_title <p>
            ";
            
        }
        
    }
    
}

/// finish getcatprotitle functions ///


//// product Detail Page Starts  /////

/////  function producttitle() starts /////
function producttitle(){
	
	if(isset($_GET['pro_id'])){
		$pro_id=$_GET['pro_id'];
		$get_product= "select * from products where id='$pro_id'";
		$run_product=mysqli_query(db(),$get_product);
		$row_product= mysqli_fetch_array($run_product);
		$p_cat_id=$row_product['p_cat_id'];
		$pro_title=$row_product['product_title'];
		$get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query(db(),$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
		
		$p_cat_title=$row_p_cat['p_cat_title'];
		echo "
		<a href='product.php?pro_id=$pro_id' id='b2cart' class='b2hc'>$pro_title</a>
		<p></p>


		";				
	}
}
/////  function producttitle() ends /////

/////  function productcard() starts /////
function productcard(){
	
	if(isset($_GET['pro_id'])){
		$product_id=$_GET['pro_id'];
		$get_product= "select * from products where id='$product_id'";
		$run_product=mysqli_query(db(),$get_product);
		$row_product= mysqli_fetch_array($run_product);
		$p_cat_id=$row_product['p_cat_id'];
		$pro_title=$row_product['product_title'];
		$pro_price=$row_product['product_price'];
		$pro_desc=$row_product['product_desc'];
		$pro_spec=$row_product['p_spec'];
		$pro_color1=$row_product['product_color1'];
		$pro_color2=$row_product['product_color2'];
		$pro_color3=$row_product['product_color3'];
		$pro_img1=$row_product['product_img1'];
		$pro_img2=$row_product['product_img2'];
		$pro_img3=$row_product['product_img3'];
		$pro_img4=$row_product['product_img4'];
		$pro_img5=$row_product['product_img5'];
		$pro_img6=$row_product['product_img6'];
		$pro_rating=$row_product['p_rating'];
		$get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query(db(),$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
		
		$p_cat_title=$row_p_cat['p_cat_title'];
		echo "
			<div class='card'>
					<div class='top-section'>
		"; ?>
				
					
						<?php echo "
						<form action='product.php?add_cart=$product_id' method='post'>
						<img id='image-container' src='products/$pro_img1'>
						<div class='card-nav'>
							<img onclick='change_img(this)' src='products/$pro_img1'>
							<img onclick='change_img(this)' src='products/$pro_img2'>
							<img onclick='change_img(this)' src='products/$pro_img3'>
							";
							?>
							<?php
							if($pro_img4!=""){
							echo "
							<img onclick='change_img(this)' src='products/$pro_img4'>
							";
							}
							?>
							<?php
							if($pro_img5!=""){
							echo "
							<img onclick='change_img(this)' src='products/$pro_img5'>
							";
							}
							?>
							<?php
							if($pro_img6!=""){
							echo "
							<img onclick='change_img(this)' src='products/$pro_img6'>
							";
							}
							?>

						<?php
						echo "
						</div>
					</div>
					<div class='product-info'>
						<div class='product-name'>$pro_title</div>
						<div class='product-rating'>*****</div>
						<div class='pcpp'>
						<div class='product-price'>Rs $pro_price</div>
						<div class='product-price-cut'>Rs 00000</div>
						<div class='product-price-cut-percentage'>0%</div>
						</div>
						<div class='cb-btn'>
						<a ><button class='cart-btn'>Add To Cart</button></a>
						<a class='buy-btn' href='checkout.php?pro_id=$product_id'>Buy Now</a> 
						</div>
					</form>
				</div>

				";
					
					
	}
}
/////  function productcard() ends /////

/////  function productdetail() starts /////
function productdetail(){
	
	if(isset($_GET['pro_id'])){
		$product_id=$_GET['pro_id'];
		$get_product= "select * from products where id='$product_id'";
		$run_product=mysqli_query(db(),$get_product);
		$row_product= mysqli_fetch_array($run_product);
		$p_cat_id=$row_product['p_cat_id'];
		$pro_title=$row_product['product_title'];
		$pro_price=$row_product['product_price'];
		$pro_desc=$row_product['product_desc'];
		$pro_spec=$row_product['p_spec'];
		$pro_color1=$row_product['product_color1'];
		$pro_color2=$row_product['product_color2'];
		$pro_color3=$row_product['product_color3'];
		$pro_img1=$row_product['product_img1'];
		$pro_img2=$row_product['product_img2'];
		$pro_img3=$row_product['product_img3'];
		$pro_img4=$row_product['product_img4'];
		$pro_img5=$row_product['product_img5'];
		$pro_img6=$row_product['product_img6'];
		$pro_rating=$row_product['p_rating'];
		$get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query(db(),$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
		
		$p_cat_title=$row_p_cat['p_cat_title'];
		echo "
			<p class='pcmainp'>$pro_title</p>
			<div class='productpagerating'>
				<p>0.0 &#9733</p>
				<a href=''>0000 rating & 0000 review</a>
				<a href=''><p class='Assured'>Easy Shopping Assured</p></a>
			</div>
			<p id='productpagediscount'>Extra &#x20B9 0000 Discount</p>
			<div class='productpageprice'>
				<p id='price1'>&#x20B9 $pro_price</p>
				<p id='price2'>&#x20B9 00000</p>
				<p id='price3'>00% Off</p>
			</div>
			<p id='productpageoffer'>Available Offer</p>
			<div class='productpageoffer'>
				<p>Bank Offer5% Unlimited Cashback on Easy Shopping Axis Bank Credit Card <a href=''>T&C</a></p>
				<p>Bank OfferExtra 5% off* with Axis Bank Buzz Credit Card <a href=''>T&C</a></p>
				<p>Special PriceGet extra ₹317 off (price inclusive of discount) <a href=''>T&C</a></p>
				<p>	&#xf073 EMI starting from ₹9767/month <a href=''>View Plans</a></p>
			</div>
			<div class='productpagebrand'>
				<p id='brand1'>Brand</p>
				<p id='brand2'>1 Year Manufacturer Warranty</p>
				<p id='brand3'><a href=''>View More</a></p>
			</div>
			<div class='productpagediscription'>
				<p class='discp1'>Description</p>
				<div class='discp2'>
					$pro_desc
				</div>
			</div>	
			<div class='productpagespecifications'>
				<p class='spcp1'>Specifications</p>
				<div class='spcp2'>
					$pro_spec
				</div>
			</div>
		";
	}
}
/////  function productdetail() ends /////

//// product Detail Page Ends  /////
///// cart page starts  //////
function getrealipuser(){
	switch (true) {
		case (!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
		case (!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
		case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): return $_SERVER['HTTP_X_FORWARDED_FOR'];
		default:return $_SERVER['REMOTE_ADDR'];
	}
}

///// cart page ends  //////


///// checkout page start   //////



///// checkout page end   //////
?>
