<?php
include("dbconnect.php");
session_start();
$user=$_SESSION['user'];
$obtain=0;
for($count=1;$count<=20;$count++)
{
if(isSet($_GET['ans'.$count]))
{
$ans[$count]=$_GET['ans'.$count];
$id[$count]=$_GET['id'.$count];
$query="insert into result_mstr values('$user','$id[$count]','$ans[$count]',curdate())";
$res=mysqli_query($con,$query);
if($res>0)
{
}
$query2="select ans from ques_mstr where qid='$id[$count]'";
$res1=mysqli_query($con,$query2);
if($row=mysqli_fetch_array($res1))
{
$db_ans=$row['ans'];
if($ans[$count]==$db_ans)
{
$obtain +=5;
}
}
}
}
$query3="insert into result values('$user',curdate(),'100','$obtain')";
$r=mysqli_query($con,$query3);
if($r>0)
{
header("location:StudentResult.php");
}
?>