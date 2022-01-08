<!DOCTYPE html>
<html>
<head>
	<title>login-signup</title>
	<link rel="stylesheet" href="login-signup.css">

</head>
<body>
<?php
include '../functions/functions.php';

if(isset($_POST['submit1'])){
	$name1=mysqli_real_escape_string(db(),$_POST['name1']);
	$email1=mysqli_real_escape_string(db(),$_POST['email1']);
	$password1=mysqli_real_escape_string(db(),$_POST['password1']);
	$ip=getrealipuser();


	$emailquery="select * from logindatatable where email='$email1'";
	$query1=mysqli_query(db(),$emailquery);
	$emailcount=mysqli_num_rows($query1);
	if($emailcount>0){
		?>
		<script type="">
			alert("email already exists")
		</script>
		<?php
	}else{
		$insertquery = "insert into logindatatable (name,email,password,ip) values('$name1','$email1','$password1','$ip')";
		$iquery = mysqli_query(db(),$insertquery);
		?>
		<script type="">
			//alert("regrestration successful")
		</script>
		<?php
	}	
}
?>
	
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name1" />
			<input type="email" placeholder="Email" name="email1" />
			<input type="password" placeholder="Password" name="password1" />
			<button id="signUp1" type="submit" name="submit1">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="logincheck.php" method="POST">
			<h1></h1>
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button   name="submit" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script>
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>