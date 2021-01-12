<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['supplier_id'];
	 $supplier_name = $_POST['supplier_name'];
	 $supplier_address = $_POST['supplier_address'];
	 $supplier_contact = $_POST['supplier_contact'];
	 //$skin = $_POST['skin'];
	
	
	 
	 mysqli_query($con,"UPDATE supplier SET supplier_name='$supplier_name', supplier_address = '$supplier_address', supplier_contact = '$supplier_contact' where supplier_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Supplier details!');</script>";
		echo "<script>document.location='supplier.php'</script>";
	
} 

