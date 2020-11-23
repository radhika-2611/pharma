<?php
require ("functions.php");
$con = dbConnect();

session_start();

$add_action1 = $_REQUEST["fname"];
$add_action2 = $_REQUEST["lname"];
$add_action3 = $_REQUEST["dob"];
$add_action4 = $_REQUEST["age"];
$add_action5 = $_REQUEST["occupation"];
$add_action6 = $_REQUEST["email"];
$add_action7 = $_REQUEST["address"];
$add_action8 = $_REQUEST["state"];
$add_action9 = $_REQUEST["zip"];
$add_action10 = $_REQUEST["pass"];
$add_action11 = $_REQUEST["cpass"];

$add_sql = "INSERT into `register` (`fname`, `lname`, `dob`, `age`, `occupation`, `email`, `address`, `state`,`zip`, `pass`, `cpass`)  
									values('$add_action1','$add_action2','$add_action3','$add_action4','$add_action5','$add_action6',
									'$add_action7','$add_action8','$add_action9','$add_action10','$add_action11');";

$add_data = $con->query($add_sql);

header ("Location: request.php");
?>