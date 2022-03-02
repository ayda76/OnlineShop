<?php include_once 'functions.php';
include_once 'newfunction.php';
getLoginState();

?>
<html lang="en">
<head>
    <!--پنل ص اصلی -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="adminstyle.css">-->
    <link rel="stylesheet" href="admincss.css">
    <?php include_once 'mystyle.php';?>
    <?php include_once 'myscrp.php';?>
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

     /* default */
    
   
.btdelete{
  background-color: #949191;
border: none;
border-radius: 3px;
color: white;
width: 50px;
height: 30px;
}
    </style>
</head>
<body>
<div class="container-fluid " >
  <div class="row">
<div class="col-lg-3  col-md-3 col-sm-12 d-lg-block  d-md-block  d-sm-block p-0">
<?php include_once 'adminmenu.php'; ?>
</div>

<div class="col-lg-9 col-md-9 col-sm-12 d-lg-block  d-md-block  d-sm-block">
    <div class="row">
    <div class="col-12">
    <h1 class="hn">
      دسته بندی هاو برند ها</h1>
        <form class="catform" action="admin5.php">
        <input class="sabtbut" type="submit" value="ثبت" style="">
        <input type="text" name="namecat" placeholder="دسته بندی را وارد کنید">
        
        </form>
        <?php 
        if(isset($_REQUEST['namecat'])){
            InsertCat($_REQUEST['namecat']);
        }
        ?>
        </div>
        <div class="col-12">
      
        <form class="brandform" action="admin5.php">
        <?php   // getOptionCat(); ?>
        <input class="sabtbut" type="submit" value="ثبت" style=" border: none;
 color: gray;
 border-radius: 4px;
 height: 50px;
 width: 60px;">
        <input type="text" name="namebrand" placeholder=" برند را وارد کنید">
      
        </form>
        <?php
        
    
        if(isset($_REQUEST['namebrand'])){
            InsertBrand($_REQUEST['namebrand']);
        }
     
        ?>
        </div>
        <div class="col-12">
        <h1 class="hn" >دسته بندی ها </h1>
          <table class="tcat">
            <tr>
            <td>عملیات </td>
              <td>نام دسته بندی</td>
              <td>شماره </td>
            </tr>
            <?php  getlistcat(); ?>
           
          </table>
          <h1 class="hn"> برندها </h1>
          <table class="tcat">
            <tr>
            <td>عملیات </td>
              <td>نام برندها </td>
              <td>شماره </td>
            </tr>
            <?php  getlistbrand(); ?>
           
          </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
<script>
function  deletecat(idcat){
  window.location.href ="Deletefromcatbrand.php?idcat="+idcat;
}

function  deletebrand(idbrand){
  window.location.href ="Deletefromcatbrand.php?idbrand="+idbrand;
}
</script>
</html>