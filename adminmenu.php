
    <div class="slideout-sidebar">
  <ul>
  <li><a href="admin1.php" class="btshow" >فروشگاه <i class="fab fa-shopify" style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>
    <li><a href="admin2.php" class="btshow" >ادمین <i class="far fa-user" style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>
    <li> <a href="admin3.php" class="btshow" >کاربران <i class="fas fa-users" style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>
    <li><a href="admin4.php" class="btshow" >محصولات <i class="fab fa-product-hunt"  style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>
    <li><a href="admin5.php" class="btshow" >دسته بندی ها <i class="fas fa-table" style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>
    <li><a href="admin6.php" class="btshow" >گزارشات <i class="fas fa-scroll" style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>
    <?php 
    $idadmin = $_COOKIE['loginstate'];
    echo '<li><a href="adminexit.php?p='. $idadmin.'" class="btshow" >خروج <i class="fas fa-sign-out-alt" style="font-size: 20px; color: white; margin-left: 10px;"></i></a></li>';?>
  </ul>
    </div>