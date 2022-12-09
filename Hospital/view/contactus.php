<?php
    session_start();

    if(isset($_POST['submit'])){

        $username     = $_POST['name'];
        $email         = $_POST['email'];
        $subject         = $_POST['subject'];
        $texts     = $_POST['texts'];

        if($username != ""){
            if($subject != ""){
                if($email !=""){

                    $user = ['name'=> $username,'email'=>$email,'subject'=>$subject, 'texts'=>$texts ];

                    $con=mysqli_connect("localhost","root","","hospital");
                    $sql = "insert into messages values('', '{$user['name']}','{$user['email']}', '{$user['subject']}', '{$user['texts']}')";

                    $status=mysqli_query($con, $sql);

                    if($status){
                        echo '<script>alert("Massege Send Successful")</script>';
                    }else{
                       echo '<script>alert(""Massege Send Not Successful")</script>';
                    }

                }else{
                    
					echo '<script>alert("Subject  is required")</script>';
                }
            }else{
                
				echo '<script>alert("Email is required")</script>';
            }
        }else{
           echo '<script>alert("Name is required")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/image/LOGO1.png"/>
    <link rel="stylesheet" href="../view/css/style.css"/>
    <title>Contact Us</title>

</head>


<style>
.contact{
    width: 100%;
    height: 80vh;
    margin-top: 8rem;
    position: relative;
}

.contact-row{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: start;
    margin: 8rem auto 0 auto;
}

.contact-left-col{
    flex-basis: 50%;
    width: 100%;
    background-color: lightpink;
    padding: 4.5rem;
    height: 35rem;
    box-sizing: border-box;
    border-radius: 8px;

}
.contact-right-col{
    flex-basis: 50%;
    width: 100%;
    background-color: #171717;
    padding: 4rem;
    height: 35rem;
    box-sizing: border-box;
      
}
.contact-left-first-col{
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.contact-left-col input{
    width: 70%;
    margin:0 1rem 1rem 0;
    background: transparent;
    outline: none;
    border: 2px solid #171717;
    box-shadow: none;
    padding: .3rem;
    border-radius: 5px;
    color: whitesmoke;
}

.contact-left-col input::placeholder{
    color: whitesmoke
}
.contact-left-col textarea{
    width: 70%;
    resize: none;
    background: transparent;
    outline: none;
    border: 2px solid #171717;
    box-shadow: none;
    padding: .3rem;
    border-radius: 5px;
    color: whitesmoke;
}

.contact-left-col textarea::placeholder{
    color: whitesmoke;
}

.contact-left-col .btn{
    width: 30%;
    transition: .5s;
    border: none;
    padding: .8rem;
    border-radius: 5px; 
    background-color: white;
    color: black; 
}

.contact-left-col .btn:hover{
    background:#171717;
    color: crimson;
}

.contact-right-sub-row{
    display: flex;
    align-items: left;
    flex-direction: column;
    justify-content: start;
    color: whitesmoke;
    list-style: none;
}

.contact-right-sub-row .address{
    margin-bottom: 1.2rem;
}
.contact-right-sub-row .address
.contact-right-sub-row .social
.contact-right-sub-row .news, h3{
    margin-bottom: 1rem;
}

.contact-right-sub-row .address .icon{
    margin-right: 1rem;
    font-size: 1.3rem;
    color: crimson;
}

.contact-right-sub-row .social-links{
    display: flex;
    align-items:center;
    justify-content: space-between;
    width: 50%;
    padding: 1rem 0 2rem 0;
}

.contact-right-sub-row .social-links li a{
    font-size: 1.8rem;
    text-decoration: none;
    color: crimson;
}
.contact-right-sub-row .news{
    margin-top: .5rem;

}

.contact-right-sub-row .news input{
    margin:0 1rem 1rem 0;
    background: transparent;
    outline: none;
    border: 2px solid crimson;
    box-shadow: none;
    padding: .3rem;
    border-radius: 5px;
    color: whitesmoke;
}

.contact-right-sub-row .news input::placeholder{
    color: rgba(245, 245, 245, 0.555);
}
.contact-right-col .btn{
    width: 10%;
    transition: .5s;
    border: none;
    background-color: crimson;
    padding: .5rem;
    border-radius: 5px; 
    color: white; 
}

.contact span{
    color: crimson;
}
.contact h5{
    margin:1rem auto;
    width: 80%;
    text-align: center;
    padding-bottom: 3rem;
    font-size: 1.2rem;
    border-bottom: 1px solid crimson;
}



</style>
<body>

<section class="contact" id="contact">
      <div class="title">
        <h1>Contact Us</h1>
      </div>

      <div class="contact-row">

        <div class="contact-left-col">
          <h3>Get in touch</h3>
		  
          <form method="POST"  action="">
            <div class="contact-left-first-col">
              <input type="text" name="name" placeholder="Name" >
              <input type="text" name="email" placeholder="Email" >
            </div>
            <input type="text" name="subject" placeholder="subject" >
            <textarea name="texts" id="" cols="30" rows="10" placeholder="write message"></textarea>
            <P><P><input type="submit"name="submit"value="Submit"></p></p>	 
          </form> 
 
		  
        </div>
		</section>










</body>


