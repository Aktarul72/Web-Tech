<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #706fda;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: lightcoral;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>
<body>

<div class="navbar">
    <a href="Dashboard.php">Home</a>
    <a href="ChangePassword.php">Change Password</a>
    <a href="Profile.php">My Profile</a>
    <a href="Logout.php">Logout</a>
    <a href="contactus.php">Contact us</a>
  <div class="dropdown">
    <button class="dropbtn">Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="billing.php">Order Entry</a>
      <a href="addexam.php">Add Examination</a>
      <a href="addemployee.php">Add Employee</a>
      <a href="patientadmit.php">IPD</a>
      <a href="doctorlist.php">Doctor's Panel</a>
      <a href="data.php">Show User Info.</a>
    </div>
  </div> 
</div>


</body>
</html>
