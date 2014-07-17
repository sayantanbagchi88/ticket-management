<?php
ob_start();
session_start();

date_default_timezone_set("Asia/Calcutta");

$today = date("F j, Y");
PRINT "$today \n";

$mysql = mysql_connect("localhost", "tcsticketdba","YbWSQ34bFtVnC5sW") or die("Failure to communicate to database.");
      if(!mysql_select_db("tcsticket",$mysql)){ print("<p>Failure to select database.</p>");}  
?>

