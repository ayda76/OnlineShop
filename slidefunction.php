<?php 


include_once 'functions.php';
try{

$q = intval($_GET['q']);
$res=$q-1;

    $dbh = connectDb();
    $sql = "SELECT * FROM `product_tbl` ORDER BY id_product DESC LIMIT 1 OFFSET $res ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
echo' 

';
    foreach ($objs as $object) {
        $idproduct=$object->id_product;
        $img =  $object->img_product;
        $name =  $object->name_product;
      
     
        $matn = $object->matn_product;
        $item = explode(",",$matn);
        
       
       
      
      
      echo'<div class="row">
      <div class="col-6">
      <img src="'.$img.'" alt="" width="635" height="500">
      </div>
      <div class="col-6">
      <div class="slide" >
     
     
      <div class="slidecontent" >
      <h1 class="ft">معرفی محصولات جدید</h1>
    <p class="ft"> : اطلاعات محصول</p>
    
    <ul>
    <li class="ft" style="list-style: none;">'.$name.': نام محصول </li>
    <li class="ft" style="list-style: none;">: ویژگی های محصول </li>
    ';
    for($i=0;$i<2;$i++){

        echo' <li class="ft" style="list-style: none;">'.$item[$i].'</li>';
    }
    echo'
    </ul>
    <a href="mahsul.php?Id_product='. $idproduct.'" class="ft"> مشاهده محصول</a>
    
  </div> 
  <div class="buttons">
  <button  name="slide" onclick="show(1)"></button>
  <button  name="slide" onclick="show(2)"></button>
  <button  name="slide" onclick="show(3)"></button>
  <button  name="slide" onclick="show(4)"></button>
  <button  name="slide" onclick="show(5)"></button>
  </div> 

  </div> 
  </div> 
  </div>   ';
              
              
              }


$dbh = null;
        
} catch (PDOException $e) {
    
    echo $e->getMessage();
}


?>