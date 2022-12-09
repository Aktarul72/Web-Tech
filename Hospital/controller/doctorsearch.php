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
	SELECT * FROM doctorsinfo 
	WHERE ID LIKE '%".$search."%'
	OR name LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM doctorsinfo ORDER BY ID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<td>ID</td>
							<td>Doctor Name</td>
							<td>Address</td>
                            <td>Phone</td>
                            <td>Degree</td>
                            <td>Designation</td>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["ID"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["address"].'</td>
                <td>'.$row["Phone"].'</td>
                <td>'.$row["Degree"].'</td>
                <td>'.$row["Designation"].'</td>				
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