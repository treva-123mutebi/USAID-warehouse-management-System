<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
if(empty($_SESSION['branch'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Receipt | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    
    <style type="text/css">
      tr td{
        padding-top:-10px!important;
        border: 1px solid #000;
      }
      @media print {
          .btn-print {
            display:none !important;
          }
      }
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">

          <section class="content">
            <div class="row">
	      <div class="col-md-12">
              <div class="col-md-12">

              </div>
                
                <div class="box-body">

                  <!-- Date range -->
                  <form method="post" action="">
<?php
include('../dist/includes/dbcon.php');
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];
    $queryb=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error());
  
        $rowb=mysqli_fetch_array($queryb);
        
?>			
                 
<?php

    $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from stockin natural join supplier where branch_id='$branch' order by stockin_id desc LIMIT 0,1")or die(mysqli_error($con));
      
        $row=mysqli_fetch_array($query);
       
        $stockin_id=$row['stockin_id'];
        $supplier_name=$row['supplier_name'];
        //$first=$row['cust_first'];
        $address=$row['supplier_address'];
        $contact=$row['supplier_contact'];
        $sid=$row['stockin_id'];
        //$due=$row['amount_due'];
        //$discount=$row['discount'];
        //$grandtotal=$due-$discount;
        $total=$row['total'];
        //$change=$row['cash_change'];

        $query1=mysqli_query($con,"select * from product where stockin_id='$stockin_id'")or die(mysqli_error($con));
      
        $row1=mysqli_fetch_array($query1);

?>    
         

                   <table class="table">
                    <thead>
                      <tr>
                        <th colspan="3"><h5><b><?php echo $rowb['branch_name'];?></b></h5></th>
                        <th><b><u> Delivery Note</u></b></th>
                      </tr>
                      <tr>
                        <th colspan="3"><h6><?php echo $rowb['branch_address'];?></h6></th>
                        <th><span style="font-size: 16px;color: red">No. <?php echo $row1['stockin_id'];?></span></th>
                      </tr>
                      <tr>
                        <th colspan="3"><h6>Contact : <?php echo $rowb['branch_contact'];?></h6></th>
                        <th></th>
                      </tr>
                      
                    </thead>
                    <thead>

                      <tr>
                        <th>Delivered from</th>
                        <th><u><?php echo $supplier_name;?></u></th>
                        <th>Date</th>
                        <th><u><?php echo date("M d, Y");?> Time <?php echo date("h:i A");?></u></th>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <th><u><?php echo $address;?></u></th>
                        <th>TIN</th>
                        <th>________________________</th>
                      </tr>
                      <tr>
                        <th>Contact</th>
                        <th><u><?php echo $contact;?></u></th>
                        <th>Terms</th>
                        <th>________________________</th>
                      </tr>
                    </thead>
                  </table>
                  <table class="table">
                    <thead>
                        
                      <tr style="border: solid 1px #000">
                        <th>QUANTITY</th>
                        <th>Unit per pack</th>
                        <th>Item Description</th>
                        <th>Batch Number</th>
                        <th>Expiry Date</th>
            		   <th>Unit Price</th>
            		   <th class="text-right">AMOUNT</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		$query=mysqli_query($con,"select * from  product natural join category where stockin_id='$sid'")or die(mysqli_error($con));
			$grand=0;
		while($row=mysqli_fetch_array($query)){
				//$id=$row['temp_trans_id'];
				$total= $row['prod_qty']*$row['prod_price'];
				$grand=$grand+$total;
        
?>
                      <tr>
            						<td><?php echo $row['prod_qty'];?></td>
                        <td><?php echo $row['unitsperpack'];?></td>
                        <td class="record"><?php echo $row['cat_name'];?></td>
                        <td class="record"><?php echo $row['prod_name'];?></td>
                        <td class="record"><?php echo $row['expirydate'];?></td>
            						<td><?php echo number_format($row['prod_price'],2);?></td>
            						<td style="text-align:right"><?php echo number_format($total,2);?></td>
                                    
                      </tr>
					  

<?php }?>					
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                        <td style="text-align:right"><?php //echo number_format($grand,2);?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                        <td style="text-align:right"><?php //echo number_format($discount,2);?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"><b>TOTAL AMOUNT </b></td>
                        <td style="text-align:right"><b><?php echo number_format($grand,2);?></b></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"></td>
                        <td style="text-align:right"><?php //echo number_format($tendered,2);?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-right"><b></b></td>
                        <td style="text-align:right"><b><?php //echo number_format($change,2);?></b></td>
                      </tr> 
                      <tr>
                        <th>Prepared by:</th>
                        <th></th>
                        <th></th>
                        <th>_________________________</th>
                      </tr> 
<?php
    $query=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error($con));
    $row=mysqli_fetch_array($query);
 
?>                      
                      <tr>
                        <th><?php echo $row['name'];?></th>
                        <th></th>
                        <th></th>
                        <th>Signature</th>
                      </tr>  
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
				</div>  
				</form>	
                </div><!-- /.box-body -->
                <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
                <a class = "btn btn-primary btn-print" href = "home.php"><i class ="glyphicon glyphicon-arrow-left"></i> Back to Homepage</a>
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
           
          </div><!-- /.row -->
	  
             
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
     
    </div><!-- ./wrapper -->
	
	
	<script type="text/javascript" src="autosum.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../dist/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
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
   
  </body>
</html>
