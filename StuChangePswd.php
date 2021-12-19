<?php
include("MemberHeader.html");
?>

<div style="width:900px;height:400px;background-color: hotpink;">
<h1><u>Change Password</u></h1>
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
header('location:index.php?msg=Password Updated');
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
