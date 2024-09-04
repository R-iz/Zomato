
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "zomato";
	$conn = mysqli_connect($servername, $username, $password, $dbname);	
	if ($conn) {
		echo "Connection successful";
	}
	else
	{
		echo "Connected Failed";
	}
?>

