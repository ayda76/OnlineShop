<?php
include_once 'newfunction.php';

function connectDb()
{
	$hostname = 'localhost';
	//ادرس هاست
	$username = 'root';
	//نام کاربری 
	$password = '';

	try {
		$dbh = new PDO("mysql:host=$hostname;dbname=shoptest", $username, $password);
		$dbh->exec("SET character_set_connection = 'utf8'");
		$dbh->exec("SET NAMES 'UTF8'");
		return $dbh;
	} catch (Exception $ex) {
	}
}
//INSERT INTO `shop_tbl` (`id_shop`, `telegram_shop`, `whatsapp_shop`, `phone_shop`, `id_admin`, `instagram_shop`, `logo_shop`, `name_shop`) 
//VALUES (NULL, 'www.telegram.com', 'www.whatsapp.com', '04135555555-04135555558', '1', 'www.instagram.com', 'txtxtxtxtx', 'shopshop');

function  updateshopname($name){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET name_shop='$name' WHERE  id_shop=1 ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateshoptelg($tel){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET telegram_shop='$tel' WHERE   id_shop=1 ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function  updateshopwhatsapp($whatsapp){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET whatsapp_shop='$whatsapp' WHERE  id_shop=1 ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateshopinstagram($insta){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET instagram_shop='$insta' WHERE  id_shop=1 ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateshopphone($phone){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET phone_shop='$phone' WHERE  id_shop=1 ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateshopaddress($address){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET address_shop='$address' WHERE  id_shop=1 ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateshoplogo($img){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `shop_tbl` SET logo_shop='$img' WHERE  id_shop=1";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function InsertAdmin($username,$password,$number,$date){
	
	$dbh = connectDb();
	$sql="INSERT INTO `admin_tbl` (`id_admin`, `username_admin`, `password_admin`, `phonenumber_admin`, `codm`, `address`,`date_admin`) VALUES (NULL, '$username', '$password', '$number', NULL, NULL,'$date');";
	
try {
		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
//
function InsertUser($name,$number,$password,$username,$date){
	
	$dbh = connectDb();
	$sql="INSERT INTO `user_tbl` (`id_user`, `name_user`, `number_user`, `email_user`, `codm_user`, `bankcart_user`,
	`password_user`, `address_user`, `username_user`,`date_user`) VALUES (NULL, '$name', $number, NULL, NULL, NULL, '$password', NULL, '$username','$date')";
//	header("location:checksabt.php");
try {
		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
//INSERT INTO `product_tbl` (`id_product`, `id_brand`, `id_cat`, `img_product`, `price_product`, `matn_product`, `discount_product`, `name_product`, `id_admin`, `viewcount`) 
//VALUES (NULL, '2', '9', 'kkkkkkkkkkkkkkk', '90000', 'hhhh,llll,mmmm', '9', 'nbnbn', '4', '0')
//INSERT INTO `product_tbl` (`id_product`, `id_brand`, `id_cat`, `img_product`, `price_product`, `matn_product`,
        // `discount_product`, `name_product`, `id_admin`) VALUES (NULL, '3', '3', '123', '120', 'aa,bb,cc', '5%', 'abc', '1');
function InsertProduct($idbrand,$idcat,$imgproduct,$priceproduct,$matnproduct,$discountproduct,$nameproduct,$idadmin,$stock){
	$dbh = connectDb();
$sql="INSERT INTO `product_tbl` (`id_product`, `id_brand`, `id_cat`, `img_product`, `price_product`, `matn_product`,
         `discount_product`, `name_product`, `id_admin`, `viewcount`,`stock_product`) VALUES (NULL, '$idbrand', '$idcat', '$imgproduct', '$priceproduct', '$matnproduct', '$discountproduct', '$nameproduct', '$idadmin', '0','$stock');";
try {

	$dbh->exec($sql);
} catch (Exception $ex) {
}
}
function InsertFav($iduser,$idproduct){
	//INSERT INTO `fav_tbl` (`id_fav`, `id_user`, `id_product`) VALUES (NULL, '1', '12');
	$dbh = connectDb();
	$sql="INSERT INTO `fav_tbl` (`id_fav`, `id_user`, `id_product`) VALUES (NULL, '$iduser', '$idproduct');";

	try {

		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
function    Deletefav( $iduser, $idproduct){

	try {
		$dbh = connectDb();
		$sql = "DELETE FROM `fav_tbl` WHERE id_product=$idproduct AND id_user=$iduser";
		$stmt = $dbh->query($sql);

		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function showfav($iduser,$idproduct){
	try {
		$dbh = connectDb();
		$sql = "SELECT COUNT(id_product)as counter FROM `fav_tbl` WHERE id_product=$idproduct AND id_user=$iduser";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		foreach ($objs as $object) {
		if( $object->counter==1){
			//$countlike=updatefavnum( $idproduct);
			echo'
			<a id="like" name="like" onclick="like('.$idproduct.')">';
			updatefav( $idproduct);
			echo'likes';
			echo'<i class="fas fa-heart" id="full" style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i></a>';
		}else if($object->counter==0){
			
			$countlike=updatefavnum( $idproduct);
		echo'<a id="like" name="like" onclick="like('.$idproduct.')">';
		updatefav( $idproduct);
					echo'likes';
		echo'<i class="far fa-heart"  id="empty" style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i> </a>';
	}
}	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
}
function updatefav( $idproduct){
//
try {
	$dbh = connectDb();
	$sql = "SELECT COUNT(id_fav)AS num FROM `fav_tbl` WHERE id_product=$idproduct";
	$stmt = $dbh->query($sql);
	$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	
	
	
	foreach ($objs as $object) {
	
		$count =  $object->num;
		
		
echo'
<span >'.$count.'</span>
';
		

	return $count;
	}

	//بستن اتصال
	$dbh = null;
} catch (PDOException $e) {
	
	echo $e->getMessage();
}
}
function updatefavnum( $idproduct){
	//
	try {
		$dbh = connectDb();
		$sql = "SELECT COUNT(id_fav)AS num FROM `fav_tbl` WHERE id_product=$idproduct";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		
		
		foreach ($objs as $object) {
		
			$count =  $object->num;
	
		return $count;
		}
	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
	}

function InsertComment($iduser,$idproduct,$matncomment){
	$dbh = connectDb();
	$sql="INSERT INTO `comment_tbl` (`id_comment`, `id_user`, `id_product`, `matn_comment`) 
	VALUES (NULL, '$iduser', '$idproduct', '$matncomment')";
//	getProduct($idproduct);
//	header("location:mahsul.php?id_product=$idproduct");
	try {

		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
function getproductComment($id){

	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `comment_tbl` WHERE id_product=$id ";

	$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		productcom($id);
		echo '
		<div class="row" style="margin-top: 30px;">
	
		<div class="col-8"><p style="text-align: center;">نظرات </p></div>
		<div class="col-4"><p style="text-align: center;">نام</p></div>
</div>
		';
		foreach ($objs as $object) {
			$iduser=$object->id_user;
			$matn = $object->matn_comment;
			
			echo '
			<div class="row" >
               
                <div class="col-8"><p>'.$matn .'</p></div>';
                usercom($iduser);
				echo '  </div>
			';
		}
		
		
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		//مدیریت خطا و چاپ پیغام خطا در صورت وجود
		echo $e->getMessage();
	}


}


function usercom($iduser){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `user_tbl` WHERE id_user=$iduser ";
//	$sql = "SELECT * FROM `product_tbl`";
	$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	
		foreach ($objs as $object) {
			$iduser=$object->id_user;
			$name =  $object->name_user;
			echo '
                <div class="col-4"><p> '.$name.' <i class="fas fa-user-circle fa-lg" style="height: 40px; width:40px; margin-top:7px; color:rgb(168, 160, 160);"></i></p></div>
        
			';
		}
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}		
}

function productcom($idproduct){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `product_tbl` WHERE  id_product=$idproduct ";
	    $stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		foreach ($objs as $object) {
			$name =  $object->name_product;
			echo '
			<div class="row" style="border: none;">
            <div class="col-12">
                <p style="text-align: right;color: darkmagenta; margin-top: 30px;">'.$name.' : کامنت های مربوط به محصول  </p>
            </div>
        </div>
			';
		}
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}	
}

function InsertCat($name){
	$dbh = connectDb();
	$sql="INSERT INTO `cat_tbl` (`id_cat`, `name_cat`) VALUES (NULL, '$name');";
	try {

		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
function InsertBrand($name){
	$dbh = connectDb();
	$sql="INSERT INTO `brand_tbl` (`id_brand`, `name_brand`) VALUES (NULL, '$name');";
	try {

		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
function  getlistcat(){
	$counter=0;
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM  `cat_tbl` ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	
		foreach ($objs as $object) {
			$counter++;
			$name =  $object->name_cat;
			$idcat =  $object->id_cat;
			echo' <td> <button class="btdelete" onclick="deletecat('.$idcat.')">حذف</button> </td>
			<td>'.$name.'</td>
			<td>'.$counter.' </td>
		  </tr>';
		}
	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function getlistbrand(){
	$counter=0;
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM  `brand_tbl` ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	
		foreach ($objs as $object) {
			$counter++;
			$name =  $object->name_brand;
			$idbrand =  $object->id_brand;
			echo' <td> <button class="btdelete" onclick="deletebrand('.$idbrand.')">حذف</button> </td>
			<td>'.$name.'</td>
			<td>'.$counter.' </td>
		  </tr>';
		}
	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
  function  UpdateProduct($idproduct,$idbrand,$idcat,$fName,$price,$matn,$discount,$name,$idadmin,$stock){
	try {
		$dbh = connectDb();
		$sql = "UPDATE  `product_tbl` SET id_product='$idproduct', id_brand='$idbrand', id_cat='$idcat',img_product='$fName',price_product='$price', matn_product='$matn' , discount_product='$discount' , name_product='$name' , id_admin='$idadmin' , stock_product='$stock' WHERE  id_product='$idproduct'";
		$stmt = $dbh->query($sql);
		//$objs = $stmt->fetchAll(PDO::FETCH_OBJ);

		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	} 
  }

function Listproducts(){
		try {
			$dbh = connectDb();
			$sql = "SELECT * FROM `product_tbl` order by id_product desc";
			$stmt = $dbh->query($sql);
			$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
			echo '<table class="tableproduct">';
			echo '<th class="thproduct">ردیف</th>
			<th class="thproduct">عنوان </th>
			<th class="thproduct">عملیات</th>
			<th class="thproduct">عملیات</th>';
			$counter = 1;
			foreach ($objs as $object) {
				$name =  $object->name_product;
				$id =  $object->id_product;
				echo '<tr class="trproduct">';
				echo '<td class="tdproduct">' . $counter . '</td>';
				echo '<td class="tdproduct">' . $name . '</td>';
				echo '<td class="tdproduct"><a id="k" href="admin4.php?&op=edit&id='.$id.'">ویرایش</a></td>';
				echo '<td class="tdproduct">  <button id="dbt" onclick="List('.$id.')">حذف</button></td>';
	
				echo "</tr>";
				$counter++;
			}
			echo "</table>";
			$dbh = null;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

}


function getProductsWithId($id)
{
	try {
		$dbh = connectDb();
		//"SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand)  WHERE id_product=$id";
		$sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand)  WHERE id_product=$id";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		$response = array();
		foreach ($objs as $object) {
			$response[] =  $object->name_product;
			$response[] = $object->matn_product;
			$response[] =  $object->img_product;
			$response[] = $object->name_brand;
			$response[] = $object->name_cat;
			$response[]= $object->price_product;
			$response[] = $object->discount_product;
			$response[] = $object->stock_product;
			$response[] = explode(",",$object->matn_product);
		}
		return $response;
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function deleteProduct($id)
{
	try {
		$dbh = connectDb();
		$sql = "DELETE FROM `product_tbl` WHERE id_product=$id ";
		$stmt = $dbh->query($sql);

		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}



//ص محصول
function getProduct($id){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE id_product=$id ";
//	$sql = "SELECT * FROM `product_tbl`";
	$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		foreach ($objs as $object) {
			$idproduct=$object->id_product;
			$viewcount=$object->viewcount;
			updateViewCount($idproduct, $viewcount);
			$img =  $object->img_product;
			$name =  $object->name_product;
			$brand = $object->name_brand;
			$cat = $object->name_cat;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			$stock =  $object->stock_product;
			echo '
			
			<div class="row p-0">
			<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-sm-block d-md-block d-lg-block d-block">
			<img src="'.$img.'" alt=""  class="imt">
			</div>
			<div class="col-lg-4 col-md-4  col-sm-4 col-12 d-sm-block d-md-block d-lg-block d-block">
			<ul class="pinfo">
				<li class="st"><h2 class="hn">اطلاعات محصول</h2></li>
				<li class="st">
				<ul>
			
				<li class="pg"> :نام محصول <p class="kk">' .$name.'</p></li>
				
				</ul>    
				</li>
				<li class="st">
				<ul>
				
				<li class="pg"> :برند <br><p class="kk"> '.$brand.'</p></li>
				
				   </ul>
				</li>
				<li class="st">
				<ul>
				';
				if($stock>0){
					echo'	<li class="pg">   : موجودی انبار<br><p class="kk"> موجود است</p> </li>
				 ';
				  }else{
					echo'	<li class="pg"> : موجودی انبار <br><p class="kk">نا موجود است</p> </li>
					 '; 
				  }
				echo'
				</ul>
				</li>
				<li class="st">
				<ul>
				<li class="pg">  : دسته بندی محصول <br><p class="kk"> '.$cat.'</p> </li>
				 <li class="pg"> </li>
				 </ul>
			   </li>
				<li class="st">:ویژگی های محصول</li>
				<li class="st">';
                  for ($i=0; $i <=2 ; $i++) { 
					  # code...
				  
				echo'	<ul>
						
					  <li class="pg"><p class="kk"> '.$item[$i].'</p></li>
					  
						</ul>
					 
						';}
						if(count($item)>3){
							echo'<li class="st"> <button id="btshow">موارد بیشتر</button></li>';
							for ($i=2; $i <=count($item) ; $i++) { 
							
						echo'
					   
						<li id="tt" class="st sh">
						<ul>
					  <li class="pg"><p class="kk"> '.$item[$i].'</p></li>
					
						</ul>     
						</li>';}
						echo '
						<li class="st sh"> <button  id="bthide">بستن</button></li>';
						}
						echo '
					</ul>
				</li>
			</ul>
		   
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-sm-block d-md-block d-lg-block d-block">
			<ul class="psabad">
				<li class="ps"><p>';

			
		
				echo'
				 <span class="size" >';
				
			  //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				if(isset($_COOKIE['login'])){
				  $iduser=$_COOKIE['login'];
				  showfav($iduser,$idproduct);
				}else{
					updatefav( $idproduct);
					echo'likes';
					echo'
					
			
			<a id="like" name="like" href="login.php">
			';

			echo
			'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i></a>
		';
 		}
			
			
			echo '</span></p></li>
			<li class="ps "><a href="comments.php?id_product='.$idproduct.'" >مشاهده نظرات  <i class="fas fa-comments" style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i></a></li>
				<li class="ps">  قیمت کالا: '.$price.' تومان</li>
				<li class="ps" style="color: darkmagenta;">  %تخفیف:'.$discount.' </li>
				<li class="ps">  قیمت نهایی کالا:'.$total.' تومان</li>
				';
				if(isset($_COOKIE['login'])){
					$iduser=$_COOKIE['login'];
					echo'<li class="ps"><button id="btsabad"><a href="sabad.php?id_product='.$idproduct.'&id_user='.$iduser.'"> افزودن به سبد خرید</a></button></li>';
				}else{
					echo'<li class="ps"><button id="btsabad"><a href="login.php" style=" color: white;"> افزودن به سبد خرید</a></button></li>';
				}
				echo '
			</ul>
			</div>
			
			</div> 
			
			
			';
		}
		
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		//مدیریت خطا و چاپ پیغام خطا در صورت وجود
		echo $e->getMessage();
	}

}


//ص products منو کناری
function productMenu(){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `cat_tbl`";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		echo '<div class="col-sm-12 col-md-3 col-lg-3">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<nav>
		<ul class="menu">';
		
		foreach ($objs as $object) {
			
			$idcat=$object->id_cat;
			$cat = $object->name_cat;
			echo'	<li class="list"><a href="#" class=" T ft">'.$cat.' </a> 	';	
			
			productBrand();
			echo'	</li>';	
		
		}
		echo'
		</ul>
		</nav>
			  </div>
					</div>';
					//productPage($idbrand,$idcat);
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}

}



//ص products منو کناری زیردسته بندی برند
function productBrand(){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `brand_tbl`";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		$counter = 1;
		foreach ($objs as $object) {
			$idbrand=$object->id_brand;
			$brand = $object->name_brand;
			
			echo '
			<ul class="items">
		  <li onclick="loadData('.$counter.')" class="ft">'.$brand.'</li>
		 
		  </ul>
      ';		
		}
		return $counter;
		$counter++;
		
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}

}
//ص products قسمت محصولات
function productPage($idcat,$idbrand){
	try {
		$dbh = connectDb();
	   $sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE product_tbl.id_brand=$idbrand AND product_tbl.id_cat=$idcat ";
			$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		echo '<div class=" col-sm-12 col-md-9 col-lg-9 ">
		<div class="tab-content" id="v-pills-tabContent">';
		$counter=1;
		foreach ($objs as $object) {
			$idproduct=$object->id_product;
			$img =  $object->img_product;
			$name =  $object->name_product;
			$idbrand=$object->id_brand;
			$brand = $object->name_brand;
			$idcat=$object->id_cat;
			$cat = $object->name_cat;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			
	echo'

			
			<!--tata1--->
			<div class="tab-pane fade show active " id="tata'.$counter .'" role="tabpanel" aria-labelledby="lp'.$counter.'">
			
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 50px;">
 <div class="v1">
    <nav>';
	//productbrandmenu();
	echo'

</nav></div>
</div>
 <!--<div class="row">
    <div class="col-10">-->
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="'.$idbrand.'" role="tabpanel" aria-labelledby="'.$idbrand.'">
     <ul class="carts" > 
       <li>
       <div class="container page-wrapper">
  <div class="page-inner">
    <div class="row" style="height: 320px;">
      <div class="el-wrapper">
	  <a href="mahsul.php?id_product='.$idproduct.'">
	    <div class="box-up">
          <img class="img" src="'.$img.'" alt="" height="250" width="220">
          <div class="img-info">
            <div class="info-inner">
            <span class="p-company">'.$brand.'</span>
              <span class="p-name">'.$cat.'</span>
             
            </div>
            
            <div class="a-size"><p>';

			updatefav( $idproduct);
		
				echo'
				likes <span class="size">';
			  //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				if(isset($_COOKIE['login'])){
				  $iduser=$_COOKIE['login'];
				  showfav($iduser,$idproduct);
				}else{
					updatefav( $idproduct);
				            	echo'likes';
  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				}
			
			 
			echo '</a></span></p></div>
          </div>
		</div>
		</a>
<!--<a href="#"><i class="far fa-heart" style="height: 20x; width:20px; margin-left:20px; font-size: 20px;"></i></a>-->
        <div class="box-down">
          <div class="h-bg">
            <div class="h-bg-inner"></div>
          </div>

          <a class="cart" href="sabad.php">
          <span class="price">  <strike>'.$price.'</strike> <br>تومان'.$total.'</span>
            <span class="add-to-cart">
              <span class="txt">افزودن به سبد</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</li>

			
	 
			';
			
			$counter++;
		
		}
		echo '
		 </div>
		</div>';
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}

}


//ص پنل ادمین دسته یندی cat
function getOptionCat()
{
	
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `cat_tbl` ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		echo '
		<label class="labelproduct" for="idcat">: دسته بندی محصول را مشخص کنید</label>
		<select class="selectproduct" name="idcat" id="idcat" placeholder="دسته بندی محصول">

		';
		foreach ($objs as $object) {
			$id =  $object->id_cat;
			$name =  $object->name_cat;
			
			echo '<option class="optionproduct" value="'.$id.'"> '.$name.'</option> ';
		}
		echo '</select>';
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
//ص پنل ادمین دسته یندی برند
function getOptionBrand()
{
	
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `brand_tbl` ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		echo '
		<label class="labelproduct" for="idbrand">: برند محصول را انتخاب کنید</label>
		<select class="selectproduct" name="idbrand" id="idbrand" placeholder=" برند محصول">
		
		';
		foreach ($objs as $object) {
			$id =  $object->id_brand;
			$name =  $object->name_brand;
			
			echo '<option class="optionproduct" value="'.$id.'"> '.$name.'</option> ';
		}
		echo '</select>';
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}


function checkLogin($username, $password){
//SELECT * FROM `admin_tbl` WHERE password_admin=12345 AND username_admin="ayda7" 

try {
	$dbh = connectDb();
	//نوع دیتا بیس + نام دیتابیس + نام کاربری دیتا بیس +  پسورد دیتابیس
	$sql = "SELECT * FROM `admin_tbl` WHERE password_admin=$password AND username_admin='$username' ";
	//کوئری	
	$stmt = $dbh->query($sql);
	//کوئری مربوطه را اجرا کرده و نتیجه را در  استیتمنت قرار میدهد
	$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	//واکشی تمام ابجکت های  استیتمنت و قرار دادن ان ها در  ابجکت

	foreach ($objs as $object) {
		header("location:admin4.php");
		$id =  $object->id_admin;
		setcookie("loginstate", "$id", time() + 604800, "/");
	}

	//بستن اتصال
	$dbh = null;
} catch (PDOException $e) {
	//مدیریت خطا و چاپ پیغام خطا در صورت وجود
	echo $e->getMessage();
}
}

function getLoginState()
{
	if (isset($_COOKIE['loginstate'])) {

	} else {
		header("location:loginadmin.php");
	}
}

function  updatepasswordadmin($password,$idadmin){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `admin_tbl` SET password_admin='$password' WHERE id_admin='$idadmin' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function   updateusernameadmin($username,$idadmin){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `admin_tbl` SET username_admin='$username' WHERE id_admin='$idadmin' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function     updateaddressadmin($address,$idadmin){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `admin_tbl` SET address_admin='$address' WHERE id_admin='$idadmin' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function  updatecodmadmin($codm,$idadmin){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `admin_tbl` SET codm_admin='$codm' WHERE id_admin='$idadmin' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function  updatephonenumberadmin($number,$idadmin){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `admin_tbl` SET phonenumber_admin='$number' WHERE id_admin='$idadmin' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}


////slider part
function showsliderproducts(){

}
function getProductSlider( $slide,$itm){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM ((`product_tbl` INNER JOIN `cat_tbl` ON product_tbl.id_cat=cat_tbl.id_cat ) INNER JOIN `brand_tbl` ON product_tbl.id_brand=brand_tbl.id_brand) WHERE id_product=$itm ";
//	$sql = "SELECT * FROM `product_tbl`";
	$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		foreach ($objs as $object) {
			$img =  $object->img_product;
			$name =  $object->name_product;
			$brand = $object->name_brand;
			$cat = $object->name_cat;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			if($slide==1){
				echo'
				<label class="slide-button" for="slideCheckbox'.$slide.'"></label>
		<input type="radio" id="slideCheckbox'.$slide.'" name="slide" checked></input>
				';
			}else{
				echo'
				<label class="slide-button" for="slideCheckbox'.$slide.'"></label>
				<input type="radio" id="slideCheckbox'.$slide.'" name="slide" ></input>
				';
			}
			echo '
		<!-- Slide 1 -->
	
		<div class="slide">
		  
		  <div class="slide__content">
		  
			<h1 class="ft">معرفی محصولات جدید</h1>
			<p class="ft"> : اطلاعات محصول</p>
			
			<ul>
			  <li class="ft" style="list-style: none;">نام محصول:'.$name.'</li>
			  <li class="ft" style="list-style: none;"> دسته بندی:'.$cat.'</li>
			  <li class="ft" style="list-style: none;">برند <code>'.$brand.'</code> </li>
			  <li class="ft" style="list-style: none;">قیمت: <code>'.$price.'</code> </li>
			  <li class="ft" style="list-style: none;"> :تخفیف<code>'.$discount.'%</code> </li>
			  <li class="ft" style="list-style: none;">:ویژگی های محصول</li>
			  <li class="ft" style="list-style: none;">';
                  for ($i=0; $i <=2 ; $i++) { 
					  # code...
				  
				echo'	<ul>
						<li class="ft" style="list-style: none;">
						<ul>
					  <li class="pg"><p class="kk"> '.$item[$i].'</p></li>
					  
						</ul>
					   </li>
						';}
						echo'
			</ul>
			<a href="#" class="ft"> مشاهده محصول</a>
			
		  </div>  
		  <img src="'.$img.'" alt="" width="500" height="300">
		</div>
		
		<!-- Add more slides here! -->
			';
		}

	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		//مدیریت خطا و چاپ پیغام خطا در صورت وجود
		echo $e->getMessage();
	}

}

						



function updateViewCount($idproduct, $viewcount)
{
	try {
		$viewcount++;
		$dbh = connectDb();
		$sql = "UPDATE `product_tbl` set product_tbl.viewcount = $viewcount WHERE product_tbl.id_product=$idproduct ";
		$dbh->exec($sql);

		$dbh = null;
	} catch (PDOException $e) {
		//مدیریت خطا و چاپ پیغام خطا در صورت وجود
		echo $e->getMessage();
	}
}

function getMostViewvedProducts()
{
		try{
			$dbh = connectDb();
		    $sql = "SELECT * FROM `product_tbl` ORDER BY viewcount desc LIMIT 12";
			$stmt = $dbh->query($sql);
			$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		echo' 
		<ul class="carts"> 
		';
			foreach ($objs as $object) {
				$idproduct=$object->id_product;
				$img =  $object->img_product;
				$name =  $object->name_product;
				$price = $object->price_product;
				$discount = $object->discount_product;
				$total=$price-($discount/100)*$price;
				$matn = $object->matn_product;
				$item = explode(",",$matn);
				
			   echo'
			  
			   <li>
			   <div class="container page-wrapper">
		  <div class="page-inner">
			<div class="row" style="height: 320px;">
			  <div class="el-wrapper">
			  <a href="mahsul.php?id_product='.$idproduct.'">
				<div class="box-up">
				  <img class="img" src="'.$img.'" alt="" height="250" width="220">
				  <div class="img-info">
					<div class="info-inner">
					<!-- <span class="p-company">apple</span>-->
					  <span class="p-name">'.$name.'</span>
					 
					</div>
					
					<div class="a-size"><p>';

					//updatefav( $idproduct);
				  
					  echo'
					 <span class="size">';
					  //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
					  if(isset($_COOKIE['login'])){
						$iduser=$_COOKIE['login'];
						showfav($iduser,$idproduct);
					  }else{
						updatefav( $idproduct);
						echo'likes';
				echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
					  }
					
					 
					echo '</a></span></p></div>
				  </div>
				</div>
		
				<div class="box-down">
				  <div class="h-bg">
					<div class="h-bg-inner"></div>
				  </div>
		
				  <a class="cart" href="sabad.php?id_product='.$idproduct.'">
				  <span class="price">  <strike>'.$price.'</strike> <br>تومان'.$total.'</span>
					<span class="add-to-cart">
					  <span class="txt">افزودن به سبد</span>
					</span>
				  </a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		</li>
		
	   
			   ';
			  
					  
					  }
		
		echo' </ul>';
		$dbh = null;
				
		} catch (PDOException $e) {
			
			echo $e->getMessage();
		}
}

 function mostlikepost(){
	try {
		$dbh = connectDb();
		$sql = "SELECT id_product, COUNT(*) FROM `fav_tbl` GROUP BY id_product ORDER BY COUNT(*) DESC  ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		echo' 
		<ul class="carts"> 
		';
			
	
		foreach ($objs as $object) {
			$id =  $object->id_product;
		getmostlike($id);
			
		
		}
	
		echo' </ul>';
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

 }
 function 	getmostlike($id){
	try{
		$dbh = connectDb();
		$sql = "SELECT * FROM `product_tbl` WHERE id_product=$id";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($objs as $object) {
			$idproduct=$object->id_product;
			$img =  $object->img_product;
			$name =  $object->name_product;
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			
		   echo'
		  
		   <li>
		   <div class="container page-wrapper">
	  <div class="page-inner">
		<div class="row" style="height: 320px;">
		  <div class="el-wrapper">
		  <a href="mahsul.php?id_product='.$idproduct.'">
			<div class="box-up">
			  <img class="img" src="'.$img.'" alt="" height="250" width="220">
			  <div class="img-info">
				<div class="info-inner">
				<!-- <span class="p-company">apple</span>-->
				  <span class="p-name">'.$name.'</span>
				 
				</div>
				
				<div class="a-size"><p>';

			//	updatefav( $idproduct);
			  
				  echo'
				  <span class="size">';
				  //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				  if(isset($_COOKIE['login'])){
					$iduser=$_COOKIE['login'];
					showfav($iduser,$idproduct);
				  }else{
					updatefav( $idproduct);
					echo'likes';
			echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				  }
				
				 
				echo '</a></span></p></div>
			  </div>
			</div>
	
			<div class="box-down">
			  <div class="h-bg">
				<div class="h-bg-inner"></div>
			  </div>
	
			  <a class="cart" href="sabad.php?id_product='.$idproduct.'">
				<span class="price">  <strike>'.$price.'</strike> <br>تومان'.$total.'</span>
				<span class="add-to-cart">
				  <span class="txt">افزودن به سبد</span>
				</span>
			  </a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	</li>
	
   
		   ';
		  
				  
				  }
	

	$dbh = null;
			
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
 }


function getmostorderproduct(){
	try {
		$dbh = connectDb();
		$sql = "SELECT id_product, COUNT(*) FROM `order_tbl`GROUP BY id_product ORDER BY COUNT(*) DESC  ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		echo' 
		<ul class="carts"> 
		';
	
		foreach ($objs as $object) {
			$id =  $object->id_product;
		getmostorder($id);
			
		
		}
	
		echo' </ul>';
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function getmostorder($id){
	try{
		$dbh = connectDb();
		$sql = "SELECT * FROM `product_tbl` WHERE id_product=$id";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);

		foreach ($objs as $object) {
			$idproduct=$object->id_product;
			$img =  $object->img_product;
			$name =  $object->name_product;
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			
		   echo'
		  
		   <li>
		   <div class="container page-wrapper">
	  <div class="page-inner">
		<div class="row" style="height: 320px;">
		  <div class="el-wrapper">
		  <a href="mahsul.php?id_product='.$idproduct.'">
			<div class="box-up">
			  <img class="img" src="'.$img.'" alt="" height="250" width="220">
			  <div class="img-info">
				<div class="info-inner">
				<!-- <span class="p-company">apple</span>-->
				  <span class="p-name">'.$name.'</span>
				 
				</div>
				
				<div class="a-size"><p>';

				//updatefav( $idproduct);
			  
				  echo'
				   <span class="size">';
				  //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				  if(isset($_COOKIE['login'])){
					$iduser=$_COOKIE['login'];
					showfav($iduser,$idproduct);
				  }else{
					updatefav( $idproduct);
					echo'likes';
			echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				  }
				
				 
				echo '</a></span></p></div>
			  </div>
			</div>
	
			<div class="box-down">
			  <div class="h-bg">
				<div class="h-bg-inner"></div>
			  </div>
	
			  <a class="cart" href="sabad.php?id_product='.$idproduct.'">
			  <span class="price">  <strike>'.$price.'</strike> <br>تومان'.$total.'</span>
				<span class="add-to-cart">
				  <span class="txt">افزودن به سبد</span>
				</span>
			  </a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	</li>
	
   
		   ';
		  
				  
				  }
	
	
	$dbh = null;
			
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
}
function OptionBrand()
{
	
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `brand_tbl` ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		echo '
		<label for="idbrand">: برند محصول را انتخاب کنید</label>
		<select name="idbrand" id="idbrand" placeholder=" برند محصول">
		
		';
		foreach ($objs as $object) {
			$id =  $object->id_brand;
			$name =  $object->name_brand;
			
			echo '<option value="'.$id.'"> '.$name.'</option> ';
		}
		echo '</select>';
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}


function userinfolist(){
	try {
		$dbh = connectDb();
		$counter=0;
		$sql = "SELECT * FROM `user_tbl` ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	
		foreach ($objs as $object) {
			$iduser =  $object->id_user;
			$name =  $object->name_user;
			$phone =  $object->number_user;
			$email =  $object->email_user;
			
			$password =  $object->password_user;
			$bankcart =  $object->bankcart_user;
			$address =  $object->address_user;
			$username =  $object->username_user;
			$date =  $object->date_user;
			$counter++;
		echo'   <tr>
	
		<td>'.$date.'</td>
		<td>'.	$bankcart .'</td>
		
		<td>'.$email .'</td>
		<td><p class="addressp">'.	$address .'</p></td>
		<td>'.$password.'</td>
		<td>'.$username.'</td>
		<td> '.$phone.'</td>
		<td>'.$name.' </td>
		<td>'.$counter.' </td>
		</tr>';
			
		
		}
		
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function userorderlist(){
	try {
		$dbh = connectDb();
		$counter=0;
		$sql = "SELECT name_user,number_user,username_user,name_product,price_product,discount_product,date_order FROM 
		(`user_tbl`INNER JOIN (order_tbl INNER JOIN product_tbl ON order_tbl.id_product=product_tbl.id_product )ON user_tbl.id_user=order_tbl.id_user) ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	
		foreach ($objs as $object) {
	
			$name =  $object->name_user;
			$phone =  $object->number_user;
			$username =  $object->username_user;
			$namep =  $object->name_product;
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			$date=$object->date_order;
			$counter++;
		echo'   <tr>
		
		<td>'.$date.'</td>
		<td>'.$discount.'</td>
		<td>'.	$total.'</td>
		<td>'.$namep.'</td>
		<td>'.$username.'</td>
		<td> '.$phone.'</td>
		<td>'.$name.' </td>
		<td>'.$counter.' </td>
		</tr>';
			
		
		}
		
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function usercommentlist(){
	try {
		$dbh = connectDb();
		$counter=0;
		$sql = "SELECT * FROM (`comment_tbl` INNER JOIN user_tbl ON comment_tbl.id_user=user_tbl.id_user )INNER JOIN product_tbl ON comment_tbl.id_product=product_tbl.id_product";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	
		foreach ($objs as $object) {
			$iduser =  $object->id_user;
			$name =  $object->name_user;
			$phone =  $object->number_user;
			$email =  $object->email_user;
			$namep =  $object->name_product;
			$comment=  $object->matn_comment;
			$bankcart =  $object->bankcart_user;
			$address =  $object->address_user;
			$username =  $object->username_user;
			$date =  $object->date_user;
		$idproduct=$object->id_product;
			$counter++;
		echo'   <tr>
		<td><button class="btdelete" onclick="deleteusercomment('.$iduser.','.$idproduct.')">حذف</button> </td>
		
		<td>'.$comment.'</td>
		<td> '.$namep.'</td>
		<td>'.$username.'</td>
		<td>'.$name.' </td>
		<td>'.$counter.' </td>
		</tr>';
			
		
		}
		
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function deleteloginadmin(){
	if (isset($_COOKIE['loginstate'])) {
		unset($_COOKIE['loginstate']); 
		setcookie('loginstate', null, -1, '/'); 
		return true;
	} else {
		return false;
	}
}

function gettodayreport($date){
//
try {
	$dbh = connectDb();
	$counter=0;
	$sql = "SELECT * FROM ((`order_tbl` INNER JOIN user_tbl ON order_tbl.id_user=user_tbl.id_user)
	INNER JOIN product_tbl ON order_tbl.id_product=product_tbl.id_product)WHERE order_tbl.date_order='$date' ";
	$stmt = $dbh->query($sql);
	$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	

	foreach ($objs as $object) {
	//	$iduser =  $object->id_user;
		$name =  $object->name_user;
		$phone =  $object->number_user;
	//	$email =  $object->email_user;
		$namep =  $object->name_product;
		$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
		//$bankcart =  $object->bankcart_user;
		//$address =  $object->address_user;
		//$username =  $object->username_user;
	
		$counter++;
	echo'   <tr>
	<td>'.$date.'</td>
	<td>'.$total.'</td>
	<td> '.$namep.'</td>
	<td>'.$phone.'</td>
	<td>'.$name.' </td>
	<td>'.$counter.' </td>
	</tr>';
		
	
	}
	
	
	$dbh = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}
}

function   getthismonthreport($month){
	try {
		$dbh = connectDb();
		$counter=0;
		$sql = "SELECT * FROM ((`order_tbl` INNER JOIN user_tbl ON order_tbl.id_user=user_tbl.id_user)
		INNER JOIN product_tbl ON order_tbl.id_product=product_tbl.id_product) ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	
		foreach ($objs as $object) {
			$name =  $object->name_user;
			$phone =  $object->number_user;
			$namep =  $object->name_product;
			$price = $object->price_product;
				$discount = $object->discount_product;
				$total=$price-($discount/100)*$price;
				$dateorder=$object->date_order;
				$item = explode("/",$dateorder);
				$monthorder=$item[1];
			
				  if($monthorder==$month){
					$counter++;
					echo'   <tr>
					<td>'.$dateorder.'</td>
					<td>'.$total.'</td>
					<td> '.$namep.'</td>
					<td>'.$phone.'</td>
					<td>'.$name.' </td>
					<td>'.$counter.' </td>
					</tr>';
				  }


		}
		
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}	
}

function  getthisyearreport($year){
	try {
		$dbh = connectDb();
		$counter=0;
		$sql = "SELECT * FROM ((`order_tbl` INNER JOIN user_tbl ON order_tbl.id_user=user_tbl.id_user)
		INNER JOIN product_tbl ON order_tbl.id_product=product_tbl.id_product) ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	
		foreach ($objs as $object) {
			$name =  $object->name_user;
			$phone =  $object->number_user;
			$namep =  $object->name_product;
			$price = $object->price_product;
				$discount = $object->discount_product;
				$total=$price-($discount/100)*$price;
				$dateorder=$object->date_order;
				$item = explode("/",$dateorder);
				$yearorder=$item[0];
			
				  if($yearorder==$year){
					$counter++;
					echo'   <tr>
					<td>'.$dateorder.'</td>
					<td>'.$total.'</td>
					<td> '.$namep.'</td>
					<td>'.$phone.'</td>
					<td>'.$name.' </td>
					<td>'.$counter.' </td>
					</tr>';
				  }


		}
		
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}


function  showsearchresult($matn){
	try{
		$dbh = connectDb();
		$sql = "SELECT * FROM ((`product_tbl` INNER JOIN brand_tbl ON product_tbl.id_brand=brand_tbl.id_brand)INNER JOIN
		 cat_tbl ON product_tbl.id_cat=cat_tbl.id_cat) 
		 WHERE name_product LIKE '%$matn%' OR name_brand LIKE '%$matn%' OR name_cat LIKE '%$matn%' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo' 
	<ul class="carts" style="margin-top:50px;"> 
	';
		foreach ($objs as $object) {
			$idproduct=$object->id_product;
			$img =  $object->img_product;
			$name =  $object->name_product;
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			
		   echo'
		  
		   <li>
		   <div class="container page-wrapper">
	  <div class="page-inner">
		<div class="row" style="height: 320px;">
		  <div class="el-wrapper">
		  <a href="mahsul.php?id_product='.$idproduct.'">
			<div class="box-up">
			  <img class="img" src="'.$img.'" alt="" height="250" width="220">
			  <div class="img-info">
				<div class="info-inner">
				<!-- <span class="p-company">apple</span>-->
				  <span class="p-name">'.$name.'</span>
				 
				</div>
				
				<div class="a-size"><p>';

			//	updatefav( $idproduct);
			  
				  echo'
				  <span class="size">';
				  //  echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				  if(isset($_COOKIE['login'])){
					$iduser=$_COOKIE['login'];
					showfav($iduser,$idproduct);
				  }else{
					updatefav( $idproduct);
					echo'likes';
			echo'<i class="far fa-heart"  style="height: 20x; width:20px; margin-left:20px; font-size: 20px; color: #da70d2;"></i>';
				  }
				
				 
				echo '</a></span></p></div>
			  </div>
			</div>
	
			<div class="box-down">
			  <div class="h-bg">
				<div class="h-bg-inner"></div>
			  </div>
	
			  <a class="cart" href="sabad.php?id_product='.$idproduct.'">
			  <span class="price">  <strike>'.$price.'</strike> <br>تومان'.$total.'</span>
				<span class="add-to-cart">
				  <span class="txt">افزودن به سبد</span>
				</span>
			  </a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	</li>
	
   
		   ';
		  
				  
				  }
	
	echo' </ul>';
	$dbh = null;
			
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}
}
?>