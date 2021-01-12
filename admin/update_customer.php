<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['cust_id'];
	 $cust_last = $_POST['cust_last'];
	 $cust_address = $_POST['cust_address'];
	 $cust_contact = $_POST['cust_contact'];
	 //$skin = $_POST['skin'];
	
	
	 
	 mysqli_query($con,"UPDATE customer SET cust_last='$cust_last', cust_address = '$cust_address', cust_contact = '$cust_contact' where cust_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Department details!');</script>";
		echo "<script>document.location='customer.php'</script>";
	
} 

