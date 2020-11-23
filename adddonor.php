<?php
require ("functions.php");
$con = dbConnect();

session_start();

$add_action0 = $_REQUEST["id"];
$add_action1 = $_REQUEST["name"];
$add_action2 = $_REQUEST["mobile"];
$add_action3 = $_REQUEST["donate"];
$add_action4 = $_REQUEST["time"];

$add_sql = "INSERT into `donation` (`id`, `name`, `mobile`, `donate`, `time`) values 
									('$add_action0','$add_action1','$add_action2','$add_action3','$add_action4');";

$add_data = $con->query($add_sql);

header ("Location: index.html");
?>