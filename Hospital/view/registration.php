<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="icon" href="../view/image/LOGO.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>Registration</title>

    <style>
        #message {
            color: red;
        }
    </style>
    <script src="JS/JSValid.js"></script>
</head>


<nav>
        <?php include("Home_navbar.php") ?>
    </nav>

<body>
<img src="../view/image/LOMS.png" class="banner" alt="Logo with company banner">

<form name="Registration" action="../controller/FormSubmission.php" method="POST" onsubmit="return isValidRegistration(this);">
    
<div class = "Registration_form">
    <h2>Registration Form</h2><br>  
         <fieldset>
        
         <legend>

            <h3> <b>Basic Information:</b></h3>

        </legend>
         
        <table>
        <tr>
         <td><label><b>First Name :</b></label></td>
         <td><input type="text" name="firstName" placeholder="Enter your first name"></td>
       
        </tr>

        <tr>
         <td><label><b>Last Name : </b></label></td>
         <td><input type="text" name="lastName" placeholder="Enter your last name"></td>
        
        </tr>

        <tr>
         <td><b><label for ="gender">Gender :</label></b></td> 
                <td><input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Others">Others</td>
        </tr> 

         <td><label for= "dateOfBirth"><b>Date of Birth :</b></label></td> 
         <td><input type="date" name="dateOfBirth" Placeholder=""></td>   

         <tr>
         <td><label><b>Religion :</b></label></td> 
         <td><select name="religion">
             <option>Your religion</option>
             <option>Islam</option>
             <option>Hindu</option>
             <option>Buddhism</option>
             <option>Others</option>
        </td>
         </select> 
        </tr>

         </table>
         </fieldset>
         <br>

         <fieldset>
             <table>
            <br>
             <legend>
                 <h3><b>Contact Information : </b></h3>
                </legend>
             
            <tr>
             <td><label><b>Present Address :</b></label></td>
             <td><textarea name="presentAddress"></textarea></td>
            </tr>

            <tr>
             <td><label><b>Permanent Address : </b></label></td>
             <td><textarea name= "permanentAddress"></textarea></td>           
            <tr>

             <td><label><b>Phone : </b></label></td>
             <td><input type="tel" name="Phone" Placeholder="+880"></td>
            </tr>

            <tr>
             <td><label><b>Email : </b></label></td>
             <td><input type="email" name="email" Placeholder="Example@gmail.com"></td>
            </tr>

            <tr>
             <td><label><b>Recovery Email : </b></label></td>
             <td><input type="email" name="recoveryEmail" Placeholder="Example@gmail.com"></td>          
            </tr>

        </table>
        </fieldset>  

         <br>
         <fieldset>
         <table>
            <legend>
                <h3><b>Account Information:<b></h3>
    
            </legend>

            <tr>
             <td><label><b>Username : </b></label></td>
             <td><input type="text" name="username" Placeholder=""></td>
            </tr>

            <tr>
             <td><label><b>Password : </b></label></td>
             <td><input type="password" name="password" Placeholder=""></td>
            </tr>

            <tr>
             <td><label><b>Confirm Password : </b></label></td>
             <td><input type="password" name="confirmpassword" Placeholder=""></td>
            </tr>

        </table>
        </fieldset>
        
        <button type = reset class="reset"><b>Reset</b></button> 
        <button type= submit value="submit" class="submit"><b>Submit</b></button> 
        <br><br>      

    </form>  
        <p id="message"></p>
        <br> 
    Already registered? <a href="LoginForm.php"> Click here </a> for login.
    </div>


<?php require("footer.php") ?>
</body>
</html>