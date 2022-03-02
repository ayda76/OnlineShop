<?php include_once 'functions.php';
include_once 'newfunction.php';
getLoginState();

?>
<html lang="en">
<head>
     <!--گزارش کلی -->
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
    <div class="col-lg-2  col-md-3 col-sm-12 d-lg-block  d-md-block  d-sm-block p-0">
  <?php include_once 'adminmenu.php'; ?>
</div>
    
    <div class="col-lg-10 col-md-9 col-sm-12 d-lg-block  d-md-block  d-sm-block">
      <h1 class="hn" >اطلاعات کاربران</h1>
      <table class="tbuser">
      <tr>
     
      <td>تاریخ ثبت نام</td>
      <td>شماره کارت بانکی</td>
      <td>ایمیل</td>
      <td>آدرس</td>
      <td>رمزعبور</td>
      <td> نام کاربری</td>
      <td>شماره تلفن</td>
      <td>نام کاربر</td>
      <td>شماره </td>
      </tr>
<?php 

userinfolist();
?>
      </table>

      <h1 class="hn">سفارشات کاربران</h1>
      <table class="ttuser">
      <tr>
        
      <td>تاریخ سفارش </td>
      <td>درصد تخفیف کالا</td>
      <td>قیمت کالا</td>
      <td>نام کالا</td>
      <td> نام کاربری</td>
      <td>شماره تلفن</td>
      <td>نام کاربر</td>
      <td>شماره </td>
      </tr>
<?php 

userorderlist();
?>
      </table>
      <h1 class="hn">کامنت های کاربران</h1>
      <table class="tuser">
      <tr>
      <td>عملیات </td>
      <td>نظر کاربر</td>
      <td>نام کالا</td>
      <td> نام کاربری</td>
      <td>نام کاربر</td>
      <td>شماره </td>
      </tr>
<?php 

usercommentlist();
?>
      </table>
    </div>
   </div>
  </div>
</div>

</body>
<script>
  function deleteusercomment(id,idp){
    window.location.href ="Deletefromuserscomments.php?id="+id+"&idproduct="+idp;
  }
</script>
</html>