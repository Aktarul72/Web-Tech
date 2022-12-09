<?php
	session_start();

?>

<table class="table">

<?php
$connect = mysqli_connect("localhost", "root", "", "hospital");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM employee 
	WHERE EmpID LIKE '%".$search."%'
	OR EmpName LIKE '%".$search."%'
	OR Emprole LIKE '%".$search."%'
    OR Eusername LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM employee ORDER BY EmpID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Employee ID</th>
							<th>Employee Name</th>
							<th>Address</th>
                            <th>Role</th>
                            <th>Phone</th>
                            <th>Username</th>
                            <th>Password</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["EmpID"].'</td>
				<td>'.$row["EmpName"].'</td>
				<td>'.$row["Empaddress"].'</td>
                <td>'.$row["Emprole"].'</td>
                <td>'.$row["Empphone"].'</td>
                <td>'.$row["Eusername"].'</td>
                <td>'.$row["Epassword"].'</td>
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
    </table>