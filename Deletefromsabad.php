<?php
   include_once "newfunction.php";
if(isset($_REQUEST['id'])&&isset($_REQUEST['id_user'])){
    $id=$_REQUEST['id'];
    $iduser=$_REQUEST['id_user'];
    deletesabad($id);
    header("location:sabad.php?id_user=$iduser");
}elseif(isset($_REQUEST['id'])&&isset($_REQUEST['countp'])&&isset($_REQUEST['id_user'])){
    $id=$_REQUEST['id'];
    $countp=$_REQUEST['countp'];
    $iduser=$_REQUEST['id_user'];
    updatesabadcount($id,$countp);
    header("location:sabad.php?id_user=$iduser");
}else{
    
}

?>