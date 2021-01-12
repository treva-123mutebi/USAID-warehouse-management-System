<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
if(empty($_SESSION['branch'])):
header('Location:../index.php');
endif;
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Item Inventory Report | <?php include('../dist/includes/title.php');?></title>
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
    <style type="text/css">
      h5,h6{
        text-align:center;
      }
		

      @media print {
          .btn-print {
            display:none !important;
		  }
		  .main-footer	{
			display:none !important;
		  }
		  .box.box-primary {
			  border-top:none !important;
		  }
		  
          
      }
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
         

          <!-- Main content -->
          <section class="content">
            <div class="row">
	    <div class="col-xs-12">
              <div class="box box-primary">
					
              
                <div class="box-body">
				<?php
include('../dist/includes/dbcon.php');

$branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error());
  
        $row=mysqli_fetch_array($query);
        
?>      
                  <h5><b><?php echo $row['branch_name'];?></b> </h5>  
                  <h6>Address: <?php echo $row['branch_address'];?></h6>
                  <h6>Contact #: <?php echo $row['branch_contact'];?></h6>
				  <h5><b>Item Inventory as of today, <?php echo date("M d, Y h:i a");?></b></h5>
                  
				  <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
							<a class = "btn btn-primary btn-print" href = "home.php"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>   
						               <script>
                             
                           </script>
                  <table id="example" class="table table-bordered table-striped">
                    <thead>
					
                      <tr>
					              <th>Item Description</th> 
                        <th>Batch Number</th>
                        <th>Expiry Date</th>
                        <th>Supplier</th>                        
                        <th>Qty Left</th>
						
            						<th>Price</th>
            						<th>Total</th>
            						<!--<th>Reorder</th>-->
                       
                      </tr>
                    </thead>
                    <tbody>
<?php
		$branch=$_SESSION['branch'];
		$query=mysqli_query($con,"select * from product natural join category natural join supplier where branch_id='$branch' order by prod_name")or die(mysqli_error());
		$grand=0;
		while($row=mysqli_fetch_array($query)){
			$total=$row['prod_price']*$row['prod_qty'];
			$grand+=$total;
?>
                      <tr>
                        <td><?php echo $row['cat_name'];?></td>
                        <td><?php echo $row['prod_name'];?></td>
                        <td><?php echo $row['expirydate'];?></td>
                        <td><?php echo $row['supplier_name'];?></td>
                        <td><?php echo $row['prod_qty'];?></td>
						
						<td><?php echo $row['prod_price'];?></td>
						<td><?php echo number_format($total,2);?></td>
					<!--	<td class="text-center"><?php if ($row['prod_qty']<=$row['reorder'])echo "<span class='badge bg-red'><i class='glyphicon glyphicon-refresh'></i>Reorder</span>";?></td>-->
                       
                      </tr>

<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="5">Total Stock Available</th>
                        
						
						<th colspan="2">Ugx <?php echo number_format($grand,2);?></th>
						
                        
                      </tr>	
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr> 
                      <tr>
                        <th>Prepared by:</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr> 
<?php
    $id=$_SESSION['id'];
    $query=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);
 
?>                      
                      <tr>
                        <th><?php echo $row['name'];?></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>  				  
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->

	      </div><!-- /.box -->
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
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>


    
    
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
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
  </body>
</html>
