<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$cat_name =$_POST['cat_name'];
	$itemdesc =$_POST['itemdesc'];
	$status =$_POST['status'];
	
	
	mysqli_query($con,"update category set cat_name='$cat_name',itemdesc='$itemdesc',status='$status' where cat_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated category!');</script>";
	echo "<script>document.location='joboffers.php'</script>";  

	
?>
