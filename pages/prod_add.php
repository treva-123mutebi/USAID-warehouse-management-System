<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../dist/includes/dbcon.php');

	$cid = $_POST['cid'];
    $name = $_POST['cat_name'];
    $unitprice = $_POST['unitprice'];
    $prod_name = $_POST['prod_name'];
	$expirydate = $_POST['expirydate'];
	$remark = $_POST['remark'];
    
	$qty = $_POST['qty'];
		
			
		$query=mysqli_query($con,"select cat_id from category  where cat_id='$name'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		//$price=$row['prod_price'];
		
		$query1=mysqli_query($con,"select * from temp_deposit where cat_id='$name' and branch_id='$branch'")or die(mysqli_error());
		$count=mysqli_num_rows($query1);
		
		$total=$unitprice*$qty;
		
		if ($count>0){
			mysqli_query($con,"update temp_deposit set prod_qty=prod_qty+'$qty' where cat_id='$name'")or die(mysqli_error());
	
		}
		else{
			mysqli_query($con,"INSERT INTO temp_deposit(cat_id,prod_qty,unitprice,prod_name,expirydate,remark,supplier_id,branch_id) VALUES('$name','$qty','$unitprice','$prod_name','$expirydate','$remark','$cid','$branch')")or die(mysqli_error($con));
		}

	
		echo "<script>document.location='prod_transaction.php?cid=$cid'</script>";  
	
?>