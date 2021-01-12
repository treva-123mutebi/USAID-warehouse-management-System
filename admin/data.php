<?php 
session_start();
include('dbcon.php');
	$year=date("Y");
	$branch=$_SESSION['branch'];
	$query = mysqli_query($con,"select *,SUM(sales_qty) as amount,DATE_FORMAT(date_added,'%b') as month from sales_detail natural join sales where YEAR(date_added)='$year' and branch_id='$branch' group by MONTH(date_added)") or die(mysqli_error($con));

	$category = array();
	//$category['name'];

	$series1 = array();
	$series1['name'] = 'Monthly Stock Out';

	while($r = mysqli_fetch_array($query)) {
		
	    //$count=$r['total'];
	    $category['name'][] =$r['month'];
	    $category['data'][] =$r['month'];
	    $series1['data'][] = $r['amount'];

}

$result = array();
array_push($result,$category);
array_push($result,$series1);
//array_push($result,$series2);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);

?> 
