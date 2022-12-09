<?php
	session_start();

?>


	<?php

		$ItemName=$_POST['ItemName'];
		$ItemRate=$_POST['ItemRate'];
		$submit=false;


	?>
	

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == 'POST') 
		{
			$isValid = false;

			if (empty($_POST['Itemid'])||empty($ItemName)||empty($ItemRate)) 
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

			$ItemName=sanitize($ItemName);
			$ItemRate=sanitize($ItemRate);
		}
	?>

	<?php 
		if ($isValid)
		{
	
			include "dbConnect.php";

			$Itemid = $_POST['Itemid'];

			$sql ="INSERT INTO examinfo(ItemID, ItemName, Rate) VALUES (?, ?, ?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param('sss', $Itemid, $ItemName, $ItemRate);


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