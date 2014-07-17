<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'viewer')
	{

	header("location:login.php?msg=2");
	}

else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid][0]);
	}

?>

<HTML>
<HEAD>
<TITLE>select records from a table</TITLE>
</HEAD>
<BODY bgcolor="#7E2217" text="white">
<DIV ALIGN="CENTER">
<FONT color=white>
<h2><u>TICKET MANAGEMENT PORTAL</u></h2></FONT>
      
<FORM action="viewer_view_ticket.php" method="post">
<TABLE border=1 cellpadding=2 width="100%">
 
<table border=1 cellpadding=2 width="80%">
<tr bgcolor="#E18B6B" align="center">
<td><font color="brown" size="3"><b><u>Table Rows</u></b></font></td>
</tr>
</table>

<table border=1 cellpadding=2 width="20%">
<tr bgcolor="#E18B6B" align="center">
<tr><td>Ticket number:</td><td><input type="text" name="ticket_no" value="" size="15"></td></tr> 

</table>


<table>
<tr><td><input type="submit" value="Click Here"></td></tr>
</table>
<DIV ALIGN="CENTER">
<FONT color=white>
<h3><TICKET INFORMATION</h3></FONT>

<p align="center">
        <font color=white size="3">
        <table border=1 width="80%">


<?php

       $ticket_no=$_POST['ticket_no'];
	

print "<FONT color=white size='2'> TICKET INFORMATION \n</FONT>";

	$result = mysql_query("select * from ticket where ticket.ticket_no='$ticket_no'");

	if ($result || mysql_num_rows($result)) {
        $numrows = mysql_num_rows($result);
        $rowcount = 1;
	if (!$result) 
	{    
		die("Query to show fields from table failed");
	}
	$fields_num = mysql_num_fields($result);
	
	echo "<table border='1'><tr>";
// printing table headers
	for($i=0; $i<$fields_num; $i++)
	{ 
   		$field = mysql_fetch_field($result);
    		echo "<td>{$field->name}</td>";
	}
	echo "</tr>\n";
// printing table rows
	while($row = mysql_fetch_row($result))
	{
    	echo "<tr>"; 
// $row is array... foreach( .. ) puts every element    
// of $row to $cell variable   
 	foreach($row as $cell)    
    		echo "<td>$cell</td>";   
 	echo "</tr>\n";
	}
mysql_free_result($result);

} 

?>
</TABLE>
<br><br>

<?php
	print "<A HREF='login.php'><FONT color=white size='2'> Home | </A>
        <A HREF='viewer_view.php'><FONT color=white size='2'> Back | </A>
	<A HREF='javascript:history.back();'><FONT color=white size='2'>Previous</A></FONT><BR /><BR />";
?>
</FORM> 
</BODY>
</HTML>

