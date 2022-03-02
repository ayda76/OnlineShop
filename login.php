
<?php 
	include_once 'newfunction.php';
if(isset($_REQUEST['username'])&& isset($_REQUEST['password'])){
checkLoginUser($_REQUEST['username'],$_REQUEST['password']);
}

?>
	<?php 
	
	
	if(isset($_REQUEST['name'])&&isset($_REQUEST['phone'])&&isset($_REQUEST['myusername'])&&isset($_REQUEST['mypassword'])&&isset($_REQUEST['firstpass'])&&isset($_REQUEST['date'])){
		$p1=$_REQUEST['firstpass'];
		$p2=$_REQUEST['mypassword'];
		if($p1==$p2){
	InsertUser($_REQUEST['name'],$_REQUEST['phone'],$_REQUEST['mypassword'],$_REQUEST['myusername'],$_REQUEST['date']);
		}else{
			echo '<p>! رمز اشتباه وارد شد </p>';
		}
	}
	
	?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!--header-->
	<?php

	include_once 'functions.php'; 
	include_once 'mystyle.php';?>
<!--header-->
    <style>
 /* فایل اصلی «سی اس اس» که در وب سایت خود استفاده می کنید */
 
 @import url('https://v1.fontapi.ir/css/Vazir');/* لینک فایلی که وظیفه بارگذاری فونت ها را برعهده دارد */
 
 body {
   font-family: 'Vazir', sans-serif;
 }
  
 /* سایر دستورات وب سایت */
 /* ... */
       /* @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');*/

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Vazir', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}
.ft{
  text-align: center;
  font-family: 'Vazir', sans-serif;}
.colorgray{
    color: gray;
}

h1 {
	font-weight: bold;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #710b5b;
	background-color:#710b5b;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
	border-radius: 20px;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
    background-color: #eee;
    border-radius: 4px;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
	background: url(images/comment-author.gif) no-repeat scroll 7px 7px #eee;
padding-left:30px;
font-size: 13px;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #710b5b;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
/*	background: linear-gradient(to right, #FF4B2B, #FF416C);*/
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 10px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}
#btn{
	border-radius: 25px;
	border: 1px solid #710b5b;
	background-color:#710b5b;
	width:130px;
	height: 45px;
	color: #FFFFFF;
	font-size: 15px;
	font-weight: bold;
	padding: 10px 25px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.hh{
	font-size: 30px;font-weight: 500;
}
.gg{
	font-size: 25px;
	font-weight: 500;
}
#usericon{
	position: absolute;top: 110px;right: 70px;color: gray;font-size: 17px;
}
#phoneicon{position: absolute;top: 175px;right: 70px;color: gray;font-size: 17px;}
#usernsmeicon{position: absolute;top: 240px;right: 70px;color: gray;font-size: 17px;}
#passwordicon{position: absolute;top: 305px;right: 70px;color: gray;font-size: 17px;}
#confirmicon{position: absolute;top: 365px;right: 70px;color: gray;font-size: 17px;}
#usernameicon2{position: absolute;top: 210px;right: 70px;color: gray;font-size: 17px;}
#passwordicon2{position: absolute;top: 270px;right: 70px;color: gray;font-size: 17px;}
#shopbag{font-size: 60px;}
@media (max-width: 650px){
	.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 400px;
	max-width: 100%;
	min-height: 380px;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 20px;
	height: 100%;
	text-align: center;
	width: auto;
}
.hh{
	font-size: 20px;font-weight: 500;
}
input {
    background-color: #eee;
    border-radius: 4px;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
	height: 30px;
	font-size: 9px;
	padding-left:30px;
}
#btn{
	border-radius: 20px;
	border: 1px solid #710b5b;
	background-color:#710b5b;
	width:100px;
	height: 40px;
	color: #FFFFFF;
	font-size: 11px;
	font-weight: 500;
	padding: 10px 25px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
	font-size: 14px;
	font-family: 'Vazir', sans-serif;
}
.pss{
	font-size: 13px;
}
#usericon{position: absolute;top:110px;right: 40px;color: gray;font-size: 13px;}
#phoneicon{position: absolute;top: 155px;right: 40px;color: gray;font-size: 13px;}
#usernsmeicon{position: absolute;top: 200px;right: 40px;color: gray;font-size: 13px;}
#passwordicon{position: absolute;top: 248px;right: 40px;color: gray;font-size: 13px;}
#confirmicon{position: absolute;top: 290px;right: 40px;color: gray;font-size: 13px;}
#shopbag{font-size: 40px;}
#usernameicon2{position: absolute;top: 170px;right: 30px;color: gray;font-size: 13px;}
#passwordicon2{position: absolute;top: 215px;right: 30px;color: gray;font-size: 13px;}
.gg{
	font-size: 17px;
}
}
@media (max-width: 400px){
	.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 250px;
	max-width: 100%;
	min-height: 270px;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 7;
	height: 100%;
	text-align: center;
	width: 100%;
}
.hh{
	font-size: 11px;font-weight: 500;
}
input {
    background-color: #eee;
    border-radius: 4px;
	border: none;
	margin-top: 0;
	padding-left: 20px;
	width: 100%;
	height: 20px;
	font-size: 5px;
}
button {
	border-radius: 10px;
	border: 1px solid #710b5b;
	background-color:#710b5b;
	color: #FFFFFF;
	font-size: 11px;
	font-weight: 500;
	padding: 5px 20px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.btnsabt{
	border-radius: 10px;
	border: 1px solid #710b5b;
	background-color:#710b5b;
	color: #FFFFFF;
	font-size: 11px;
	 font-weight: 500;
	padding: 5px 20px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
.pss{
	font-size: 10px;
	margin: 0;
}



#btn{
	border-radius: 20px;
	border: 1px solid #710b5b;
	background-color:#710b5b;
	width:60px;
	height: 30px;
	color: #FFFFFF;
	font-size: 9px;
font-weight: 500;
padding: 2px 2px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
	font-family: 'Vazir', sans-serif;

}
#usericon{position: absolute;
top: 78px;
right: 20px;
color: gray;
font-size: 8px;}
#phoneicon{position: absolute;
top: 110px;
right: 20px;
color: gray;
font-size: 8px;}
#usernsmeicon{position: absolute;
top: 142px;
right: 20px;
color: gray;
font-size: 8px;}
#passwordicon{position: absolute;
top: 175px;
right: 20px;
color: gray;
font-size: 8px;}
#confirmicon{position: absolute;top: 205px;right: 20px;color: gray;font-size: 8px;}
#shopbag{font-size: 27px;}
#usernameicon2{position: absolute;
top: 127px;
right: 12px;
color: gray;
font-size: 8px;}
#passwordicon2{position: absolute;
top: 160px;
right: 12px;
color: gray;
font-size: 8px;}
.gg{
	font-size: 11px;
font-weight: 500;
margin-bottom: 2px;
}
button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
	border-radius: 20px;
	font-size: 10px;
}
}

    </style>
</head>
<body>
<?php 
	include_once "jdf.php";
$date= gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");
?>
<div class="container" id="container">


	<div class="form-container sign-up-container">
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>">
			<p class="ft hh colorgray" >ایجاد حساب کاربری</p>
			<i class="fas fa-user " id="usericon" ></i>
		<input class="ft" name="name" type="text" placeholder="نام و نام خانوادگی" />
		<i class="fas fa-phone " id="phoneicon" ></i>
            <input class="ft" name="phone" type="text" placeholder="شماره موبایل" />
			<i class="fas fa-file-signature " id="usernsmeicon" ></i>
			<input class="ft" name="myusername" type="text" placeholder="نام کاربری">
			<i class="fas fa-key " id="passwordicon" ></i>
			<input class="ft" name="firstpass"  type="password" placeholder="رمز عبور" />
			<i class="fas fa-unlock-alt " id="confirmicon" ></i>
           <input  class="ft"  type="password"  name="mypassword" placeholder="تایید رمز عبور " >
			<?php echo' <input type="hidden" name="date" value="'.$date.'">';?>
			<input type="submit" id="btn" class="sub" value="ثبت نام"  >
			
		</form>


	</div>

	<div class="form-container sign-in-container">
	<div class="login">
	<form action="login.php">
	<p class="hh colorgray ft">  ورود</p>
	<i class="fas fa-user" id="usernameicon2" ></i>
	<input type="text" class="ft" name="username" placeholder="نام کاربری خود را وارد کنید">
	<i class="fas fa-key" id="passwordicon2" ></i>
	<input type="password" class="ft" name="password" placeholder="رمز عبور خود را وارد کنید">
	<input type="submit" id="btn"  value="ورود"  >
</form>

</div>



	</div>

	<div class="overlay-container">
		<div class="overlay">
		
			<div class="overlay-panel overlay-left">
			<i class="fab fa-shopify" id="shopbag" ></i>
            <p class="ft gg" > به فروشگاه ما خوش آمده اید</p>
			
				<p class="ft pss">برای وارد شدن به حساب کاربری خود گزینه ورود را انتخاب کنید</p>
				<button class="ghost ft" id="signIn">ورود</button>
			</div>
			<div class="overlay-panel overlay-right">
			<i class="fab fa-shopify" id="shopbag" ></i>
				<p class="ft gg"> به فروشگاه ما خوش آمده اید</p>
				<p class="ft pss">برای ایجاد حساب کاربری میتوانید ثبت نام کنید</p>
				<button class="ghost ft" id="signUp">ثبت نام</button>
			</div>
			
		</div>
	</div>
</div>


</body>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

 
</script>
</html>