<?php
	session_start();

?>

	<?php

		$doctorName=$_POST['doctorName'];
		$doctoraddress=$_POST['doctoraddress'];
		$doctorphone=$_POST['doctorphone'];
		$submit=false;


	?>
	

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == 'POST') 
		{
			$isValid = false;

			if (empty($_POST['doctorid'])||empty($doctorName)||empty($doctoraddress)||empty($doctorphone)||empty($_POST['designation'])||empty($_POST['doctordegree'])) 
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

			$doctorName=sanitize($doctorName);
			$doctoraddress=sanitize($doctoraddress);
			$doctorphone=sanitize($doctorphone);
		}
	?>

	<?php 
		if ($isValid)
		{
	
			include "dbConnect.php";

			$doctorid = $_POST['doctorid'];
            $doctordegree = $_POST['doctordegree'];
			$designation = $_POST['designation'];

			$sql ="INSERT INTO doctorsinfo(ID, address, Phone, name, Designation, Degree) VALUES (?, ?, ?, ?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('ssssss', $doctorid, $doctoraddress, $doctorphone, $doctorName, $designation, $doctordegree);


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

	<a href="../view/doctorlist.php" >Back>> </a>
