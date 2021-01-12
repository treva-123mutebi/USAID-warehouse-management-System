<?php 
session_start();
$id=$_SESSION['id'];	
include('../dist/includes/dbcon.php');

	//$discount = $_POST['discount'];
	//$payment = $_POST['payment'];
	$amount_due = $_POST['amount_due'];
	
	date_default_timezone_set("Asia/Manila"); 
	$date = date("Y-m-d H:i:s");
	$cid=$_REQUEST['cid'];
	$branch=$_SESSION['branch'];
	
	$total=$amount_due;
	$cid=$_REQUEST['cid'];

		//$tendered = $_POST['tendered'];
		//$change = $_POST['change'];

		mysqli_query($con,"INSERT INTO reviewstockin(supplier_id,user_id,total,date,branch_id,reviewstatus) 
	VALUES('$cid','$id','$total','$date','$branch','pending')")or die(mysqli_error($con));
		
	$reviewstockin_id=mysqli_insert_id($con);
	$_SESSION['sid']=$reviewstockin_id;
	$query=mysqli_query($con,"select * from temp_deposit where branch_id='$branch'")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query))
		{
			$cat_id=$row['cat_id'];	
 			$prod_qty=$row['prod_qty'];
            $unitprice=$row['unitprice'];
            $prod_name=$row['prod_name'];
			$expirydate=$row['expirydate'];
			$supplier_id=$row['supplier_id'];
			$remark=$row['remark'];
			
			
            mysqli_query($con,"INSERT INTO reviewproduct(cat_id,prod_qty,prod_price,prod_name,expirydate,reviewstockin_id,supplier_id,branch_id,remark) VALUES('$cat_id','$prod_qty','$unitprice','$prod_name','$expirydate','$reviewstockin_id','$supplier_id','$branch','$remark')")or die(mysqli_error($con));
            echo "<script>document.location='prod_review.php?cid=$cid'</script>";
			//mysqli_query($con,"UPDATE product SET prod_qty=prod_qty-'$qty' where prod_id='$pid' and branch_id='$branch'") or die(mysqli_error($con)); 
		}
		
		//$query1=mysqli_query($con,"SELECT or_no FROM payment NATURAL JOIN sales WHERE modeofpayment =  'cash' ORDER BY payment_id DESC LIMIT 0 , 1")or die(mysqli_error($con));

		//	$row1=mysqli_fetch_array($query1);
			//	$or=$row1['or_no'];	

			//	if ($or==0)
			//	{
			//		$or=1901;
			//	}
			//	else
			//	{
			//		$or=$or+1;
			//	}

				//mysqli_query($con,"INSERT INTO payment(cust_id,user_id,payment,payment_date,branch_id,payment_for,due,status,sales_id,or_no) 
	//VALUES('$cid','$id','$total','$date','$branch','$date','$total','paid','$sales_id','$or')")or die(mysqli_error($con));
				//echo "<script>document.location='receipt.php?cid=$cid'</script>";  	
		
		$result=mysqli_query($con,"DELETE FROM temp_deposit where branch_id='$branch'")	or die(mysqli_error($con));
		//echo "<script>document.location='receipt.php?cid=$cid'</script>";  	
		
	
?>