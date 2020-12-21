<!Doctype html>
<html>
<head>
	<title>Transaction History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel='icon' type='image/jpg' href='logo10.jpg' />
</head>
<body>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <div class="topnav-right">
  <a class="active" href="transferdetails.php">Transaction History</a>
  <a class="active" href="viewusers.php">Users</a>

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Tranaction History</h1>
	<tr>
		<th>Sender</th>
		<th>Reciever</th>
		<th>Amount</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "sparks");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfers";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
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