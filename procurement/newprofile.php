
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
        <?php include 'new_profile_form.php';?>
				
					
						<?php include 'new_profile_form.php';?>
					
					<div class = "col-md-8 col-lg-8 col-xs-8">
						<div class = "x-panel">
						 <!--<table id="datatable" class="table table-striped table-bordered table-responsive">
						 <thead>
								<tr>
									<h4>Request For Quotation History </h4>
																		
								</tr>
							 </thead>
							 <thead>
								<tr>
									<th>Item</th>
									<th>Item Specs</th>
									<th>Unit of Measure</th>
									<th>Quantity ordered</th>
									<th>Date needed</th>
									<th>Remarks</th>
									<th>Date made</th>
									<th>Supplier</th>
									<th>View</th>									
								</tr>
							 </thead>
							 <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from requestforquotation NATURAL JOIN supplier ORDER BY datemade ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['ItemID'];
											
									?>  
								<tr>
									<td><?php echo $row['Item'];?></td>
									<td><?php echo $row['ItemSpecs'];?></td>
									<td><?php echo $row['Unitofmeasure'];?></td>
									<td><?php echo $row['Quantityordered'];?></td>
									<td><?php echo $row['dateneeded'];?></td>
									<td><?php echo $row['Remarks'];?></td>
									<td><?php echo $row['datemade'];?></td>
									<td><?php echo $row['supplier_name'];?></td></td>
									<td>
									<a href="#update<?php echo $id;?>" class="btn btn-success btn-xs" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-search"></i> View</a></td>
										
									
																
								</tr>
										<?php //include 'update_user_modal.php';?>
								<?php }?>
							 </tbody>								
						 </table>-->
						</div>
					</div>
				</div>
			</div>
        </div>		
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Medicine Warehouse Portal <a href="#"></a>
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
