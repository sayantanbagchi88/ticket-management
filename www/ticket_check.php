<?php
include 'db_connect.php';     //connection file is included


if(@$_SESSION[username] != 'admin')
	{
	header("location:welcome.php?msg=2");
	}
else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid]);
	}
?>

<html>
<body bgcolor="9966ff">
<?php


$result = mysql_query("select team_name from team;");
$result1 = mysql_query("select team_name from team;");
$result2 = mysql_query("select emp_name from employee;");
$result4 = mysql_query("select ticket_status from ticket_status;");

?>     

<form name="frm"  action="ticket.php" method="post" onSubmit="return validt(frm)" > 
<table frame=box align=center bgcolor="9966ff">
<b><h2>ENTER TICKET INFORMATION</h2></b> 
</table>


<table frame=box align=center bgcolor="ffff33">

<tr><td>Ticket Number:</td><td><input type="text" name="ticket_no" value="" size="20"></td></tr>

<tr><td><font color="BLACK">Ticket Status:</font></td>
<td>
 	<?php 
    		echo "<select name=\"ticket_status\">";  
  		echo "<option size =20 selected>Select</option>"; 
    		if(mysql_num_rows($result4))  
  			{  
  		  	while($row = mysql_fetch_assoc($result4))  
   		 		{  
  		  		echo "<option>$row[ticket_status]</option>";  
   		 		}  
  
   		 	}  
   		 else { 
   		 	echo "<option>No Status Present</option>";   
    			}  
  	?> 
 </td>	

<tr><td><font color="BLACK">Assigned to:</font></td>

	<td>
	 	<?php 
		
		if (@$_SESSION [username] == 'admin')
			{
	    		echo "<select name=\"emp_name\">";  
  			echo "<option size =20 selected>Select</option>"; 
    			if(mysql_num_rows($result2))  
  		   		{  
	  	   		while($row = mysql_fetch_assoc($result2))  
   			 		{  
  			 		echo "<option>$row[emp_name]</option>";  
   					}  
     		   		}  
   		 
			else 
				{ 
   		 		echo "<option>No Name Present</option>";   
 	   			}  
			}
		else
			{
			$emp_name = @$_SESSION[userid][0];
  			print "$emp_name";
			}				  		
		?> 
		
<tr><td>Resolution Time</td></tr>
	<tr><td>YEAR:</td><td><input type="text" name="year" value="YYYY" size="4"></td>
	<td>MONTH:</td><td><input type="text" name="month" value="MM" size="2"></td>
	<td>DAY:</td><td><input type="text" name="day" value="DD" size="2"></td></tr>
	<tr><td>HOUR:</td><td><input type="text" name="hour" value="HH" size="2"></td>
	<td>MINUTE:</td><td><input type="text" name="min" value="MM" size="2"></td></tr>
	

<tr><td><font color="BLACK" > Reassigned to team:</font></td>
	<td>
 		<?php 
    			echo "<select name=\"team_name\">";  
  			echo "<option size =20 selected>Select</option>"; 
    			if(mysql_num_rows($result))  
  		   		{  
	  	   		while($row = mysql_fetch_assoc($result))  
   			 		{  
  			 		echo "<option>$row[team_name]</option>";  
   					}  
     		   		}  
   		 
			else { 
   		 		echo "<option>No Team Present</option>";   
 	   			}  
  		?> 
	</td>
		
<tr><td>Comments:</td><td><input type="text" name="comment" value="" size="20"></td></tr>

<tr><td>SLA Violated:</td><td><input type="text" name="sla_violated" value="NO" size="20"></td></tr>

</table>

<table frame=box align=center bgcolor="9966ff">

<br><br><tr><td><input type="SUBMIT" name="submit" value="Insert" ></td>

<td><input type="RESET" name="reset" value="Clear"></td></tr>

<p align="center"  ><a href='javascript:history.back();'><h3><b>BACK</b></a></h3></p>
</table>
   </form> 
   </body>
</html>

