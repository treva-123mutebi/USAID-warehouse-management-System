<?php 
include 'dbcon.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$status = $_POST['status'];
	$branch_id = $_POST['branch_id'];
	
	$pass1=md5($password);
	$salt="a1Bz20ydqelm8m1wql";
	$pass1=$salt.$pass1;
	
	
		mysqli_query($con,"INSERT INTO procurement
		(username,password,name,email,phonenumber,status,branch_id) 
		VALUES
		('$username','$pass1','$name','$email','$phonenumber','$status', '$branch_id')")
		or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('User added successfully.');</script>";
			echo "<script>window.location='procurement.php'</script>";   
	


?>