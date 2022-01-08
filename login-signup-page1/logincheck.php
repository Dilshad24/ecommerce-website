
<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
include '../functions/functions.php';

// $con=mysqli_connect('localhost','root');
	$con=db();
if ($con) {
	//echo "connection successful";
}else{
	echo "no connection";
}

$db =mysqli_select_db($con, 'website');
if(isset($_POST['submit'])){
	$email =$_POST['email'];
	$password=$_POST['password'];
	$sql= "select * from  logindatatable where email='$email' and
	 password='$password'"; 


	$query=mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);

		if($row==1){
			$email_name=mysqli_fetch_assoc($query);
			$db_name=$email_name['name'];
			$_SESSION['username']=$db_name;
			echo "login successful";
			$_SESSION['email']=$email;
			header('location:../index.php');
			$_SESSION['removelogin']=1;

		}else{
			echo "login failed";
			header('location:login-signup.php');
		}
}



?>