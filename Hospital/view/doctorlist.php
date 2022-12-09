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
    <title>Doctor Panel</title>

</head>

    <nav>
        <?php include("home_nav.php") ?>
    </nav>

    <div  class="doctor_body">
<body>
    <img src="../view/image/LOMS.png" class="banner4" alt="Logo with company banner">

    <form action="../controller/DoctorAddAction.php" method="POST">

   <div class="Doctor"><table>
        <h2>
            Doctor Information
        </h2>

   
        <tr>
            <td><b>Doctor Id:</b></td>
            <td><input type= "text" name="doctorid"></td>
        </tr>
        <tr>
            <td><b>Doctor Name:</b></td>
            <td><input type= "text" name="doctorName"></td>
            </tr>
        <tr>
            <td><b>Address:</b></td>
            <td><input type= "text" name="doctoraddress"></td>
            </tr>
        <tr>
            <td><b>Phone:</b></td>
            <td><input type= "tel" name="doctorphone"></td>
            </tr>
        <tr>
            <td><b>Degree:</b></td>
            <td><input type= "text" name="doctordegree"></td>
            </tr>
        <tr>
            <td><b>Designation:</b></td>
            <td><input type= "text" name="designation"></td>
            </tr>

        <tr>
            <button class="Doc_Add">Save</button>
            <button class="Doc_show"><a href="doctorinfo.php">Show Info.</button>
            <button class="Doc_show"><a href="docsearch.php">Search</button>
            <button class="Doc_delete"><a href="../view/Dashboard.php">Back</button>
        </tr>

        </table>
        
</div>
</div>
<div class="footer"><?php require("footer.php") ?></div>
</body>
</html>