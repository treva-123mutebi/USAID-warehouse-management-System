<?php 
include 'dbcon.php';
	$cat_code = $_POST['cat_code'];
	$cat_name = $_POST['cat_name'];
	$unitsperpack = $_POST['unitsperpack'];
	//$skin = $_POST['skin'];
	
	
		mysqli_query($con,"INSERT INTO category(cat_code,cat_name,unitsperpack) 
			VALUES('$cat_code','$cat_name','$unitsperpack')")or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('New Item Added!');</script>";
			echo "<script>window.location='item.php'</script>";   
	


?>