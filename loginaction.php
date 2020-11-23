<?php

$email = $_POST["email"];
$pass = $_POST["pass"];

require ("functions.php");
$con = dbConnect();
	
$result = mysqli_query($con, "SELECT * FROM register WHERE email = '$email' and pass = '$pass'") or die("Failed to query dtabase".mysqli_error($con));
	
$row = mysqli_fetch_array($result);
	
	if($row['email'] == $email && $row['pass'] == $pass){
		header ("Location: index.html");
		
	} 
	else {
		echo '<script>alert("Wrong Email or Password");'; 	
		echo 'window.location.href = "login.php";';
		echo '</script>';
	}

?> 