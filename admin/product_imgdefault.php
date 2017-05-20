<?php 
include('header.php');  
?>
    <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h2>Product Image </h2> 
          </div>
		  </div>
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-lg-12"> 
                <div class="widget-body">
				<form method="post" action="set_img_default.php">
                  <table id="example-1" cellspacing="0" width="100%" class="table table-striped table-bordered">
				   <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Product Image Name</th> 
						<th>Image </th> 
						<th>FrontPage view</th> 
						<th>Remove Image</th>
                     
                      </tr>
                    </thead> 
					<tbody>
					 <?php  
					 $sku=$_GET['sku'];
					 $sub_cat_id=$_GET['id'];
					 $pid=$_GET['pid'];
					 $q="SELECT * FROM product_image WHERE `sku`='$sku' AND `sub_cat_id`='$sub_cat_id'";
					 
					 $qr=mysqli_query($con,$q);
					 $sno=1;
					 while($row=mysqli_fetch_array($qr))
					 {
					?>
                    <tr> 
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['image_name']; ?></td>
						<td><img src="<?php echo $row['imagepath']; ?>" style="width:200px;height:200px" /></td>
			<td><input type="radio" name="default" style="margin-left: 81px;width: 30px;height: 23px;" value="<?php echo $row['img_id']?>"  required></td>
						<td><input type="checkbox" name="remove[]"  style="width: 19px;height: 37px;margin-left: 73px;" value="<?php echo $row['img_id']?>"></td>
                      </tr>
					  <?php  $sno++;?>
				
					<?php
					 }
					 ?>
					 
					 
					
					 </tbody>
                  </table>
				  <div class="form-group">
					 <div class="pull-right">
					  	  <input type="hidden" name="sku" value="<?php echo $sku;?>">
						<input type="hidden" name="cat_id" value="<?php echo $sub_cat_id;?>">
							<input type="hidden" name="pid" value="<?php echo $pid;?>">
					  <input type="submit" name="btnsavesuppprod" id="btnsavesuppprod" class="btn btn-primary">
					 
				     </div>
					</div>
				  
				  
				  
				  
				  
				  </form>
                
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
  
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/first-layout/app.js"></script>
    <script type="text/javascript" src="build/js/first-layout/demo.js"></script>
    <script type="text/javascript" src="build/js/page-content/tables/data-tables.js"></script> 
	<!-- Sweet Alert-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/lib/sweet-alert.css">
	<script type="text/javascript" src="plugins/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
	<script>
	$(document).ready(function(){
	 /* ===== delete ======== */
	  $(document).on('click','.delete', function(){ 
		  //get current record id
		  cat_id=$(this).attr('id'); 
		 swal({
            title: "Are you sure?", 
			text: "Did you want delete category?", 
			type: "warning", 
			showCancelButton: !0, 
			cancelButtonText: "No, cancel it!",
			confirmButtonClass: "btn btn-danger",			
			confirmButtonText: "Yes, delete it!", 
			closeOnConfirm: !1
        }
        , function(){ 
              window.location.href = "cat_process.php?id="+cat_id; 
            }
        );
      });
	});
	</script>
	<?php
	/* ====== Success Message ====== */
	if(isset($_SESSION["msg"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Category Successfully Updated!', 'Success'); 
	     });
	    </script>";  
 	 unset($_SESSION['msg']); 
	}
	/* ====== Deleted Message ====== */
	if(isset($_SESSION["del"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Category Successfully Deleted!', 'Success'); 
	     });
	    </script>";  
 	 unset($_SESSION['del']); 
	}
	/* ====== Query Error Message ====== */
	if(isset($_SESSION["error"]))
	{  
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