<div class="favoriate">
    <div class="row">
        <div class="col-12">
            <h2 class="favh">کالاهای مورد پسند شما</h2>
        </div>
    </div>
<div class="row">
        <div class="col-8">
        <p class="favp"> نام کالا</p>
    </div>
    <div class="col-4">
       <p class="favp">تصویر کالا</p>
    </div>
    </div>
     <hr>
    <?php
include_once 'functions.php'; 
include_once 'newfunction.php';
$p =intval($_GET['p']);
try {
    
    $dbh = connectDb();
    $sql = "SELECT * FROM `product_tbl`INNER JOIN `fav_tbl`ON product_tbl.id_product=fav_tbl.id_product WHERE fav_tbl.id_user='$p'  ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($objs as $object) {
        $image =  $object->img_product;
         $name =  $object->name_product;
       
        echo'
        <div class="row" style="margin: 0;">
        <div class="col-8">
        <p class="favp fpp"> '.$name.'</p>
    </div>
    <div class="col-4">
        <img src="'.$image.'" alt="" class="favimg" height="100" width="100">
    </div>
    </div>
    <hr>
        ';
    }

    //بستن اتصال
    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
   
</div>