<?php
	include "connection.php";

	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$mail_id=$_POST['mail'];
	$location=$_POST['location'];
	$password=$_POST['password'];
	
$sql = "insert into cust_details values ('$name', '$contact', '$mail_id', '$location', ' ".md5($password)."')";
	if(mysqli_query($conn,$sql))
	{
		echo '<script>';
		echo 'alert("Data Insertion Successfully");';
		echo 'window.location="registration_form.php";';
		echo '</script>';
	}
	else{
		echo '<script>';
		echo 'alert("Data Insertion Failed");';
		echo 'window.location="registration_form.php";';
		echo '</script>';
	}
?>
