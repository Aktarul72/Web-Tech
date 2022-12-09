<?php
include '../controller/loginvalidation.php';
if (isset($_SESSION['logusername'])) {
    header("location:Dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
	<link rel="icon" href="../view/image/LOGO.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>Login Form</title>
    <style>
		#message {
			color: red;
		}
	</style>
	<script src="JS/JSValid.js"></script>

</head>
<div  class="Login_Body">
<body>

	<div class="Login">

	<h2>Login Form</h2>

 	<form name=Login action="" method="POST" onsubmit="return isLoginValid(this);">

		<p>Username</p>
		<input type="text" name="username" placeholder="Enter your username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username'] ;}; ?>">

		<p>Password</p><input type="password" name="password"  placeholder="Enter your password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password'] ;}; ?>">

		<input type="submit" name="submit" value="submit">
		<p><input type="checkbox" name="remember_checkbox">Remember Me</p>
	</form>

	<a href="ForgetPassword.php"> Forgot Password? </a>
	<br><br>
	<p>Not registered yet?</p> <a href="registration.php"> Click here </a> for registration.
	<p id="message"></p>
	</div>
	</div>
	<img src="../view/image/LOGO.png" class="banner6" alt="Logo with company banner">
</body>
</html>