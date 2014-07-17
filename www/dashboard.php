<?php
include 'db_connect.php';     //connection file is included
?>

<?php 
header('Refresh: 5'); 
?>

<HTML>
<HEAD>
<TITLE>select records from given database</TITLE>
</HEAD>
<BODY bgcolor="2cc2e5" text="black">
<DIV ALIGN="CENTER">
<FONT color=blue>
<h2><u>TICKET MANAGEMENT PORTAL</u></h2></FONT>
<FORM action="dashboard.php" method="post">


<p align="center">
        <FONT color="brown" size="3">
        <table border=1 width="80%">

<?php

$cur_time = date("Y-m-d H:i:s");
$upto_date= date("Y-m-d H:i:s", time() + 24*60*60);

$start_date= date("Y-m-d H:i:s", time() - 86400);

print "Today: $cur_time";
print"\n";
print "Starting date: $start_date";	


$result = mysql_query("select * from ticket where resolution_time between '$start_date' and '$upto_date' and ticket_status != 'resolved' order by resolution_time;");

$sql = mysql_query("UPDATE tcsticket.ticket SET sla_violated = 'YES' WHERE ticket.resolution_time <= '$cur_time' and ticket.ticket_status != 'resolved';");
$sql1 = mysql_query("UPDATE tcsticket.pending_tracker SET sla_violated = 'YES' WHERE pending_tracker.resolution_time <= '$cur_time';");


if ($result || mysql_num_rows($result)) 
	{
        $numrows = mysql_num_rows($result);
        $rowcount = 1;
	if (!$result) 
		{    
		die("Query to show fields from table failed");
		}
	$fields_num = mysql_num_fields($result);
	
	echo "<table border='1'><tr>";
	for($i=0; $i<$fields_num; $i++)
	{ 
   		$field = mysql_fetch_field($result);
    		echo "<td>{$field->name}</td>";
	}
	echo "</tr>\n";
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>"; 
 	foreach($row as $cell)    
    		echo "<td>$cell</td>";   
 	echo "</tr>\n";
	}
	mysql_free_result($result);

	}     
	print "<A HREF='login.php'><FONT color=blue size='2'> Home | </A> 
         <A HREF='javascript:history.back();'>
<FONT color=blue size='2'>Previous</A></FONT><BR /><BR />";
?> 
</TABLE>
</FORM> 
</BODY>
</HTML>

