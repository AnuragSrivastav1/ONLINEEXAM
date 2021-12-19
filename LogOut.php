<?php
session_start();
$_SESSION['user']=NULL;
header('location:index.php');
?>