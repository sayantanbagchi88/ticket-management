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
if (frm.viewer_id.value==""||frm.viewer_id.value ==NULL)
	{
	alert("Please Enter Viewer's id");
	return false;
        }
	
var r=/^[0-9]+$/;  
if ( r.test(frm.viewer_id.value) == false) 
        {
        alert("Viewer_id must contain numeric characters!");
        return false;
        }
	
if (frm.viewer_name.value==""||frm.viewer_name.value ==NULL)
	{
	alert("Please Enter viewer's name");
	return false;
        }

var r=/^[a-zA-Z\s]+$/;  
if ( r.test(frm.viewer_name.value) == false) 
	{
        alert("Viewer name must contain alphabetic characters!");
        return false;
        }
if (frm.password.value==""||frm.password.value==NULL)
	{
	alert ("Please enter viewer's password...");
	return false;
	}
}


</SCRIPT>
<?php
//$mysql = mysql_connect("localhost", "root","") or die("Failure to communicate to database.");

//if(!mysql_select_db("tcsticket")){ print("<p>Failure to select database.</p>");}
?>
<form name="frm"  action="viewer.php" method="post" onSubmit="return validt(frm)" > 

<table frame=box align=center bgcolor="9966ff"><b><h2>Enter Viewer's Information</h2></b></CAPTION>  
</table>

<table frame=box align=center bgcolor="ffff33">

<tr><td>Viewer ID: </td><td><input type="text" name="viewer_id" value="" size="10"></td>
<tr><td>Name:</td><td><input type="text" name="viewer_name" value="" size="30"></td></tr>
<tr><td>Password: </td><td><input type="Password" name="password" value="" size="15"></td>
   
</table>
<table frame=box align=center bgcolor="9966ff">
        <br><br><tr><td><input type="SUBMIT" name="submit" value="Insert" ></td>
        <td><input type="RESET" name="reset" value="Clear"></td></tr>
	<p align="center"  ><a href="admin_insert_page.php"><h3><b>BACK</b></a></h3></p>
      </table>
   </form> 
<body>
</html>
