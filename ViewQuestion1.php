<?php
$qid=$_REQUEST['qid'];
include("dbconnect.php");
$query="select * from ques_mstr where qid='$qid'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$ques=$row['ques'];
$opt1=$row['opt1'];
$opt2=$row['opt2'];
$opt3=$row['opt3'];
$opt4=$row['opt4'];
$ans=$row['ans'];
echo"<center><h2><u>Question Detail</u></h2>";
echo"<form method=get action=UpdateDelete.php>";
echo"<table width=600 height=600 bgcolor=hotpink border=1>";
echo"<tr><td>Question ID</td><td><input type=text name=qid value=".$row['qid']."></td></tr>";
echo"<tr><td>Question</td><td><input type=text name=ques value='".$ques."'></td></tr>";
echo"<tr><td>Option 1</td><td><input type=text name=opt1 value='".$opt1."'></td></tr>";
echo"<tr><td>Option 2</td><td><input type=text name=opt2 value='".$opt2."'></td></tr>";
echo"<tr><td>Option 3</td><td><input type=text name=opt3 value='".$opt3."'</textarea></td></tr>";
echo"<tr><td>Option 4</td><td><input type=text name=opt4 value='".$opt4."'></td></tr>";
echo"<tr><td>Answer</td><td><input type=text name=ans value='".$ans."'></td></tr>";
echo"<tr><td><input type=submit value=Update name=opr></td><td><input type=Submit value=Delete name=opr></td></tr>";
echo"</table></form></center>";
}
else
{
echo"Record not found";
}
?>