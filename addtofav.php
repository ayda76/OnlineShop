<?php 
include_once 'functions.php';
include_once 'newfunction.php';

getUserLoginState();
if(isset($_COOKIE['login'])){
  $type=intval($_GET['t']);
    $q=intval($_GET['q']);
    $iduser=$_COOKIE['login'];
  
      
if(($type%2)!=0){
 
    Deletefav( $iduser, $q);
  
}else if(($type%2)==0){

    InsertFav( $iduser, $q);

 }
}else{}
 
?>