<?php 
	
	include_once 'functions.php'; 
	if(isset($_REQUEST['phone'])&&isset($_REQUEST['myusername'])&&isset($_REQUEST['mypassword'])&&isset($_REQUEST['date'])){
	
	InsertAdmin($_REQUEST['myusername'],$_REQUEST['mypassword'],$_REQUEST['phone'],$_REQUEST['date']);
		
	}
	
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
@import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
 }
  
 /* سایر دستورات وب سایت */
 /* ... */
    body{
      height: 100%;
        background: linear-gradient(-2deg, #e8e3e9,   #84527c);
    }
    form{
        margin-top: 100px;
        margin-left: 450px;
        box-sizing: border-box;
        background-color: white;
   height: auto;
   width: 300px;
text-align: center;
padding: 20px;
border-radius: 4px;
    }
    input{
 display: block;

 margin-top: 7px;
 width: 200px;
 padding: 10;
 text-align: center;
margin-left: 30px;
    }
    .hh{
	font-size: 27px;
}
.colorgray{
    color: gray;
}
.ftc{
  text-align: center;
  font-family: 'Vazir', sans-serif;}
h1 {
	font-weight: bold;
}
#bt{
  background-color: #82527b;
  color: whitesmoke;
 border-radius: 30px;
margin-top: 20;
  border: none;
  width: 75px;
  margin-left: 90px;
margin-top: 20;
}
.vorud{
    color: whitesmoke;
position: relative;
top: 10px;
left: 550px;
text-decoration: none;
border: 1px solid whitesmoke;
padding: 5px;
width: 70px;
border-radius: 10px;
}
@media (max-width: 800px){
    .vorud{
    color: whitesmoke;
position: relative;
top: 10px;
left: 150px;
text-decoration: none;
border: 1px solid whitesmoke;
padding: 5px;
width: 70px;
border-radius: 10px;
}
form{
        margin-top: 100px;
        margin-left: 20px;
        box-sizing: border-box;
        background-color: white;
   height: auto;
   width: 300px;
text-align: center;
padding: 20px;
border-radius: 4px;
    }
}
    </style>
</head>
<body>
<?php 
	include_once "jdf.php";
$date= gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h1 class="ftc hh colorgray"> ایجاد حساب کاربری ادمین</h1>
			
			<input class="ft" name="myusername" type="text" placeholder="نام کاربری">
            <input class="ft" name="phone" type="text" placeholder="شماره موبایل" />
			<input class="ft" name="mypassword" type="password" placeholder="رمز عبور" />
            <?php echo' <input type="hidden" name="date" value="'.$date.'">';?>
			<input type="submit" id="bt" class="sub" value="ثبت نام" 	 >
			
		</form>
<a href="loginadmin.php" class="vorud" > ورود</a>

</body>
</html>
