<?php 
include 'dbcon.php';
	$item = $_POST['item'];
	$itemspecs = $_POST['itemspecs'];
	$quantityordered = $_POST['quantityordered'];
	$unitofmeasure = $_POST['unitofmeasure'];
	
	$remark = $_POST['remark'];
	$date = date("Y-m-d H:i:s");
	$dateneeded = $_POST['dateneeded'];
	//$status = $_POST['status'];
	$supplier_id = $_POST['supplier_id'];
	
	//$pass1=md5($password);
	//$salt="a1Bz20ydqelm8m1wql";
	//$pass1=$salt.$pass1;
	
	
		mysqli_query($con,"INSERT INTO requestforquotation
		(Item,ItemSpecs,Quantityordered,Unitofmeasure,Remarks,dateneeded,datemade,supplier_id) 
		VALUES
		('$item','$itemspecs','$quantityordered','$unitofmeasure','$remark','$dateneeded','$date','$supplier_id')")
		or die(mysqli_error($con));  
			//echo "<script type='text/javascript'>alert('Congratulations! You have sucessfully added a new user.');</script>";
			echo "<script>window.location='user.php'</script>";   
	


?>