  <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Request for Quotation<i class = "fa fa-users"></i></h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_user.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Item</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "item" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Item Specs</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "itemspecs" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Unit of Measure</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "unitofmeasure" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date Needed</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "dateneeded" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Quantity Ordered</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name = "quantityordered" class="form-control" required>
                          <span class="fa fa-key form-control-feedback right" aria-hidden="true" required></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style = "font-size:11px;">Remark</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "remark" required>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  <!--<input type = "hidden" name = "status" value = "active">-->
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-3">Supplier</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                         <select  name = "supplier_id" class = "form-control">
						 	<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from supplier ORDER BY branch_id ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['supplier_id'];
							?>
							<option value = "<?php echo $row1['supplier_id'];?>"><?php echo $row1['supplier_name'];?></option>	
							<?php } ?>																 
						 </select>
                          <span class="fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                    
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        
                        <input type="reset"  id="reset" class="btn btn-block btn-danger" name="reset" value="Clear"/>
                          <br/>
                          <button name = "" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                          <br/>
                          <a href="requestreceipt.php" name = "" class="btn btn-block btn-primary"><i class = "fa fa-print"></i> Print</a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>