<?php 
include_once 'functions.php';
$p = intval($_GET['p']);
deleteloginadmin();
header("location:sabtenamAdmin.php")
?>