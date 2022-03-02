<?php
 include_once "functions.php";
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
   
    deleteProduct($id);
    header("location:admin4.php");
}
?>