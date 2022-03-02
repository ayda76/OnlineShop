<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once 'functions.php';
    include_once 'newfunction.php';
     include_once 'mystyle.php';?>
    <?php include_once 'myscrp.php';?>
    <title>Document</title>
    <link rel="stylesheet" href="cartscss.css">
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">
    <style>
/* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
@import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
body {
  font-family: 'Vazir', sans-serif;
}
 
/* سایر دستورات وب سایت */
/* ... */

      .txtcenter{
        text-align: center;
      }
   .TG{
     color: white;
   }

.ft{
  text-align: right;
  font-family: 'Vazir', sans-serif;}
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
 /* font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
*/
font-family: 'Vazir', sans-serif;
}

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

/* style of slider  */

/*html, body {
	margin: 0;
	background-color:#3a0f37 ;
	font-family: sans-serif;
}
#3a0f37
#730a6c*/
.slideshow {
	width: 100%;
	height: 500px;
	border: 0px;
	padding: 0px;
	margin: 0 auto;
/*	background-color: #625065;*/
  background-color: #6a5268;
  overflow: hidden;
  font-family: 'Vazir', sans-serif;
}

input {

}

input:checked + .slide {
	transform: translateX(0px);
	transition: transform 0.5s ease-in-out;
}

input:checked + .slide .slidecontent {
	width: 100%;
	display: block;
}

.slide {
	transform: translateX(-100%);
	position: absolute;
	width: 100%;
	height: 100%;
  left: 100%;
	background-size: 50% 100%;
	transition: transform 0.5s ease-in-out;
  background-color: #866483;
}

.slidecontent {
	box-sizing: border-box;
	height: calc(80% - 60px);
	overflow: auto;
	color: white;
	position: absolute;
  right: 50px;
	animation-name: fade-in;
	animation-duration: 1s;
	animation-iteration-count: 1;
	opacity: 1;
  margin-top: 30px;
}
.slidecontent a{
margin-top: 50px;
  text-decoration: none;
  color: white;
  font-size: 16px;
  text-align: right;
  font-family: 'Vazir', sans-serif;

}
.slide img{
 width: 100%;
	height: 100%;
 background-size: 50% 100%;
}
.slide:nth-child(3) {

	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
}

.slide:nth-child(3):after {
	position: absolute;
	margin: auto;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100px;
}

.slide:nth-child(6) {

	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
}

.slide:nth-child(6):after {
	position: absolute;
	margin: auto;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100px;
}

.slide:nth-child(9) {

	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
}

.slide:nth-child(9):after {
	position: absolute;
	margin: auto;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100px;
}

.slide:nth-child(12) {
	
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
}

.slide:nth-child(12):after {
	position: absolute;
	margin: auto;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100px;
}

.slide:nth-child(15) {
	
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: center;
}

.slide:nth-child(15):after {
	position: absolute;
	margin: auto;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 100px;
}

.slide-button {
	box-sizing: border-box;
	color: #AAA;
	font-weight: bold;
	display: block;
	width: calc((50% / 5) - 2%);
	margin: 5px 1%;
	height: 50px;
	line-height: 50px;
	border-bottom: solid 4px #AAA;
	text-align: center;
	position: absolute;
	bottom: 5px;
	text-transform: uppercase;
}

.slide-button:hover {
	cursor: pointer;
	color: #FFF;
	border-bottom: solid 4px #FFF;
}

.slide-button:nth-child(1) {
	left: calc(50% + (0 * (50% / 5)));
	border-bottom-color: #2E112D;
}
.slide-button:nth-child(4) {
	left: calc(50% + (1 * (50% / 5)));
	border-bottom-color: #551c56;
}

.slide-button:nth-child(7) {
	left: calc(50% + (2 * (50% / 5)));
	border-bottom-color: #7b2679;
}

.slide-button:nth-child(10) {
	left: calc(50% + (3 * (50% / 5)));
	border-bottom-color: #9823a7;
}

.slide-button:nth-child(13) {
	left: calc(50% + (4 * (50% / 5)));
	border-bottom-color: #cc30c7;
}
.buttons{
  margin-left: 20px;
  margin-top: 470px;
}
.buttons button{
 
  width: 110px;
  height:5px;
  border-radius: 2px;
 
  border: none;
}
.buttons button:nth-child(1){
  background-color: #2E112D;
}
.buttons button:nth-child(2){
  background-color:  #551c56;
}
.buttons button:nth-child(3){
  background-color: #7b2679;
}
.buttons button:nth-child(4){
  background-color:  #9823a7;
}
.buttons button:nth-child(5){
  background-color:  #cc30c7;
}
@keyframes fade-in {
	0% {
		opacity: 0;
	}

	50% {
		transform: translateY(-50px);
		opacity: 0;
	}

	100% {
		transform: translateY(0px);
		opacity: 1;
	}
}

/*.psst {
	display: inline-block;
	background-color: rgba(0, 150, 255, 0.1);
	border: solid 1px rgba(0, 150, 255, 0.5);
	color: rgba(0, 150, 255, 0.5);
	padding: 15px 20px;
	border-radius: 4px;
}

.psst a {
	color: #0096ff;
}
*/


/* end  style of slider  */
/* start ad */

.c-preview {
    background: #000;
    background: -moz-linear-gradient(-45deg, #000000 0%, #000000 25%, #1e539e 50%, #ff3083 75%, #7800a8 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(-45deg, #000000 0%, #000000 25%, #1e539e 50%, #ff3083 75%, #7800a8 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(135deg, #000000 0%, #000000 25%, #1e539e 50%, #ff3083 75%, #7800a8 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    background-size: 400% 400%;
    background-repeat: no-repeat;
    display: flex;
    margin-top: 30px;
    width: 100%;
    height: 300px;
    max-width: 100vw;
    max-height: 100vh;
    justify-content: center;
    align-items: center;
    color: #540032;
    position: relative;
    cursor: pointer;
    transition: .5s all;

  }
  .c-preview__img {
    position: absolute;
   
    left: 0;
    top: 0;
    background-color: #843578;
    background-image: url(imgs/objects-731426_1920.jpg);
    background-repeat: no-repeat;
    background-size:  100% 300px;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: .5;
    mix-blend-mode: screen;
  }
  .c-preview__title {

    position: relative;
    z-index: 10;
    color: white;
    text-transform: uppercase;
    letter-spacing: .05em;
  }
  .c-preview:hover {
    background-position: 100% 100%;
  }
  .c-preview:hover__title {
    text-shadow: 0 0 20px black;
  }

/* end ad */

    </style>
    <script>
      function show(str) {
  if (str == "") {
    document.getElementById("txtslide").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtslide").innerHTML = this.responseText;
      }
    };
    
  //var myid=1;
    xmlhttp.open("GET","slidefunction.php?q="+str,true);
  
    xmlhttp.send();
  }
}


function showpost(str) {
  if (str == "") {
    document.getElementById("txtpost").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtpost").innerHTML = this.responseText;
      }
    };
    
  //var myid=1;
    xmlhttp.open("GET","bestposts.php?q="+str,true);
  
    xmlhttp.send();
  }
}



    </script>
</head>
<body>
    <div class="container-fluid " >
      <?php include_once 'header.php';?>
   
   
    <!--body1 start -->
    <div class="body1">
        <div class="row">
        <div class="col-12 p-0  d-none d-md-block"  >
      <div class="newslider">
     
			<fieldset class="slideshow" id="txtslide" style="  background-color: #6a5268;">
 
<?php

function activepage(){
   
  try{
      $dbh = connectDb();
      $sql = "SELECT * FROM `product_tbl` ORDER BY id_product DESC LIMIT 1 OFFSET 0 ";
      $stmt = $dbh->query($sql);
      $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
  echo' 
  
  ';
      foreach ($objs as $object) {
          $idproduct=$object->id_product;
          $img =  $object->img_product;
          $name =  $object->name_product;
        
       
          $matn = $object->matn_product;
          $item = explode(",",$matn);
          
         
         
        
        
        echo'<div class="row">
        <div class="col-6">
        <img src="'.$img.'" alt="" width="635" height="500">
        </div>
        <div class="col-6">
        <div class="slide" >
      
        <div class="slidecontent" >
        <h1 class="ft">معرفی محصولات جدید</h1>
      <p class="ft"> : اطلاعات محصول</p>
      
      <ul>
      <li class="ft" style="list-style: none;">'.$name.': نام محصول </li>
      <li class="ft" style="list-style: none;">: ویژگی های محصول </li>
      ';
      for($i=0;$i<2;$i++){
  
          echo' <li class="ft" style="list-style: none;">'.$item[$i].'</li>';
      }
      echo'
      </ul>
      <a href="mahsul.php?id_product='.$idproduct.'" class="ft"> مشاهده محصول</a>

    
      
    </div> 
    
    <div class="buttons">
    <button  name="slide" onclick="show(1)"></button>
    <button  name="slide" onclick="show(2)"></button>
    <button  name="slide" onclick="show(3)"></button>
    <button  name="slide" onclick="show(4)"></button>
    <button  name="slide" onclick="show(5)"></button>
    </div> 
   
    </div> 
    
    </div> 
    </div>  
 
    ';
                
                
                }
  
  
  $dbh = null;
          
  } catch (PDOException $e) {
      
      echo $e->getMessage();
  }   
}
activepage();
?>

     
   

 <!-- end slider-->
</div>




<div class="col-12 ">
  <!-- ad-->
  <div class="adv" >
    <?php 
    echo'
    <a class="c-preview" href="salepage.php" style="text-decoration: none;">
  <div class="c-preview__img"></div>
  <h2 class="c-preview__title">! تخفیف ویژه</h2>
</a>
    ';
    
    ?>
 

  </div>
<!-- end ad-->
</div>

<div class="col-12 ">
<!--megamenu -->
<div class="row">
  <div class=" col-12  ">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 50px;">
 <div class="v1">
    <nav>
  <ul>
    <li>
    <a class="nav-link v active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" onclick="showpost('1')" role="tab" aria-controls="v-pills-home" aria-selected="true">تازه ها
    <span></span><span></span><span></span><span></span>
    </a>
    
    </li>
    <li>
    <a class="nav-link v" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" onclick="showpost('2')" role="tab" aria-controls="v-pills-profile" aria-selected="false">پرطرفدارها
    <span></span><span></span><span></span><span></span>
    </a>
      
    </li>
    <li>
    <a class="nav-link v" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" onclick="showpost('3')" role="tab" aria-controls="v-pills-messages" aria-selected="false">   پربازدیدها
    <span></span><span></span><span></span><span></span>
    </a>
  
    </li>
    <li>
    <a class="nav-link v" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" onclick="showpost('4')" role="tab" aria-controls="v-pills-messages" aria-selected="false">پرفروش ها
    <span></span><span></span><span></span><span></span>
    </a>
     
    </li>
  </ul>
</nav></div>
</div>
</div>
 <!--<div class="row">
    <div class="col-10">-->
    <div class="col-12 ">
    <div class="tab-content" id="v-pills-tabContent">
      <!--1//////////////////////--->
      <div class="tab-pane fade show active" id="txtpost" role="tabpanel" aria-labelledby="v-pills-home-tab">

<?php 
function activepost(){
   
  try{



    $dbh = connectDb();
    $sql = "SELECT * FROM `product_tbl` ORDER BY id_product DESC LIMIT 12 ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
echo' 
<ul class="carts"> 
';
    foreach ($objs as $object) {
        $idproduct=$object->id_product;
        $img =  $object->img_product;
        $name =  $object->name_product;
        $price = $object->price_product;
  $discount = $object->discount_product;
  $total=$price-($discount/100)*$price;
        $matn = $object->matn_product;
        $item = explode(",",$matn);
        
       echo'
      
       <li>
       <div class="container page-wrapper">
  <div class="page-inner">
    <div class="row" style="height: 320px;">
      <div class="el-wrapper">
      <a href="mahsul.php?id_product='.$idproduct.'">
        <div class="box-up">
          <img class="img" src="'.$img.'" alt="" height="250" width="220">
          <div class="img-info">
            <div class="info-inner">
           <!-- <span class="p-company">apple</span>-->
              <span class="p-name">'.$name.'</span>
             
            </div>
            
            <div class="a-size"><p>';

           // updatefav( $idproduct); likes
          
              echo'
              <span class="size">';
              //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
              if(isset($_COOKIE['login'])){
                $iduser=$_COOKIE['login'];
                showfav($iduser,$idproduct);
              }else{
        echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
              }
            
             
            echo '</a></span></p></div>
          </div>
        </div>

        <div class="box-down">
          <div class="h-bg">
            <div class="h-bg-inner"></div>
          </div>

          <a class="cart" href="sabad.php?id_product='.$idproduct.'">
            <span class="price"><strike>'.$price.'</strike> <br> تومان'.$total.'</span>
            <span class="add-to-cart">
              <span class="txt">افزودن به سبد</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</li>


       ';
      
              
              }

echo' </ul>';
$dbh = null;
        
} catch (PDOException $e) {
    
    echo $e->getMessage();
}

}
activepost();
?>

  
      </div>
     
    </div>
  
</div>

<!-- end megamenu -->
</div>
</div>
<!--foot-->
<?php include_once 'footer.php'; ?>
</div>
    </div>
  
    
   
    
    
    </div>

</body>


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
<!--- nav-->
<script>
  $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
<!--- endnav-->
<script src="shopjs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/jquery.min.js"></script>
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/popper.min.js"></script>
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/bootstrap.min.js"></script>
<script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/mdb.min.js"></script>
<script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.1/compiled-addons.min.js"></script>
<script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-plugins-gathered.min.js"></script>
<!--dropdown-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

  $('.multi-level-dropdown .dropdown-submenu > a').on("click", function(e) {
  var submenu = $(this);
  $('.multi-level-dropdown .dropdown-submenu .dropdown-menu').removeClass('show');
  submenu.next('.dropdown-menu').addClass('show');
  e.stopPropagation();
});

$('.multi-level-dropdown .dropdown').on("hidden.bs.dropdown", function() {
  // hide any open menus when parent closes
  $('.multi-level-dropdown .dropdown-menu.show').removeClass('show');
});
</script>
<script>
  $('.dropdown-toggle').dropdown();
</script>

<script>
  $('.carousel').carousel();
</script>

<!-- hesabkarbari -->
<!--<script src="digi.js"></script>-->

<script>
  $(function(){
$("#showingbtn").click(function(){
  $("#myModal").modal('show');
});
$("#closepop").click(function(){
  $("#myModal").modal('hide');
})
  });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
<script src="/docs/4.0/assets/js/docs.min.js"></script>

<script src="https://static.codepen.io/assets/common/browser_support-1963aa6406ae47d3176af996336c5d219acd8913c5af309e72f18933e95201cc.js"></script>
<script src="https://static.codepen.io/assets/common/everypage-a63f0cbd5f67116206c89108a0a1da6978ab1606d953812d875b800cf8fe823e.js"></script>
<script src="https://static.codepen.io/assets/common/analytics_and_notifications-538ab2710674d4676fe331ffda620410176f9ac968498eeba639b3f0d1125ff8.js"></script>



</html>
