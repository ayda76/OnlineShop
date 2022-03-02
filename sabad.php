<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php 
include_once 'functions.php';
include_once 'newfunction.php';
getUserLoginState();


?>
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
/*    sabad */
.sdropdown {
  position: relative;
  display: inline-block;

}
.sdropbtn {
  background-color: #420f42;
  font-size: 16px;
    border: none;
    cursor: pointer;
}
.sdropdown-content {
  display: none;
  position: absolute;
  background-color: #fff6ff;
 width: 250px;
margin: 2px;
  overflow: auto;
  border: 1px solid #ddd;
  border-radius: 4px;
  z-index: 1;
}

.sdropdown-content .hame{
  display: block;
  height: auto;
}
.sdropdown-content .hame .itm{
  display: block;
  list-style: none;

}
.sdropdown-content .hame .itm li{
  display: inline-block;
  list-style: none;
  

}
.sdropdown-content a {
 
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
/*    test header*/
@import url('https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400,700&display=swap');
.dropbtn {
 background-color: #75497b;
  color: white;
  padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-align: center;
    margin-left: 450px;
    width: 55px;
    height: 55px;
    border-radius: 9px;
    margin-top: 2px;
    margin-bottom: 1px;
}
.ftt{
  color: purple;
  text-align: right;
  font-family: 'Vazir', sans-serif;}

.dropbtn:hover, .dropbtn:focus {
 
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
  width: 100%;
}

#myInput:focus {outline: 3px solid #ddd;}

.droppdown {
  position: relative;
  display: inline-block;
float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff6ff;
 width: 100%;
margin: 2px;
  overflow: auto;
  border: 1px solid #ddd;
  border-radius: 4px;
  z-index: 1;
}

.dropdown-content a {
 
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.hamburger-icon {
  position: relative;
  z-index: 1;
  top: 0;
    left: 0;
    text-align: center;
  padding-bottom: 2vh;
}
.hamburger-icon span {
  height: 3px;
  width: 30px;
  background-color: black;
  display: block;
  margin: 5px 0px 5px 0px;
  transition: 0.7s ease-in-out;
  transform: none;
}
#openmenu:checked ~ .hamburger-icon span:nth-of-type(2) {
  transform: translate(0%, 175%) rotate(-45deg);
  background-color: white;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(3) {
  transform: rotate(45deg);
  background-color: white;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(1) {
  opacity: 0;
}



 
.droppdown a:hover {background-color: #ddd;}

.show {
  display: block;
opacity: 1;}
/*    test header*/

        .H{
     text-align: right;
     font-size: 18px;
    font-weight: 600;
    color: purple;
    margin-top: 20px;
    margin-right: 10px;
     padding-bottom: 5px;
    border-bottom: 1px solid #dcd5dc;
        }
    .sabad{
   box-sizing: border-box;
    width: 100%;
    height: auto;
    border-radius: 3px;
    background-color: #e8e4e7;
    margin-top: 20px;
        }
       .sabad .col-4{
   padding: 20px ;
}
    .imt{
        padding: 10px;
         width: 200px;
         height: 200px;
      }
     .sabad ul{
          display: block;
      }
      .pg{
    list-style: none;
    display: inline-block;
}
.sb{
    display: block;
    list-style: none;
   text-align: right;
    margin-top: 7px;
}
.deletep{
    border: none;
    height: 50px;
    width: 200px;
    border-radius: 6px;
    background-color: #403b3f;
    color: white;
    font-size: 14px;
    text-align: center;
}
.buy{
    border: none;
    border-radius: 6px;
    height: 50px;
    width: 200px;
    background-color: purple;
    color: white;
    font-size: 14px;
    text-align: center;
}
.cart_count{
    position: relative;
	top: 7px;
	left: 0;
	font-size: 12px;
	background-color: #d17cbf;;
	border-radius: 50px;
	height: 19px;
	line-height: 16px;
	color: #fff;
	min-width: 19px;
	text-align: center;
	padding: 0 5px;
	display: inline-block;
	vertical-align: top;
	margin-left: -5px;
	margin-right: 5px;
}
.btp {
    margin-top: 40px;
}
.btp li.sb{
    text-align: center;
}
@media (max-width: 830px){
  .deletep {
    border: none;
    height: 50px;
    width: 170px;
    border-radius: 6px;
    background-color: #403b3f;
    color: white;
    font-size: 14px;
    text-align: center;
}
.buy {
    border: none;
    border-radius: 6px;
    height: 50px;
    width: 170px;
    background-color: purple;
    color: white;
    font-size: 14px;
    text-align: center;
}
}
@media (max-width: 775px){
  .imt {
    margin-left: 20px;
    width: 100%;
    margin-left: 0px;
    padding: 10px;
    height: 250px;
}
}
    </style>
</head>

<body>
    <div class="container-fluid">
    <?php include_once 'header.php';?>
<?php


function username($iduser){
	try {
    $dbh = connectDb();
    $sql = "SELECT * FROM `user_tbl` WHERE  id_user='$iduser' ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($objs as $object) {
      $id =  $object->id_user;
      $name =  $object->name_user;
      echo'<p class="H" >';CountSabad($id);
      echo' '.$name.' :سبد خرید مشتری گرامی </p>';
    
    
    
    }

    //بستن اتصال
    $dbh = null;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}


if(isset($_REQUEST['id_product'])){
  $iduser = $_COOKIE['login'];
  $idproduct=$_REQUEST['id_product'];
 
  try {
    $dbh = connectDb();
  $sql = "SELECT * FROM `sabad_tbl` WHERE  id_product='$idproduct' AND id_user=' $iduser'";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
    if($objs){
    foreach ($objs as $object) {
      $idproduct =  $object->id_product;
      $iduser =  $object->id_user;
      $count =  $object->count_sabad;
       $countproduct=$count+1;

      updatesabad($iduser,$idproduct,$countproduct);
    }}else{
      $count=1;
      insertsabad($iduser,$idproduct,$count);
     
    }
   
    //بستن اتصال
    $dbh = null;
  } catch (PDOException $e) {
    echo $e->getMessage();
  
  }
 

}

username($_COOKIE['login']); 
showsabad($_COOKIE['login']);

?>



    <div class="row">
    <?php include_once 'footer.php'; ?>
    </div>
    </div>
</body>
<script>
  //delete from sabad
  function SDelete(idproduct,countp){
    if(countp==1){
      window.location.href ="Deletefromsabad.php?id="+idproduct;
    }else{
      countp=countp-1;
      window.location.href ="updatecountsabad.php?id="+idproduct+"&countp="+countp;
    }
   

  }
  function buy(idproduct,iduser,countp,stock){
    window.location.href ="buyfromsabad.php?id="+idproduct+"&iduser="+iduser+"&count="+countp+"&stock="+stock;

  }
</script>

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