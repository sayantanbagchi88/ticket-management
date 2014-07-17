<?php
include 'db_connect.php';     //connection file is included
?>

<html>
<head>
</head>
<BODY bgcolor="#7E2217" text="white">
<form name="login.php" method="post" id="id1" action="login_pro.php">
<br><br>
<table align="center"><tr><td><h1>TICKET MANAGEMENT PORTAL</h1></td></tr></table>
<table width="300px" align="center" style="border:1px solid #000000;background-color:#E18B6B;">
<tr><td colspan=2></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
  <tr>
    <td><font color="brown"><b>LOGIN NAME</b></font></td>
    <td><input type="text" name="USERNAME" value=""></td>
  </tr>
  <tr>
    <td><font color="brown"><b>PASSWORD</b></font></td>
    <td><input type="PASSWORD" name="PASSWORD" value=""></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="Submit" value="Submit">
  </tr>
  <tr><td colspan=2>&nbsp;</td></tr>
</table>
</form>

<?php
$msg=0;

if(@$_REQUEST[msg]==1)
{
echo "<H1>Invalid user id or password....<H1>";
}
if(@$_REQUEST[msg]==2)
{
echo "<H1>at first login...<H1>";
}

?>
</body>
</html>
