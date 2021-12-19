<html>
<head>
<title>Question Paper</title>
</head>
<body>
<center>
<h1>Question Paper</h1>
<form action="SubmitExam.php">
<table width="1000" border="1" cellspacing="0">
<?php
include("dbconnect.php");
$query="select * from ques_mstr";
$res=mysqli_query($con,$query);
$count=1;
while($row=mysqli_fetch_array($res))
{
$qid=$row['qid'];
$ques=$row['ques'];
$opt1=$row['opt1'];
$opt2=$row['opt2'];
$opt3=$row['opt3'];
$opt4=$row['opt4'];
echo"<input type=hidden name=id".$count." value=".$qid.">";
echo"<tr bgcolor=yellow><td colspan=2><span style='color:red;'>".$count.":&nbsp;</span>".$ques."</td></tr>";
echo"<tr bgcolor=lightgrey><td width=500><input type=radio name=ans".$count." value='".$opt1."'>".$opt1."</td><td width=500><input type=radio name=ans".$count." value='".$opt2."'>".$opt2."</td></tr>";
echo"<tr bgcolor=lightgrey><td width=500><input type=radio name=ans".$count." value='".$opt3."'>".$opt3."</td><td width=500><input type=radio name=ans".$count." value='".$opt4."'>".$opt4."</td></tr>";
$count++;
if($count==21)
break;
}
?>
<tr><th colspan=2><input type=submit name="s" value="SUBMIT"></th></tr>
</table>
</form>
</center>
</body>
</html>