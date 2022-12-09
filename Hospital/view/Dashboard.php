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
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <title>LOMS</title>

	<style>
        #message {
            color: red;
        }
    </style>
    <script src="JS/JSValid.js"></script>

    <meta charset="UTF-8">
    <title>WELCOME</title>
</head>

<nav>
        <?php include("home_nav.php") ?>
    </nav>

<body>

<?php include "../controller/userinfo.php" ?>



<form action="" method="POST" onsubmit="return isValidATC(this);">

<marquee width="100%" direction="left" height="50px">
        Welcome to <b>Lab One Medical Services & Hospital</b>*** Thanks for choosing us| Please Wear a mask. Save lives. | 
        Clean your hands | Keep a safe distance | Get vaccinated for COVID-19 and get a booster as soon as you're eligible |
        Be aware of infection rates in your area...
      </marquee>

<div class="main-container">
<p>User: <?php echo strtoupper($_SESSION['username'])?></p>
      <div class="landing-page__first-part">
          <div class="landing-page_first-part_title">
            <img src="../view/image/LOMS.png" class="bannerD" alt="Logo with company banner">   
         
        </div>
      </div>
    </div>

    <section>
    <div class="landing-page__second-part-services">
        <h2>Our Departments</h2><br>
        <ul>
          <li>Medicine</li>
          <li>Neurology</li>
          <li>Orthopedic</li>
          <li>Gynocology</li>
          <li>ENT</li>
          <li>Cardiology</li>
          <li>Surgery</li>
        </ul>
      </div>

      <div class="landing-page__third-part-services">
        <h2>Our Services</h2><br>
        <ul>
          <li>Doctor consultation</li>
          <li>IPD</li>
          <li>OPD</li>
          <li>Proper diagonosis sytem</li>
          <li>High facility Pathology</li>
          <li>Cardiology</li>
          <li>Operation Theater</li>
        </ul>
      </div>

</section>

        <iframe
        width="100%"
        height="500"
        src="../view/video/Ad Film _ LAB ONE Medical Services & Hospital _ 24 Hours Pharmacy _ All Kind Operation.mp4"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay=0; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        ></iframe>

		<p id="message"></p>
		<br>
		<p id="message1"></p>
		<br><br>
		<?php require("footer.php") ?>    
</body>
</html>