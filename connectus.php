<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once 'functions.php'; 
    include_once 'mystyle.php';?>
    <?php include_once 'myscrp.php';?>
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"/>
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

    .infoconnection{
        display: block;
        text-align: right;
        margin-right: 20px;
        margin-bottom: 50px;
    }
   .infoconnection li{
       display: block;
list-style: none;
margin-bottom: 30px;
margin-top: 40px;

   }
    .hh1{
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-weight: 600;
        font-size: 30px;
    }
    .hhp1{
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-size: 27px;
        font-weight: 500;
    }
    .tl{
        text-align: right;
        margin-right: 20px;
        margin-top: 20px;
        font-weight: 400;
        font-size: 20px;
        color: white;
    }
    /**testcard */

   .section-plans {
      position: ;
    top: 0;
    height: 850px;
    width: 100%;
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
 
  width: 100%;
  -webkit-box-shadow: none;
box-shadow: none;
background-color: #ffffff;
border: none;
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
  background: linear-gradient(-99deg, #bcb5bd, #3f1043);
}

.card__side--front-2 {
  background: linear-gradient(-45deg, #f321d7, #ffec61);
}

.card__side--front-3 {
  background: linear-gradient(-45deg, #24ff72, #9a4eff);
}

.card__side--back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.card__side--back-1 {
  background: linear-gradient(-99deg,#3f1043, #bcb5bd );
}

.card__side--back-2 {
  background: linear-gradient(-45deg, #ffec61, #f321d7);
}

.card__side--back-3 {
  background: linear-gradient(-45deg, #9a4eff, #24ff72);
}

.card:hover .card__side--front-1,
.card:hover .card__side--front-2,
.card:hover .card__side--front-3 {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card:hover .card__side--back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}

.card__title {
  height: 20rem;
  padding: 4rem 2rem 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.card__title--1 .fas {
  font-size: 5rem;
}

.card__title--2 .fas {
  font-size: 5rem;
}

.card__title--3 .fas {
  font-size: 5rem;
}

.card__heading {
  font-size: 3rem;
  font-weight: 300;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  width: 75%;
}

.card__heading-span {
  padding: 1rem 1.5rem;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
}

.card__details {
  padding: 0 2rem 2rem;
}

.card__details ul {
  list-style: none;
  width: 80%;
  margin: 0 auto;
}

.card__details ul li {
  text-align: center;
  font-size: 1.5rem;
  padding: 1rem;
}

.card__details ul li:not(:last-child) {
  border-bottom: 1px solid #eee;
}

.card__cta {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 90%;
  text-align: center;
}

.card__price-box {
  text-align: center;
  color: #fff;
  margin-bottom:0;
}

.card__price-only {
  font-size: 1.4rem;
  text-transform: uppercase;
}

.card__price-value {
  font-size: 6rem;
  font-weight: 100;
}

.shopul{ display: block;}
.shopul li{
  display: block;
  list-style: none;
}
@media (max-width: 758px){
  .shopul li{
  display: block;
  list-style: none;
}
.infoconnection li{
       display: block;
list-style: none;
margin-bottom: 30px;
font-size: 13px;
   }
   .hhp1{
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-size: 20px;
        font-weight: 500;
    }
    .tl{
        text-align: center;
        margin-right: 20px;
        margin-top: 20px;
        font-weight: 500;
        font-size: 15px;
        color: white;
    }
}
@media (max-width: 526px){
  .shopul li{
  display: block;
  list-style: none;
}
.infoconnection li{
       display: block;
list-style: none;
margin-bottom: 30px;
font-size: 9px;
   }
    .hh1{
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-size: 17px;
        font-weight: 500;
    }
    .hhp1{
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-size: 14px;
        font-weight: 500;
    }
    .tl{
        text-align: center;
        margin-right: 20px;
        margin-top: 20px;
        font-weight: 400;
        font-size: 12px;
        color: white;
    }
}
@media (max-width: 322px){
  .shopul li{
  display: block;
  list-style: none;
}
.infoconnection li{
       display: block;
list-style: none;
margin-bottom: 30px;
font-size: 7px;
   }
    .hh1{
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-size: 16px;
        font-weight: 500;
    }
    .hhp1{
      text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        color: white;
        font-size: 11px;
        font-weight: 500;
    }
    .tl{
        text-align: center;
        margin-right: 20px;
        margin-top: 20px;
        font-weight: 400;
        font-size: 9px;
        color: white;
    }
}
    </style>
</head>
<body>
<div class="container-fluid ">
<?php  include_once 'header.php';?>
<div class="row">
<div class="col-12">
    <?php
    function getshop(){
        try {
            $dbh = connectDb();
            $sql = "SELECT * FROM `shop_tbl` WHERE id_shop=1";
            $stmt = $dbh->query($sql);
            $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
            echo' 
            <section class="section-plans" id="section-plans">
            <div class="card">';
            foreach ($objs as $object) {
	
                $name =  $object->name_shop;
                $phone =  $object->phone_shop;
                $address =  $object->address_shop;
                $telegram =  $object->telegram_shop;
                $whatsapp =  $object->whatsapp_shop;
                $insta =  $object->instagram_shop;
                echo'
      
        <div class="card__side card__side--front-1">
          <div class="card__title card__title--1">
          <ul class="shopul">
          <li><p class="hh1" > '. $name.'  </p></li>
              <li><p class="hhp1" >  به فروشگاه ما خوش آمده اید</p></li>
              <li><p class="tl" >در این جا راه های ارتباطی ما را میتوانید مشاهده کنید </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="card__side card__side--back card__side--back-1">
          <div class="card__cta">
            <div class="card__price-box">';
              echo'
               <ul class="infoconnection">
             <li><p> :شماره تلفن های فروشگاه <i class="fas fa-phone " id="ic" style="height: 26px; width: 26px;"></i> <br>'.$phone.'</p></li>
             <li><p>: پیچ اینستاگرام فروشگاه <i class="fab fa-instagram TG" style="height: 26px; width: 26px;"></i><br>'.$insta.'</p></li>
             <li><p> : کانال تلگرام <i class="fab fa-telegram-plane TG" style="height: 26px; width: 26px;"></i><br> '.$telegram.' </p></li>
             <li><p>: واتس اپ <i class="fab fa-whatsapp TG" style="height: 26px; width: 26px;"></i>  <br>'.$whatsapp.'</p></li>
             <li><p>:آدرس فروشگاه <i class="fas fa-map-marked-alt" id="ic" style="height: 26px; width: 26px;"></i>  <br>'.$address .'</p></li>
             </ul>
              
             </div>
             </div>
             </div>
           ';
             
        }
        echo' </div>
        </section>';
            //بستن اتصال
            $dbh = null;
        } catch (PDOException $e) {
            
            echo $e->getMessage();
        }
    }
    getshop();
    ?>

</div>
<?php include_once 'footer.php'; ?>
</div>

</div>
</body>
<script>
var d = new Date();
document.getElementById("dddd").innerHTML = d.toDateString();
document.getElementById("ddddate").innerHTML = d.toDateString();
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