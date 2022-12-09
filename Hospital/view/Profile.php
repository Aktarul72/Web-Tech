<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
	<link rel="icon" href="../view/image/LOGO.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>My Profile</title>

</head>

<body>

	<br><h2>My Profile</h2>
	<br><br>
	<h3>User: <?php echo strtoupper($_SESSION['username'])?></h3><br>

	<?php
		echo "<h5>";
		echo "First Name : "." ".$_SESSION['firstName'];
		echo "<br><br>";
		echo "Last Name : "." ".$_SESSION['lastName'];
		echo "<br><br>";
		echo "Gender : "." ".$_SESSION['gender'];
		echo "<br><br>";
		echo "Email : "." ".$_SESSION['email'];
		echo "<br><br>";
		echo "Date of Birth : "." ".$_SESSION['DoB'];
		echo "<br><br>";
		echo "Religion : "." ".$_SESSION['religion'];
		echo "<br><br>";
		echo "Contact Number : "." ".$_SESSION['num'];
		echo "<br><br>";
		echo "Present Address : "." ".$_SESSION['address'];
		echo "<br><br>";
		echo "</h5>";

	?>
	<a href="UpdateProfile.php">Click here </a> to update your profile.
	<br><br>
	<button><a href="../controller/Logout.php">LOGOUT </a></button>
	<button class="common_button"><a href="../view/Dashboard.php">Back</button>

</body>
</html>