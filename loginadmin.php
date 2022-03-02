<?php 
     
     include_once 'functions.php';
     if(isset($_REQUEST['username'])&& isset($_REQUEST['password'])){
       if( checkLogin($_REQUEST['username'],$_REQUEST['password'])){

       } else{
    
       }
     }else{
  
     }
    
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
@import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
   height: 100%;
        background: linear-gradient(-2deg , #84527c, #e8e3e9);
 }
  
 /* سایر دستورات وب سایت */
 /* ... */
       
        .login form{
            text-align: center;
           
            padding: 20px;
            box-sizing: border-box;
            border-radius: 4px;
            height: auto;
            width: 250px;
            background-color:white;  
            margin-left: 450px;
            margin-top: 200px;
          
        }
        .login input{
            border-radius: 4px;
            height: 45px;
            display: block;
            text-align: center;
            width: 200px;
            margin-top: 7px;
            border: 1px solid gray;
        }
        #btn{
            margin-top: 20px;
          margin-left: 50px; 
          text-align: center;  
           width: 100px;
           border: none;
        }
        #bt{
  background-color: #82527b;
  color: whitesmoke;
 border-radius: 30px;
margin-top: 20;
  border: none;
  width: 75px;
  margin-left: 60px;
margin-top: 20;
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
.hh{
	font-size: 27px;
}
        .fnt{
            font-size: 12px;
            color: #302d2d;
            margin-left: 500px;
            text-decoration: none;
            font-family: 'Vazir', sans-serif; }
            @media (max-width: 740px){
                .login form{
            text-align: center;
           
            padding: 20px;
            box-sizing: border-box;
            border-radius: 4px;
            height: auto;
            width: 250px;
            background-color:white;  
            margin-left: 30px;
            margin-top: 100px;
          
        }
        .fnt{
            font-size: 12px;
            color: #302d2d;
            margin-left: 50px;
            text-decoration: none;
            font-family: 'Vazir', sans-serif; }

            }
    </style>
</head>
<body>
    <div class="login">

        <form action="loginadmin.php" >
        <h1 class="ftc hh colorgray"> ورود به حساب کاربری ادمین</h1>
            <input type="text" name="username" placeholder="نام کاربری خود را وارد کنید">
            <input type="password" name="password" placeholder="رمز عبور خود را وارد کنید">
            <input type="submit" id="bt" value="ورود" >
        </form>
        <a href="#" class="fnt">رمز عبور خود را فراموش کرده اید؟</a>
    </div>

    
   
</body>
</html>