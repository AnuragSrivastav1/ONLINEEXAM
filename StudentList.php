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

<div style="width:900px;height:500px;background-color:pink;">
<h1 style="color:green;">Student List</h1>
<div style="width:880px;height:430px;background-color:white;border:2px solid black;overflow:scroll;">
<table width="880" border="1" cellspacing="0">
<tr bgcolor=yellow><th>Email/User</th><th>Student Name</th><th>Qualification</th><th>DOB</th><th>Gender</th><th>Address</th><th>City</th><th>State</th><th>Pin</th><th>Contact</th></tr>
<?php
include("dbconnect.php");
$query="select * from stu_info";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<tr><td>".$row['email']."</td><td>".$row['sname']."</td><td>".$row['squa']."</td><td>".$row['sdob']."</td><td>".$row['sgender']."</td><td>".$row['sadd']."</td><td>".$row['scity']."</td><td>".$row['state']."</td><td>".$row['pin']."</td><td>".$row['scount']."</td></tr>";
}
?>
</table>
</div>	
</div>

<?php
include("footer.html");
?>
</center>
</body>
</html>
