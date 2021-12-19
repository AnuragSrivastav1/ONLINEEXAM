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
    
<div style="width:900px;height:400px;background-color: #F4E7BD;overflow:scroll;">
<?php
include("dbconnect.php");
session_start();
$user=$_SESSION['user'];
$query="SELECT stu_info.sname,stu_info.squa,stu_info.sdob,stu_info.sgender,result.edate,result.maximum,result.obtained FROM stu_info, result WHERE stu_info.email=result.sid";
$res=mysqli_query($con,$query);
echo"<span style='font-size:22px;color:blue;'>Student Result Sheet</span><br>";
echo"<table width=1000 border=1 cellspacing=0 cellpadding=3>";
echo"<tr bgcolor=dodgerblue style='color:white;'><th>Student Name</th><th bgcolor=red>Email</th><th>Qualification</th><th>Date of Birth</th><th>Gender</th><th>Exam Date</th><th>Maximum</th><th>Obtained</th></tr>";
$count=1;
while($row=mysqli_fetch_array($res))
{
$sname=$row['sname'];
$qua=$row['squa'];
$dob=$row['sdob'];
$gender=$row['sgender'];
$date=$row['edate'];
$max=$row['maximum'];
$obt=$row['obtained'];
if($count%2==1)
echo"<tr bgcolor=lightblue><td>".$sname."</td><td>".$user."</td><td>".$qua."</td><td>".$dob."</td><td>".$gender."</td><td>".$date."</td><td>".$max."</td><td>".$obt."</td></tr>";
else
echo"<tr bgcolor=lightgreen><td>".$sname."</td><td>".$user."</td><td>".$qua."</td><td>".$dob."</td><td>".$gender."</td><td>".$date."</td><td>".$max."</td><td>".$obt."</td></tr>";
$count++;
}
echo"</table>";
?>
</div>

<?php
include("footer.html");
?>
    
    </center>
    
</body>
</html>