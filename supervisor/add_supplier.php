<?php 
include 'dbcon.php';
	$supplier_name = $_POST['supplier_name'];
	$supplier_address = $_POST['supplier_address'];
	$supplier_contact = $_POST['supplier_contact'];
	//$skin = $_POST['skin'];
	
	
		mysqli_query($con,"INSERT INTO supplier(supplier_name,supplier_address,supplier_contact,branch_id) 
			VALUES('$supplier_name','$supplier_address','$supplier_contact','5')")or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('New Supplier Added!');</script>";
			echo "<script>window.location='supplier.php'</script>";   
	


?>