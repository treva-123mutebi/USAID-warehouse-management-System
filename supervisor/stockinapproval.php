
<?php include 'header.php';?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"> 
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class = "col-md-4 col-lg-4 col-xs-4">
						<?php //include 'add_stockoutapproval_form.php';?>
					</div>
					<div class = "col-md-8 col-lg-8 col-xs-8">
						<div class = "x-panel">
						 <table id="datatable" class="table table-striped table-bordered">
							 <thead>
								<tr>
									<th>Transaction ID</th>
									<!--<th>Transaction Time</th>-->
									<!--<th>Expiry Date</th>
									<th>Quantity</th>
									<th>Price</th>-->
									<th>Supplier</th>
									<!--<th>Issued By</th>-->
									<!--<th>Transaction Status</th>-->
									<!--<th>Skin</th>-->
									<th>Transaction Status</th>									
								</tr>
							 </thead>
							 <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from reviewstockin  natural join category natural join reviewproduct natural join supplier ORDER BY reviewstockin_id DESC LIMIT 0,1")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['reviewstockin_id'];
											
									?>  
								<tr>
									<td><?php echo $row1['reviewstockin_id'];?></td>
									<!--<td><?php echo $row1['date_added'];?></td>-->
									<!--<td><?php echo $row1['expirydate'];?></td>
									<td><?php echo $row1['sales_qty'];?></td>
									<td><?php echo $row1['price'];?></td>-->
									<td><?php echo $row1['supplier_name'];?></td>
									<!--<td><?php echo $row1['name'];?></td>-->
									<!--<td><?php echo $row1['reviewstatus'];?></td>-->
									<!--<td><?php echo $row1['skin'];?></td>-->
									<td>
										<a href="#update<?php echo $id;?>" class="btn btn-success btn-xs" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-search"></i> View</a>
										
									</td>
																
								</tr>
										<?php include 'update_reviewstockin_modal.php';?>
								<?php }?>
							 </tbody>								
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
            Warehouse System <a href="#"></a>
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
