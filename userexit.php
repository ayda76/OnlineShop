<?php 
include_once 'functions.php';
$p = intval($_GET['p']);
deletelogin();
header("location:mainpage.php")
?>