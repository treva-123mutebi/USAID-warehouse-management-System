<?php
session_start();
$branch=$_SESSION['branch'];
	include('dbcon.php');
	$result=mysqli_query($con,"DELETE FROM reviewsales_details where branch_id='5'")	or die(mysqli_error());
	 echo "<script>document.location='stockoutapproval.php'</script>";  
?>