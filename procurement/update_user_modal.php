<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">View Request of Quotation</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "update_user.php"> 
						   <input type="hidden" name="user_id" value="<?php echo $id;?>">
						   <b><label>Item:</label></b>
								<br/>
								<i><h4><?php echo $row['Item'];?></h4></i>
								<br/>
									<!--<input type="text" name = "name" class="form-control" value = "<?php //echo $row['Item'];?>">-->
																
								<b><label>Item Specs:</label></b>
								<br/>
								<i><h4><?php echo $row['ItemSpecs'];?></h4></i>
								<br/>
								<b><label>Unit of measure:</label></b>
								<br/>
								<i><h4><?php echo $row['Unitofmeasure'];?></h4></i>
								<br/>
								<b><label>Quantity ordered:</label></b>
								<br/>
								<i><h4><?php echo $row['Quantityordered'];?></h4></i>
								<br/>
								<b><label>Remarks:</label></b>
								<br/>
								<i><h4><?php echo $row['Remarks'];?></h4></i>
								<br/>
								<b><label>Date Needed:</label></b>
								<br/>
								<i><h4><?php echo $row['dateneeded'];?></h4></i>
								<br/>
								<b><label>Supplier:</label></b>
								<br/>
								<i><h4><?php echo $row['supplier_name'];?></h4></i>
								<br/>
								
								
									<!--<input type="text" name = "username" class="form-control" value = "<?php echo $row['username'];?>">
									<br/>
									<label>Email</label>
									<input type="text" name = "email" class="form-control" value = "<?php echo $row['email'];?>">
									<br/>
									<label>Phone Number</label>
									<input type="text" name = "phonenumber" class="form-control" value = "<?php echo $row['phonenumber'];?>">
									<br/>
								<label>Password</label>
									<input type="password" name = "password" class="form-control" placeholder="Enter to Change Password">
									<br/>
								<label>Status</label>
								<select name = "status" class = "form-control">
									<option value = "active">Active</option>
									<option value = "inactive">Inactive</option>						
								</select>
									<br/>
								<label>Branch Name</label>
									<select name = "branch_id" class = "form-control">
										<option value = "<?php echo $row['branch_id'];?>"><?php echo $row['branch_name'];?></option>
										<option></option>
										<?php	
											include 'dbcon.php';								
										$query4=mysqli_query($con,"select * from branch")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query4)){
											$id3=$row1['branch_id'];
										?>
										<option value = "<?php echo $row1['branch_id'];?>"><?php echo $row1['branch_name'];?></option>
										<?php } ?>
										
									</select>
									<br/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
							<button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</form>
						</div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>
                    </div>
				</div>