<?php
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$sname=$_REQUEST['sname'];
$qua=$_REQUEST['qua'];
$dob=$_REQUEST['dob'];
$gen=$_REQUEST['gen'];
$addr=$_REQUEST['addr'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$pin=$_REQUEST['t6'];
$contact=$_REQUEST['contact'];
include("dbconnect.php");
$query1="insert into stu_info values('$user','$sname','$qua','$dob','$gen','$addr','$city','$state','$pin','$contact')";
$query2="insert into login values('$user','$pswd','Member')";
$res1=mysqli_query($con,$query1);
$res2=mysqli_query($con,$query2);
if($res1>0 && $res2>0)
{
header("location:index.php?msg=Registered Successfully");
}
else
{
header("location:reg.html?msg=Error!!!!!in!!Registration");
}
?>