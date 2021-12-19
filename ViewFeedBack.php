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
$query="select * from feedback";
$res=mysqli_query($con,$query);
echo"<span style='font-size:22px;color:blue;'>Student Feedback</span><br>";
echo"<table width=1000 border=1 cellspacing=0 cellpadding=3>";
echo"<tr bgcolor=brown style='color:white;'><th>Student ID</th><th>Date</th><th>Subject</th><th width=500>Message</th></tr>";
$count=1;
while($row=mysqli_fetch_array($res))
{
$sid=$row['sid'];
$date=$row['date'];
$sub=$row['subject'];
$msg=$row['message'];
if($count%2==1)
echo"<tr bgcolor=lightyellow><td>".$sid."</td><td>".$date."</td><td>".$sub."</td><td>".$msg."</td></tr>";
else
echo"<tr bgcolor=lightgrey><td>".$sid."</td><td>".$date."</td><td>".$sub."</td><td>".$msg."</td></tr>";
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