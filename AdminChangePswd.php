<html>
<head>
    <title>Untitled Page</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    .link{display:block;color:White;background-color:Black;text-decoration:none;text-align: center;}
    .link:hover{color:black;background-color:white;}
    .style1{color:red;}
    
    
    </style>
</head>
<body>

    <center>
<?php
include("AdminHeader.html");
?>
    
<div style="width:900px;height:400px;background-color: #F4E7BD;">

<h1><u>Admin Change Password</u></h1>
<form action="">
<table width=400 height=300 bgcolor=lightblue border=0>
<tr><td width=200>Old Password</td><td><input type=Password name=opswd></td></tr>
<tr><td width=200>New Password</td><td><input type=Password name=npswd></td></tr>
<tr><td width=200>Confirm Password</td><td><input type=Password name=cpswd></td></tr>
<tr><td width=200><input type=submit name='s' value=SUBMIT></td><td><input type=reset value=RESET></td></tr>
</table>
</form>
<?php
if(isSet($_REQUEST['s']))
{
session_start();
$user=$_SESSION['user'];
$opswd=$_REQUEST['opswd'];
$npswd=$_REQUEST['npswd'];
$cpswd=$_REQUEST['cpswd'];
include("dbconnect.php");
$query1="select password from login where email='$user'";
$r1=mysqli_query($con,$query1);
if($rec1=mysqli_fetch_array($r1))
{
$db_opswd=$rec1['password'];
if($opswd==$db_opswd)
{
if($npswd==$cpswd)
{
$query2="update login set password='$npswd' where email='$user'";
$r2=mysqli_query($con,$query2);
if($r2>0)
{
header('location:AdminLogin.php?msg=Password Updated');
}
else
{
echo"<scipt>alert('Error in Password Updation')</script>";
}
}
else
{
echo"<scipt>alert('New Password and Confirm Password does not match')</script>";
}
}
}
else
{
echo"<scipt>alert('Old Password does not match')</script>";
}
}
?>
	
</div>

<?php
include("footer.html");
?>
    
    </center>
    
</body>
</html>