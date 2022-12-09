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
	SELECT * FROM userinfo
	WHERE firstname LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR phone LIKE '%".$search."%'
    OR email LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM userinfo ORDER BY firstname";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<br><th>First Name</th>
							<th>Last Name</th>
							<th>Gender</th>
                            <th>Date of birth</th>
							<th>religion</th>
                            <th>phone</th>
							<th>Address</th>
							<th>email</th>
							<th>Recovery email</th>
                            <th>username</th>
                            <th>password</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["gender"].'</td>
                <td>'.$row["doB"].'</td>
                <td>'.$row["religion"].'</td>
                <td>'.$row["phone"].'</td>
                <td>'.$row["presentAddress"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["recoveryEmail"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["password"].'</td>
				
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