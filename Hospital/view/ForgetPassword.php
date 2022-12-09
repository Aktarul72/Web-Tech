<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
	<link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>Forgot Password</title>
    <style>
		#message {
			color: red;
		}
	</style>
	<script src="JS/JSValid.js"></script>

</head>



<body>
	<form name="ForgetPassword" action="../controller/ForgetPasswordAction.php" method="POST" onsubmit="return isValidFP(this);">
		
	<fieldset>
	<legend>
			
			<h4><br><br>
			<label for="username">Username:</label>
			<input type="text" id="info" name="username">
			<br><br>
			<label for="email">Email:</label>
			<input type="email" id="info" name="email">
			</h4> 
		
			</legend>
		</fieldset>
		
		<br>
		<input type="submit" name="request" value="REQUEST FOR NEW PASSWORD">
		<button class="common_button"><a href="../view/LoginForm.php">Back</button>
	</form>
	<br><br>
	<p id="message"></p>


</body>
</html>