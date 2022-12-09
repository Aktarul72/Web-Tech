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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="icon" href="../view/image/LOGO.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>Employee Management</title>

</head>

    <nav>
        <?php include("home_nav.php") ?>
    </nav>

    <div  class="Emp_Body">
<body>
    <img src="../view/image/LOMS.png" class="banner1" alt="Logo with company banner">

    <form action="../controller/EmployeeAddAction.php" method="POST">

   <div class="Employee"><table>
        <h2>
            Employee Information
        </h2>

   
        <tr>
            <td><b>Emp Id:</b></td>
            <td><input type= "text" name="empid"></td>
        </tr>
        <tr>
            <td><b>Employee Name:</b></td>
            <td><input type= "text" name="empName"></td>
            </tr>
        <tr>
            <td><b>Address:</b></td>
            <td><input type= "text" name="empAddress"></td>
            </tr>
        <tr>
            <td><b>Phone:</b></td>
            <td><input type= "tel" name="empPhone"></td>
            </tr>
        <tr>
            <td><b>Role:</b></td>
            <td><input type= "text" name="emprole"></td>
            </tr>
        <tr>
            <td><b>Username:</b></td>
            <td><input type= "text" name="username"></td>
            </tr>
        <tr>
            <td><b>Password:</b></td>
            <td><input type= "password" name="password"></td>
        </tr>
        <tr>
            <button type = submit value="submit" class="Emp_Add">Save</button>
            <button  class="Emp_show"><a href="employeeinfo.php">Show Info.</button>
            <button  class="Emp_search"><a href="../view/empsearch.php">Search</button>
            <button  class="Emp_delete"><a href="../view/Dashboard.php">Back</button>
        </tr>

        </table>

</form>
        
</div>
</div>
<div class="footer"><?php require("footer.php") ?></div>
</body>
</html>