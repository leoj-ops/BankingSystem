<!Doctype html>
<html>
<head>
	<title>View Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
	<link rel='icon' type='image/jpg' href='logo10.jpg' />
	</style>
</head>
<body style="background-image: url(https://ga-2df4.kxcdn.com/wp-content/uploads/2016/09/bankjet-2500-header-back2.jpg);
  		background-repeat: no-repeat;
		background-size: cover; ">
    

	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <div class="topnav-right">
  <a class="active" href="transferdetails.php">Transaction History</a>
  <a class="active" href="viewusers.php">Users</a>

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Customer Details</h1>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Amount</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "sparks");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, credit FROM bank";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>

</body>
</html>