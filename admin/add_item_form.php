<div class="x_panel">
                  <div class="x_title">
                    <h2>Add Item<i class = "fa fa-building"></i></h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_item.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Item Code:</label><br/>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "cat_code">
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Item Desc:</label><br/>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea style = "resize:none;" name = "cat_name" class="form-control"></textarea>
                          <span class="fa fa-home form-control-feedback right" aria-hidden="true" required></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Units Per Pack:</label><br/>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "unitsperpack" required>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <!--<label class="col-md-3 col-sm-3 col-xs-3">Skin Color</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                         <select  name = "skin" class = "form-control">
							<option value = ""	></option>					 
							<option value = "red">red</option>					 
							<option value = "purple">purple</option>					 
							<option value = "black">black</option>					 
							<option value = "blue">blue</option>					 
							<option value = "green">green</option>					 
							<option value = "yellow">yellow</option>									 
						 </select>
                          <span class="fa form-control-feedback right" aria-hidden="true"></span>
                        </div>-->
                      </div>
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        
                          <button name = "" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>