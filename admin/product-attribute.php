<?php 
include('header.php');  
?>
    <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h2>Product Specification</h2> 
          </div>
		  <div class="pull-right">
		    <button type="button" data-toggle="modal" data-target="#product_specification" class="btn btn-warning">+ Product Specification</button>
			 <div id="product_specification" role="dialog" aria-labelledby="modalWithForm" class="modal fade">
				<div role="document" class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
					  <h4 id="modalWithForm" class="modal-title">Add Sub Minicategory</h4>
					</div>
					<div class="modal-body">
					  <form action="db_productattribute.php" method="post"> 
						<div class="form-group">
						  <label for="ddlStatus">Categorys</label>
						  <select name="cat_id" id="catdrop" class="form-control" onChange="getSubcat(this.value);" required>
							<option value="">--- Select Category ---</option>
							<?php
							$q=mysqli_query($con,'SELECT * FROM category');
							while($r=mysqli_fetch_array($q))
							{
								echo '<option value="'.$r['cat_id'].'">'.$r['category'].'</option>';						
							}
							?>
						  </select>
						</div>
						<div class="form-group" id="subcat_drop"></div>
						<div class="form-group" id="subminicat_drop"></div>
						<div class="form-group">
						  <label for="exampleInputEmail1">Specification </label>
						  <input name="attribute[]" type="text" placeholder="Enter specification 1" class="form-control" required>
						</div> 
						<div class="form-group" id="specification"></div>
						<div class="pull-right">
						  <a href="javascript:void(0);" id="addmore">+ more specification</a>
						</div>
					</div>
					<div class="modal-footer">
					  <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
					  <button type="submit" name="submit" class="btn btn-primary">Save</button>
					</div>
				   </form>
				  </div>
				</div>
			  </div>
		  </div>
        </div>
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-lg-12"> 
                <div class="widget-body">
                  <table id="example-1" cellspacing="0" width="100%" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Sub category</th> 
                        <th>Submini category</th> 
                        <th>Specification</th> 
                        <th>Action</th> 
                      </tr>
                    </thead> 
                    <tbody>
					 <?php  
					 $qr=mysqli_query($con,'SELECT * FROM product_attributes');
					 while($row=mysqli_fetch_array($qr))
					 {
						//get category
						$cat=mysqli_fetch_array(mysqli_query($con,'SELECT * FROM category WHERE cat_id="'.$row['cat_id'].'"'));
						
						//get sub category
						$subcat=mysqli_fetch_array(mysqli_query($con, 'SELECT * FROM sub_category WHERE subcat_id="'.$row['subcat_id'].'"'));
						
						if($subcat['sub_category']!="")
						 { 
						  $subcategory=$subcat['sub_category']; 
						 } else { 
						 $subcategory='<span class="label label-default">Empty</span>'; 
						 }
						
						//get submini category
						$submini=mysqli_fetch_array(mysqli_query($con, 'SELECT * FROM submini_category WHERE submini_id="'.$row['submini_id'].'"'));
						if($submini['submini_category']!="")
						 { 
						  $subminicategory='<td>'.$submini['submini_category'].'</td>'; 
						 } else { 
						 $subminicategory='<td class="text-center"><span class="label label-default"> empty </span></td>'; 
						 }
						
					  echo 
                      '<tr> 
                        <td>'.$row['id'].'</td>
                        <td>'.$cat['category'].'</td>
                        <td>'.$subcategory.'</td>
                        '.$subminicategory.'
                        <td>'.$row['specification'].'</td>
						<td>
                        <button type="button" data-toggle="modal" data-target="#editModal'.$row['id'].'" class="btn btn-success"><i class="ti-pencil"></i></button>
                        <button type="button" id="'.$row['id'].'" class="delete btn btn-danger"><i class="ti-trash"></i></button>
                       </td>
                      </tr>';
					?>
					<!-- Edit specification -->
					<div tabindex="-999" role="dialog" aria-labelledby="modalWithForm" id="editModal<?php echo $row['id'];?>" class="modal fade">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							  <h4 id="modalWithForm" class="modal-title">Edit Product Specification</h4>
							</div>
							<div class="modal-body">
							  <form action="db_productattribute.php" method="post"> 
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">							  
								<div class="form-group">
								  <label for="exampleInputEmail1">Specification </label>
								  <input name="attribute" type="text" value="<?php echo $row['specification'];?>" class="form-control" required>
								</div> 
							</div>
							<div class="modal-footer">
							  <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
							  <button type="submit" name="update" class="btn btn-primary">Save</button>
							</div>
						   </form>
						  </div>
						</div>
					  </div>
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
	<script>
	/* === get sub category === */ 
	function getSubcat(val){   
		$.ajax({
		type: "POST",
		url: "get_subcat.php",
		data:'cat_id='+val,
		success: function(data){
			$("#subcat_drop").html(data);
		   }
	   });
	}	
	
	/* === get submini category === */ 
	function getSubminicat(val){  
	  if(val!=="")	
		{
		  $('#catdrop').prop('disabled',true);
		}
		else
		{
		  $('#catdrop').prop('disabled',false);
		}
		
		$.ajax({
		type: "POST",
		url: "get_subminicat.php",
		data:'subcat_id='+val,
		success: function(data){
			$("#subminicat_drop").html(data);
		   }
	   });
	}	
	
	/* === select submini category disabled === */
	function changeminicat(val)
	{
	   if(val!=="")	
		{
		  $('#subcatdrop').prop('disabled',true);
		}
		else
		{
		  $('#subcatdrop').prop('disabled',false);
		}
	}
	
	
	$(document).ready(function(){
	  // ==== More textbox add ====
	  txt=1;
	  $("#addmore").click(function(){  
	  txt++;
		$('#specification').append('<div class="form-group"><input name="attribute[]" type="text" placeholder="Enter specification '+txt+'" class="form-control" required></div>');		
	  });
		
	 /* ===== delete ======== */
	  $(".delete").click(function(){ 
		  //get current record id
		  id=$(this).attr('id'); 
		 swal({
            title: "Are you sure?", 
			text: "Did you want delete product specification?", 
			type: "warning", 
			showCancelButton: !0, 
			cancelButtonText: "No, cancel it!",
			confirmButtonClass: "btn btn-danger",			
			confirmButtonText: "Yes, delete it!", 
			closeOnConfirm: !1
        }
        , function(){ 
              window.location.href = "db_productattribute.php?id="+id; 
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
		 toastr.success('Product Specification Updated!','Successfully!'); 
	     });
	    </script>";  
 	 unset($_SESSION['msg']); 
	}
	/* ====== Deleted Message ====== */
	if(isset($_SESSION["del"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Product Specification Deleted!','Successfully!'); 
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