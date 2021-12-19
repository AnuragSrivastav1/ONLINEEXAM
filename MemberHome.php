<?php
session_start();
if(!isSet($_SESSION['user']))
{
header('location:index.php?msg=Please Login First');
}

include("MemberHeader.html");
?>

<div style="width:900px;height:400px;background-color: #F4E7BD;">
</div>

<?php
include("footer.html");
?>
