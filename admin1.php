<?php include_once 'functions.php';
include_once 'newfunction.php';
getLoginState();

?>
<?php 
if(isset($_REQUEST['name'])&&isset($_COOKIE['loginstate'])){
  $name=$_REQUEST['name'];
  $idadmin=$_COOKIE['loginstate'];
  updateshopname($name);
}

if(isset($_REQUEST['tel'])&&isset($_COOKIE['loginstate'])){
  $tel=$_REQUEST['tel'];
  $idadmin=$_COOKIE['loginstate'];
  updateshoptelg($tel);
}
if(isset($_REQUEST['whatsapp'])&&isset($_COOKIE['loginstate'])){
  $whatsapp=$_REQUEST['whatsapp'];
  $idadmin=$_COOKIE['loginstate'];
  updateshopwhatsapp($whatsapp);
}
if(isset($_REQUEST['insta'])&&isset($_COOKIE['loginstate'])){
  $insta=$_REQUEST['insta'];
  $idadmin=$_COOKIE['loginstate'];
  updateshopinstagram($insta);
}
if(isset($_REQUEST['phone'])&&isset($_COOKIE['loginstate'])){
  $phone=$_REQUEST['phone'];
  $idadmin=$_COOKIE['loginstate'];
  updateshopphone($phone);
}
if(isset($_REQUEST['address'])&&isset($_COOKIE['loginstate'])){
  $address=$_REQUEST['address'];
  $idadmin=$_COOKIE['loginstate'];
  updateshopaddress($address);
}
if(isset($_FILES['image']['name'])&&isset($_COOKIE['loginstate'])){
  $errors = array();
  $file_name = $_FILES['image']['name'];

  $file_size = $_FILES['image']['size'];

  $file_tmp = $_FILES['image']['tmp_name'];

  $file_type = $_FILES['image']['type'];
 
  if (empty($errors) == true) {
      $fName =  "imgs/" . time() . $file_name;
      move_uploaded_file($file_tmp, $fName);
    }
    else{
      print_r($errors);
    } 
  $idadmin=$_COOKIE['loginstate'];
  updateshoplogo($fName);
}
?>

<html lang="en">
<head>
    <!-- پنل ادمین-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"/>
    <?php include_once 'mystyle.php';?>
    <?php include_once 'myscrp.php';?>
    <link rel="stylesheet" href="admincss.css">
    <style>
 /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
@import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
 }
  
 /* سایر دستورات وب سایت */
 /* ... */
     body {
      background-color: #a398a0;
      font-family: 'Vazir', sans-serif;
  margin: 0;
}

/* #ff1d7c
#701659
*/

  .hexagon-item:hover .hex-item div::before,
      .hexagon-item:hover .hex-item div::after {
        background-color: #f39fc6; }
        .hex-content {
    color: #f39fc6;
    display: block;
    height: 180px;
    margin: 0 auto;
    position: relative;
    text-align: center;
    transform: rotate(-30deg);
    width: 156px; }
     /* default */
     .bt {
    background: none;
    color: #e9e6e6;
    border-radius: 5px;
    border: 1px solid #e9e6e6 !important;
    width: 40px;
    font-size: 15px;
font-weight: 500;
}
.infop1{
    display: block;
    text-align: center;
}
.infop1 li{
    display: block;
    color: black;
    list-style: none;
    font-family: 'Vazir', sans-serif;
font-size: 16px;
padding: 15px;
}
.infoadmin2{
  
    margin-bottom: 20px;
}
.infop2{
    padding: 2px;
}
.infop2 li{
    list-style: none;
    display: block; 
}
.hw{
    color: white;
    font-family: 'Vazir', sans-serif;
    text-align: center;
   
    margin-top: 50px;
}
.buser{
    background-color:#b5256f;
  color: whitesmoke;
  border-radius: 5px;
  border: none;
  width: auto;
  padding: 12px;
}
.infoadmin1{
   
   color: gray;

  padding: 12px;
   
    margin-bottom: 20px;
}

.infoshop{
text-align: center;
box-sizing: border-box;
border-radius: 4px;

}
.infoshop li{
display: block;
list-style: none;
font-size: 17px;
font-weight: 500;
color: white;
margin-top: 10px;
}
.infoshop li img{
  width: 100px;
  height: 100px;
}
.labels{
  color: black;
}
.shopform{
  text-align: center;
  width: 450px;
  margin-left: 150px;
}

input {
    text-align: center;
    padding: 7px;
    width: 80%;
    border-bottom: 1px solid white !important;
  
    color: white;
    background: none;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
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


   /**testcard */

   .section-plans {
      position: absolute;
    top: 0;
    height: 100%;
    width: 95%;
    opacity: ;
    transition: all ease-in .5s;
    display: flex;
  padding: 4rem 0 4rem 0;
}

.card {
  -webkit-perspective: 150rem;
          perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
 
  width: 850px;
  -webkit-box-shadow: none;
box-shadow: none;
background-color: #ece9e9;
}

.card__side {
  height: 500px;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 3px;
  overflow: hidden;
  -webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
}

.card__side--front {
  background-color: #fff;
}

.card__side--front-1 {
  background: linear-gradient(-2deg, #c8a5cd, #1f0b21);
}



.card__side--back-1 {
  background: linear-gradient(-2deg, #1f0b21, #c8a5cd);
}


@media (max-width: 1048px){
  .section-plans {
    position: absolute;
    top: 0;
    height: 100%;
    width: 75%;

    transition: all ease-in .5s;
    display: flex;
    margin-left: 100px;
    margin-top: 50px;
}
.shopform {
    text-align: center;
    width: 400px;
    margin-left: 0px;
}
}

@media (max-width: 776px){
.slideout-sidebar {
  
    top: 0;
    left: 0px;
    z-index: 0;
    width: 100%;
    height: 550px;
    padding: 20px;
    background-color: #212121;
    transition: all 300ms ease-in-out;
    text-align: center;
}
.slideout-sidebar ul {
    text-align: center;
    max-width: 100%;
    margin: 30px auto 0;
}
}
@media (max-width: 576px){
  .section-plans {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    transition: all ease-in .5s;
    display: flex;
    margin-left: 0px;
    margin-top: 50px;
}

.shopform {
    text-align: center;
    width: 350px;
    margin-left: 0px;
  
}
.hw {
    color: white;
    font-family: 'Vazir', sans-serif;
    text-align: center;
    margin-bottom: 50px;
 
    font-size: 23px;
}
#ic {
    height: 20px;
    width: 20px;
    margin-left:0 ;
}

}
@media (max-width: 376px){
  input {
    text-align: center;
    padding: 3px;
    width: 75%;
    border-bottom: 1px solid white !important;
    color: white;
    background: none;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
    font-size: 12px;
}
#ic {
    height: 20px;
    width: 20px;
    margin-left: 0;
}
.shopform {
    text-align: center;
    width: 250px;
    margin-left: 0px;
}
.hw {
    color: white;
    font-family: 'Vazir', sans-serif;
    text-align: center;
  
    font-size: 20px;
}
.infoshop li {
    display: block;
    list-style: none;
    font-size: 11px;
    font-weight: 500;
    color: white;
    margin-top: 10px;
}

}
    </style>
</head>

<body>
<div class="container-fluid " >
 <div class="row">
 <div class="col-lg-3  col-md-3 col-sm-12 d-lg-block  d-md-block  d-sm-block p-0">
 <?php include_once 'adminmenu.php'; ?>
</div>
   
 <div class="col-lg-9 col-md-9 col-sm-12 d-lg-block  d-md-block  d-sm-block ">
   <div class="shopinfo">
<div class="row">
<div class="col-12">
<section class="section-plans" id="section-plans">
  <div class="card">

<?php 
try {
  $dbh = connectDb();
  $sql = "SELECT * FROM `shop_tbl` WHERE id_shop=1";

$stmt = $dbh->query($sql);
  $objs = $stmt->fetchAll(PDO::FETCH_OBJ);

  foreach ($objs as $object) {
    
    
    echo' 
    <div class="card__side card__side--front-1">
   
  
    <div class="card__details">
    <ul class="infoshop">
    <h1 class="hw" > اطلاعات فروشگاه</h1>
    <li style=" display:block;">'.$object->name_shop.': نام</li>
    <li style=""><img src="'.$object->logo_shop.'" alt="" id="imgshop">:لوگو</li>
    <li style=""> '.$object->telegram_shop.':آدرس تلگرام</li>
    <li style=""> '.$object->whatsapp_shop.':شماره واتس اپ </li>
    <li style=""> '.$object->phone_shop.': شماره تلفن </li>
    <li style=""> '.$object->address_shop. ':ادرس فروشگاه </li>
    
    </ul>
    </div>
  </div>
   ';
             
  }
  
  
  //بستن اتصال
  $dbh = null;
} catch (PDOException $e) {
  //مدیریت خطا و چاپ پیغام خطا در صورت وجود
  echo $e->getMessage();
}


?>

<hr>
<div class="card__side card__side--back card__side--back-1">
          <div class="card__cta">
            <div class="card__price-box">
            <div class="col-12" style="margin-top: 100px;">
<h3 class=" hw">تغییر در اطلاعات فروشگاه</h3>
<form class="shopform" action="testadmintest.php" method="POST" enctype="multipart/form-data">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="file" id="logo" name="image" placeholder=":لوگو فروشگاه"> 
</form>
<form class="shopform" action="testadmintest.php">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="text" id="name" name="name" placeholder=":نام فروشگاه">
</form>
<form class="shopform" action="testadmintest.php">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="text" id="tel" name="tel" placeholder=":ادرس تلگرام فروشگاه">
</form>
<form class="shopform" action="admin1.php">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="text" id="whatsapp" name="whatsapp" placeholder=": شماره واتس اپ فروشگاه">
</form>
<form class="shopform" action="admin1.php">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="text" id="insta" name="insta" placeholder=":ادرس اینستاگرام فروشگاه" >
</form>
<form class="shopform" action="admin1.php">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="text" id="phone" name="phone" placeholder=":شماره تلفن">
</form>
<form class="shopform" action="admin1.php">
<input type="submit" class="bt" value="+">
<input class="inputshop forminput" type="text" id="address" name="address" placeholder=": ادرس فروشگاه">
</form>

</div>
            </div>
           
          </div>
          </div>
          </div>
</section>
        </div>
  

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>