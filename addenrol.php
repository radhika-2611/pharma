<?php
require ("functions.php");
$con = dbConnect();

session_start();

$add_action0 = $_REQUEST["email"];
$add_action1 = $_REQUEST["q1"];
$add_action2 = $_REQUEST["q2"];
$add_action3 = $_REQUEST["q3"];
$add_action4 = $_REQUEST["q4"];
$add_action5 = $_REQUEST["q5"];
$add_action6 = $_REQUEST["q6"];

$add_sql = "INSERT into `enrol` (`email`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`) values 
									('$add_action0','$add_action1','$add_action2','$add_action3','$add_action4','$add_action5','$add_action6');";

$add_data = $con->query($add_sql);

header ("Location: index.html");
?>