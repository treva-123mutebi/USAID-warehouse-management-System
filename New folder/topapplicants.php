<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Applicant List | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <style>
      
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-<?php echo $_SESSION['skin'];?> layout-top-nav">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              <!--<a class="btn btn-lg btn-primary" href="#add" data-target="#add" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-blue"></i></a>-->
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Product</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	     
            
            <div class="col-xs-12">
              <div class="box box-primary">
    
                <div class="box-header">
                  <h3 class="box-title">Job Applicant List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      	<!--<th>Picture</th>-->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Job Applied For</th>
                        <th>Notes</th>
                        <th>Years of Experience</th>
                        <th>Gender</th>
                       
                        <th>Date Of Birth</th>
                        <th>Download CV</th>
            						
            						
            						
                        <th>View Applications</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
		$query=mysqli_query($con,"select * from applicants natural join category where branch_id='$branch' order by cat_name")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
		
?>
                      <tr>
                      	<!--<td><img style="width:80px;height:60px" src="../dist/uploads/<?php echo $row['prod_pic'];?>"></td>-->
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phonenumber'];?></td>
                        <td><?php echo $row['cat_name'];?></td>
                        <td><?php echo $row['notes'];?></td>
                        <td><?php echo $row['yearsofexperience'];?></td>
						            <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['dateofbirth'];?></td>
                        <td><a href="../<?php echo $row['cv'];?>">Download Applicant CV</a></td>
                        
            						
            						
            						
                        <td>
				<a href="#updateordinance<?php echo $row['ID'];?>" data-target="#updateordinance<?php echo $row['ID'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>
			
						</td>
                      </tr>
<div id="updateordinance<?php echo $row['ID'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Applicant Details</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="#" enctype='multipart/form-data'>
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">Name</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="name" value="<?php echo $row['name'];?>" readonly>  
          </div>
        </div>
                
				<div class="form-group">
					<label class="control-label col-lg-3" for="name">Email</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['ID'];?>" required>  
					  <input type="text" class="form-control" id="name" name="email" value="<?php echo $row['email'];?>" readonly>  
					</div>
				</div> 
        <div class="form-group">
          <label class="control-label col-lg-3" for="name">Phone Number</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="name" name="phonenumber" value="<?php echo $row['phonenumber'];?>" readonly>  
          </div>
        </div> 
				
				
				<div class="form-group">
					<label class="control-label col-lg-3" for="price">Gender</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="gender" value="<?php echo $row['gender'];?>" readonly>  
					</div>
        </div>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">Job Applied for</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="cat_name" value="<?php echo $row['cat_name'];?>" readonly>  
					</div>
        </div>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">Skills</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="skills" value="<?php echo $row['skills'];?>" readonly>  
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="control-label col-lg-3" for="price">Date Of Birth</label>
					<div class="col-lg-9">
					  <input type="date" class="form-control" id="price" name="dateofbirth" value="<?php echo $row['dateofbirth'];?>" readonly>  
					</div>
				</div><br><br><br><br><br><br><br>
				<div class="form-group">
					<label class="control-label col-lg-3" for="price">Cover Letter</label>
					<textarea name="txt_descripcion" cols="66" rows="10" id="txt_descripcion" readonly><?php echo htmlspecialchars($row['coverletter']);?></textarea>
        </div>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">Applicant Notes</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="notes" value="<?php echo $row['notes'];?>" readonly>  
					</div>
        </div>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">Years of Experience</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="yearsofexperience" value="<?php echo $row['yearsofexperience'];?>" readonly>  
					</div>
        </div>
        <br><br><br><br><br><br><br>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">CV:<i><br/><a href="../<?php echo $row['cv'];?>">Click To Download</a></i></label>
					
				</div>
              </div><br><br><br><br><br><br><br>
              <div class="modal-footer">
		
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
			
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->                    
<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                      	
                      </tr>					  
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
 
            </div><!-- /.col -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->
<div id="add" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Add New Product</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="product_add.php" enctype='multipart/form-data'>
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">Product Code</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="serial" placeholder="Product Code" required>  
          </div>
        </div>
                
        <div class="form-group">
          <label class="control-label col-lg-3" for="name">Product Name</label>
          <div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" required>  
            <input type="text" class="form-control" id="name" name="prod_name" placeholder="Product Name" required>  
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">Product Description</label>
          <div class="col-lg-9">
            <textarea class="form-control" id="price" name="prod_desc" placeholder="Product Description"></textarea>  
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-3" for="file">Supplier</label>
          <div class="col-lg-9">
              <select class="form-control select2" style="width: 100%;" name="supplier" required>
                <?php
            
              $query2=mysqli_query($con,"select * from supplier")or die(mysqli_error());
                while($row2=mysqli_fetch_array($query2)){
                ?>
                  <option value="<?php echo $row2['supplier_id'];?>"><?php echo $row2['supplier_name'];?></option>
                <?php }?>
              </select>
          </div>
        </div> 
        
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">Price</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="prod_price" placeholder="Product Price" required>  
          </div>
        </div>
        
        <div class="form-group">
              <label class="control-label col-lg-3" >Category</label>
              <div class="col-lg-9">
                <select class="form-control select2" style="width: 100%;" name="category" required>
              
                <?php
            
              $queryc=mysqli_query($con,"select * from category order by cat_name")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                  <option value="<?php echo $rowc['cat_id'];?>"><?php echo $rowc['cat_name'];?></option>
                <?php }?>
              </select>
              </div><!-- /.input group -->
              </div><!-- /.form group -->
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">Reorder</label>
          <div class="col-lg-9">
            <input type="number" class="form-control" id="price" name="reorder" placeholder="Reorder Point"  required>  
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-lg-3" for="price">Picture</label>
          <div class="col-lg-9">
            <input type="file" class="form-control" id="price" name="image">  
          </div>
        </div>
              </div>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </form>
            </div>
      
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal--> 
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
