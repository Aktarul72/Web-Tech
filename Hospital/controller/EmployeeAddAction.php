<?php
	session_start();
?>

	<?php

		$empName=$_POST['empName'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$submit=false;


	?>
	

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == 'POST') 
		{
			$isValid = false;

			if (empty($_POST['empid'])||empty($empName)||empty($username)||empty($password)||empty($_POST['emprole'])||empty($_POST['empAddress'])||empty($_POST['empPhone'])) 
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

			$empName=sanitize($empName);
			$username=sanitize($username);
			$password=sanitize($password);
		}
	?>

	<?php 
		if ($isValid)
		{
	
			include "dbConnect.php";

			$Empid = $_POST['empid'];
            $Emprole = $_POST['emprole'];
			$PresentAddress = $_POST['empAddress'];
			$Phone = $_POST['empPhone'];

			$sql ="INSERT INTO employee(EmpID, Eusername, Epassword, EmpName, Empaddress, Empphone, Emprole) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sssssss', $Empid, $username, $password, $empName, $PresentAddress, $Phone, $Emprole);


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
