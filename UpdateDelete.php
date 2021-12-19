<?php
$qid=$_REQUEST['qid'];
$ques=$_REQUEST['ques'];
$opt1=$_REQUEST['opt1'];
$opt2=$_REQUEST['opt2'];
$opt3=$_REQUEST['opt3'];
$opt4=$_REQUEST['opt4'];
$ans=$_REQUEST['ans'];
$op=$_REQUEST['opr'];
include("dbconnect.php");
if($op=='Update')
{
$query1="update ques_mstr set ques='$ques',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',ans='$ans' where qid='$qid'";
$res=mysqli_query($con,$query1);
if($res>0)
echo"Question Updated Successfully";
else
echo"Error in Updation!!!!!";
}
else
{
$query2="delete from ques_mstr where qid='$qid'";
$res=mysqli_query($con,$query2);
if($res>0)
echo"Question Delete Successfully";
else
echo"Error in Deletion !!!!";
}
?>