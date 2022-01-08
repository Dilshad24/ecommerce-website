<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
// include("db.php");
include("functions/functions.php");
$con=db();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="grid.css"><!--------used as main css file ------->
	<link rel="stylesheet" type="text/css" href="checkout.css">
	
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
		        			<li style=""><a href="my_account.php">My Account</a></li>
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
		     		<a href="login-signup-page1/login-signup.php" >Login</a>
				<?php } ?>
			</div><!---- log in with php ends ------>
		</div><!---- header2 endss ------>
	</div><!------ header ends----->
	<div class="backtoprevious">
		<div class="btp">
			<?php
			if (isset($_GET['pro_id']))  {
			$pro_id=$_GET['pro_id'];
				$buy_pro="select * from products where id='$pro_id'";			
				$run_buy_pro=mysqli_query($con,$buy_pro);
				$row_buy_pro=mysqli_fetch_array($run_buy_pro);
				$pro_title=$row_buy_pro['product_title'];
			echo "
			<a href='specifictypeproduct.php' id='shop11'>Shop</a>
			<p id='slash11'>|</p>
			<a href='index.php' id='b2home'  class='b2hc' style='color: #00b7ff;'>Home</a>
			<p>></p>
			<a href='product.php?pro_id=$pro_id' id='b2cart' class='b2hc'>$pro_title</a>
			<p>></p>
			<a href='checkout.php' id='b2cart' class='b2hc'>Checkout</a>
			";
			}else{
			echo "
			<a href='specifictypeproduct.php' id='shop11'>Shop</a>
			<p id='slash11'>|</p>
			<a href='index.php' id='b2home'  class='b2hc' style='color: #00b7ff;'>Home</a>
			<p>></p>
			<a href='cart.php' id='b2cart' class='b2hc'>Cart</a>
			<p>></p>
			<a href='checkout.php' id='b2cart' class='b2hc'>Checkout</a>
			";
		}
			?>
		</div>
	</div>
	
	<div class="orderdetailcontainer">
		<div class="orderdetailform">
			<form action="" method="post">
				<div>
				Name:<input type="text" name="name">
				</div>
				<div>
				Contact:<input type="text" name="contact">
				</div>
				<div>
				Country:<input type="text" name="country">
				</div>
				<div>
				City:<input type="text" name="city">
				</div>
				<div>
				Address:<input id="addimput" type="text" name="address">
				</div>
				<div class="tatp">
					<center><p id="p111"> <strong> Total Amount To Pay </strong></p></center>
					<?php
					if (isset($_GET['pro_id']))  {
					$c_email=$_SESSION['email'];
					$pro_id=$_GET['pro_id'];
					$buy_pro="select * from products where id='$pro_id'";			
					$run_buy_pro=mysqli_query($con,$buy_pro);
					$row_buy_pro=mysqli_fetch_array($run_buy_pro);
					$pro_title=$row_buy_pro['product_title'];
					$total=$row_buy_pro['product_price'];
					$count_pro=1;
				
					echo "
					<center><p></p>Rs $total</p></center>
					";
						
					}else{
					$c_email=$_SESSION['email'];
					$connectio_cart="select * from cart where email='$c_email'";
					$count_pro=0;			
					$run_cart=mysqli_query($con,$connectio_cart);
					$total=0;
					while ( $row_cart=mysqli_fetch_array($run_cart)) {
					$count_pro+=1;	            	
					$check_email=$_SESSION['email'];
					$pro_id=$row_cart['p_id'];
					$pro_qty=$row_cart['qty'];
					$get_products= "select * from products where id='$pro_id'";
					$run_products=mysqli_query($con,$get_products);
					while($row_products= mysqli_fetch_array($run_products)){
						$Sub_total=$row_products['product_price']*$pro_qty;	
						$total+=$Sub_total;
						}
						}					
					echo "
					<center><p></p>Rs $total</p></center>
					";
				}
					?>
				
				</div>
				<div>
				Payment Method: <select name="paymentmethod" id="">
					<option value="Cash On Delivery">Cash On Delivery</option>
					<option value="Net Banking">Net Banking</option>
					<option value="Paytm">Paytm</option>
					<option value="Easy Shopping Walet">Easy Shopping Walet</option>
				</select>
				</div>
				<center>
				<button type="submit" id="checkoutsubmitbtn" name="submit123">Submit</button>
				</center>

				

			</form>
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
<script>ale</script>
</body>
</html>
<?php
if (isset($_GET['pro_id']))  {
if (isset($_SESSION['email'])) {
if(isset($_POST['submit123'])){
	$name =$_POST['name'];
	$contact=$_POST['contact'];
	$country =$_POST['country'];
	$invoice_no=mt_rand();
	$city=$_POST['city'];
	$address =$_POST['address'];
	$paymentmethod=$_POST['paymentmethod'];
	$c_name=$_SESSION['username'];
	$c_email=$_SESSION['email'];
	$buy_pro="select * from products where id='$pro_id'";			
	$run_buy_pro=mysqli_query($con,$buy_pro);
	$row_buy_pro=mysqli_fetch_array($run_buy_pro);
	$pro_title=$row_buy_pro['product_title'];
	$total=$row_buy_pro['product_price'];
	$count_pro=1;	
	$insertquery = "insert into orders (name,email,phone,address,date,payment_mode,country,city,products,amout_paid,invoice_no) 
	values('$name','$c_email','$contact','$address',NOW(),'$paymentmethod','$country','$city','$count_pro','$total','$invoice_no')";
	$iquery = mysqli_query($con,$insertquery);
	echo "
	<script >
		alert('Checkout Successful')
	</script>
	";
	echo "<script>window.open('checkout.php','_self') </script>";


}
}
}
else{
if (isset($_SESSION['email'])) {
if(isset($_POST['submit123'])){
	$name =$_POST['name'];
	$contact=$_POST['contact'];
	$country =$_POST['country'];
	$invoice_no=mt_rand();
	$city=$_POST['city'];
	$address =$_POST['address'];
	$paymentmethod=$_POST['paymentmethod'];
	$c_name=$_SESSION['username'];
	$c_email=$_SESSION['email'];
	$connection_cart="select * from cart where email='$c_email'";
	$count_pro=0;			
	$run_cart=mysqli_query($con,$connection_cart);
	$total=0;
	while ( $row_cart=mysqli_fetch_array($run_cart)) {
	$count_pro+=1;	            	
	$check_email=$_SESSION['email'];
	$pro_id=$row_cart['p_id'];
	$pro_qty=$row_cart['qty'];
	$get_products= "select * from products where id='$pro_id'";
	$run_products=mysqli_query($con,$get_products);
	while($row_products= mysqli_fetch_array($run_products)){
		$Sub_total=$row_products['product_price']*$pro_qty;	
		$total+=$Sub_total;
		}
	}	if ($count_pro!=0) {
		
			
		$insertquery = "insert into orders (name,email,phone,address,date,payment_mode,country,city,products,amout_paid,invoice_no) 
		values('$name','$c_email','$contact','$address',NOW(),'$paymentmethod','$country','$city','$count_pro','$total','$invoice_no')";
		$iquery = mysqli_query($con,$insertquery);
		$delete_product="delete from cart where email='$c_email'";
		$run_delete=mysqli_query($con,$delete_product);
		echo "
		<script >
			alert('Checkout Successful')

		</script>
		";
		echo "<script>window.open('checkout.php','_self') </script>";
}

}
}
}

?>
