
<?php include 'header.php';

$branch_id = $_GET['id'];
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"> 
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">					
						<div class = "x-panel">
	<?php					 
			$branch=$_GET['id'];
			$query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error());  
			$row=mysqli_fetch_array($query);
        
	?>      
                  <h5><b><?php echo $row['branch_name'];?></b> </h5>  
                  <h6>Address: <?php echo $row['branch_address'];?></h6>
                  <h6>Contact #: <?php echo $row['branch_contact'];?></h6>
				  <h5><b>Stock Inventory as of today, <?php echo date("M d, Y h:i a");?></b></h5>
                  
				  <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
							<a class = "btn btn-primary btn-print" href = "index.php"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>   
						
                  <table class="table table-bordered table-striped">
                    <thead>
					
                      <tr>
					  
                        <th>Batch Number</th>
                        <th>Item Description</th>
                        <th>Quantity Left</th>
                        <th>Expiry Date</th>
						
            						<th>Price</th>
            						<th>Total</th>
                        <th>Stock Message</th>
                        <th>Expiry Date Message</th>
                       
                      </tr>
                    </thead>
                    <tbody>
							<?php
                  $branch=$_GET['id'];
                  $date = date("Y-m-d H:i:s");
									$query=mysqli_query($con,"select * from product natural join category where branch_id='$branch' order by prod_name")or die(mysqli_error());
									$grand=0;
									while($row=mysqli_fetch_array($query)){
										$total=$row['prod_price']*$row['prod_qty'];
										$grand+=$total;
							?>
                      <tr>
                        <td><?php echo $row['prod_name'];?></td>
                        <td><?php echo $row['cat_name'];?></td>
                        <td><?php echo $row['prod_qty'];?></td>
                        <td><?php echo $row['expirydate'];?></td>
						
						<td><?php echo $row['prod_price'];?></td>
						<td><?php echo number_format($total,2);?></td>
						<td class="text-center"><?php if ($row['prod_qty']<='0')echo "<span class='badge bg-red'><i class='glyphicon glyphicon-refresh'></i>Out of Stock</span>";?></td>
            <td class="text-center"><?php if ($row['expirydate']<=$date)echo "<span class='badge bg-green'><i class='glyphicon glyphicon-refresh'></i>Expired</span>";?></td> 
                      </tr>

<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="3">Total</th>
                        
						
						<th colspan="2">ugx.<?php echo number_format($grand,2);?></th>
						
                        
                      </tr>					  
                    </tfoot>
                  </table>
                </div>
						</div>
				</div>
			</div>
        </div>		
        <!-- /page content -->
	
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Medicine Warehouse Management <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	<?php include 'datatable_script.php';?>
    <!-- /gauge.js -->
  </body>
</html>
