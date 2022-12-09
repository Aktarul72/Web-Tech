<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
	<link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <title>Request Password</title>

        <style>
        #message {
            color: red;
        }
    </style>
    <script src="JS/JSValid.js"></script>

</head>
	
	<form name="RP" action="../controller/RequestPasswordAction.php" method="POST" onsubmit="return isValidV(this);">
		<fieldset><br>
			<legend><br><b>VERIFY INFORMATION</b></legend>
			<h4><br>
			<label for="vDoB">Date Of Birth :</label>
			<input type="Date" id="info" name="vDoB">
			<br><br>
			<label for="vEmail">Recovery Email :</label>
			<input type="email" id="info" name="vEmail">
			<br><br>
			
			</h4>
		</fieldset>
		<br>
		<fieldset>
			<legend><br><b>SET NEW PASSWORD</b></legend>
			<h4>
			<label for="cpassword">New Password : </label>
			<input type="password" name="npassword">
			<br><br>
			<label for="cpassword">Confirm Password : </label>
			<input type="password" name="cpassword">
			</h4>
		</fieldset>
		<br><br>
		<input type="submit" name="verify" value="VERIFY AND CHANGE PASSWORD">
	</form>

<p id="message"></p>
        <br>
</html>