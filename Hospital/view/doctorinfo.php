<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>


<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <title>Doctor Information</title>
</head>
<style>

    *{

        margin: 0;
        padding: 0;

    }

    body{

        width: 100%;
        height: 100vh;
        background: indigo;
    }

    .tbody{
        margin: 2% 15% 0 15%;
        display: inline-block;
        padding: 1rem;
        width: 80%;
        border: 2px solid indigo;
        border-radius: 10px;
        background-color: rgb(255, 204, 204);
        box-shadow: 0 24px 28px rgba(66, 180, 233, 0.25), 0 20px 20px rgba(66, 180, 233, 0.22);
    }


    .signup-container{	    
        background-color:indigo;		
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
		

    }
    .view{	
		padding:1rem;		
        width: 1100px;
        height: auto;		
		border-radius:10px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color:indigo;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

    }

   table {
        border-collapse: collapse;
        width: 50%;		
     }

    th, td {
        padding: 4px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
     input{
        width: 20%;
        padding: .5rem;  
        color:indigo;
        background:transparent;
        outline: none;
        border: 1px solid indigo;
        border-radius: 5px;
        margin:10px auto;
    }
  
    .btn{
        width: 40%;
        margin: 0 auto;
    }

</style>



<body>
    
<?php include("home_nav.php") ?>
<hr>

<div class="signup-container">
<div class="view"> 

 <input type="text" name="Search" placeholder="Search" class="form-control">
 <div class="btn">

 <button type="Search" name="signupBtn" value="Search">Search</button>

  </div>
  

 <table class="table">
       

            <?php
			   $conn = mysqli_connect("localhost","root","","hospital");
               $sql="Select * from `doctorsinfo`";
               $result=mysqli_query($conn, $sql);
                  
                     while($row=mysqli_fetch_array($result)){?>
                       
					    <tbody class="tbody">
								  
								  <tr>
								   <td> <h4>Doctor ID: <?php echo $row['ID'];?></h4></td>
								   <td></td>
								   </tr>
								   
								  <tr>
								   <td><h4>Doctor Name: <?php echo $row['name'];?></h4></td>
								   <td></td>
								  </tr>
								   
								   <tr>
								   <td><h4>Address: <?php echo $row['address'];?></h4></td>
								   <td></td>
								   </tr>

								  <tr>
								   <td><h4>Phone: +880<?php echo $row['Phone'];?></h4></td>
								   <td></td>
								  </tr>
								  
								   <tr>
								   <td><h4>Degree: <?php echo $row['Degree'];?></h4></td>
								   <td>

                                   <tr>
								   <td><h4>Designation: <?php echo $row['Designation'];?></h4></td>
								   <td>

                                    </div></td>
								   </tr>
						
                        </tbody>
             <?php  }

            ?>
          
        </table>

</div>
</div>
	
</body>
</html>