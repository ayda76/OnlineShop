
<?php 
 include_once 'functions.php'; 
 function  updatename($iduser,$name){
		try {
			$dbh = connectDb();
            $sql = "UPDATE  `user_tbl` SET name_user='$name' WHERE id_user='$iduser' ";
			$dbh->exec($sql);
		} catch (Exception $ex) {
		}
	
}
 function  updateemail($email,$iduser){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `user_tbl` SET email_user='$email' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updatebank($bankcard,$iduser){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `user_tbl` SET bankcart_user='$bankcard' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updatecodm($codm,$iduser){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `user_tbl` SET codm_user='$codm' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updatepassword($password,$iduser){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `user_tbl` SET password_user='$password' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updatephonenumber($phonenumber,$iduser){
    try {
		$dbh = connectDb();
        $sql = "UPDATE  `user_tbl` SET number_user='$phonenumber' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateusername($username,$iduser){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `user_tbl` SET username_user='$username' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updateaddress($address,$iduser){
    try {
		$dbh = connectDb();
        $sql = "UPDATE  `user_tbl` SET address_user='$address' WHERE id_user='$iduser' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function checkLoginUser($username, $password){
	
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `user_tbl` WHERE  username_user='$username'  AND password_user=$password ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		foreach ($objs as $object) {
			header("location:customer.php");
			$id =  $object->id_user;
			setcookie("login"," $id", time() +  604800, "/");
		}

		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	}

	function getUserLoginState(){

		if (isset($_COOKIE['login'])) {
		
		} else {
	
			header("location:login.php");
		}
	}
   
	function deletelogin(){
		if (isset($_COOKIE['login'])) {
			unset($_COOKIE['login']); 
			setcookie('login', null, -1, '/'); 
			return true;
		} else {
			return false;
		}
	}
	function finduser($id){
		try {
			$dbh = connectDb();
			$sql = "SELECT * FROM `user_tbl` WHERE  id_user='$id' ";
			$stmt = $dbh->query($sql);
			$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
			foreach ($objs as $object) {
				$id =  $object->id_user;
				$name =  $object->name_user;
				$number =  $object->number_user;
			
				echo'
				<li><p>	<i class="fas fa-user-circle fa-lg" style="font-size: 30px; margin-top:10px; margin-bottom: 5px; color:rgb(168, 160, 160);"></i></p> </li>
				<li> <p>'.$name.':شما </p> </li>
				<li><p>'.$number.':شماره موبایل</p></li>';
			
			
			
			}
	
			//بستن اتصال
			$dbh = null;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
function insertsabad($iduser,$idproduct,$count){
	$dbh = connectDb();
	$sql="INSERT INTO `sabad_tbl` (`id_sabad`, `id_user`, `id_product`, `count_sabad`) VALUES (NULL, '$iduser', '$idproduct','$count');";
	try {
		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
function  updatesabad($iduser,$idproduct,$count){
    try {
		$dbh = connectDb();
		$sql = "UPDATE  `sabad_tbl` SET count_sabad='$count' WHERE  id_product=$idproduct AND id_user=$iduser ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function showsabad($iduser){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM  `sabad_tbl` WHERE id_user=$iduser";
	    $stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
	
		foreach ($objs as $object) {
			
			$idproduct=$object->id_product;
			showsabadproduct($idproduct,$iduser);

			

		
		}
	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}



}
function showsabadproduct($id,$iduser){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM  `sabad_tbl` INNER JOIN `product_tbl` ON sabad_tbl.id_product=product_tbl.id_product 
		 WHERE product_tbl.id_product= $id AND sabad_tbl.id_user=$iduser";
		 // INNER JOIN user_tbl ON sabad_tbl.id_user=user_tbl.id_user)
	    $stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
	echo'
	<div class="sabad">
	<div class="row">
	';
		
		foreach ($objs as $object) {
			$countp=$object->count_sabad;
			$idproduct=$object->id_product;
			$iduser=$object->id_user;
			$img =  $object->img_product;
			$name =  $object->name_product;
			$stock =  $object->stock_product;
			$matn = $object->matn_product;
			$item = explode(",",$matn);
			$price = $object->price_product;
			$discount = $object->discount_product;
			$total=$price-($discount/100)*$price;
			$allp=$total*$countp;
			
	echo'

			
	
	   <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-lg-block d-md-block d-sm-block d-block">
	   <img src="'.$img.'" alt=""   class="imt">
	   </div>
	   <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-lg-block d-md-block d-sm-block d-block">
		  <ul >
			  <li class="sb">
			  <ul>
			<li class="pg"><p class="kk"> '.$name.' </p></li>
			<li class="pg">:نام محصول </li>  
			  </ul> 
			  </li>
			  <li class="sb">
			  <ul>
			<li class="pg"><span class="cart_count">'.$countp.'</span></li>
			<li class="pg">:تعداد محصول </li>  
			  </ul> 
			  </li> 
			  ';
			 // countsproduct($idproduct,$iduser);
			  echo
			  '
			  <li class="sb">
			  <ul>';
			  if($stock>0){
				echo'	<li class="pg"><p class="kk"> موجود است</p></li>
				<li class="pg">: موجودی انبار </li>  ';
			  }else{
				echo'	<li class="pg"><p class="kk">نا موجود است</p></li>
				<li class="pg">: موجودی انبار </li>  '; 
			  }
		
			echo'
			  </ul> 
			  </li>
			  <li class="sb">
			  <ul>
			 
			<li class="pg"><p class="kk">  تومان '.$total.'  <strike>'.$price.'</strike> </p></li>
			<li class="pg"> : قیمت محصول </li>
			  </ul> 
			  <ul>
			  <li class="pg"><p class="kk">'.$allp.'  تومان </p></li>
			  <li class="pg">:قیمت  کل محصولات </li>  
				</ul>
			  </li>
		  </ul>
	   </div>
	   <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-lg-block d-md-block d-sm-block d-block">
		  <ul class="btp">
		  <li class="sb">
			 <button class="deletep" onclick="SDelete('.$idproduct.','.$countp.')"> حذف از سبد کالا</button>
			  </li>
			  <li class="sb">
			 <button class="buy"  onclick="buy('.$idproduct.','.$iduser.','.$countp.',' .$stock.')">ادامه فرابند خرید</button>
			  </li>
		  </ul>
	   </div>
	
			
	 
			';
			

		
		}
	echo '</div>

	
	</div>';
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}



}

function countsproduct($idproduct,$iduser){
	try {
		$dbh = connectDb();
		$sql = "SELECT COUNT(sabad_tbl.id_product=$idproduct)as countnumber FROM `sabad_tbl` WHERE id_user=$iduser  ";
	    $stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		
		
		foreach ($objs as $object) {
		
			$count =  $object->countnumber;
			
			
	echo'
	<li class="sb">
			  <ul>
			<li class="pg"><span class="cart_count">'.$count.'</span></li>
			<li class="pg">:تعداد محصول </li>  
			  </ul> 
			  </li>
	';
			

		
		}
	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}


}
function deletesabad($id){
	try {
		$dbh = connectDb();
		$sql = "DELETE FROM `sabad_tbl` WHERE id_product=$id ";
		$stmt = $dbh->query($sql);
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}
function  updatesabadcount($id,$countp){
	try {
		$dbh = connectDb();
		$sql = "UPDATE  `sabad_tbl` SET count_sabad='$countp' WHERE id_product='$id' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}	
}
function CountSabad($id){
	try {
		$dbh = connectDb();
		$sql = "SELECT COUNT(sabad_tbl.id_product)as countnumber FROM `sabad_tbl` WHERE id_user=$id   ";
	    $stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		
		
		foreach ($objs as $object) {
		
			$count =  $object->countnumber;
			
			
	echo'
	<span class="cart_count" >'.$count.'</span>
	';
			

		
		}
	
		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		
		echo $e->getMessage();
	}


}

function   updateproductstock($id){
	try {
		$dbh = connectDb();
		$sql = "UPDATE  `product_tbl` SET stock_product=stock_product-1 WHERE id_product='$id' ";
		$stmt = $dbh->query($sql);
		$objs = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}	
}
function getuserinfo($iduser){
	try {
		$dbh = connectDb();
		$sql = "SELECT * FROM `user_tbl` WHERE  id_user='$iduser'  ";
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
			echo'
			<div class="part1">
              <ul>
               <li>'.$name.':نام</li>
               <li>'.$phone.':شماره موبایل</li>
              <li>'.$username.':نام کاربری</li>
                <li>'.$address.':ادرس</li>
               <li>'.$codem.':کدملی</li>
                <li>'.$email.':ایمیل</li>
                <li>'.$bankcart.' : شماره کارت بانکی</li>

              </ul>
            </div>
			
			';
		}

		//بستن اتصال
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}

function InsertOrder($idproduct,$iduser,$date){
	//INSERT INTO `order_tbl` (`id_order`, `id_product`, `id_user`, `date_order`) VALUES (NULL, '91', '1', '1400/1/10');

	$dbh = connectDb();
	$sql="INSERT INTO `order_tbl` (`id_order`, `id_product`, `id_user`, `date_order`) VALUES (NULL, '$idproduct', '$iduser', '$date');";
	try {
		$dbh->exec($sql);
	} catch (Exception $ex) {
	}
}
?>