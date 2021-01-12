<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$name =$_POST['name'];
	$username =$_POST['username'];
	$email =$_POST['email'];
	$phonenumber =$_POST['phonenumber'];
	$status = $_POST['status'];
	
	
	mysqli_query($con,"update user set name='$name',username='$username',email='$email',phonenumber='$phonenumber',status='$status' where user_id='$id'")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Congratulations! you Have sucessfully updated system user details.');</script>";
	echo "<script>document.location='user.php'</script>";  

	
?>
