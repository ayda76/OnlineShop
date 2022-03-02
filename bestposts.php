<?php 


include_once 'functions.php';
$q = intval($_GET['q']);
if($q==1){
    try{



        $dbh = connectDb();
        $sql = "SELECT * FROM `product_tbl` ORDER BY id_product DESC LIMIT 12 ";
        $stmt = $dbh->query($sql);
        $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo' 
    <ul class="carts"> 
    ';
        foreach ($objs as $object) {
            $idproduct=$object->id_product;
            $img =  $object->img_product;
            $name =  $object->name_product;
            $price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
            $matn = $object->matn_product;
            $item = explode(",",$matn);
            
           echo'
          
           <li>
           <div class="container page-wrapper">
      <div class="page-inner">
        <div class="row" style="height: 320px;">
          <div class="el-wrapper">
          <a href="mahsul.php?id_product='.$idproduct.'">
            <div class="box-up">
              <img class="img" src="'.$img.'" alt="" height="250" width="220">
              <div class="img-info">
                <div class="info-inner">
                <!-- <span class="p-company">apple</span>-->
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
				            	echo'likes';
            echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
                  }
                
                 
                echo '</a></span></p></div>
              </div>
            </div>
    
            <div class="box-down">
              <div class="h-bg">
                <div class="h-bg-inner"></div>
              </div>
    
              <a class="cart" href="sabad.php?id_product='.$idproduct.'">
                <span class="price">تومان'.$total.' <br><strike>'.$price.'</strike></span>
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
    
    echo' </ul>';
    $dbh = null;
            
    } catch (PDOException $e) {
        
        echo $e->getMessage();
    }
    
}elseif($q==2){
  mostlikepost();
}elseif($q==3){
  getMostViewvedProducts();
 
}elseif($q==4){
  getmostorderproduct();
}


?>