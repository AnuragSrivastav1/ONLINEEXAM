<?php
include("MemberHeader.html");
?>

<div style="width:900px;height:400px;background-color: white;">
<form action="">
<?php
session_start();
$user=$_SESSION['user'];
include("dbconnect.php");
$query="select * from stu_info where email='$user'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
echo"<table width=400 height=400 cellspacing=0 bgcolor=lightgreen>";
echo"<tr><td><b>User Id</b></td><td>".$row['email']."</td></tr>";
echo"<tr><td><b>Student Name</b></td><td><input type=text name=t2 value='".$row['sname']."'></td></tr>";
echo"<tr><td><b>Qualification</b></td><td><input type=text name=t3 value=".$row['squa']."></td></tr>";
echo"<tr><td><b>Date of Birth</b></td><td><input type=text name=t4 value=".$row['sdob']."></td></tr>";
echo"<tr><td><b>Gender</b></td><td><input type=text name=t5 value=".$row['sgender']."></td></tr>";
echo"<tr><td><b>Address</b></td><td><input type=text name=t6 value='".$row['sadd']."'></td></tr>";
echo"<tr><td><b>City</b></td><td><input type=text name=t7 value=".$row['scity']."></td></tr>";
echo"<tr><td><b>State</b></td><td><input type=text name=t8 value='".$row['state']."'></td></tr>";
echo"<tr><td><b>Pin Code</b></td><td><input type=text name=t9 value=".$row['pin']."></td></tr>";
echo"<tr><td><b>Contact</b></td><td><input type=text name=t10 value=".$row['scount']."></td></tr>";
echo"<tr><td><input type=submit value=Update name='s'></td><td><input type=reset value=Reset></td></tr>";
echo"</table>";
echo"</form>";
}
?>
</div>

<?php
include("footer.html");
?>


<?php
if(isSet($_REQUEST['s']))
{
//session_start();
$v1=$_SESSION['user'];
$v2=$_GET['t2'];
$v3=$_GET['t3'];
$v4=$_GET['t4'];
$v5=$_GET['t5'];
$v6=$_GET['t6'];
$v7=$_GET['t7'];
$v8=$_GET['t8'];
$v9=$_GET['t9'];
$v10=$_GET['t10'];
$query="update stu_info set sname='$v2',squa='$v3',sdob='$v4',sgender='$v5',sadd='$v6',scity='$v7',state='$v8',pin='$v9',scount='$v10' where email='$v1'";
$res=mysqli_query($con,$query);
if($res>0)
echo"<script>alert('Profile Updated')</script>";
else
echo"Error in Updation";
}
?>