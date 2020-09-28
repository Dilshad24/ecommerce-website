<?php
include("db.php");
include("functions/functions.php");
include 'login-signup-page1/logincheck.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="grid.css"><!--------used as main css file ------->
	<link rel="stylesheet" type="text/css" href="product.css">
	
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
			
			<a href="index.php" id="b2home"  class="b2hc" style="color: #00b7ff;">Home</a>
			<p>></p>
			<a href="specifictypeproduct.php" id="b2cart" class="b2hc">Shop</a>
			<p>></p>
			<?php  producttitle(); ?>
		</div>
	</div>
	<div class="productcontainer">
		<div class="productcontainer1st">
			<?php 
				add_cart(); 
			?>
			<?php
				productcard();
			?>
				
			</div>
		</div>
		<div class="productcontainer2nd">
			<?php
			productdetail();
			?>
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


<script type="text/javascript">
	var container =document.getElementById("image-container")
	function change_img(image){
		container.src=image.src;
	}
</script>	
</body>
</html>

<?php  
function add_cart(){
	$db=mysqli_connect('localhost','root',"","website");
	if(isset($_GET['add_cart'])){
        
        $ip_add = getrealipuser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = 1;
        $check_email=$_SESSION['email'];
        $check_product = "select * from cart where email='$check_email' AND p_id='$p_id'"; 
        //$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'"; // when we what that one product can be added to cart bye one devece using is ip address of device 
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('product.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (p_id,ip_add,qty,email) values ('$p_id','$ip_add','$product_qty','$check_email')";
            
            $run_query = mysqli_query($db,$query);

            echo "<script>window.open('product.php?pro_id=$p_id','_self')</script>";

            
        }
        
    }

    
}


?>