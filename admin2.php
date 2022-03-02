<?php 
include_once 'functions.php'; 
include_once 'newfunction.php';
getLoginState();
if(isset($_REQUEST['phonenumber'])&&isset($_REQUEST['idadmin'])){

    updatephonenumberadmin($_REQUEST['phonenumber'],$_REQUEST['idadmin']);
}

if(isset($_REQUEST['username'])&&isset($_REQUEST['idadmin'])){
  
    updateusernameadmin($_REQUEST['username'], $_REQUEST['idadmin']);
  }

  if(isset($_REQUEST['address'])&&isset($_REQUEST['idadmin'])){
   
    updateaddressadmin($_REQUEST['address'],$_REQUEST['idadmin']);
  }
  if(isset($_REQUEST['password'])&&isset($_REQUEST['idadmin'])){
   
    updatepasswordadmin($_REQUEST['password'], $_REQUEST['idadmin']);
  }
  if(isset($_REQUEST['codem'])&&isset($_REQUEST['idadmin'])){
   
    updatecodmadmin($_REQUEST['codem'], $_REQUEST['idadmin']);
  }
?>

<html lang="en">
<head>
     <!-- گزارش روزانه-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
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
     .forminput {
    border-bottom: 1px solid white !important;
    text-align: center;
    width: 250px;
    color: white;
    background: none;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
    padding: 7px;
}
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
    color: white;
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
   margin-bottom: 0px;
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
    opacity:1;
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
  background: linear-gradient(2deg,#760059, #16131b);
}



.card__side--back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.card__side--back-1 {
  background: linear-gradient(2deg,#16131b,#760059);
}



#ic{
  height: 20px; width:20px; margin-left:20px;
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
.hw {
    color: white;
    font-family: 'Vazir', sans-serif;
    text-align: center;
    margin-bottom: 20px;
    font-size: 25px;
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
.forminput {
    border-bottom: 1px solid white !important;
    text-align: center;
    width: 80%;
    color: white;
    background: none;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
    padding: 7px;
}
.hw {
    color: white;
    font-family: 'Vazir', sans-serif;
    text-align: center;
 
    font-size: 23px;
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
    font-size: 23px;
}
#ic {
    height: 20px;
    width: 20px;
    margin-left: 0;
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
#ic {
    height: 20px;
    width: 20px;
    margin-left: 0;
}
.infop1 li {
    display: block;
    color: white;
    list-style: none;
    font-family: 'Vazir', sans-serif;
    font-size: 11px;
    padding: 11px;
}
}

/**background: linear-gradient(-2deg, #d283dd, #20074c); */
    </style>
</head>
<body>
<div class="container-fluid " >
  <div class="row">
  <div class="col-lg-3  col-md-3 col-sm-12 d-lg-block  d-md-block  d-sm-block p-0">
  <?php include_once 'adminmenu.php'; ?>
</div>
 
 <div class="col-lg-9 col-md-9 col-sm-12 d-lg-block  d-md-block  d-sm-block">
<div class="admininfo">

<div class="row">
<div class="col-12">
<section class="section-plans" id="section-plans">
  <div class="card">
<?php $login=$_COOKIE['loginstate'];?>
<?php
try {
    $dbh = connectDb();
    $sql = "SELECT * FROM `admin_tbl` WHERE  id_admin='$login'  ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($objs as $object) {
        $username =  $object->username_admin;
        $phone =  $object->phonenumber_admin;
        $password =  $object->password_admin;
        $address =  $object->address_admin;
         $codem =  $object->codm_admin;
       
        echo'
        <div class="card__side card__side--front-1">
   
  
        <div class="card__details">
     
        <div class="infoadmin1">
        <h1 class=" hw"> <i class="far fa-user" style="font-size: 50px; color: white; margin-bottom: 20px; margin-top: 30px;"></i></h1>
        <h1 class=" hw">به صفحه خود خوش آمدید '.$username.'</h1>
        <h3 class=" hw">اطلاعات شخصی شما</h3>
            <ul class="infop1">
            <li>'.$username.':نام کاربری <i class="fas fa-user " id="ic" style=""></i></li>
           <li>'.$codem.':کدملی <i class="far fa-id-card" id="ic" style=""></i></li>
           <li>'.$phone.':شماره موبایل <i class="fas fa-phone " id="ic" style=""></i></li>
            <li>'.$address.':آدرس <i class="fas fa-map-marked-alt" id="ic" style=""></i></li>
            </ul>
        </div>
        </div>
        </div>
        ';
    }

    //بستن اتصال<button class="buser"></button>
    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
 <hr>

 <div class="card__side card__side--back card__side--back-1">
          <div class="card__cta">
            <div class="card__price-box">

<div class="infoadmin2">
<h3 class="ftc hh colorgray  hw" style="text-align: center;margin-top: 20px; margin-bottom: 20px;">تغییر اطلاعات حساب کاربری</h3>  
<ul class="infop2" style="text-align: center;" >
<li>
<form action="admin2.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="username" placeholder=":نام کاربری">
<?php echo' <input type="hidden" name="idadmin" value="'.$login.'" /> ';?>

</form>

</li>
<li>
<form action="admin2.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="codem" placeholder=":کدملی">
<?php echo' <input type="hidden" name="idadmin" value="'.$login.'" /> ';?>

</form>

</li>
<li>
<form action="admin2.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="phonenumber" placeholder=":شماره موبایل">
<?php echo' <input type="hidden" name="idadmin" value="'.$login.'" /> ';?>

</form>

</li>
<li>
<form action="admin2.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="password" placeholder="رمزعبور">
<?php echo' <input type="hidden" name="idadmin" value="'.$login.'" /> ';?>

</form>

</li>


<li>
<form action="admin2.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="address" placeholder=":آدرس">
<?php echo' <input type="hidden" name="idadmin" value="'.$login.'" /> ';?>

</form>

</li>
</ul>

</div>
</div>



</div>
</div>
</div>
</div>
  </div>
  </div>
</div>
</div> 
</body>
</html>