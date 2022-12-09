<?php
	session_start();
?>


<?php
	if ($_SERVER["REQUEST_METHOD"] == 'POST') 
	{
		include "dbConnect.php";

		$sql = "SELECT * FROM userinfo WHERE username = ? and password = ?";
		$stmt = $connection->prepare($sql);
		$stmt->bind_param("ss", $username, $password);
		$username = $_POST['username'];
		$password = $_POST['password'];
		$response = $stmt->execute();

		if ($response) 
		{
			$data = $stmt->get_result();

			if ($data->num_rows > 0)
			{
				session_start();
				$_SESSION['username']=$_POST['username'];
				header("Location:../view/Dashboard.php");
			}
		}
		else 
		{
			echo "Login Failed.";
		}

		

		$connection->close();

	}

	if(!empty($_POST['remember_me'])){

		$remember_me=$_POST['remember_me'];

		setcookie('username',$username,time()+30);
		setcookie('password',$password,time()+30);

	}

		else
		{

			setcookie('username',$username,30);
			setcookie('password',$password,30);

		}
?>


<br><br>

<a href="../view/LoginForm.php"> Return back to Login Page </a>