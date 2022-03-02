<?php include_once 'functions.php'; 
    getLoginState(); ?>
<html lang="en">
<head>
     <!-- پنل محصول-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="adminstyle.css">-->
    <link rel="stylesheet" href="admincss.css">
    <?php include_once 'mystyle.php';?>
   
    <style>
   /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
@import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
 }
  
 /* سایر دستورات وب سایت */
 /* ... */
    body {
      font-family: 'Vazir', sans-serif;
  margin: 0;
  background-color: #f88;
}


     /* default */
    .h11{
      color: white;
      text-align: center;
      margin-bottom: 50px;
      padding-bottom: 30px;
     
      border-bottom: 1px solid white;
      font-family: 'Vazir', sans-serif;
    }

    
    #k{
      color:#f88 ;
    font-weight: 500;
      text-decoration: none;
     border: 2px solid #f88;
     padding: 7px;
     border-radius: 6px;
    }
    #k:hover{
      background-color:#f88;
      color: white;
    }
    #dbt{
     background-color: white;
      border: none;
      color:#4c4949;
      padding: 7px;
     border-radius: 6px;
      border: 2px solid #4c4949;
    }
    #dbt:hover{
      background-color:#4c4949;
      color: white;
    }
       
.btshow{
  margin-right: 40px;
  color: #ffffff;
  background-color: #212121;
  width: 200px;
  text-decoration: none;
}
.btshow:hover{
  color: #ffffff;
  text-decoration: none;
}
    </style>
</head>

     
  
<div class="container-fluid " >
  
    <div class="row">
    <body>
   
    <div class="col-lg-3  col-md-3 col-sm-12 d-lg-block  d-md-block  d-sm-block p-0">
    <?php include_once 'adminmenu.php'; ?>
</div>
  
    <div class="col-lg-9 col-md-9 col-sm-12 d-lg-block  d-md-block  d-sm-block">
    <div class="row">
   
    <div class="col-12">
    <h1 class="h11">افزودن محصولات</h1>
    </div>
    <div class="col-12">
 
        <?PHP 
      
 if (isset($_REQUEST['op']) && isset($_REQUEST['id'])) {
  $arr =  array();
  $arr =  getProductsWithId($_REQUEST['id']);
  echo '<form class="formproduct" action="" method="POST" enctype="multipart/form-data">
  <input type="text" class="inputproduct" name="pname" value="'.$arr[0].'" placeholder="  نام محصول را وارد کنید">
  <input type="text" class="inputproduct" name="matn" value="'.$arr[1].'" placeholder="ویژگی های محصول را وارد کنید">
  <input type="file" class="inputproduct" name="image" value="'.$arr[2].'"  placeholder="تصویر محصول را انتخاب کنید">
';
  getOptionCat();
  getOptionBrand();

 echo '
 <input type="text" class="inputproduct" name="cost" value="'.$arr[5].'" placeholder="قیمت محصول را وارد کنید">
 <input type="text" class="inputproduct" name="discount" value="'.$arr[6].'" placeholder="درصد تخفیف را وارد کنید">
 <input type="text" class="inputproduct" id="stock" name="stock"  value="'.$arr[7].'"  placeholder="موجودی انبار را وارد کنید">
 <input type="submit" class="inputproduct" id="subtn" value="ویرایش  ">
</form>';

if(isset($_REQUEST['id'])&&isset($_REQUEST['pname'])&&isset($_REQUEST['idcat'])&&isset($_REQUEST['idbrand'])&&isset($_REQUEST['cost'])&&isset($_REQUEST['discount'])&&isset($_REQUEST['matn'])&&isset($_REQUEST['stock'])){
  $errors = array();

    $file_name = $_FILES['image']['name'];

    $file_size = $_FILES['image']['size'];

    $file_tmp = $_FILES['image']['tmp_name'];

    $file_type = $_FILES['image']['type'];
  
    if (empty($errors) == true) {
        $fName =  "imgs/" . time() . $file_name;
        move_uploaded_file($file_tmp, $fName);
      
        $pidproduct=$_REQUEST['id'];
    $name=$_REQUEST['pname'];
    $idcat=$_REQUEST['idcat'];
    $idbrand=$_REQUEST['idbrand'];
    $price=$_REQUEST['cost'];
    $discount=$_REQUEST['discount'];
    $matn=$_REQUEST['matn'];
    $idadmin = $_COOKIE['loginstate'];
   $stock= $_REQUEST['stock'];

   UpdateProduct($pidproduct,$idbrand,$idcat,$fName,$price,$matn,$discount,$name,$idadmin,$stock);
 
}else{
  print_r($errors);
} 
}


} else {

  echo '<form class="formproduct" action="admin4.php" method="POST" enctype="multipart/form-data">
  <label class="labelproduct" for="pname"> : نام محصول را وارد کنید</label>
  <input type="text" class="inputproduct" id="pname"  name="ppname" placeholder=" نام محصول را وارد کنید">
 
  ';
  getOptionCat();
  getOptionBrand();
  echo ' 
  <label class="labelproduct" for="matn"> : ویژگی های محصول را نوشته و با "," جدا کنید</label>
  <input type="text" class="inputproduct" id="matn" name="pmatn"  placeholder="ویژگی های محصول را وارد کنید">
  <label class="labelproduct" for="image">: تصویر مورد نظر را انتخاب کنید</label>
<input type="file" class="inputproduct" id="image" name="pimage" placeholder=" تصویر محصول را انتخاب کنید">
<label class="labelproduct" for="cost">: قیمت محصول را وارد کنید</label>
  <input type="text" class="inputproduct" id="cost" name="pcost"  placeholder=": قیمت محصول را وارد کنید">
  <label class="labelproduct" for="discount"> : درصد تخفیف قیمت برای این محصول را وارد کنید</label>
  <input type="text" class="inputproduct" id="discount" name="pdiscount"   placeholder="درصد تخفیف را وارد کنید">
  <label class="labelproduct" for="stock"> : موجودی انبار را وارد کنید</label>
  <input type="text" class="inputproduct" id="stock" name="pstock"   placeholder="موجودی انبار را وارد کنید">
  
  <input type="submit" class="inputproduct" id="subtn" value="ثبت">
  </form>';

       if(isset($_REQUEST['ppname'])&&isset($_REQUEST['idcat'])&&isset($_REQUEST['idbrand'])&&isset($_REQUEST['pcost'])&&isset($_REQUEST['pdiscount'])&&isset($_REQUEST['pmatn'])&&isset($_REQUEST['pstock'])){
          $errors = array();
            $file_name = $_FILES['pimage']['name'];

            $file_size = $_FILES['pimage']['size'];

            $file_tmp = $_FILES['pimage']['tmp_name'];

            $file_type = $_FILES['pimage']['type'];
           
            if (empty($errors) == true) {
                $fName =  "imgs/" . time() . $file_name;
                move_uploaded_file($file_tmp, $fName);
               

            $pname=$_REQUEST['ppname'];
            $pidcat=$_REQUEST['idcat'];
            $pidbrand=$_REQUEST['idbrand'];
            $pprice=$_REQUEST['pcost'];
            $pdiscount=$_REQUEST['pdiscount'];
            $pmatn=$_REQUEST['pmatn'];
            $pidadmin = $_COOKIE['loginstate'];
           $pstock= $_REQUEST['pstock'];
           InsertProduct($pidbrand,$pidcat,$fName,$pprice,$pmatn,$pdiscount,$pname,$pidadmin,$pstock);
         
        }
        else{
          print_r($errors);
        } 
      }
  
    }
 
    
       ?>
        </div>
       <div class="col-12">
    <h1 class="h11">لیست محصولات</h1>
    </div>
    <div class="col-12">
    <?php    Listproducts();  ?>
    </div>
  
    </div>
</div>
</div>
</div>
    </div>
</body>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
   function List(id) {
        window.location.href ="DeleteProducts.php?id="+id;
    }
</script>
</html>