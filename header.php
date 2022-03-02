<?php include_once 'functions.php';?>
<?php include_once 'mystyle.php';?>
    <?php include_once 'myscrp.php';?>
   
   <!--header start -->
   <div class="header" >
       <div class="part1 ">
           <div class="row">
               <div class="col-6 d-none d-lg-block ">
                   <ul class="icons">
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
                              <li><a href="'.$telegram .'"><i class="fab fa-telegram-plane TG" style="height: 26px; width: 26px;"></i></a></li>
                              <li><a href="'.$insta.'"><i class="fab fa-instagram TG" style="height: 26px; width: 26px;"></i></a></li>
                              <li><a href="'.$whatsapp.'"><i class="fab fa-whatsapp TG" style="height: 26px; width: 26px;"></i></a></li>
                        
                              ';
                             
                        }
                            
                            //بستن اتصال
                            $dbh = null;
                        } catch (PDOException $e) {
                            
                            echo $e->getMessage();
                        }
                       ?>
                        </ul>

               </div>
               <div class="col-6 d-none d-lg-block ">
                   <ul style="float:right; max-width: 100%;">
                       <li>
                       <p class="TG">  <?php     include_once "jdf.php";
    
    echo gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");
    ?></p> 
                        <!--   <p class="TG" id="dddd" style="font-size: 14;">  </p>-->
                       </li>
                       <li><i class="far fa-calendar-alt TG"></i></li>
                   </ul>

               </div>
               <div class="col-6 d-block d-sm-block d-lg-none p-0">
                   <ul style="  margin-left: -40px;">
                   <li><i class="far fa-calendar-alt TG"></i></li>
                       <li>
                    <p class="TG">  <?php     include_once "jdf.php";
    
    echo gregorian_to_jalali((int)(date("Y")), (int)date("m") ,(int) date("d") , "/");
    ?></p> 
                          <!-- <p class="TG" id="ddddate" style="font-size: 14;">  </p>-->
                       </li>
                      
                   </ul>

               </div>
               <div class="col-6 d-block d-sm-block d-lg-none" style="margin-top: -15px;">
               <p class="logo" style="text-align: right; ">ShopShop</p> 
               </div>
               
               
           </div>
       </div>
       <div class="part2">
           <div class="row">
             
               <div class="col-6 d-block d-sm-block d-lg-none ">
                   <ul class="navbar-nav attr-nav align-items-center" style="height: 60px;">
                       <li class="sdropdown"  style="height: 30px;">
                           <?php
                           if(isset($_COOKIE['login'])){
                            $iduser=$_COOKIE['login'];
                             echo' <a href="sabad.php?id_user='.$iduser.'" class="sdropbtn" style="font-size: 25px; background-color: none;height: 30px; width: auto;" >';
                             CountSabad($iduser);
                             echo'<i class="linearicons-cart TG" style=""></i></a>';


                            }else{
                               echo' <a href="login.php" class="sdropbtn" style="font-size: 25px; background-color: none; height: 30px; width: 40px;" ><i class="linearicons-cart TG" style=""></i></a>';
                           }
                           ?>
                          
                    
                       </li>
                  
                  
                       <li style=" margin-left: 0px; "><a href="#" style="font-size: 25px; color: #edeff1;" class="nav-link"><i class="ti-user TG" style=""></i></a></li>
                   </ul>
               </div>
           <div class="col-6 d-block d-sm-block d-lg-none ">
           <div class="droppdown" >
  <button onclick="mydropFunction()" class="dropbtn" >
  <div class="hamburger-icon">
    <label for="openmenu" id="hamburger-label">
      <span></span>
      <span></span>
      <span></span>
     
    </label>    
  </div>
</button>

                     
  <div id="myDropdown" class="dropdown-content" style=" position:relative;
  z-index:1;">
  <form action="testsearch.php" style="height: 50px;
margin-top: 7px;
border: 1px solid #420f42;
width: 100%;
border-radius: 25px;
padding: 4px;
text-align: center;
">
    <input type="text" name="search" placeholder="جستجو"   style="text-align: right; background-color: fff6ff;width: 80%;border: none;">
    <button type="submit" class="butsearch" style="background-color: fff6ff;border: none;border-radius: 35px;margin-left: 6px; width: 10%;height: 20;"><i class="linearicons-magnifier TG" style="height: 30px; width: 30px; font-size: 25px;  color:#420f42;"></i></button>
  
    </form>
    
    <a href="mainpage.php" class="ftt">خانه</a>
       <a href="login.php" class="ftt">ورود</a>
         <a href="customer.php" class="ftt">حساب کاربری </a>
          <a href="products.php" class="ftt">محصولات</a>
         <a href="connectus.php" class="ftt">تماس با ما</a>
        <!-- <a href="about.php" class="ftt">درباره ما</a>-->
  </div>
</div>



           </div>

               <div class="col-lg-4 col-xl-4  d-none d-lg-block ">
                   <ul class="navbar-nav attr-nav align-items-center" style="height: 60px;">
                       <li class="sdropdown" style="height: 30px;">
                       <?php
                           if(isset($_COOKIE['login'])){
                            $iduser=$_COOKIE['login'];
                             echo' <a href="sabad.php?id_user='.$iduser.'" class="sdropbtn" style="font-size: 25px; background-color: none; height: 30px; width: auto;" >';
                             CountSabad($iduser);
                             echo'<i class="linearicons-cart TG" style=""></i></a>';
                            }else{
                               echo' <a href="login.php" class="sdropbtn" style="font-size: 25px; background-color: none;height: 30px; width: 40px;" ><i class="linearicons-cart TG" style=""></i></a>';
                           }
                           ?>
                    
                       </li>
                
                  
                       <li style=" margin-left: 0px; "><a href="customer.php" style="font-size: 25px; color: #edeff1;" class="nav-link"><i class="ti-user TG" style=""></i></a></li>
                      
                       <li style=" margin-left: 0px; height: 50px; ">
  
                      <form action="testsearch.php" style="height: 40px;margin-top: 7px;border: 1px solid white;width: 270px;border-radius: 25px;padding: 4px;">
                      <button type="submit" class="butsearch" style="background-color: #420f42;border: none;border-radius: 35px;margin-left: 6px;"><i class="linearicons-magnifier TG" style="height: 30px; width: 30px; font-size: 25px; color: white;"></i></button>
                   
                      <input type="text" name="search" class="searchinput" style="	background-color: #420f42;color: white;padding: 4px;text-align: center;border: none; font-size: 14px;height: 20;" placeholder="   جستجو در فروشگاه">
                   
                      </form>
                     
                   </li>
                      
                    
                   </ul>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12   d-none  d-md-block ">
                   <!-- Navbar -->
                   <!--pink darken-4-->
                   <div class="bottom_header dark_skin main_menu_uppercase" style="width: 550px; margin-left: 30px;">
                       <div class="container" style="width: 550px; ">
                           <nav class="navbar navbar-expand-lg" style="width: 600px; box-shadow: none;">
                               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" style="width: 550px; ">
                                   <ul class="navbar-nav" style="width: 550px;margin-right: 50px;">
                                      <!-- <li class="dropdown topli"><a href="about.php" class="nav-link">درباره ما</a></li>-->
                                       <li class="dropdown topli"><a href="connectus.php" class="nav-link">تماس با ما</a></li>
                                       <li class="dropdown topli dropdown-mega-menu">
                                           <a class="dropdown-toggle nav-link " href="#" data-toggle="dropdown">محصولات</a>
                                           <div class="dropdown-menu" style=" width: 560px;border-radius: 4px;	background: linear-gradient(-2deg, #f1f0f2,#372839);">
                                               <ul class="mega-menu d-lg-flex" style=" width: 740px;">
                                                   <?php
                                                    try{
  
                                                        $dbh = connectDb();
                                                        
                                                        $sql = "SELECT * FROM `cat_tbl`    LIMIT 4";
                                                        $stmt = $dbh->query($sql);
                                                        $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
                                                    echo'<li class="mega-menu-col col-lg-3">
                                                    <ul>';
                                                        foreach ($objs as $object) {
                                                          
                                                            $idcat=$object->id_cat;
                                                            $cat = $object->name_cat;
                                                           
                                                echo'
                                                            <li style="display: block;"><a class="dropdown-item nav-link nav_item txtcenter" href="products.php">'. $cat .'</a></li>
                                                       
                                                        ';
                                                        
                                                        
                                                        
                                                        }
                                                        echo'
                                                        </ul>
                                                        </li>
                                                        ';
                                                           //بستن اتصال
                                                           $dbh = null;
                                                          
                                                          } catch (PDOException $e) {
                                                            
                                                            echo $e->getMessage();
                                                          }
                                                   
                                                          try{
  
                                                            $dbh = connectDb();
                                                            
                                                            $sql = "SELECT * FROM `cat_tbl`    LIMIT 4 OFFSET 4";
                                                            $stmt = $dbh->query($sql);
                                                            $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
                                                        echo'<li class="mega-menu-col  col-lg-3">
                                                        <ul>';
                                                            foreach ($objs as $object) {
                                                              
                                                                $idcat=$object->id_cat;
                                                                $cat = $object->name_cat;
                                                               
                                                    echo'
                                                                <li style="display: block;"><a class="dropdown-item nav-link nav_item txtcenter" href="products.php">'. $cat .'</a></li>
                                                           
                                                            ';
                                                            
                                                            
                                                            
                                                            }
                                                            echo'
                                                            </ul>
                                                            </li>
                                                            ';
                                                               //بستن اتصال
                                                               $dbh = null;
                                                              
                                                              } catch (PDOException $e) {
                                                                
                                                                echo $e->getMessage();
                                                              }
                                                       
                                                              try{
  
                                                                $dbh = connectDb();
                                                                
                                                                $sql = "SELECT * FROM `cat_tbl`    LIMIT 4 OFFSET 8";
                                                                $stmt = $dbh->query($sql);
                                                                $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
                                                            echo'<li class="mega-menu-col  col-lg-3">
                                                            <ul>';
                                                                foreach ($objs as $object) {
                                                                  
                                                                    $idcat=$object->id_cat;
                                                                    $cat = $object->name_cat;
                                                                   
                                                        echo'
                                                                    <li style="display: block;"><a class="dropdown-item nav-link nav_item txtcenter" href="products.php">'. $cat .'</a></li>
                                                               
                                                                ';
                                                                
                                                                
                                                                
                                                                }
                                                                echo'
                                                                </ul>
                                                                </li>
                                                                ';
                                                                   //بستن اتصال
                                                                   $dbh = null;
                                                                  
                                                                  } catch (PDOException $e) {
                                                                    
                                                                    echo $e->getMessage();
                                                                  }
                                                           
                                                 
                                                   ?>
                                    
                                               </ul>
                                               <div class="d-lg-flex menu_banners">
                                               <?php 
                                                                       
                                                                       try{
  
                                                                        $dbh = connectDb();
                                                                        
                                                                        $sql = "  SELECT * FROM `product_tbl` ORDER BY discount_product DESC LIMIT 3 ";
                                                                        $stmt = $dbh->query($sql);
                                                                        $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
                                                               
                                                                        foreach ($objs as $object) {
                                                                          
                                                                            $idproduct=$object->id_product;
                                                                            $img =  $object->img_product;
                                                                            $name =  $object->name_product;
                                                                    
                                                                            $matn = $object->matn_product;
                                                                            $item = explode(",",$matn);
                                                                            $price = $object->price_product;
                                                                            $discount = $object->discount_product;
                                                                            $total=$price-($discount/100)*$price;
                                                                            echo' <div class="col-sm-4">
                                                                            <div class="header-banner">';
                                                                           
                                                                echo'
                                                               
                                                                    <img src="'.$img.'" alt="menu_banner1" width="237" height="158">
                                                                    <div class="banne_info">
                                                                        <h6>%'.$discount.' تخفیف</h6>
                                                                        <h4>'. $name.'</h4>
                                                                        <a href="mahsul.php?id_product='.$idproduct.'">الان خرید کنید</a>
                                                                    </div>
                                                                
                                                                        ';
                                                                        
                                                                        
                                                                        echo'
                                                                        </div>
                                                            </div>
                                                                        ';
                                                                        }
                                                                      
                                                                           //بستن اتصال
                                                                           $dbh = null;
                                                                          
                                                                          } catch (PDOException $e) {
                                                                            
                                                                            echo $e->getMessage();
                                                                          }
                                               
                                               ?>
                                               
                                                
                                               </div>
                                           </div>
                                       </li>

                                       <li class="dropdown topli"><a href="customer.php" class="nav-link">حساب کاربری</a></li>
                                       <li class="dropdown topli"><a href="login.php" class="nav-link">ورود</a></li>
                                       <li class="dropdown topli"><a href="mainpage.php" class="nav-link">خانه</a></li>
                                   </ul>
                               </div>
                           </nav>
                       </div>
                   </div>
         
               </div>
               
                 <div class="col-lg-2 col-xl-2  d-none d-lg-block " >
                 <?php 
                        try {
                            $dbh = connectDb();
                            $sql = "SELECT * FROM `shop_tbl` WHERE id_shop=1";
                            $stmt = $dbh->query($sql);
                            $objs = $stmt->fetchAll(PDO::FETCH_OBJ);
                        
                            foreach ($objs as $object) {
                    
                                $name =  $object->name_shop;
                                $img =  $object->logo_shop;
                               
                               
                              echo'
                              <p class="logo" style="text-align: right; margin-right: 15px; ">'.$name.'</p>
                        
                              ';
                             
                        }
                            
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
   <!--header ends -->