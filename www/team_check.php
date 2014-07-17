<?php
include 'db_connect.php';     //connection file is included
?>

<?php
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
<SCRIPT LANGUAGE = "JavaScript">
function validt(frm)
	{
	if (frm.team_name.value==""||frm.team_name.value ==null)
		{
		alert("Please Enter team name");
		return false;
                }
       	
	var r=/^[a-zA-Z0-9_]+$/;  
       	if ( r.test(frm.team_name.value) == false) 
           	{
          	alert("team name must contain alphabetic/numeric characters or "_"!");
           	return false;
           	}
	
	if (frm.location_building.value==""||frm.location_building.value ==null)
		{
		alert("Please Enter team's location");
		 return false;
                }
       var r=/^[a-zA-Z\s]+[ ]+$/;  
       if ( r.test(frm.location_building.value) == false) 
           	{
          	alert("building location name must contain alphabetic characters!");
           	return false;
           	}
	}

</SCRIPT>

<form name="frm"  action="team.php" method="post" onSubmit="return validt(frm)" > 

<table frame=box align=center bgcolor="9966ff">
<b><h2>ENTER NEW TEAM INFORMATION</h2> </b>
</table>
   
	<table frame=box align=center bgcolor="ffff33">
        <tr><td>Team Name: </td><td><input type="text" name="team_name" value="" size="10"></td>
        <tr><td>Team Location: </td><td><input type="text" name="location_building" value="" size="10"></td>
        <table frame=box align=center bgcolor="9966ff">
        <br><tr><td><input type="SUBMIT" name="submit" value="Insert" ></td>
        <td><input type="RESET" name="reset" value="Clear"></td></tr>
	<p align="center"  ><a href="admin_insert_page.php"><h3><b>BACK</b></a></h3></p>
 </table>
 </form> 
 </body>
</html>

