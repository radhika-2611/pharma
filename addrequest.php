<?php
require ("functions.php");
$con = dbConnect();

$result=mysqli_query($con, "SELECT * FROM enrol") or die("Failed to query database".mysqli_error($con));
session_start();

$add_action1 = $_REQUEST["bloodgroup"];
$add_action2 = $_REQUEST["state"];
$add_action3 = $_REQUEST["city"];
$add_action4 = $_REQUEST["zip"];

$add_sql = "INSERT into `request` (`bloodgroup`, `state`, `city`, `zip`)  
									values('$add_action1','$add_action2','$add_action3','$add_action4');";

$add_data = $con->query($add_sql);


while ($row = mysqli_fetch_assoc($result)) { 
	$to_email = $row['email']; 
	$subject = "BloodBud: Blood required in your area";
	$body = "Hi user!
$add_action1 blood required by patient
Please visit http://localhost/pharma/acceptrequest.php to confirm your donation";
	if (mail($to_email, $subject, $body)) {
		echo "Email successfully sent to $to_email...";
	} 
	else {
		echo "Email sending failed...";
	}
header ("Location: displaydonors.php");	
}
 


?>