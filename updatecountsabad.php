<?php
   include_once "newfunction.php";
if(isset($_REQUEST['id'])&&isset($_REQUEST['countp'])&&isset($_COOKIE['login'])){
    $id=$_REQUEST['id'];
    $countp=$_REQUEST['countp'];
    $iduser=$_REQUEST['id_user'];
    updatesabadcount($id,$countp);
    header("location:sabad.php?id_user=$iduser");
}else{
    
}

?>