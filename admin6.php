<?php include_once 'functions.php';
include_once 'newfunction.php';
getLoginState();

?>
<html lang="en">
<head>
      <!--پنل تخفیف ویژه -->
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
   
    </style>
</head>
<body>
<div class="container-fluid " >
<div class="row">
    <div class="col-lg-3  col-md-3 col-sm-12 d-lg-block  d-md-block  d-sm-block p-0">
    <?php include_once 'adminmenu.php'; ?>
</div>
   
    <div class="col-lg-9 col-md-9 col-sm-12 d-lg-block  d-md-block  d-sm-block">
    <h1 class="hn" >
          لیست سفارشات امروز </h1>
          <table class="dailyreport">
          <tr>
          <td>تاریخ</td>
          <td>قیمت کالا</td>
          <td>نام کالا</td>
          <td>شماره تلفن مشتری</td>
          <td>نام مشتری</td>
          <td>شماره</td>
          </tr>
        <?php  
       include_once "jdf.php";
    
      $date= gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");
        gettodayreport($date); ?>
          </table>

          <h1 class="hn" >
          لیست سفارشات یک ماه اخیر </h1>
          <table class="dailyreport">
          <tr>
          <td>تاریخ</td>
          <td>قیمت کالا</td>
          <td>نام کالا</td>
          <td>شماره تلفن مشتری</td>
          <td>نام مشتری</td>
          <td>شماره</td>
          </tr>
        <?php  
    
      $item = explode("/",$date);
$month=$item[1];
     getthismonthreport($month);
        ?>
          </table>
          <h1 class="hn">
          لیست سفارشات یک سال اخیر </h1>
          <table class="dailyreport">
          <tr>
          <td>تاریخ</td>
          <td>قیمت کالا</td>
          <td>نام کالا</td>
          <td>شماره تلفن مشتری</td>
          <td>نام مشتری</td>
          <td>شماره</td>
          </tr>
        <?php  
   
      $item = explode("/",$date);
$year=$item[0];
     getthisyearreport($year);
        ?>
          </table>
    </div>
  </div>
  </div>
</div>
</body>
</html>