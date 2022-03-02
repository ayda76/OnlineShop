
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include_once 'functions.php';
try{
 
 
$q = intval($_GET['q']);//brand
 $p =intval($_GET['p']);//cat
$dbh = connectDb();

$sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) 
INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE brand_tbl.id_brand=$q AND cat_tbl.id_cat=$p";
$stmt = $dbh->query($sql);
//$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
/*echo '<div class=" col-sm-12 col-md-9 col-lg-9 ">
<div class="tab-content" id="v-pills-tabContent">';*/

echo'

			
<!--tata1--->
<div class="tab-pane fade show active " id="tata1" role="tabpanel" aria-labelledby="lp1">

<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 50px;">
<div class="v1">
<nav>';
//productbrandmenu();
echo'</nav></div>
</div>

    <div class="tab-content" id="v-pills-tabContent">';
    echo'

    <div class="tab-pane fade show active" id="'.$q.'" role="tabpanel" aria-labelledby="'.$q.'">';
    productitem($p,$q);

		echo '
		 </div>
    </div>';
 	//بستن اتصال
   $dbh = null;
  
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
//mysqli_close($con);


function productitem($idcat,$idbrand){
  try{
   
   $dbh = connectDb();
   $sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) 
   INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE brand_tbl.id_brand=$idbrand AND cat_tbl.id_cat=$idcat";
   $stmt = $dbh->query($sql);
   $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
  
   echo'<ul class="carts" > ';
   foreach ($objs as $object) {
     $idproduct=$object->id_product;
     $img =  $object->img_product;
     $name =  $object->name_product;
     $idbrand=$object->id_brand;
     $brand = $object->name_brand;
     $idcat=$object->id_cat;
     $cat = $object->name_cat;
     $matn = $object->matn_product;
     $item = explode(",",$matn);
     $price = $object->price_product;
     $discount = $object->discount_product;
     $total=$price-($discount/100)*$price;
   
     echo'
   
         
        
          <li>
          <div class="container page-wrapper">
     <div class="page-inner">
       <div class="row" style="height: 320px;">
         <div class="el-wrapper">
       <a href="http://localhost:8080/site/myshopnewone/mahsul.php?id_product='.$idproduct.'">
         <div class="box-up">
             <img class="img" src="'.$img.'" alt="" height="250" width="220">
             <div class="img-info">
               <div class="info-inner">
               <span class="p-company">'.$brand.'</span>
                 <span class="p-name">'.$cat.'</span>
                 <span class="p-name">'.$name.'</span>
               </div>
               
               <div class="a-size"><p>';

              // updatefav( $idproduct);
             
                 echo'
                 <span class="size">';
                 //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
                 if(isset($_COOKIE['login'])){
                   $iduser=$_COOKIE['login'];
                   showfav($iduser,$idproduct);
                 }else{
                  updatefav( $idproduct);
           echo' likes<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
                 }
               
                
               echo '</a></span></p></div>
             </div>
       </div>
       </a>
   <!--<a href="#"><i class="far fa-heart" style="height: 20x; width:20px; margin-left:20px; font-size: 20px;"></i></a>-->
           <div class="box-down">
             <div class="h-bg">
               <div class="h-bg-inner"></div>
             </div>
   
             <a class="cart" href="http://localhost:8080/site/myshopnewone/sabad.php?id_product='.$idproduct.'">
             <span class="price"><strike>'.$price.'</strike> <br> تومان'.$total.'</span>
               <span class="add-to-cart">
                 <span class="txt">افزودن به سبد</span>
               </span>
             </a>
           </div>
         </div>
       </div>
     </div>
   </div>
   </li>
   
         
      
         ';
         
       
       
       }
       echo '
        </ul>';
      //بستن اتصال
      $dbh = null;
     
     } catch (PDOException $e) {
       
       echo $e->getMessage();
     }
}
?>
</body>
</html> 