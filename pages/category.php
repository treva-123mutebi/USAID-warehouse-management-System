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
    <title>Item | <?php include('../dist/includes/title.php');?></title>
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
      <?php include('../dist/includes/header.php');
      include('../dist/includes/dbcon.php');
      ?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
            <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
              <li class="active">Item Code</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-4">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Add New Item </h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="cat_add.php" enctype="multipart/form-data">
  
                  <div class="form-group">
                    <label for="date">Item Code</label>
                    <div class="input-group col-md-12">
                      <input type="text" class="form-control pull-right" id="date" name="cat_code" placeholder="Item Code" required><br/>
                      <!--<input type="text" class="form-control pull-right" id="date" name="itemdesc" placeholder="Item Description" required>-->
                    </div>
                    <br/>
                    <div class="input-group col-md-12">
                    </div>
                    <br/>
                    <label for="date">Item Description</label>
                    <div class="input-group col-md-12">
                      <!--<input type="text" class="form-control pull-right" id="date" name="category" placeholder="Item number" required><br/>-->
                      <input type="text" class="form-control pull-right" id="date" name="cat_name" placeholder="Item Description" required>
                    </div>
                    <br/>

                    <!-- /.input group -->
                    <label for="date">Units Per Pack</label>
                    <div class="input-group col-md-12">
                      <!--<input type="text" class="form-control pull-right" id="date" name="category" placeholder="Item number" required><br/>-->
                      <input type="number" class="form-control pull-right" id="date" name="unitsperpack" placeholder="Units per pack" required>
                    </div>
                  </div><!-- /.form group -->
                  <br/>
                    
                    <!-- /.input group -->
                  <!-- /.form group -->
		  
                  <div class="form-group">
                    <div class="input-group">
                      <button class="btn btn-primary" id="daterange-btn" name="">
                        Save
                      </button>
					  <button class="btn" id="daterange-btn">
                        Clear
                      </button>
                    </div>
                  </div><!-- /.form group -->
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-xs-8">
              <div class="box box-primary">
    
                <div class="box-header">
                  <h3 class="box-title">Item  List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
			<th>Item Code</th>
      <th>Item Description</th>
      <th>Units per Pack</th>
			<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
		$query=mysqli_query($con,"select * from category order by cat_name")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
		
?>
                      <tr>
                        <td><?php echo $row['cat_code'];?></td>
                        <td><?php echo $row['cat_name'];?></td>
                        <td><?php echo $row['unitsperpack'];?></td>
                        <td>
				<a href="#updateordinance<?php echo $row['cat_id'];?>" data-target="#updateordinance<?php echo $row['cat_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>
				
						</td>
                      </tr>
<div id="updateordinance<?php echo $row['cat_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Item Code</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="cat_update.php" enctype='multipart/form-data'>
                
				<div class="form-group">
					<label class="control-label col-lg-3" for="name">Item Description</label>
					<div class="col-lg-9"><input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['cat_id'];?>" required>  
					  <input type="text" class="form-control" id="name" name="category" value="<?php echo $row['cat_name'];?>" required> <br/>
            <label class="control-label col-lg-3" for="name">Item Code</label>
            <input type="text" class="form-control" id="name" name="cat_code" value="<?php echo $row['cat_code'];?>" required> <br/>
            <label class="control-label col-lg-3" for="name">Units Per Pack</label>
            <input type="text" class="form-control" id="name" name="unitsperpack" value="<?php echo $row['unitsperpack'];?>" required> <br/>

					</div>
				</div> 
				
				
              </div><hr>
              <div class="modal-footer">
		<button type="submit" class="btn btn-primary">Save changes</button>
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
                        <marquee><th>Medicine Warehouse Portal</th></marquee>
			
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
