<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['cat_id'];
	 $cat_name = $_POST['cat_name'];
	 $cat_code = $_POST['cat_code'];
	 $unitsperpack = $_POST['unitsperpack'];
	 //$skin = $_POST['skin'];
	
	
	 
	 mysqli_query($con,"UPDATE category SET cat_name='$cat_name', cat_code = '$cat_code', unitsperpack = '$unitsperpack' where cat_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Item details!');</script>";
		echo "<script>document.location='item.php'</script>";
	
} 

