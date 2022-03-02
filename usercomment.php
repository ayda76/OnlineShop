<div class="commentuser">
    <div class="title">
        <div class="row">
            <div class="col-7"><p class="gray">نظرات شما</p></div>
            <div class="col-5"><p class="gray">نام کالا</p></div>
        </div>

</div>
<hr>



<?php
include_once 'functions.php'; 
try {
    $p =intval($_GET['p']);
    $dbh = connectDb();
    $sql = "SELECT * FROM `user_tbl` INNER JOIN `comment_tbl` ON user_tbl.id_user=comment_tbl.id_user WHERE user_tbl.id_user=$p ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($objs as $object) {
        $comment =  $object->matn_comment;
        $idproduct =  $object->id_product;
        echo'
        <div class="row" style="margin: 0;">
        <div class="col-7">
        <ul class="comtb">
         <li style="">'.$comment.'</li> ';
        echo'</ul>
        </div>';
        getpdid($idproduct);
        echo'
        </div>';
    }

    //بستن اتصال
    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}


 function getpdid($id){
    try {
        $dbh = connectDb();
        $sql = "SELECT * FROM `product_tbl`  WHERE id_product=$id ";
        $stmt = $dbh->query($sql);
        $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($objs as $object) {
            $name =  $object->name_product;
            echo'  <div class="col-5">
            <ul class="comtb">
            <li>'.$name.'</li> ';
           echo'</ul>
           </div> ';
          
        }
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>



</div>