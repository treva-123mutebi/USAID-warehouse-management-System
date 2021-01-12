<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$category =$_POST['category'];
	$code =$_POST['cat_code'];
	$units =$_POST['unitsperpack'];
	
	
	mysqli_query($con,"update category set cat_name='$category',cat_code='$code',unitsperpack='$units' where cat_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated the Selected Item!');</script>";
	echo "<script>document.location='category.php'</script>";  

	
?>
