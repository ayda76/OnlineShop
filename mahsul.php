
<?php 
include_once 'newfunction.php';
  getUserLoginState(); 
  if(isset($_COOKIE['login'])){
    $iduser = $_COOKIE['login'];
if(isset($_REQUEST['id_product'])){
$id_product=$_REQUEST['id_product'];
if(isset($_REQUEST['comment'])){
        
        
        
          InsertComment($iduser,$id_product,$_REQUEST['comment']);
       
       }else{ }
      
      }  }else{
        header("location:login.php");
       }
            ?>
            <?php
   $iduser = $_COOKIE['login'];
   $count=0;
try {
  $dbh = connectDb();
  $sql = "SELECT COUNT(id_product)as counter FROM `fav_tbl` WHERE id_product=$id_product AND id_user=$iduser";
  $stmt = $dbh->query($sql);
  $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
 
  foreach ($objs as $object) {
  $count=$object->counter;
//return $count;
}
  	//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
?>
     <?php
  $countlike=0;
try {
  $dbh = connectDb();
  $sql = "SELECT COUNT(id_fav)AS num FROM `fav_tbl` WHERE id_product=$id_product";
   $stmt = $dbh->query($sql);
  $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
 
  foreach ($objs as $object) {
    $countlike =  $object->num;

}
  	//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
?>
<script>
var countlike= <?php echo($countlike); ?>;
var counter = <?php echo($count); ?> ;
  function like( idproduct) {
 
  if (idproduct.length == 0) {
    document.getElementById("like").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       if((counter%2)!=0){
     
           var likenum =countlike+1;
               //heartfull 
          document.getElementById("like").innerHTML =  likenum+'likes <i class="fas fa-heart" style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
     
           
      }else if((counter%2)==0){
      

         var likenum =countlike-1;
             //empty heart  
       document.getElementById("like").innerHTML =  likenum+'likes<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
   
     
      }else{}} };
    xmlhttp.open("GET", "addtofav.php?q="+idproduct +"&t="+counter, true);
    xmlhttp.send();
  counter++;
  }
  
}
   
</script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once 'functions.php'; 
    include_once 'mystyle.php';?>
   
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.1/js/jquery.min.js"></script>
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

.product{
    box-sizing: border-box;
    width: 100%;
    height: auto;
    border-radius: 3px;
    background-color: #e8e4e7;
    margin-top: 20px;
    margin-bottom: 50px;
}
.col-4{
   padding: 20px ;
}
.imt{
  margin-top: 30px;
    margin-left: 20px;
    height: 300px;
    width: 300px;
}
.pinfo{
    display: block;
}
.pinfo .st{
    display: block;
list-style: none;
color: #212529;
font-size: 13px;
text-align: right;
}
.kk{}
.pg{
    list-style: none;
    display: inline-block;
}
#btshow{
    border: none;
    background-color: #e8e4e7;
    color: purple;
}
#bthide{
    border: none;
    background-color: #e8e4e7;
    color: purple;
}
.psabad{
    display: block;
}
.ps{
    display: block;
    list-style: none;
    text-align: right;
  margin-right: 50px;
    margin-top: 25px;
}
.ps a{
  color: #212529;
  text-decoration: none;
}

#btsabad{
    width: 150px;
    height: 50px;
    font-size: 15px;
    background-color: purple;
    color: white;
    border-radius: 10px;
    border: none;

}
.cmt{

 min-width: 500px;
 min-height: 50px;
  height: auto;
text-align: center;
border: 1px solid #420f42;
border-radius: 4px;
}
.commentpart{
 margin-left: 300px;
}
.commentpart button{
  color: #420f42;
  height: 50px;
  border: 1px solid #420f42;
  border-radius: 4px;

}
#like{
  border: none;
background-color: #e8e4e7;
}
.nazar{
  height: 50px;
border-radius: 9px;
background-color: #9d5c9d;
border: none;
color: white;
}

@media (max-width: 908px) {
  .ps {
    display: block;
    list-style: none;
    text-align: right;
    margin-right: 50px;
    margin-top: 25px;
    font-size: 13px;
}
.hn{
  font-size: 25px;
}
.imt {
    margin-left: 20px;
    width: 200;
    height: 250;
}
#btsabad {
    width: auto;
    height: 50px;
    font-size: 15px;
    background-color: purple;
    color: white;
    border-radius: 10px;
    border: none;
    font-size: 12px;
}
.cmt {
  min-width:100px;
    width: 80%;
    min-height: 50px;
    height: auto;
    text-align: center;
    border: 1px solid #420f42;
    border-radius: 4px;
    font-size: 12px;
}
.nazar {
    height: 50px;
    border-radius: 9px;
    background-color: #9d5c9d;
    border: none;
    color: white;
    width: 18%;
    font-size: 12px;
}
.commentpart {
    margin-left: 0px;
}
}
@media (max-width: 575px) {
.hn {

    font-size: 25px;

}
.pg {
    list-style: none;
    display: inline-block;
    text-align: center;
}
.pinfo .st {
    display: block;
    list-style: none;
    color: #212529;
    font-size: 13px;
    text-align: center;
}
.ps {
    display: block;
    list-style: none;
    text-align: center;
    margin-right: 0px;
    margin-top: 25px;
    font-size: 13px;
}
.cmt {
  min-width:100px;
    width: 70%;
    min-height: 50px;
    height: auto;
    text-align: center;
    border: 1px solid #420f42;
    border-radius: 4px;
    font-size: 12px;
}
.nazar {
    height: 50px;
    border-radius: 9px;
    background-color: #9d5c9d;
    border: none;
    color: white;
    width: 18%;
    font-size: 12px;
}
.commentpart {
    margin-left: 0px;
}
.imt {
  margin-top: 30px;
    width: 100%;
    height: 250;
    margin-top: 20px;
    padding: 20px;
    margin-left: 0px;

}
}
</style>

</head>
<body>

    <div class="container-fluid ">
    
    <?php
      
    include_once 'header.php';?>
    <div class="product ">
    <?php
    
      if(isset($_REQUEST['id_product'])){

        getProduct($_REQUEST['id_product']);
        
      }else{
       // header("location:mainpage.php");
      }
       ?>
    
<?php


echo'
 
<div class="row">
<div class="col-12">
			<div class="commentpart">';
      if(isset($_REQUEST['id_product'])){
     $id_product=$_REQUEST['id_product'];
    
     
    
     echo'		<form action="mahsul.php" >';
     echo'
     <input type="hidden" name="id_product" value="'.$id_product.'" />
     
				  <input class="cmt" type="text" name="comment" placeholder="نظر خود را در مورد این محصول با دیگران به اشتراک بگذارید">
         <input type="submit" class="nazar" id="subtn" value="ثبت نظر">';
        
         echo'
				</form>
		
			</div>
			</div>
      </div>
</div>';


      }
    
     
       ?>

  
    
    <div class="row">
    <?php include_once 'footer.php'; ?>
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
<script>
    $('.sh').hide();
    $('#bthide').click(function(){
        $('.sh').hide();
    });
    $('#btshow').click(function(){
           $('.sh').show();
    });
</script>
</html>