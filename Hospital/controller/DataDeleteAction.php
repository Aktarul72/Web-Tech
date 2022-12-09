<?php
	session_start();

?>

<?php
include "dbConnect.php";
error_reporting(0);

$rollno=$_GET['rn'];
$query = "DELETE FROM examinfo WHERE ItemID = '$rollno'";

$data=mysqli_query($conn, $query);

if($data)
{
    echo "success";

}
else{
    echo "unsucess";
}
?>