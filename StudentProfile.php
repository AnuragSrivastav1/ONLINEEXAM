<?php
include("MemberHeader.html");
?>

<div style="width:900px;height:400px;background-color: white;">
<?php
session_start();
$user=$_SESSION['user'];
include("dbconnect.php");
$query="select * from stu_info where email='$user'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
echo"<form action=EditProfile.php>";
echo"<table width=400 height=400 cellspacing=0 bgcolor=lightgrey>";
echo"<tr><td><b>User Id</b></td><td>".$row['email']."</td></tr>";
echo"<tr><td><b>Student Name</b></td><td>".$row['sname']."</td></tr>";
echo"<tr><td><b>Qualification</b></td><td>".$row['squa']."</td></tr>";
echo"<tr><td><b>Date of Birth</b></td><td>".$row['sdob']."</td></tr>";
echo"<tr><td><b>Gender</b></td><td>".$row['sgender']."</td></tr>";
echo"<tr><td><b>Address</b></td><td>".$row['sadd']."</td></tr>";
echo"<tr><td><b>City</b></td><td>".$row['scity']."</td></tr>";
echo"<tr><td><b>State</b></td><td>".$row['state']."</td></tr>";
echo"<tr><td><b>Pin Code</b></td><td>".$row['pin']."</td></tr>";
echo"<tr><td><b>Contact</b></td><td>".$row['scount']."</td></tr>";
echo"<tr><td><b><input type=Button value=Print></b></td><td><input type=Submit value=Update></td></tr>";
echo"</table>";
echo"</form>";
}
?>
</div>

<?php
include("footer.html");
?>
