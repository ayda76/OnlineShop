
<?php include_once 'functions.php';
include_once 'newfunction.php';
?>


    
    <?php 
    $p =intval($_GET['p']);
    try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `order_tbl` INNER JOIN `product_tbl` ON order_tbl.id_product=product_tbl.id_product 
		 WHERE order_tbl.id_user= $p";
	    $stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	echo'
    <div class="orderlist">
    <div class="row" style="margin: 0;">
   <!-- <div class="col-4">  <p class="poo"> تاریخ سفارش</p> </div>
    <div class="col-8">  <p class="poo">تصویر محصول</p></div>-->
	<div class="col-3">
<p class="poo">تاریخ سفارش</p>
</div>
<div class="col-9">
<div class="row" style="margin: 0;">
<div class="col-4"><p class="poo"> قیمت محصول</p></div>
<div class="col-4"><p class="poo">نام محصول</p></div>
<div class="col-4"><p class="poo">تصویر محصول</p></div>

</div>
</div>
</div>

  
    <hr>
	';
		
		foreach ($objs as $object) {
            $date=$object->date_order;
			$idproduct=$object->id_product;
			$iduser=$object->id_user;
			$img =  $object->img_product;
			$name =  $object->name_product;
		
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			
	echo'

			
	<div class="row" style="margin: 0;">
    <div class="col-3">
    <p class="po">'.$date.'</p>
    </div>
    <div class="col-9">
    <div class="row">
    <div class="col-4"><p class="po"> <strike>'.$price.'</strike><br>'.$total.' <br>تومان   </p></div>
    <div class="col-4"><p class="po">'.$name.'</p></div>
    <div class="col-4"><img src="'.$img.'" class="imgorder" id="imgsefaresh" alt="img" ></div>
   
    </div>
    </div>
  
   
    </div>
    <hr>
			';
			

		
		}
	echo '

	
	</div>';
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}

    ?>
  

