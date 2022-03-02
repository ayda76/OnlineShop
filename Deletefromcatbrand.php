<?php include_once 'functions.php';
include_once 'newfunction.php';
?>
<?php 
if(isset($_REQUEST['idcat'])){
    $id=$_REQUEST['idcat'];
    try {
		$dbh = connectDb();
		$sql = "DELETE FROM `cat_tbl` WHERE id_cat=$id";
		$stmt = $dbh->query($sql);
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
    header("location:admin5.php");
}else if(isset($_REQUEST['idbrand'])){
    $idbrand=$_REQUEST['idbrand'];
	try {
		$dbh = connectDb();
		$sql = "DELETE FROM `brand_tbl` WHERE id_brand=$idbrand";
		$stmt = $dbh->query($sql);
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
    header("location:admin5.php");
}else{}



?>