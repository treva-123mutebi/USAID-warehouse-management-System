

<section class="content">
            <div class="row">
	      <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Update Account Details</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form id = "formE"method="post" action="profile_update.php" onsubmit="return myFunction()">
  
                  <div class="form-group">
                    <label for="date">Full Name</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['name'];?>" name="name" placeholder="Full Name" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Username</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" value="<?php echo $row['username'];?>" name="username" placeholder="Username" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Change Password</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="password" name="password" placeholder="Type new password">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <div class="form-group">
                    <label for="date">Confirm New Password</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="cfmPassword" name="newpassword" placeholder="Reenter new password">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
				  <hr>
					<div class="form-group">
                    <label for="date">Enter Old Password to confirm changes</label>
                    <div class="input-group col-md-12">
                      <input type="password" class="form-control pull-right" id="date" name="passwordold" placeholder="Type old password" required>
                    </div><!-- /.input group -->
					
                  </div><!-- /.form group -->
				  
                  <div class="form-group">
                    <div class="input-group">
                      <input class = "btn btn-primary" type="submit" value="Submit">
					  <button class="btn" id="daterange-btn">
                        Clear
                      </button>
                    </div>
                  </div><!-- /.form group -->
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
</body>