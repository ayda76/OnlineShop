<?php include_once 'functions.php'; 
include_once 'newfunction.php';
$p =intval($_GET['p']);?>
<!--userinfo--->
<div class="information">
<div class="row" style="margin: 0;">
    <div class="col-12  d-none d-sm-block d-md-block d-lg-block  ">
<div class="infopart1">
<ul class="infop2">
<li>
<form action="">
<input class="bt" type="submit" value="+">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>
<input class="forminput" type="text" name="name" placeholder=": نام خود را تغییر دهید">


</form>
</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="username" placeholder=":نام کاربری خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>

<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="phonenumber" placeholder=":شماره موبایل خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>

<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="address" placeholder=":آدرس خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="codem" placeholder=":کدملی خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>

<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="email" placeholder=":ایمیل خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="bankcard" placeholder=": شماره کارت بانکی تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>
<?php 



?>
</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="password" placeholder="رمزعبور هود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>









</ul>
<?php

try {
    
    $dbh = connectDb();
    $sql = "SELECT * FROM `user_tbl` WHERE  id_user='$p'  ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
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
        
          
            <ul class="infop1">
            <li>'.$name.': نام شما</li>
            <li>'.$username.':نام کاربری شما</li>
            <li>'.$phone.':شماره موبایل شما</li>
            <li>'.$address.':آدرس شما</li>
           <li>'.$codem.':کدملی شما</li>
            <li>'.$email.':ایمیل شما</li>
            <li>'.$bankcart.' : شماره کارت بانکی شما</li>
            <li>'.$date.':تاریخ ثبت نام شما</li>
            </ul>
       
      
        ';
    }

    //بستن اتصال
    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!--<div class="infopart2">
 <hr>

<h1 class="ftc hh colorgray">تغییر اطلاعات</h1>
-->
    


<!--</div>-->
</div>
</div>
<div class="col-12  d-block d-sm-none d-md-none d-lg-none  ">
<div class="infopart1">

<?php

try {
    
    $dbh = connectDb();
    $sql = "SELECT * FROM `user_tbl` WHERE  id_user='$p'  ";
    $stmt = $dbh->query($sql);
    $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
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
        
          
            <ul class="infop1">
            <li>'.$name.': نام شما</li>
            <li>'.$username.':نام کاربری شما</li>
            <li>'.$phone.':شماره موبایل شما</li>
            <li>'.$address.':آدرس شما</li>
           <li>'.$codem.':کدملی شما</li>
            <li>'.$email.':ایمیل شما</li>
            <li>'.$bankcart.' : شماره کارت بانکی شما</li>
            <li>'.$date.':تاریخ ثبت نام شما</li>
            </ul>
       
      
        ';
    }

    //بستن اتصال
    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
<ul class="infop2">
<li>
<form action="">
<input class="bt" type="submit" value="+">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>
<input class="forminput" type="text" name="name" placeholder=": نام خود را تغییر دهید">


</form>
</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="username" placeholder=":نام کاربری خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>

<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="phonenumber" placeholder=":شماره موبایل خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>

<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="address" placeholder=":آدرس خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="codem" placeholder=":کدملی خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>

<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="email" placeholder=":ایمیل خود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="bankcard" placeholder=": شماره کارت بانکی تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>
<?php 



?>
</li>
<li>
<form action="customer.php">
<input class="bt"  type="submit" value="+">
<input class="forminput" type="text" name="password" placeholder="رمزعبور هود را تغییر دهید">
<?php echo' <input type="hidden" name="iduser" value="'.$p.'" /> ';?>

</form>

</li>









</ul>

</div>
</div>
</div>

</div>