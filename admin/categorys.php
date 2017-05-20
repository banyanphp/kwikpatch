<?php 
include('header.php');  
?>


    <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left"><?php if($_GET['id']==1) {?>
            <h2>Visible Product Categorys</h2> 
		  <?php } ?>
		  <?php if($_GET['id']==0) {?>
            <h2>InVisible Product Categorys</h2> 
		  <?php } ?>
		  
          </div>
		  <div class="pull-right">
		    <button type="button" data-toggle="modal" data-target=".bs-example-modal-form" class="btn btn-warning">+ Add Category</button> 
			
			<!-- Add category -->
			  <div tabindex="-1" role="dialog" aria-labelledby="modalWithForm" class="modal fade bs-example-modal-form">
				<div role="document" class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
					  <h4 id="modalWithForm" class="modal-title">Add Category</h4>
					</div>
					<div class="modal-body">
					  <form action="cat_process.php" method="post" enctype="multipart/form-data">
					    <input type="hidden" value="cat" name="action">
						<div class="form-group">
						  <label for="exampleInputEmail1">Category name</label>
						  <input name="catname" type="text" placeholder="Enter category" class="form-control" required>
						</div>  
						<div class="form-group">
						  <label for="exampleInputEmail1">Category Image</label>
						   <input type="file" name="file" id="fileChooser" onchange="return ValidateFileUpload()" />
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
                        <th>Categories Name</th> 
                         <th>Categories Images</th> 
                        <th>Action</th> 
                      </tr>
                    </thead> 
                    <tbody>
					 <?php  
					 $id=$_GET['id'];
					$q="select * from tbl_kwikcategories where status= $id ";
				//	echo $q;
					 $qr=mysqli_query($con,$q);
					 $sno=1;
					 while($row=mysqli_fetch_array($qr))
					 {
					  ?>
                      <tr> 
                        <td><?php echo $sno++;?></td>
                        <td><a href="sub_category.php?cat_id=<?php echo $row['id']?>"><?php echo $row['category_name']?></a></td>
                        <?php if(!empty($row['category_img'])) { ?>
                        <td><img src="../images/product/<?php echo $row['category_img'];?>" style="width:100px;height:100px;"></td>
                        
                        <?php	} else { ?>
                        <td> </td>
                        <?php }  ?>
                        <td>
                            
                        <button type="button"  onclick="updatecategory(<?php echo $row['id']?>)"class="btn btn-success"><i class="ti-pencil"></i></button>
<?php if($row['status']=='1') { ?>
                        <button type="button" onclick="updatestatus(<?php echo $row['id']?>,<?php echo 0; ?>)" class="delete btn btn-danger"><i class="ti-trash"></i></button>
<?php } else { ?>  
<button type="button" onclick="updatestatus(<?php echo $row['id']?>,<?php echo 1; ?>)" class="delete btn btn-success" >   <img src="image/tick1.png"style="width: 14px;"/></button>
 <?php } ?>

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
<span id="dataresponse"></span>
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
 function updatestatus(id,status){
	// alert(id);
	 var result= confirm ("Are you sure for Update Product category ?");
	 //alert(id);
	 if(result)
	 {
		// alert('sss');
		  $.ajax({
                    type: "POST",
                    url: 'cat_process.php',
                    data: {
            id: id,
            status:status,
        },
		 success: function(data)
    {   
    alert(data);
    //alert("Category is Updated Successfully");    
           
    location.reload();
    },
		
                   
                });
		
	 }
	 
	
	

}
 function updatecategory(id){
	
		// alert('sss');
		  $.ajax({
                    type: "POST",
                    url: 'updatecategory.php',
                    data: {
            id: id,
           
        },
		 success: function(data)
    {   
    $('#dataresponse').html(data);
                $('#myModal12').modal('show');

    },
		
                   
                });
		
	 }
	 
	
	


</script>
	
	
	<?php
	/* ====== Success Message ====== */
	if(isset($_SESSION["msg"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Category Successfully created!', 'Success'); 
	     });
	    </script>";  
 	 unset($_SESSION['msg']); 
	}
        /* ====== Updated Message ====== */
	if(isset($_SESSION["update"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Category Successfully updated!', 'Success'); 
	     });
	    </script>";  
 	 unset($_SESSION['update']); 
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