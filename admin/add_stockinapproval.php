<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['reviewstockin_id'];
	 //$supplier_name = $_POST['supplier_name'];
	 //$supplier_address = $_POST['supplier_address'];
	 //$supplier_contact = $_POST['supplier_contact'];
	 //$skin = $_POST['skin'];
	
	
	 
	 mysqli_query($con,"UPDATE reviewstockin SET reviewstatus='approved' where reviewstockin_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Transaction Approved!');</script>";
		echo "<script>document.location='stockinapproval.php'</script>";
	
} 

