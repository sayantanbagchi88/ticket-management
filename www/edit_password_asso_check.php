<?php
include 'db_connect.php';     //connection file is included
?>

<html>
<body bgcolor="9966FF">

<?php 
if(@$_SESSION[username] != 'associate')
	{
	header("location:login.php?msg=2");
	}

else	
	{
	echo ("Welcome ");
	print_r( @$_SESSION[userid][0]);
	}

$emp_name = @$_SESSION[userid][0];

$result2 = mysql_query("select emp_id from employee where emp_name = '$emp_name';");

?>     

<form name="frm"  action="edit_password_asso.php" method="post" onSubmit="return validt(frm)" > 

<table frame=box align=center bgcolor="9966FF">
<b><h2>Update Your Password Information</h2></b> 
</table>

      
<table frame=box align=center bgcolor="FFFF33">
       
<tr><td>Associate's Name: </font></td>

<td>
 	<?php 
	print "$emp_name";			
  	?> 
</td>
</tr>    

<tr><td>New Password:</td><td><input type="password" name="password" value="" size="15"></td></tr>

</table>
         
<table frame=box align=center bgcolor="bbbbbb">
        
<br><br><tr><td><input type="SUBMIT" name="submit" value="Insert" ></td>
        
<td><input type="RESET" name="reset" value="Clear"></td></tr>

<p align="center"  ><a href="welcome_associate.php"><h3><b>BACK</b></a></h3></p>

      </table>
   </form> 
   

   
</body>
</html>
