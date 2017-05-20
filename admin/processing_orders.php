	<?php include('header.php'); ?>
<?php error_reporting(0); ?>	
		
      <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h2>Product List</h2> 
          </div> 
        </div>
		<?php if(isset($_GET['update'])) { ?>

		
	
		  <div class="page-header clearfix" style="
    background-color: #0667D6;
    color: #ffffff;
">
          <div class="pull-left">
           <?php  if($_GET['update']=="update"){?>
					
					 Product Succesfully Updated 
					 
				</div></div>	
		<?php } } ?>
        <div class="page-content container-fluid"> 
            <div class="widget-body"> 
              <table id="example-1" cellspacing="0" width="100%" class="table table-hover">
                    <thead>
                  <tr>
                  
                          <th>Order.No</th>
                        <th>Ordered By</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php
				include('../include/config.php');

				$q=mysqli_query($con, 'SELECT `order_no`,`user_name`,`date`,`is_pending`,`is_shifted`,`is_processing`,`is_completed`,`id`,SUM(qty) as total FROM tbl_order  where is_pending=1 and is_shifted=1 and is_processing=1 and is_completed=0 group by order_no');
				while($row=mysqli_fetch_array($q))
				{
				  
					
				?>
                 <tr>
                    
                 <td class="text-center"><?php echo $row['order_no'] ?></td>
                            <?php $orderno = mysqli_real_escape_string($con, $row['order_no']); ?>
                            <td class="text-center"><?php echo $row['user_name'] ?></td>
                            <td class="text-center"><?php echo $row['date'] ?></td>
                              <td class="text-center"><?php echo $row['total'] ?></td>
					
                    <td><span class="label label-success" style="padding: 3px 15px;"><?php  echo "Processing"; ?></span></td>
                    <td class="text-center">
                      <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                       <button type="button" class="btn btn-outline btn-primary" onclick="window.location.href='view_order.php?id=<?php echo $row['id'];?>'"><i class="ti-eye"></i></button>

                        <button type="button"   class="btn btn-outline btn-success" onclick="window.location.href='change_order_status.php?id=<?php echo $row['id'];?>&page=2'"><i class="ti-pencil"></i></button>
						
                        <button type="button"  class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                      </div>
                    </td>
                  </tr>   
				<?php
				
						 }	
				?>
                </tbody>
                  </table>
                </div>  
            </div>
          </div>
        </div>
      </div>
     
    <!-- jQuery-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Animo.js-->
    <script type="text/javascript" src="plugins/animo.js/animo.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>  
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- DataTables-->
    <script type="text/javascript" src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>  
    <script type="text/javascript" src="plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script> 
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/first-layout/app.js"></script>
    <script type="text/javascript" src="build/js/first-layout/demo.js"></script>
    <script type="text/javascript" src="build/js/page-content/tables/data-tables.js"></script> 
	<!-- Sweet Alert-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/lib/sweet-alert.css">
	<script type="text/javascript" src="plugins/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
	
<script language="JavaScript" type="text/javascript">
 function fn_delete(sku,productname,tablename){
	 var result= confirm ("Are you sure for deleting Product ?");
	 if(result)
	 {
		  $.ajax({
                    type: "POST",
                    url: 'delete_product.php',
                    data: {
            fld_prodcode: sku,
            fld_prodname: productname,
			tablename:tablename
        },
		 success: function(data)
    {   
    alert(data);
   // alert("Product is deleted Successfully");    
           
    location.reload();
    },
                   
                });
		
	 }
	 
	
	

}

</script>
	
	

<?php
/* ====== Success Message ====== */
if (isset($_SESSION["msg"])) {
    if (($_SESSION["msg"]) == "approved") {
        echo "<script>
	     $(document).ready(function(){
		 toastr.success('Ordered Approved!', 'Success'); 
	     });
	    </script>";
        unset($_SESSION['msg']);
    } else if (($_SESSION["msg"]) == "pending") {
        echo "<script>
	     $(document).ready(function(){
		 toastr.success('Order pending', 'Success'); 
	     });
	    </script>";
        unset($_SESSION['msg']);
    } else if (($_SESSION["msg"]) == "processing") {
        echo "<script>
	     $(document).ready(function(){
		 toastr.success('Order Processing', 'Success'); 
	     });
	    </script>";
        unset($_SESSION['msg']);
    } else if (($_SESSION["msg"]) == "completed") {
        echo "<script>
	     $(document).ready(function(){
		 toastr.success('Order Completed', 'Success'); 
	     });
	    </script>";
        unset($_SESSION['msg']);
    }
}

/* ====== Query Error Message ====== */
if (isset($_SESSION["error"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.error('We could not process your Request. Try again!'); 
	     });
	    </script>";
    unset($_SESSION['error']);
}
?>
  </body>
  
	
</html>