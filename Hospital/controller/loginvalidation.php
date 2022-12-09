<?php
include 'mainprojectdb.php';
session_start();
$error = "";
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) 
    {
        $error = "Please fill Up Usernname and Password!!";
    } 
    else 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = new mainproject();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "userinfo", $username, $password);

        if ($userQuery->num_rows > 0) {
            session_start();
            $_SESSION['username']=$_POST['username'];
            header("Location:../view/Dashboard.php");

            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            while($row = $userQuery->fetch_assoc()) {
                $_SESSION["firstName"]=$row["firstName"];
                
            }

        } else {
            $error = "Username or Password is invalid";
        }
        $connection->CloseCon($conobj);

    }


    if(!empty($_POST['remember_checkbox'])){

        $remember_checkbox=$_POST['remember_checkbox'];

        setcookie('username',$username,time()+30);
        setcookie('password',$password,time()+30);



    }

        else
        {

            setcookie('username',$username,30);
            setcookie('password',$password,30);

        }

}


?>