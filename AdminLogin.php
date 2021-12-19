<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<body bgcolor="lightgrey";>
<center>

<h1 style="font-family:Century Gothic;font-size:40px;color:green;">Online Exam Web Portal</h1>
<br>
<br>
<br>
<fieldset style="width:600px;height:150px;border:5px solid green;">
<legend style="font-family:Century Gothic;font-size:20px;color:red;">Admin Login Panel</legend>
<form method="GET" action="">
<table>
<tr><td colspan="2"> &nbsp; </td></tr>
<tr><td>Login Name/User Id</td><td><input type="text" name="t1" /></td></tr>
<tr><td>Password</td><td><input type="password" name="t2" /></td></tr>
<tr><td colspan="2"> &nbsp; </td></tr>
<tr><td align="right"><input type="submit" value="login" class="button" /></td>
<td align="left"><input type="reset" value="Clear" class="button" /></td></tr>
</table>
</form>
</fieldset>
</center>


<?php
if(isSet($_REQUEST['t1']))
{
include("dbconnect.php");
$user=$_REQUEST['t1'];
$pswd=$_REQUEST['t2'];
$q="select * from login where email='$user' and password='$pswd' and usertype='Admin'";
$res=mysqli_query($con,$q);
if($row=mysqli_fetch_array($res))
{
session_start();
$_SESSION['user']=$user;
header('location:AdminHome.php');
}
else
{
echo"<script>alert('Invalid User or Password')</script>";
}
}
?>   
</body>
</html>

