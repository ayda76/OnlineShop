<?php include_once 'functions.php';
include_once 'newfunction.php';
?>
<?php 
if(isset($_REQUEST['id'])&&isset($_REQUEST['idproduct'])){
    $id=$_REQUEST['id'];
	$idp=$_REQUEST['idproduct'];
    try {
		$dbh = connectDb();
		$sql = "DELETE FROM `comment_tbl` WHERE id_user=$id AND id_product=$idp";
		$stmt = $dbh->query($sql);
		$dbh = null;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
    header("location:admin3.php");
}else{}

?>