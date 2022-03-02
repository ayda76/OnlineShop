<!--footer-->

<div class="col-12 p-0 ">
<div class="footerstart">
       <ul class="footericons">
       <?php 
                        try {
                            $dbh = connectDb();
                            $sql = "SELECT * FROM `shop_tbl` WHERE id_shop=1";
                            $stmt = $dbh->query($sql);
                            $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
                        
                            foreach ($objs as $object) {
                    
                                $telegram =  $object->telegram_shop;
                                $whatsapp =  $object->whatsapp_shop;
                                $insta =  $object->instagram_shop;
                              echo'
                              <li><a href="'.$telegram .'" style="font-size: 26px;"><i class="fab fa-telegram-plane TG" style="height: 36px; width: 36px;"></i></a></li>
                              <li><a href="'.$insta.'" style="font-size: 26px;"><i class="fab fa-instagram TG" style="height: 36px; width: 36px;"></i></a></li>
                              <li><a href="'.$whatsapp.'" style="font-size: 26px;"><i class="fab fa-whatsapp TG" style="height: 36px; width: 36px;"></i></a></li>
     
                              ';
                             
                        }
                            
                            //بستن اتصال
                            $dbh = null;
                        } catch (PDOException $e) {
                            
                            echo $e->getMessage();
                        }
                       ?>

         </ul>
      <ul class="footermenu"> 
       
       <li ><a href="connectus.php">تماس با ما</a></li>
       <li  style="color: white;">/</li>
       <li ><a href="products.php">محصولات</a></li>
       <li  style="color: white;">/</li>
       <li ><a href="customer.php">حساب کاربری </a></li>
       <li  style="color: white;">/</li>
       <li ><a href="login.php">ورود</a></li>
       <li  style="color: white;">/</li>
       <li ><a href="mainpage.php">خانه</a></li>
      </ul>
     
      </div>
</div>
<div class="col-12 p-0">
  <div class="endiing">
    <p >. کلیه حقوق این سایت محفوظ است</p>
  </div>
      
    </div>

<!-- end footer-->
