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

<div style="width:900px;height:500px;background-color:dodgerblue;">
<span style="font-size:30px;color:white;">Add Question</span>
<br>
<div style="width:600px;height:350px;background-color:lightgrey;box-shadow:0px 15px 20px grey;border:2px solid black;">
<table width="400" height="350" cellspacing="0">
<form action="">
<tr><td>Question</td><td><input type=text name=ques></td></tr>
<tr><td>Option1</td><td><input type=text name=opt1></td></tr>
<tr><td>Option2</td><td><input type=text name=opt2></td></tr>
<tr><td>Option3</td><td><input type=text name=opt3></td></tr>
<tr><td>Option4</td><td><input type=text name=opt4></td></tr>
<tr><td>Answer</td><td><input type=text name=ans></td></tr>
<tr><td><input type=Submit value=Submit name=submit></td><td><input type=reset value=Reset></td></tr>
</table>
</form>
</div>
</div>

<?php
include("footer.html");
?>    
</center>
</body>
</html>

<?php
if(isSet($_REQUEST['submit']))
{
$ques=$_REQUEST['ques'];
$opt1=$_REQUEST['opt1'];
$opt2=$_REQUEST['opt2'];
$opt3=$_REQUEST['opt3'];
$opt4=$_REQUEST['opt4'];
$ans=$_REQUEST['ans'];
include("dbconnect.php");
$query="insert into ques_mstr(ques,opt1,opt2,opt3,opt4,ans) values('$ques','$opt1','$opt2','$opt3','$opt4','$ans')";
$res=mysqli_query($con,$query);
if($res>0)
echo"<script>alert('Question Added Successfully')</script>";
else
echo"<script>alert('Error!!!!!')</script>";
}
?>