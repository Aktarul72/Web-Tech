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
	SELECT * FROM patient
	WHERE regid LIKE '%".$search."%'
	OR patientname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM patient ORDER BY regid";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Reg. ID</th>
							<th>Patient Name</th>
							<th>Father Name</th>
                            <th>Mother Name</th>
							<th>Gender</th>
							<th>Date of birth</th>
							<th>bloodgroup</th>
							<th>Address</th>
                            <th>Phone</th>

							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["regid"].'</td>
				<td>'.$row["patientname"].'</td>
				<td>'.$row["fathername"].'</td>
                <td>'.$row["mothername"].'</td>
                <td>'.$row["gender"].'</td>
                <td>'.$row["dob"].'</td>
                <td>'.$row["bloodgroup"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["phone"].'</td>
				
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