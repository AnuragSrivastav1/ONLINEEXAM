<html>
<head>
    <title>Question List</title>
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

<div style="width:900px;height:500px;background-color:green;">
<span style="font-size:30px;color:white;">Question List</span>
<br>
<div style="width:880px;height:430px;background-color:white;border:2px solid black;overflow:scroll;">
<table width="880" border="1" cellspacing="0">
<tr bgcolor=yellow><th>Ques. ID</th><th>Question</th>
<th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Answer</th></tr>
<?php
include("dbconnect.php");
$query="select * from ques_mstr";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<tr><td>".$row['qid']."</td><td>".$row['ques']."</td><td>".$row['opt1']."</td><td>".$row['opt2']."</td>
<td>".$row['opt3']."</td><td>".$row['opt4']."</td><td>".$row['ans']."</td></tr>";
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
