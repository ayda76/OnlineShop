<?php 
   include_once "newfunction.php";
   include_once "jdf.php";
    

   if(isset($_REQUEST['id'])&&isset($_REQUEST['iduser'])&&isset($_REQUEST['count'])&&isset($_REQUEST['stock'])){
       $id=$_REQUEST['id'];
     $iduser= $_REQUEST['iduser'];
     $count=$_REQUEST['count'];
    $stock= $_REQUEST['stock'];
     $date=gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");
     if($stock>0){
      updateproductstock($id);
      InsertOrder($id,$iduser,$date);
      if($count==1){
        header("location:Deletefromsabad.php?id=$id&id_user=$iduser");
      }else{
       $count=$count-1;
       header("location:updatecountsabad.php?id=$id&countp=$count&id_user=$iduser");
      }
     }else{ 
       header("location:namojud.php");
     }
     
   }else{

   }
?>