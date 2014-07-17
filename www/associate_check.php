<?php
include 'db_connect.php';     //connection file is included

if(@$_SESSION[username] != 'admin')
	{
	header("location:login.php?msg=2");
	}

else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid]);
	}

?>

<html>
<body bgcolor="9966ff">
<SCRIPT LANGUAGE = "JavaScript">
function validt(frm)
{
if (frm.emp_id.value==""||frm.emp_id.value ==null)
		{
			alert("Please Enter Associate's id");
			 return false;
                 }
     
var r=/^[0-9]+$/;  
       if ( r.test(frm.emp_id.value) == false) 
           {
          alert("associate id must contain numeric characters!");
           return false;
           }
if (frm.emp_name.value==""||frm.emp_name.value ==null)
	{
	alert("Please Enter associate's name");
	return false;
        }
   
   var r=/^[a-zA-Z\s]+$/;  
       if ( r.test(frm.emp_name.value) == false) 
           {
   	   alert("Associate's name must contain alphabetic characters!");
           return false;
           }
if (frm.password.value==""||frm.password.value==null)
	{
	alert("Associate must provide a password or it will be "00000.");	
	return false;
	}

if (frm.team_name.value==""||frm.team_name.value ==null)
		{
			alert("Please Enter team name");
			 return false;
                 }
   }

if (frm.email_id.value==""||frm.email_id.value ==null)
	{
	alert("Please Enter associate's email id");
	return false;
        }
   
   var r=/^[a-zA-Z\s][@]+[.]+[0-9]+$/;  
       if ( r.test(frm.email_id.value) == false) 
           {
   	   alert("Associate's name must contain alphanumeric or "@/." characters!");
           return false;
           }

</SCRIPT>
<?php



 $result = mysql_query("select team_name from team;");
 $result1= mysql_query("select emp_name from employee;");
 $result2= mysql_query("select email_id from employee;");
  ?>     
 <form name="frm"  action="associate.php" method="post" onSubmit="return validt(frm)" > 
   <table frame=box align=center bgcolor="9966ff">
<b><h2>ENTER ASSOCIATE'S INFORMATION</h2></b><br> 
</table>
<table frame=box align=center bgcolor="ffff33">
    	<tr><td>Associate's ID:</td><td><input type="text" name="emp_id" value="" size="15"></td></tr>        
        <tr><td>Associate's Name: </td><td><input type="text" name="emp_name" value="" size="15"></td>
	<tr><td>Associate's Password: </td><td><input type="password" name="password" value=""size="15"></td>
	<tr><td>Associate's Email: </td><td><input type="text" name="email_id" value=""size="15"></td>
	<tr><td><font color="BLACK" >Associate's team name:</font></td>
	<td>
 	<?php 
    		echo "<select name=\"team_name\">";  
  		  echo "<option size =15 selected>Select</option>"; 
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
 	<tr><td><font color="BLACK" >Associate's supervisor name:</font></td>
	<td>
 	<?php 
    		echo "<select name=\"super_name\">";  
  		  echo "<option size =30 selected>Select</option>"; 
    		if(mysql_num_rows($result1))  
  		  {  
  		  while($row = mysql_fetch_assoc($result1))  
   		 {  
  		  echo "<option>$row[emp_name]</option>";  
   		 }  
     		 }  
   		 else { 
   		 echo "<option>No supervisor Present</option>";   
    		}  
  	?> 
 	</td>
	<tr><td><font color="BLACK" >Associate's Supervisor Email:</font></td>
	<td>
 	<?php 
    		echo "<select name=\"super_email\">";  
  		  echo "<option size =30 selected>Select</option>"; 
    		if(mysql_num_rows($result2))  
  		  {  
  		  while($row = mysql_fetch_assoc($result2))  
   		 {  
  		  echo "<option>$row[email_id]</option>";  
   		 }  
     		 }  
   		 else { 
   		 echo "<option>No Supervisor Email Id Present</option>";   
    		}  
  	?> 
 	</td>
	</table>
   	  <table frame=box align=center bgcolor="9966ff">
        <br><tr><td><input type="SUBMIT" name="submit" value="Insert" ></td>
        <td><input type="RESET" name="reset" value="Clear"></td></tr>
<p align="center"  ><a href="admin_insert_page.php"><h3><b>BACK</b></a></h3></p>
      </table>
   </form> 
   <body>
</html>

