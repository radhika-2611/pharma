<?php
//echo "download.php file";
/** database connection **/
require ("functions.php");
session_start();
$con = dbConnect();

$select_sql = "SELECT * FROM `donation`";
$res = $con->query($select_sql);

$filename = 'donors.csv'; 

$file = fopen($filename, "w"); 

fputcsv($file, ['donation id', 'name', 'mobile', 'willing to donate', 'time']);

if (mysqli_num_rows($res) > 0){
	
	while($row = $res->fetch_row()){
		
		fputcsv($file, $row);
	}
}

fclose($file); 

header("Content-Discription: File Transfer");
header("Content-Disposition: attachment; filename=".$filename);
header("Content-Type: application/csv; ");

readfile($filename);

unlink($filename);
exit();


?>
