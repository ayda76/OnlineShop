

<form action="customer.php"  >
	<input type="text" name="username" placeholder="نام کاربری خود را وارد کنید">
	<input type="password" name="password" placeholder="رمز عبور خود را وارد کنید">
	<input type="submit" id="btn"  value="ورود" style="	border-radius: 10px;
	border: 1px solid #710b5b;background-color:#710b5b;color: #FFFFFF;
	width:130px;height: 40px;border-radius: 20px;font-size: 11px;
	font-weight: bold;padding: 10px 25px;letter-spacing: 1px;
	text-transform: uppercase;transition: transform 80ms ease-in;" >
</form>
<?php 
	include_once 'newfunction.php';
if(isset($_REQUEST['username'])&& isset($_REQUEST['password'])){
checkLoginUser($_REQUEST['username'],$_REQUEST['password']);
}

?>