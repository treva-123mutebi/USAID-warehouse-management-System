<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"></h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "add_stockinapproval.php"> 
						   <input type="hidden" name="reviewstockin_id" value="<?php echo $id;?>">
								<label>Transaction Status</label>
									<input type="text" name = "reviewstatus" class="form-control" value = "<?php echo $row1['reviewstatus'];?>" readonly>
									<br/>								
								<label></label>
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Item </th>
											<th>Batch Number</th>
											<th>Expiry Name</th>
											<!--<th>Stock-Out Quantity</th>-->
											<th>Incoming stock</th>
											<th>Remark</th>
											<th>Unit Price</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$query2=mysqli_query($con,"select * from reviewproduct natural join category where reviewstockin_id='$id'")or die(mysqli_error($con));
									while($row2=mysqli_fetch_array($query2)){
										$id=$row2['reviewproduct_id'];
										$total= $row2['prod_qty']*$row2['prod_price'];

									?>	
										<tr>
										
											<td><input type="text" name = "cat_name" class="form-control" value = "<?php echo $row2['cat_name'];?>" readonly></td>
											<td><input type="text" name = "prod_name" class="form-control" value = "<?php echo $row2['prod_name'];?>" readonly></td>
											<td><input type="text" name = "expirydate" class="form-control" value = "<?php echo $row2['expirydate'];?>" readonly></td>
											<!--<td><input type="text" name = "sales_qty" class="form-control" value = "<?php echo $row2['sales_qty'];?>" readonly></td>-->
											<td><a href="#"  class="btn btn-info" ><?php echo $row2['prod_qty'];?></a></td>
											<td><a href="#"  class="btn btn-success" ><?php echo $row2['remark'];?></a></td>
											<td><input type="text" name = "price" class="form-control" value = "<?php echo $row2['prod_price'];?>" readonly></td>
											<td><input type="text" name = "total" class="form-control" value = "<?php echo number_format($total,2);?>" readonly></td>
											
										</tr>
										<?php }?>
									</tbody>
                                </table>	
									<br/>
								<!--<label>Contact #</label>-->
									<!--<input type="text" name = "supplier_contact" class="form-control" value = "<?php echo $row1['supplier_contact'];?>">-->
									<br/>
								<!--<label>Skin</label>
									<select name = "skin" class = "form-control">
										<option value = "<?php echo $row1['skin'];?>"><?php echo $row1['skin'];?></option>
										<option>red</option>
										<option>purple</option>	
										<option>black</option>
										<option>blue</option>
										<option>green</option>
										<option>yellow</option>
									</select>-->
									<br/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button  name = "update" class="btn btn-primary">Approve</button>
							
						</form>
						<form method = "POST" action = "stockindecline.php">
							<button  name = "update" class="btn btn-danger">Decline</button>
						</form>
						</div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>
                    </div>
				</div>