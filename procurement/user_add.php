<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

		$pass=md5($password);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;
	
			
			mysqli_query($con,"INSERT INTO user(name,username,email,phonenumber,password,status)
			VALUES('$name','$username','$email','$phonenumber','$pass','active')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Congratulations! You have sucessfully a new system user.');</script>";
					  echo "<script>document.location='user.php'</script>";  
	
?>