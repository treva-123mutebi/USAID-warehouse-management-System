<?php 
include 'dbcon.php';
	$cust_last = $_POST['cust_last'];
	$cust_address = $_POST['cust_address'];
	$cust_contact = $_POST['cust_contact'];
	//$skin = $_POST['skin'];
	
	
		mysqli_query($con,"INSERT INTO customer(cust_last,cust_address,cust_contact,branch_id) 
			VALUES('$cust_last','$cust_address','$cust_contact','5')")or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('New Department Added!');</script>";
			echo "<script>window.location='customer.php'</script>";   
	


?>