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
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <link rel="icon" href="../view/image/LOGO.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>Examination</title>

</head>

    <nav>
        <?php include("home_nav.php") ?>
    </nav>

    <div  class="Exam_body">
<body>
    <img src="../view/image/LOMS.png" class="banner2" alt="Logo with company banner">

    <form action="../controller/ExamAddAction.php" method="POST">

   <div class="Exam"><table>
        <h2>
            Examination Management
        </h2>

        <tr>
           <th><b>Item Id</b></th>
           <th><b>Item Name</b></th>
           <th><b>Rate</b></th>
        </tr> 

        <tr>
            <th><input type= "text" name="Itemid"></th>
            <th><input type= "text" name="ItemName"></th>
            <th><input type= "text" name="ItemRate"></th>
        </tr>

        <tr>
            <button type= submit value="submit" class="Exam_Add1">Save</button>
            <button class="Exam_show1"><a href="testsearch.php">Search</button>
            <button class="Exam_delete1"><a href="../view/Dashboard.php">Back</button>
        </tr>

        </table>      
</div>
</div>
<div class="footer"><?php require("footer.php") ?></div>
</body>
</html>