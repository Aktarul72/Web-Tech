<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search by Item Name</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link rel="icon" href="../view/image/LOGO1.png"/>
    	<link rel="stylesheet" href="../view/style.css"/>
		
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Examination Name</h2><br>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search: </span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Item ID or Name" class="form-control" /><br>
				</div>
				<button class="common_button"><a href="../view/addexam.php">Back</button>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>

	<center>
			 <button onclick="window.print();" class="btn-primary" id="print-btn">Print this page</button>
	</center>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../controller/examsearch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




