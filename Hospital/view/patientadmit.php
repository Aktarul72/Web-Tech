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
    <title>Patient Admition</title>

</head>


    <nav>
        <?php include("home_nav.php") ?>
    </nav>

    <div class="Patient_body">

<body>
    <img src="../view/image/LOMS.png" class="banner3" alt="Logo with company banner">

    <form action="../controller/PatientAddAction.php" method="POST">

   <div class="Patient"><table>
        <h2>
            Patient Information
        </h2>

        <tr>
            <td><b>Patient Type:</b></td>
            <td><select name="patient_type">
             <option>General</option>
             <option>Emergency</option>
        </td>
        </tr>
        <tr>
            <td><b>Registration Id:</b></td>
            <td><input type= "text" name="regid"></td>
        </tr>
        <tr>
            <td><b>Patient Name:</b></td>
            <td><input type= "text" name="patientName"></td>
        </tr>
        <tr>
            <td><b>Gender:</b></td>
                <td><input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Others">Others</td>
        </tr>
        <tr>
            <td><b>Date of Birth:</b></td>
            <td><input type="date" name="dateOfBirth" Placeholder=""></td>   
        </tr>
        <tr>
            <td><b>Father:</b></td>
            <td><input type= "text" name="fatherName"></td>
        </tr>
        <tr>
            <td><b>Mother:</b></td>
            <td><input type= "text" name="motherName"></td>
        </tr>
        <tr>
            <td><b>Blood Group:</b></td>
            <td><select name="bloodgroup">
            <option></option>
             <option>A+</option>
             <option>A-</option>
             <option>B+</option>
             <option>B-</option>
             <option>AB+</option>
             <option>AB-</option>
             <option>O+</option>
             <option>O-</option>
        </tr>
        <tr>
            <td><b>Phone:</b></td>
            <td><input type= "tel" name="phone"></td>
        </tr>
        <tr>
            <td><b>Address:</b></td>
            <td><input type= "text" name="address"></td>
        </tr>

        <tr>
            <button type= submit value = "submit" class="patient_Add">Save</button>
            <button class="patient_update"><a href="../view/patientsearch.php">Search</button>

            <button class="patient_delete"><a href="../view/Dashboard.php">Back</button>
        </tr>
        </table>
</div>
</div>
<div class="footer"><?php require("footer.php") ?></div>
</body>
</html>