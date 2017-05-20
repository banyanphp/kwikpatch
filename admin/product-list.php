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
                  
                    <th>Design.No</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php
				include('../include/config.php');

				$q=mysqli_query($con, 'SELECT * FROM tbl_categorytblname');
				while($row=mysqli_fetch_array($q))
				{
				  $tablename=$row['fld_tablename'];
			  
				  $q2="SELECT * FROM $tablename";

				  $cq2=mysqli_query($con,$q2);	
				    $cat2 = mysqli_num_rows($cq2);
				
					 if($cat2 > 0)
					 
					 {
						 while($cat3=mysqli_fetch_array($cq2)){

$cats=mysqli_real_escape_string($con,$cat3['fld_prodname']);

					
				?>
                 <tr>
                    
                    <td class="text-center"><?php  echo $cat3['fld_prodcode']?></td>
					<td class="text-center"><?php  echo $cats; ?></td>
					<td class="text-center"><?php  echo $cat3['fld_qty']?></td>
					
                    <td><span class="label label-success">
					<?php if($cat3['fld_delstatus']==1){ echo 'Enabled';} else { echo 'Disabled';} ?>
					</span></td>
                    <td class="text-center">
                      <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                        <!--<button type="button" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>-->
                        <button type="button"  onClick="window.location='product-update.php?id=<?php  echo $cat3['fld_prodcode']; ?>&productname=<?php echo $cats;?>&tablename=<?php echo $tablename; ?>'" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>
						
                        <button type="button" onClick="fn_delete('<?php echo $cat3['fld_prodcode'] ?>', '<?php echo  $cat3['fld_prodname'] ?>','<?php echo  $tablename ?>')" class="btn btn-outline btn-danger"><i class="ti-trash"></i></button>
                      </div>
                    </td>
                  </tr>   
				<?php
				
						 }	} } 
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
	if(isset($_SESSION["msg"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Product Updated!', 'Success'); 
	     });
	    </script>";  
 	 unset($_SESSION['msg']); 
	}
	
	

	
	?>
  </body>
  
	
</html>