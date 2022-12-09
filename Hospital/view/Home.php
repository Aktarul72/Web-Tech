<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <title>LOMS</title>

</head>

<nav>
        <?php include("Home_navbar.php") ?>
    </nav>

<body>

<?php include "../controller/userinfo.php" ?>



<marquee width="100%" direction="left" height="50px">
        Welcome to <b>Lab One Medical Services & Hospital</b>*** Please Wear a mask. Save lives. | 
        Clean your hands | Keep a safe distance | Get vaccinated for COVID-19 and get a booster as soon as you're eligible |
        Be aware of infection rates in your area...
      </marquee>

<div class="main-container">
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

      <section class="doctor">
        <h1 class="doctor-name">Our Doctor</h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="../view/image/doctor.jpg" alt="Avatar">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Doctor</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="../view/image/doctor1.jpg" alt="Avatar">
                    <div class="container">
                        <h4><b>David</b></h4>
                        <p>Doctor</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="../view/image/doctor2.jpg" alt="Avatar">
                    <div class="container">
                        <h4><b>Sarah</b></h4>
                        <p>Doctor</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="../view/image/doctor3.jpg" alt="Avatar">
                    <div class="container">
                    <h4><b>Thomas</b></h4>
                        <p>Doctor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <iframe 
        width="100%"
        height="500"
        src="../view/video/Ad Film _ LAB ONE Medical Services & Hospital _ 24 Hours Pharmacy _ All Kind Operation.mp4"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        ></iframe>

		<?php require("footer.php") ?>    
</body>
</html>