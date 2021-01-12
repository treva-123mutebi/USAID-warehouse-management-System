<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Receipt | <?php include('dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    
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
                <?php	
					include 'dbcon.php';								
					$query1=mysqli_query($con,"select * from requestforquotation NATURAL JOIN supplier NATURAL JOIN user NATURAL JOIN branch ORDER BY datemade ASC")or die(mysqli_error($con));
					while ($row=mysqli_fetch_array($query1)){
					$id=$row['ItemID'];							
                ?>
                <table class="table">
                    <thead>
                      <tr>
                        <th colspan="3"><h5><b><?php echo $rowb['branch_name'];?></b></h5></th>
                        <th><b><u>SALES INVOICE</u></b></th>
                      </tr>
                      <tr>
                        <th colspan="3"><h6><?php echo $rowb['branch_address'];?></h6></th>
                        <th><span style="font-size: 16px;color: red">No. <?php echo $row1['or_no'];?></span></th>
                      </tr>
                      <tr>
                        <th colspan="3"><h6>Contact #: <?php echo $rowb['branch_contact'];?></h6></th>
                        <th></th>
                      </tr>
                      
                    </thead>