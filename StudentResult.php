<?php
include("dbconnect.php");
session_start();
$user=$_SESSION['user'];
$query="SELECT stu_info.sname,stu_info.squa,stu_info.sdob,stu_info.sgender,result.edate,result.maximum,result.obtained FROM stu_info, result WHERE stu_info.email=
'$user' AND stu_info.email=result.sid";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$sname=$row['sname'];
$qua=$row['squa'];
$dob=$row['sdob'];
$gender=$row['sgender'];
$date=$row['edate'];
$max=$row['maximum'];
$obt=$row['obtained'];
echo"<center><h1>SCPM Online Exam Web Portal</h1><h3 style='color:green;'>Marksheet</h3><br><table width=500 height=400 border=3 cellspacing=0 bgcolor=white><tr>
<th colspan=2><h3>e-Certificate</h3></th><tr><td width=250>Student Name</td><td width=250>".$sname."</td></tr><tr><td width=250>E.Mail</td><td width=250>".$user."
</td></tr><tr><td width=250>Qualification</td><td width=250>".$qua."</td></tr><tr><td width=250>Gender</td><td width=250>".$gender."</td></tr><tr><td width=250>
Exam date</td><td width=250>".$date."</td></tr><tr><td width=250>Maximum</td><td width=250>".$max."</td></tr><tr><td width=250>Obtained</td><td width=250>".$obt."
</td></tr></table></center>";
}
?>