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
	<link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <title>Update Profile</title>

</head>

<body>

	<br><br>
	
	<h4>UPDATE INFORMATION : </h4>


	<form action="../controller/UpdateProfileAction.php" method="POST">


		<h5>
		First Name : <input type="text" name="firstName" value=<?php echo $_SESSION['firstName'];?>>

	    <br><br>

	    Last Name : <input type="text" name="lastName" value=<?php echo $_SESSION['lastName'];?>>
	         	

	    <br><br>

	    Gender : 
	    <input type="text" name="gender" value=<?php echo $_SESSION['gender'];?> readonly> 

	     <br><br>  

	     Date of Birth : <input type="date" name="DoB" value=<?php echo $_SESSION['DoB']?>>

	     <br><br>

	     Religion : 
	     <select name="religion" value=<?php echo $_SESSION['religion']?>>
	         <option>Islam</option>
	         <option>Hindu</option>
	         <option>Buddhism</option>
	         <option>Others</option>
	     </select> 

	     <br><br>

	     <b>Present Address :</b>
	         <br>
	         <textarea name="presentAddress"><?php echo $_SESSION['address']?></textarea>

	     <br><br>


	     <b>Phone : </b><input type="tel" name="num" value=<?php echo $_SESSION['num']?> >

	     <br><br>

	     <b>Email : </b><input type="email" name="email" value=<?php echo $_SESSION['email']?>>

	     <br><br>

		<input type="submit" name="update" value="UPDATE">
		
	</form>
	<button class="common_button"><a href="../view/Profile.php">Back</button>

</body>
</html>