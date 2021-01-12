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
	


		//$tendered = $_POST['tendered'];
		//$change = $_POST['change'];

		mysqli_query($con,"INSERT INTO reviewsales(cust_id,user_id,amount_due,total,date_added,modeofpayment,branch_id,reviewstatus) 
    VALUES('$cid','$id','$amount_due','$total','$date','cash','$branch','pending')")or die(mysqli_error($con));
    
	$reviewsales_id=mysqli_insert_id($con);
	$_SESSION['sid']=$reviewsales_id;
	$query=mysqli_query($con,"select * from temp_trans where branch_id='$branch'")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query))
		{
			$pid=$row['prod_id'];	
 			$qty=$row['qty'];
			$price=$row['price'];
			$remark=$row['remark'];
			
			
			mysqli_query($con,"INSERT INTO reviewsales_details(prod_id,sales_qty,price,remark,reviewsales_id,branch_id) VALUES('$pid','$qty','$price','$remark','$reviewsales_id','$branch')")or die(mysqli_error($con));
			//mysqli_query($con,"UPDATE product SET prod_qty=prod_qty-'$qty' where prod_id='$pid' and branch_id='$branch'") or die(mysqli_error($con)); 
		}
		
		$query1=mysqli_query($con,"SELECT or_no FROM reviewpayment NATURAL JOIN reviewsales WHERE modeofpayment =  'cash' ORDER BY reviewpayment_id DESC LIMIT 0 , 1")or die(mysqli_error($con));

			$row1=mysqli_fetch_array($query1);
				$or=$row1['or_no'];	

				if ($or==0)
				{
					$or=1901;
				}
				else
				{
					$or=$or+1;
				}

				mysqli_query($con,"INSERT INTO reviewpayment(cust_id,user_id,payment,payment_date,branch_id,payment_for,due,status,reviewsales_id,or_no) 
	VALUES('$cid','$id','$total','$date','$branch','$date','$total','paid','$reviewsales_id','$or')")or die(mysqli_error($con));
				echo "<script>document.location='review.php?cid=$cid'</script>";	
		
		$result=mysqli_query($con,"DELETE FROM temp_trans where branch_id='$branch'")	or die(mysqli_error($con));
		//echo "<script>document.location='receipt.php?cid=$cid'</script>";  	
		
	
?>