<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"/>
 <!--header-->
 <?php 
include_once 'functions.php';
 include_once 'newfunction.php';
 getUserLoginState();

 include_once 'mystyle.php';?>
 <?php include_once 'myscrp.php';?>
 <?php  

if(isset($_REQUEST['name'])&&isset($_REQUEST['iduser'])){
  
    updatename( $_REQUEST['iduser'],$_REQUEST['name']);
}

   
if(isset($_REQUEST['phonenumber'])&&isset($_REQUEST['iduser'])){

    updatephonenumber($_REQUEST['phonenumber'],$_REQUEST['iduser']);
}

if(isset($_REQUEST['username'])&&isset($_REQUEST['iduser'])){
  
  updateusername($_REQUEST['username'], $_REQUEST['iduser']);
}

if(isset($_REQUEST['address'])&&isset($_REQUEST['iduser'])){
   
  updateaddress($_REQUEST['address'],$_REQUEST['iduser']);
}

if(isset($_REQUEST['password'])&&isset($_REQUEST['iduser'])){
   
  updatepassword($_REQUEST['password'], $_REQUEST['iduser']);
}

if(isset($_REQUEST['bankcard'])&&isset($_REQUEST['iduser'])){
    
  updatebank($_REQUEST['bankcard'], $_REQUEST['iduser']);
}

if(isset($_REQUEST['email'])&&isset($_REQUEST['iduser'])){
	
  updateemail($_REQUEST['email'], $_REQUEST['iduser']);
}

if(isset($_REQUEST['codem'])&&isset($_REQUEST['iduser'])){
   
  updatecodm($_REQUEST['codem'], $_REQUEST['iduser']);
}
?>
<!--header-->
  <!--  <link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/components/modal/">
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
    <link href="/docs/4.0/assets/css/docs.min.css" rel="stylesheet">
    <link rel="stylesheet" href="customerstyle.css">

  <script>
function showinfo(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","userinfo.php?p="+str,true);
    xmlhttp.send();
  }
}

function showsefaresh(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","sefareshat.php?p="+str,true);
    xmlhttp.send();
  }
}
function showfav(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","userfav.php?p="+str,true);
    xmlhttp.send();
  }
}
function showcomment(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","usercomment.php?p="+str,true);
    xmlhttp.send();
  }
}

function showaddress(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","userinfo.php?p="+str,true);
    xmlhttp.send();
  }
}

function showpayam(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","userinfo.php?p="+str,true);
    xmlhttp.send();
  }
}

function showbazdid(myid,str) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","userinfo.php?p="+str,true);
    xmlhttp.send();
  }
}
function exit(myid) {
  if (myid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
  
    xmlhttp.open("GET","userexit.php?p="+myid,true);
    xmlhttp.send();
  }
}

</script>
</head>

<body>
<div class="pro">

   <div class="container-fluid">
   <?php include_once 'header.php';?>
   <div class="customer">
    <div class="row">
 
    <div class=" col-12 col-sm-3  col-md-3 col-lg-3  d-sm-block d-lg-block" >
       <div class="sideprofile">
     <nav>
       <?php 
       echo'
  <ul>';
 

  
  finduser($iduser);
  $iduser = $_COOKIE['login'];
 echo' </ul>
  
  <hr>
  <a><button class="btnn"  id="info" value="'. $iduser.'" onclick="showinfo(this.id,this.value)" >اطلاعات حساب</button>  <i class="far fa-user" style="height: 20px; width:20px; margin-left:20px;"></i></a>
  <a><button class="btnn"  id="sefareshat" value="'. $iduser.'" onclick="showsefaresh(this.id,this.value)" >سفارش های من</button> <i class="fas fa-shopping-basket" style="height: 20px; width:20px; margin-left:20px;"></i></a>
   <a><button class="btnn"  id="fav" value="'. $iduser.'" onclick="showfav(this.id,this.value)" >علاقه مندی ها</button> <i class="far fa-heart" style="height: 20px; width:20px; margin-left:20px;"></i></a>
   <a><button class="btnn"  id="comment" value="'. $iduser.'" onclick="showcomment(this.id,this.value)" >نظرات</button> <i class="far fa-comment" style="height: 20px; width:20px; margin-left:20px;"></i></a>
   <a  href="sabad.php?id_user='.$iduser.'" >سبد خرید <i class="linearicons-cart " style=" font-size:18px; margin-left:20px;"></i></a>
   <a ><button class="btnn"  id="payam" value="'. $iduser.'" onclick="showpayam(this.id,this.value)" >پیام ها </button><i class="far fa-envelope" style="height: 20px; width:20px; margin-left:20px;"></i> </a>
  
   <!-- <a><button class="btnn"  id="adderss" value="'. $iduser.'" onclick="showaddress(this.id,this.value)" >نشانی ها </button><i class="fas fa-map-marked-alt" style="height: 20px; width:20px; margin-left:20px;"></i></a>
  
   <a ><button class="btnn"  id="bazdid" value="'. $iduser.'" onclick="showbazdid(this.id,this.value)" >بازدید های اخیر</button> <i class="far fa-clock"style="height: 20px; width:20px; margin-left:20px;" ></i></a>-->
  
   <hr>
   <a  href="userexit.php" >خروج <i class="fas fa-sign-out-alt" style="height: 20px; width:20px; margin-left:20px;"></i></a>';

   ?>
   </nav>
       </div>

</div>


       <div class=" col-12 col-sm-9 col-lg-9  d-sm-block d-lg-block" style="display: flex; padding: 0;">
<div class= 'containerr' style="display: flex;">
<div id="txtHint" style="">
<!--txtHinttxtHinttxtHinttxtHinttxtHinttxtHinttxtHinttxtHinttxtHinttxtHinttxtHint-->

         
        

     
 

<?php
 $iduser = $_COOKIE['login'];

try {
    
    $dbh = connectDb();
    $sql = "SELECT * FROM `user_tbl` WHERE  id_user='$iduser'  ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
   echo' 
   <section class="section-plans" id="section-plans">
   <div class="card">';
    foreach ($objs as $object) {
        $name =  $object->name_user;
        $phone =  $object->number_user;
        $email =  $object->email_user;
        $codem =  $object->codm_user;
        $bankcart =  $object->bankcart_user;
        $address =  $object->address_user;
        $username =  $object->username_user;
        $date =  $object->date_user;
        echo'
      
        <div class="card__side card__side--front-1">
          <div class="card__title card__title--1">
          <i class="far fa-user" style="font-size: 50px; color: white; margin-bottom: 30px;"></i>
            <p class="card__heading">صفحه شخصی </p>
          </div>

          <div class="card__details">
            <ul>
              <li><p class="pactive">به صفحه ی خود خوش آمدید '. $name .'</p></li>
            </ul>
          </div>
        </div>
        <div class="card__side card__side--back card__side--back-1">
          <div class="card__cta">
            <div class="card__price-box">
            <div class="infopart1active" style="display: flex;">
          
            <ul class="infop1active">
            <li>'.$name.':نام  	<i class="fas fa-user " id="ic" style=""></i></li>
            <li>'.$username.':نام کاربری  <i class="fas fa-file-signature " id="ic" style=""></i></li>
            <li>'.$phone.':شماره موبایل  <i class="fas fa-phone " id="ic" style=""></i></li>
            <li>'.$address.':آدرس <i class="fas fa-map-marked-alt" id="ic" style=""></i></li>
           <li>'.$codem.':کدملی <i class="far fa-id-card" id="ic" style=""></i></li>
            <li>'.$email.':ایمیل <i class="far fa-envelope" id="ic" style=""></i></li>
            <li>'.$bankcart.' : شماره کارت بانکی  <i class="far fa-credit-card" id="ic" style=""></i></li>
            <li>'.$date.':تاریخ ثبت نام <i class="far fa-calendar-alt" id="ic" style=""></i></li> 
            </ul>
        </div>
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

?>
  
  </div>
</div>

</div>


   </div>
   <div class="footpart">
   <div class="row">
   <?php include_once 'footer.php'; ?>
   </div>
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
<!--<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> -->
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
<script src="digi.js"></script>

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
<!--<script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
<script src="/docs/4.0/assets/js/docs.min.js"></script>

<script src="https://static.codepen.io/assets/common/browser_support-1963aa6406ae47d3176af996336c5d219acd8913c5af309e72f18933e95201cc.js"></script>
<script src="https://static.codepen.io/assets/common/everypage-a63f0cbd5f67116206c89108a0a1da6978ab1606d953812d875b800cf8fe823e.js"></script>
<script src="https://static.codepen.io/assets/common/analytics_and_notifications-538ab2710674d4676fe331ffda620410176f9ac968498eeba639b3f0d1125ff8.js"></script>

</html>

