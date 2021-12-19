<?php
include("MemberHeader.html");
?>
<div style="width:900px;height:400px;background-color:white;">
<h1><u>Student Feed Back</u></h1>
<form action="">
<table width=400 height=300 bgcolor=lightblue border=0>
<tr><td width=200>Subject</td><td><input type=text name=sub></td></tr>
<tr><td width=200>Message</td><td><textarea style="width:180px; height:80px;" name=msg></textarea></td></tr>
<tr><td width=200><input type=submit name='s' value=SUBMIT></td><td><input type=reset value=RESET></td></tr>
</table>
</form>
<?php
if(isSet($_REQUEST['s']))
{
session_start();
$user=$_SESSION['user'];
$sub=$_REQUEST['sub'];
$msg=$_REQUEST['msg'];
include("dbconnect.php");
$query="insert into feedback values('$user',curdate(),'$sub','$msg')";
$r=mysqli_query($con,$query);
if($r>0)
{
echo"<script>alert('Your Feed Back is Submitted Successfully')</script>";
}
}
?>
</div>
<?php
include("footer.html");
?>