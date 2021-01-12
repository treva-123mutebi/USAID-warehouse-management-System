<?php 

include('../dist/includes/dbcon.php');

	$cat_name = $_POST['cat_name'];
	$itemdesc = $_POST['itemdesc'];
	$status = $_POST['status'];
	
	$query2=mysqli_query($con,"select * from category where cat_name='$cat_name'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Job Offer already exist!');</script>";
			echo "<script>document.location='category.php'</script>";  
		}
		else
		{			
			mysqli_query($con,"INSERT INTO category(cat_name,itemdesc,status) VALUES('$cat_name','$itemdesc','$status')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new Job Offer!');</script>";
					  echo "<script>document.location='joboffers.php'</script>";  
		}
?>