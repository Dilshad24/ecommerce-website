<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
include("db.php");
include("functions/functions.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add to cart page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="grid.css"><!--------used as main css file ------->
	<link rel="stylesheet" type="text/css" href="cart.css">
	<style>
		.cart_update_btn{
	background: green;
	color: white;
	border: none;
	padding: 5px;
	font-size: 15px;
	border-radius: 4px;
}
.cart_update_btn:hover{
	background: grey;
}
.cart_buynow_a{
	text-decoration: none;
	background: blue;
	color: white;
	font-size: 15px;
	border-radius: 4px;
	padding: 5px;
}
.cart_buynow_a:hover{
	background: grey;
}
#emailchek{
margin-left: 30px;
color:red;
}	
	

@media only screen and (max-width: 560px) {
#emailchek{
	margin-left: 5px;
	font-size: 95%;
	margin-top: 5px;
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
		        			<li style=""><a href="my_account.php">Account</a></li>
		        			<li style=""><a href="settings.php">Settings</a></li>
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
			<a href="specifictypeproduct.php" id="shop11">Shop</a>
			<p id="slash11">|</p>
			<a href="index.php" id="b2home"  class="b2hc" style="color: #00b7ff;">Home</a>
			<p>></p>
			<a href="cart.php" id="b2cart" class="b2hc">Cart</a>
		</div>
	</div>

	<div class="cartcontainer">
		<div class="ccontainer1">
					<p id="cc1p1">Shopping Cart</p>
			<?php
			if (isset($_SESSION['email'])) {
			
				$ip_add =getrealipuser();
				$check_email=$_SESSION['email'];
				$connection_cart="select * from cart where email='$check_email'";
				// $connection_cart="select * from cart where ip_add='$ip_add'";
				$run_cart=mysqli_query($connn,$connection_cart);
				$count=mysqli_num_rows($run_cart);
				}
			?>
			<?php if (!isset($_SESSION['email'])) { echo "<h1 id='emailchek'>Please Login!</h1>"; } ?>
			<p id="cc1p2">You currently have <?php if (isset($_SESSION['email'])) { echo $count; }else{  } ?> items in your cart</p>
		<form action="cart.php" method="post" enctype="multipart/form-data">	
			<div class="cartbox">
				<table class="carttable">
		            <tr id="table_tr">
		                <th id="table_th1" ><p>Product</p></th>
		                <th id="table_th2"><p >Name</p></th>
		                <th id="table_th3"><p>Quantity</p></th>
		                <th id="table_th4"><p>Price</p></th>
		                <th id="table_th5"><p>Total</p></th>
		                <th id="table_th6"><p>Delete</p></th>
		            </tr>
		            <?php 
		            if (isset($_SESSION['email'])) {
		            $total=0;
		            while ( $row_cart=mysqli_fetch_array($run_cart)) {
		            	$pro_id=$row_cart['p_id'];
		            	$pro_qty=$row_cart['qty'];
		            	$check_email=$_SESSION['email'];
		            	$get_products= "select * from products where id='$pro_id'";
		            	$run_products=mysqli_query($connn,$get_products);
		            	while($row_products= mysqli_fetch_array($run_products)){
		            		$product_title=$row_products['product_title'];
		            		$product_img1=$row_products['product_img1'];
		            		$product_price=$row_products['product_price'];
		            		$Sub_total=$row_products['product_price']*$pro_qty;	
		            		$total+=$Sub_total;
		            	}
		            ?>
		            <tr id="table_tr2" >
		                <th class="img_th"><img src="products/<?php echo $product_img1 ?>" alt=""></th>
		                <th><a href="product.php?pro_id=<?php echo $pro_id ?>" class="table_tr2a"><?php  echo $product_title ?></a></th>
		                <th><input type="number" class="quantity" value="<?php echo $pro_qty ?>"></th>
		                <th><p>Rs <?php echo $product_price ?></p></th>

		                <th><p>RS <?php echo $Sub_total ?></p></th>
		                <!---<th><button class="remove_btn"><p>Remove</p></button></th> ----->
		                <th><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></th>
		            </tr>
		            <?php } } ?>
		        </table>
		        
		        <center>	
			        <table class="buytable">
			            <tr id="buytabletr">
			                <th id="buytableth1"><p>Total</p></th>
			                <th id="buytableth2"><p>Rs <?php if (isset($_SESSION['email'])) { echo $total; }else{echo "00000";} ?></p></th>
			                <th id="buytableth3"><button type="submit" name="update" class="cart_update_btn" ><p>Update Cart</p></button></th>
			                <th id="buytableth3"><a class="cart_buynow_a" href="<?php if (isset($_SESSION['email'])) { if($total!=0){echo "checkout.php";}} ?>">Checkout</a></th>
			            </tr>
			        </table>
		    	</center>
			</div>
		</form>
		</div>

		<?php  
		        	function update_cart(){
		        		$db=mysqli_connect('localhost','root',"","website");
		        		if(isset($_POST['update'])){
		        			$check_email=$_SESSION['email'];
		        			foreach($_POST['remove'] as $remove_id) {
		        				$delete_product="delete from cart where p_id='$remove_id' AND email='$check_email'";
		        				$run_delete=mysqli_query($db,$delete_product);
		        				if ($run_delete) {
		        					echo "<script>window.open('cart.php','_self') </script>";
		        				}
		        				else{
		        					echo "<script>alert('error')</script>";
		        				}
		        			}
		        		}
		        	}

		        	echo @$up_cart=update_cart();

		        ?>
		
		<div class="ccontainer2">
			<center>
				<p class="cc2p1">Order Summery</p>
			</center>
			<center>
				<p class="cc2p2">Shipping and additional cost will be calculated based on value you have entered</p>
			</center>
			
				<p class="cc2p3"> <strong>Order Sub-total :</strong> Rs <?php if (isset($_SESSION['email'])) { echo $total; }else{echo "00000";} ?></p>
			
			
				<p class="cc2p4"> <strong>Shipping and Handling :</strong> Rs 0</p>
			
			
				<p class="cc2p5"> <strong>Tax :</strong> Rs 0</p>

				<p class="cc2p6"> <strong>Total :</strong> Rs <?php if (isset($_SESSION['email'])) { echo $total; }else{echo "00000";} ?></p>
			
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

	
</body>
</html>
