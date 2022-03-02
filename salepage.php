
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once 'functions.php'; 
    include_once 'newfunction.php';
    include_once 'mystyle.php';
     include_once 'myscrp.php';?>
     <link rel="stylesheet" href="cartscss.css">
     <style>
 /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
 @import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
 }
  
 /* سایر دستورات وب سایت */
 /* ... */
.sale{
    margin-top: 30px;
}

     </style>
</head>
<body>
    <div class="container-fluid">
    <?php include_once 'header.php';?>
    <div class="sale">
    <?php 
     try{
        
        $dbh = connectDb();
        $sql = "  SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) 
        INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) ORDER BY discount_product DESC";
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
            <a href="mahsul.php?id_product='.$idproduct.'">
              <div class="box-up">
                  <img class="img" src="'.$img.'" alt="" height="250" width="220">
                  <div class="img-info">
                    <div class="info-inner">
                    <span class="p-company">'.$brand.'</span>
                      <span class="p-name">'.$cat.'</span>
                      <span class="p-name">'.$name.'</span>
                    </div>
                    
                    <div class="a-size">';
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
                  
                  echo'  </div>
                  </div>
            </div>
            </a>
        <!--<a href="#"><i class="far fa-heart" style="height: 20x; width:20px; margin-left:20px; font-size: 20px;"></i></a>-->
                <div class="box-down">
                  <div class="h-bg">
                    <div class="h-bg-inner"></div>
                  </div>
        
                  <a class="cart" href="site/myshopnewone/sabad.php?id_product='.$idproduct.'">
                    <span class="price"> تخفیف:%'.$discount.'-'.$total.'تومان</span>
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
    
    ?>
    </div>
 <div class="row">
    <?php include_once 'footer.php'; ?>
    </div>
    </div>
</body>

<!--- dropdownmenuresponsive-->
<script>
  function mysdropFunction() {
  document.getElementById("mysDropdown").classList.toggle("show");
}
</script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function mydropFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

</html>


