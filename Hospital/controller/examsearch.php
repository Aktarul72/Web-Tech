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
	SELECT * FROM examinfo 
	WHERE ItemName LIKE '%".$search."%'
	OR ItemID LIKE '%".$search."%'
	OR Rate LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM examinfo ORDER BY ItemID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Item ID</th>
							<th>Item Name</th>
							<th>Rate</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["ItemID"].'</td>
				<td>'.$row["ItemName"].'</td>
				<td>'.$row["Rate"].'</td>
				
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