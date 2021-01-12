<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
    $prod_qty =$_POST['prod_qty'];
    $prod_name =$_POST['prod_name'];
    $expirydate =$_POST['expirydate'];
    $unitprice =$_POST['unitprice'];
	$cid =$_POST['cid'];
	
	
	mysqli_query($con,"UPDATE temp_deposit set prod_qty='$prod_qty',prod_name='$prod_name',expirydate='$expirydate',unitprice='$unitprice' where temp_deposit_id='$id'")or die(mysqli_error());
	
	
	echo "<script>document.location='prod_transaction.php?cid=$cid'</script>";  

	
?>
