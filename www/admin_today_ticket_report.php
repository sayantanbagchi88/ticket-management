<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'admin')
	{
     	header('Location: welcome.php');
     	exit;
	}

$table = 'ticket'; // table you want to export  
$file = 'ticket_info'; // csv name.   

$today = date ("Y-m-d");
$result = mysql_query("SHOW COLUMNS FROM ".$table."");  
$csv_output='';

$i = 0;   
	while ($row = mysql_fetch_assoc($result)) 
		{ 
		$csv_output .= $row['Field'].","; 
		$i++;
		} 
$csv_output .= "\n";


$values = mysql_query("SELECT * FROM ticket WHERE ticket.date = $today ");   

while ($rowr = mysql_fetch_row($values)) 
	{ 
	for ($j=0;$j<$i;$j++) 
		{ 
		$csv_output .= $rowr[$j].", "; 
		} 
	$csv_output .= "\n"; 
	}   

$filename = $file."_".date("d-m-Y_H-i",time()); 
  
header("Content-type: application/vnd.ms-excel"); 
header("Content-disposition: csv" . date("Y-m-d") . ".csv"); 
header( "Content-disposition: filename=".$filename.".csv");   
print $csv_output;   
exit; 
?> 
