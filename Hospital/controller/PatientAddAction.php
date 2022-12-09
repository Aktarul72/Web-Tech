<?php
	session_start();

?>

	<?php

		$patientName=$_POST['patientName'];
		$fatherName=$_POST['fatherName'];
		$motherName=$_POST['motherName'];
		$submit=false;


	?>
	

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == 'POST') 
		{
			$isValid = false;

			if (empty($motherName)||empty($patientName)||empty($fatherName)||empty($_POST['dateOfBirth'])||empty($_POST['gender'])||empty($_POST['bloodgroup'])||empty($_POST['address'])||empty($_POST['phone'])) 
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

			$patientName=sanitize($patientName);
			$fatherName=sanitize($fatherName);
			$motherName=sanitize($motherName);
	
		}
	?>

	<?php 
		if ($isValid)
		{
	
			include "dbConnect.php";

			$Regid = $_POST['regid'];
            $Gender = $_POST['gender'];
			$doB = $_POST['dateOfBirth'];
            $Bloodgroup = $_POST['bloodgroup'];
			$PresentAddress = $_POST['address'];
			$Phone = $_POST['phone'];

			$sql ="INSERT INTO patient(regid, patientName, fatherName,  motherName, gender, doB, bloodgroup, address, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sssssssss', $Regid, $patientName, $fatherName,  $motherName, $Gender, $doB , $Bloodgroup, $PresentAddress, $Phone);


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
