<?php 

include('../dist/includes/dbcon.php');

	$cat = $_POST['cat_name'];
	$code = $_POST['cat_code'];
	$units = $_POST['unitsperpack'];
	
	$query2=mysqli_query($con,"select * from category where cat_name='$cat'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Sorry, This Item Number Already  exist!,CrossCheck Again');</script>";
			echo "<script>document.location='category.php'</script>";  
		}
		else
		{			
			mysqli_query($con,"INSERT INTO category(cat_name,cat_code,unitsperpack) VALUES('$cat','$code','$units')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('You have Added a new Item Into the System');</script>";
					  echo "<script>document.location='category.php'</script>";  
		}
?>