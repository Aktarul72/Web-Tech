<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../view/image/LOGO.png"/>
<link rel="stylesheet" href="../view/style.css"/>
<head>
	    <style>
        #message {
            color: red;
        }
    </style>
    <script src="JS/JSValid.js"></script>
    <meta charset="UTF-8">
    <title>CHANGE PASSWORD</title>

</head>

<body>

	<h2>RESET PASSWORD</h2>
	<form name="CP" action="../controller/ChangePasswordAction.php" method="POST" onsubmit="return isValidCP(this);">
		<br><br>
		<fieldset>
			<legend><h4>CHANGE PASSWORD</h4></legend><br>
		
				<h5>
				<label for="currentpassword"><b>Current Password : </b></label>
				<input type="password" name="currentpassword" placeholder="">
		        <br><br>
		        <label for="npassword"><b>New Password : </b></label>
		        <input type="password" name="npassword" placeholder="">
		        <br><br>
		        <label for="confirmpassword"><b>Confirm Password : </b></label>
		        <input type="password" name="confirmpassword" placeholder="">
		    	</h5>
		    	<button type="Submit">Submit</button>
				<button class="common_button"><a href="../view/Dashboard.php">Back</button>
	
		</fieldset>
	</form>
	<p id="message"></p>

</body>
</html>