<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body{
/*.bgimg {*/
    background-image: url("image.jpg");
    min-height: 200%;
    background-position: center top;
    background-size: cover;

}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('register').style.display='block'" class="w3-button w3-black">Register</button></p>
    <p><button onclick="document.getElementById('signin').style.display='block'" class="w3-button w3-black">Signin</button></p>
  </div>
</div>

<!-- Signup Modal -->
<div id="register" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Signup</h1>
    </div>
    <form action= "Signup.php" method="post">

			<div class="username">
				<span class="username">First name:</span>
				<input type="text" name="Firstname" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Last name:</span>
				<input type="text" name="Lastname" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Email:</span>
				<input type="text" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Confirm Password:</span>
				<input type="password" name="cpassword" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>

			<div class="login-w3">
					<input type="submit" class="login w3-button w3-black" value="Sign Up">
			</div>
			<div class="clearfix"></div>
		</form>
  </div>
</div>

<!-- Login Modal -->
<div id="signin" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('signin').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>SignIn</h1>
    </div>
    <div class="w3-container">
      <!-- <h2>Sign In</h2> -->
  		<form action="SignIn.php" method="POST">
  			<div class="Email">
  				<span class="Email">Email:</span>
  				<input type="text" name="Email" class="name" placeholder="" required="">
  				<div class="clearfix"></div>
  			</div>
  			<div class="password-agileits">
  				<span class="username">Password:</span>
  				<input type="password" name="password" class="password" placeholder="" required="">
  				<div class="clearfix"></div>
  			</div>

  			<div class="login-w3">
  					<input type="submit" class="login w3-button w3-black" value="Sign In">
  			</div>
  			<div class="clearfix"></div>
  		</form>
    </div>
  </div>
</div>

</body>
</html>
<?php
include 'SignIn.php';

if (isset($_POST['UserId']))
{
	include 'Signup.php';
	exit();
}
?>
