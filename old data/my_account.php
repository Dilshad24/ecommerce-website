<?php
include("db.php");
include("functions/functions.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="grid.css"><!--------used as main css file ------->
	<link rel="stylesheet" type="text/css" href="my_account.css">
	
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
		        			
		        			<li style="settings.php"><a href="">Settings</a></li>
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
			<a href="specifictypeproduct.php" id="shop11">Shop</a>
			<p id="slash11">|</p>
			<a href="index.php" id="b2home"  class="b2hc" style="color: #00b7ff;">Home</a>
			<p>></p>
			<a href="my_account.php" id="b2cart" class="b2hc">My Account</a>
			<?php
				if (isset($_GET['my_orders'])) {
				echo "
					<p>></p>
					<a href='my_account.php?my_orders' id='b2cart' class='b2hc'>My Orders</a>
				";
			}
			?>
			<?php
				if (isset($_GET['change_password'])) {
				echo "
					<p>></p>
					<a href='my_account.php?change_password' id='b2cart' class='b2hc'>Change Password</a>
				";
			}
			?>
			<?php
				if (isset($_GET['delete_account'])) {
				echo "
					<p>></p>
					<a href='my_account.php?delete_account' id='b2cart' class='b2hc'>Delete Account</a>
				";
			}
			?>	

		</div>
	</div>
	<div class="acountcontainer">
		<div class="accountinfo">
			<center>
			<ul>
				<li class="aip1"><p>My Account</p> 
					<ul>
						<li><a href="my_account.php?my_orders"> My Orders</a></li>
						<li><a href="my_account.php?change_password"> Change Password</a></li>
						<li><a href="my_account.php?delete_account"> Delete Account</a></li>
						<li><a href="login-signup-page1/logout.php"> Log Out</a></li>
					</ul>
				</li>
			</ul>
			</center>
		</div>
		<div class="accountaction">

			<?php
				$check_email=$_SESSION['email'];
				if(isset($_POST['deletesub'])){
					$delete_acc="delete from  logindatatable where email='$check_email'";
					$run_delete_acc=mysqli_query($connn,$delete_acc);
					header('location:login-signup-page1/logout.php');

				}
			if (isset($_GET['delete_account'])) {

				

				echo "
				<div class='delete_acc'>
				<center>
				<p id='accountdelp' >Your Account Will be Permanently Delete</p>
				</center>
				<center>
					<form action='' method='post'>
						<button type='submit' name='deletesub' id='accountdelbtn'>Delete</button>
					</form>
				</center>
			</div>


				";

			}
			?>	

			<?php 
			if (isset($_GET['change_password'])) {
			echo "
	
			<center>
				<div class='cpaswardcont'>
					<center><h2 class='cph2'>Change Your Password</h2></center>
				
			
					<form action='' method='post'>
					
							<div>
								 <p>Current Password:</p> <input type='text' name='cpass'>
							</div>
							<div>
								<p>New Password: </p><input type='text' name='npass'>
							</div>
							<center>
								<button type='submit' id='cpasssubmitbtn' name='submit123'>Submit</button>
							</center>
					</form>
			
				</div>
			</center>
			";
		}
			?>

<?php
if(isset($_POST['submit123'])){
	$c_password=$_POST['cpass'];
	$n_password=$_POST['npass'];
	$check_email=$_SESSION['email'];
	$psquery="select * from  logindatatable where email='$check_email'";
	$run_psquery=mysqli_query($connn,$psquery);
	$row_psquery= mysqli_fetch_array($run_psquery);
	$current_pass=$row_psquery['password'];
	if ($c_password==$current_pass) {
		$pass_change="UPDATE logindatatable SET password = '$n_password' WHERE email = '$check_email'";
		$run_pass_change=mysqli_query($connn,$pass_change);
		echo "<script>alert('Password Change Sucessfull')</script>";

	}
}
	
?>	


			<?php

			

			if (isset($_GET['my_orders'])) {
					
				echo "

			<center>
				<div class='myordercont'>
					<center>
						<table>
							<tr id='table_tr'>
				                <th id='table_th1' class='sttth1'><p>Due Amount</p></th>
				                <th id='table_th2' class='sttth1'><p >Invoice no:</p></th>
				                <th id='table_th3' class='sttth1'><p>Products</p></th>
				                <th id='table_th4' class='sttth1'><p>Order Date</p></th>
				                <th id='table_th5' class='sttth1'><p>Paid/Unpaid</p></th>
				                <th id='table_th6' class='sttth1'><p>Status</p></th>
				            </tr>
							";	
							?>
							<?php
							$check_email=$_SESSION['email'];
							$add_orders="select * from orders where email='$check_email'";
							$run_add_orders=mysqli_query($connn,$add_orders);
							while ($row_add_orders= mysqli_fetch_array($run_add_orders)) {
								$due_price=$row_add_orders['amout_paid'];
								$noofpro=$row_add_orders['products'];
								$order_date=$row_add_orders['date'];
								$porunp=$row_add_orders['payment_mode'];
								$invoice_no=$row_add_orders['invoice_no'];

								if ($porunp!='Cash On Delivery') {
									$paidorunpaid='paid';
								}
								else{
									$paidorunpaid='unpaid';
								}

							echo "	
				            <tr id='table_tr1'>
				                <th id='table_th1' ><p>Rs $due_price</p></th>
				                <th id='table_th2'><p >$invoice_no</p></th>
				                <th id='table_th3'><p>$noofpro</p></th>
				                <th id='table_th4'><p>$order_date</p></th>
				                <th id='table_th5'><p>$paidorunpaid</p></th>
								
								";
								?>

								<?php
								if ($paidorunpaid=='unpaid') {
									echo "
										<th id='table_th6'><button class='cpbtn'>Conform Paid</button></th>
									";
								}
								else{
									echo "
										<th id='table_th6'><p>$porunp</p></th>
									";
								}
 
				            
				            ?>
				            <?php
				            echo "
				            </tr>
				            ";
							}
						echo "		
						</table>
					</center>
				</div>
			</center>
			
		</div>
			";	
				
		}
		?>
			

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

	
</body>
</html>