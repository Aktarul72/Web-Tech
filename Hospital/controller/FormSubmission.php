<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>


	<?php

		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$recoveryEmail=$_POST['recoveryEmail'];
		$submit=false;


	?>
	

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == 'POST') 
		{
			$isValid = false;

			if (empty($email)||empty($firstName)||empty($lastName)||empty($_POST['dateOfBirth'])||empty($username)||empty($_POST['password']) ||empty($_POST['confirmpassword']) || ($_POST['password']) != ($_POST['confirmpassword'])||empty($_POST['recoveryEmail']))
			{
				$isValid = false;
				echo "Please fill up the form properly";
				$submit=false;
			}
			else 
			{
				$isValid = true;
				echo "<h1>Output :</h1>";
				echo "Form Submission Successfully!";
				$submit=true;
			}
		} 


	?>

	<?php

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if ($isValid) 
		{

			$firstName=sanitize($firstName);
			$lastName=sanitize($lastName);
			$email=sanitize($email);
			$username=sanitize($username);
			$password=sanitize($password);
		}
	?>

	<?php 
		if ($isValid)
		{
	
			include "dbConnect.php";

			$Gender = $_POST['gender'];
			$doB = $_POST['dateOfBirth'];
			$Religion = $_POST['religion'];
			$PresentAddress = $_POST['presentAddress'];
			$Phone = $_POST['Phone'];

			$sql ="INSERT INTO userinfo(username, password, firstname, lastname, gender, doB, religion, presentAddress, phone, email, recoveryEmail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sssssssssss', $username, $password, $firstName, $lastName, $Gender, $doB, $Religion, $PresentAddress, $Phone, $email, $recoveryEmail);


			$response = $stmt->execute();
			$response = $stmt->store_result();

			if ($response) 
			{
				echo "Data Inserted Succssfully";
			}
			else 
			{
				echo "Error while saving";
			}

			$connection->close();
		}
	?>

	<br><br>

	<a href="../view/registration.php"> Register  </a> | <a href="../view/LoginForm.php" >Login </a>
