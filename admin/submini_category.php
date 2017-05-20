<?php 
include('header.php');  
// get gategory
$cq=mysqli_query($con,'SELECT * FROM category WHERE cat_id="'.$_GET['cat_id'].'"');
$cat_row=mysqli_fetch_array($cq);

//get sub_category
$sq=mysqli_query($con, 'SELECT * FROM sub_category WHERE cat_id="'.$_GET['cat_id'].'" AND subcat_id="'.$_GET['subcat_id'].'"');
$subcat_row=mysqli_fetch_array($sq);
?>
    <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h2>Product Sub Minicategorys</h2> 
			<ol class="breadcrumb mb-0"> 
              <li><a href="categorys.php">Categorys</a></li>
              <li><a href="sub_category.php?cat_id=<?php echo $_GET['cat_id'];?>"><?php echo $cat_row['category']; ?></a></li>
              <li class="active"><?php echo $subcat_row['sub_category']; ?></li> 
            </ol>
          </div>
		  <div class="pull-right">
		    <button type="button" data-toggle="modal" data-target="#subminicat" class="btn btn-warning">+ Sub minicategory</button>
			<!-- Add Sub mini category -->
			 <div id="subminicat" role="dialog" aria-labelledby="modalWithForm" class="modal fade">
				<div role="document" class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
					  <h4 id="modalWithForm" class="modal-title">Add Sub Minicategory</h4>
					</div>
					<div class="modal-body">
					  <form action="cat_process.php" method="post">
					    <input type="hidden" value="subminicat" name="action">
					    <input type="hidden" value="<?php echo $_GET['cat_id'];?>" name="cat_id">
					    <input type="hidden" value="<?php echo $_GET['subcat_id'];?>" name="subcat_id">
						<!--<div class="form-group">
						  <label for="ddlStatus">Categorys</label>
						  <select name="cat_id" class="form-control" onChange="getSubcat(this.value);"  required>
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
						<div class="form-group">
						  <label for="ddlStatus">Sub Categorys</label>
						  <select id="subcat_drop" name="subcat_id" class="form-control" required>
							<option value="">--- Select Sub Category ---</option> 
						  </select>
						</div>-->
						<div class="form-group">
						  <label for="exampleInputEmail1">Category name</label>
						  <input name="submini_cat" type="text" placeholder="Enter category" class="form-control" required>
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
                        <th>S.No</th>
                        <th>Sub Minicategory</th> 
                        <th>Action</th> 
                      </tr>
                    </thead> 
                    <tbody>
					 <?php  
					 $qr=mysqli_query($con,'SELECT * FROM submini_category WHERE subcat_id="'.$_GET['subcat_id'].'"');
					 $sno=1;
					 while($row=mysqli_fetch_array($qr))
					 {
					  echo 
                      '<tr> 
                        <td>'.$sno++.'</td>
                        <td><a href="javascript:void(0);">'.$row['submini_category'].'</a></td>
						<td>
                        <button type="button" data-toggle="modal" data-target="#editModal'.$row['submini_id'].'" class="btn btn-success"><i class="ti-pencil"></i></button>
                        <button type="button" id="'.$row['submini_id'].'" class="delete btn btn-danger"><i class="ti-trash"></i></button>
                       </td>
                      </tr>';
					?>
					<!-- Edit category popup -->
					<div role="dialog" aria-labelledby="modalWithForm" id="editModal<?php echo $row['submini_id'];?>" 
					class="modal fade">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							  <h4 id="modalWithForm" class="modal-title">Edit Sub Minicategory</h4>
							</div>
							<div class="modal-body">
							  <form action="cat_process.php" method="post">
							    <input type="hidden" value="<?php echo $row['submini_id'];?>" name="id">
							    <input type="hidden" value="<?php echo $row['cat_id'];?>" name="cat_id">
							    <input type="hidden" value="<?php echo $row['subcat_id'];?>" name="subcat_id">
							    <input type="hidden" value="submini_update" name="action">
								<div class="form-group">
								  <label for="exampleInputEmail1">Category name</label>
								  <input name="submininame" type="text" value="<?php echo $row['submini_category'];?>" class="form-control" required>
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
	//get cat_id from url
	function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
	$(document).ready(function(){
		 $(document).on('click','.delete', function(){ 
			  
			  cat_id = getUrlVars()['cat_id'];  // call function cat_id from url
			  subcat_id = getUrlVars()['subcat_id'];
			  
			  minicat_id=$(this).attr('id'); //get current record id 
			  
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
					window.location.href = "cat_process.php?cat_id="+cat_id+"&subcat_id="+subcat_id+"&delsubmini_id="+minicat_id; 
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
		 toastr.success('Sub minicategory Added!', 'Success'); 
	     });
	    </script>";  
 	 unset($_SESSION['msg']); 
	}
	/* ====== Deleted Message ====== */
	if(isset($_SESSION["del"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Sub minicategory Deleted!', 'Success'); 
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