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

<div style="width:900px;height:400px;background-color:cyan;">
<br>
<span style="font-size:30px;color:black;">View Question</span>
<br><br><br><br>
<div style="width:500px;height:200px;background-color:lightgrey;box-shadow:0px 15px 20px grey;border:2px solid black;">
<table width="300" height="200" cellspacing="0">
<form method=get action="ViewQuestion1.php">
<tr><td>Question ID</td><td><input type=number name=qid></td></tr>
<tr><td><input type=submit value=View></td><td><input type=reset value=Reset></td></tr>
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


