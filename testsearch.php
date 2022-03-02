
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php   include_once 'functions.php';  
include_once 'newfunction.php';
 include_once 'mystyle.php';
 include_once 'myscrp.php';
 ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cartscss.css">
   
</head>
<body>
<div class="container-fluid">
<?php include_once 'header.php';?>
<div class="row">
<div class="col-12"  >
 
<?php 

if(isset($_REQUEST['search'])){
  $matn=$_REQUEST['search'];
  echo ' <h3  style="text-align: center;margin-top: 30px;"> '.$matn.': نتیجه جستجو برای </h3>';
  showsearchresult($matn);
}else{

}
?>
</div>
</div>

<div class="row">
    <?php include_once 'footer.php'; ?>
    </div>
</div>
</body>
</html>
