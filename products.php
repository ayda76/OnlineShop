<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!--header-->
  <?php   include_once 'functions.php';   ?>
	<?php include_once 'mystyle.php';?>
	<?php include_once 'myscrp.php';?>
<!--header-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="cartscss.css">
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
  font-family: 'Vazir', sans-serif;
}
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


    /*  box-shadow: 0px 0px 25px #00000070;*/ 
    body {
	padding: 0;
	margin: 0;
	background-color:#fff1ff;
}
.ft{
  text-align: center;
  font-family: 'Vazir', sans-serif;}
h1 {
  font-family: 'Vazir', sans-serif;
	margin: 30px auto 30px auto;
	color: #09fbd2;
	width: 100%;
	text-align: center;
}

.butn{
  background-color: #482145;
    width: 220px;
    border: none;
    color:white;
}
.butn:hover{
  background-color: #482145;
}
    </style>
     
     <script>
function show(str,myid) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    
  //var myid=1;
    xmlhttp.open("GET","testproductfunction.php?q="+str+"&&p="+myid,true);
  
    xmlhttp.send();
  }
}

</script>
</head>
<body>
    <div class="container-fluid">
	<?php include_once 'header.php';?>
        <div class="row">
       <div class="col-12"> 
       <div class="row">
     <div class="col-sm-12 col-md-3 col-lg-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<nav>
            <ul class="menu">
      
     
          

             
             
 
  
<?php 
include_once 'functions.php';
try{
$dbh = connectDb();

$sql = "SELECT * FROM`cat_tbl` ";
$stmt = $dbh->query($sql);
$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach($objs as $object){
  $idcat=$object->id_cat;
  $cat = $object->name_cat;
  echo'
  <li class="list" ><a href="#" class=" T ft">'. $cat.'</a> 
';
brandcat($idcat);
echo'
</li>
  ';
}
 	//بستن اتصال
   $dbh = null;
  
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}

  function brandcat($idcat){
    try{
      $dbh = connectDb();
      
      $sql = "SELECT * FROM`brand_tbl` ";
      $stmt = $dbh->query($sql);
      $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
      echo' <ul class="items">';
      foreach($objs as $object){
        $idbrand=$object->id_brand;
        $brand = $object->name_brand;
        echo'
        <li class="ft"><button class="butn" value="'.$idbrand.'" id="'.$idcat.'" style="background-color: none;" onclick="show(this.value,this.id)" >'.$brand.'</button></li>
       
        ';
      }
      echo '  </ul>';
         //بستن اتصال
         $dbh = null;
        
        } catch (PDOException $e) {
          
          echo $e->getMessage();
        }
      

  }
?>
</ul>
</nav>
	  </div>

            </div>



           <div class=" col-sm-12 col-md-9 col-lg-9 ">
			<div class="tab-content" id="v-pills-tabContent " >
        <div id="txtHint">

        <?php
     try{
  
     $dbh = connectDb();
     
     $sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) 
     INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE brand_tbl.id_brand=1 AND cat_tbl.id_cat=1";
     $stmt = $dbh->query($sql);
    
     
     echo'
     
           
     <!--tata1--->
     <div class="tab-pane fade show active " id="tata1" role="tabpanel" aria-labelledby="lp1">
     
     <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 50px;">
     <div class="v1">
     <nav>';
     //productbrandmenu();
     echo'</nav></div>
     </div>
     
         <div class="tab-content" id="v-pills-tabContent">';
         echo'
     
         <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="1">';
         productitem(1,1);
     
         echo '
          </div>
         </div>';
        //بستن اتصال
        $dbh = null;
       
       } catch (PDOException $e) {
         
         echo $e->getMessage();
       }
     //mysqli_close($con);
     
     
     function productitem($idcat,$idbrand){
       try{
        
        $dbh = connectDb();
        $sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) 
        INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE brand_tbl.id_brand=$idbrand AND cat_tbl.id_cat=$idcat";
        $stmt = $dbh->query($sql);
        $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
       
        echo'<ul class="carts" > ';
        foreach ($objs as $object) {
          $idproduct=$object->id_product;
          $img =  $object->img_product;
          $name =  $object->name_product;
          $idbrand=$object->id_brand;
          $brand = $object->name_brand;
          $idcat=$object->id_cat;
          $cat = $object->name_cat;
          $matn = $object->matn_product;
          $item = explode(",",$matn);
          $price = $object->price_product;
          $discount = $object->discount_product;
          $total=$price-($discount/100)*$price;
        
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
                    <span class="p-company">'.$brand.'</span>
                      <span class="p-name">'.$cat.'</span>
                      <span class="p-name">'.$name.'</span>
                    </div>
                    
                    <div class="a-size"><p>';

                   
                  
                      echo'
                      <span class="size">';
                    if(isset($_COOKIE['login'])){
                        $iduser=$_COOKIE['login'];
                        showfav($iduser,$idproduct);
                      }else{
                        updatefav( $idproduct);
                echo' likes<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
                      }
                    
                      
                    echo '</a></span></p></div>
                  </div>
            </div>
            </a>
        <!--<a href="#"><i class="far fa-heart" style="height: 20x; width:20px; margin-left:20px; font-size: 20px;"></i></a>-->
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
            echo '
             </ul>';
           //بستن اتصال
           $dbh = null;
          
          } catch (PDOException $e) {
            
            echo $e->getMessage();
          }
     }


        ?>
        
            <!---->
            </div> 
            </div> 
        </div></div></div>
        <!--footer-->
     
        <?php include_once 'footer.php'; ?>
       
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

<script>
	function hasClass(el, className)
{
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}



const list = document.querySelectorAll('.list');

function accordion(e){
    e.stopPropagation(); 
    if(this.classList.contains('active')){
        this.classList.remove('active');
    }
    else if(this.parentElement.parentElement.classList.contains('active')){
        this.classList.add('active');
    }
    else{
        for(i=0; i < list.length; i++){
          list[i].classList.remove('active');
        }
            this.classList.add('active');
		}
	$('#tata1').ajax
}
for(i = 0; i < list.length; i++ ){
    list[i].addEventListener('click', accordion);
}



</script>

</html>