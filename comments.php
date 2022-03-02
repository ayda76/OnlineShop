<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once 'functions.php';
    include_once 'newfunction.php';
    include_once 'mystyle.php';?>
 <?php include_once 'myscrp.php';?>

 <style>
 /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
 @import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
 }
  
 /* سایر دستورات وب سایت */
 /* ... */

.row{
    margin-left: 30px;
    margin-right: 30px;
    border-bottom: 1px solid #420f42;
    height: auto;

}
.row p{
    text-align: center;
    text-decoration: none;
    margin-top: 10px;
}
@media (max-width: 400px){
.row p {
    text-align: center;
    text-decoration: none;
    margin-top: 10px;
    font-size: 11px;
}}
 </style>
</head>
<body>
    <div class="container-fluid">
       <?php
       if(isset($_REQUEST['id_product'])){
        getproductComment($_REQUEST['id_product']);
       }
       ?>
  
    </div>
</body>
</html>