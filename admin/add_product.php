    <?php include('header.php'); ?>
      <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h2>Add Product</h2>  
            </ol>
          </div> 
        </div>
        <div class="page-content container-fluid">
          <div class="widget">
            <div class="widget-heading clearfix">
              <h3 class="widget-title pull-left">Select Category</h3> 
            </div>
            <div class="widget-body">
                   <form method="post" ID="add_product" action="add_products.php" class="form-horizontal">
				    <input type="hidden" name="action" value="product">
                  <div class="form-group">
                          <label class="col-sm-3 control-label">Product Category</label>
                          <div class="col-sm-9">
                            <select id="catdrop" name="category" class="form-control" required>
							  <option value="">---- Select Category ----</option>
                              <?php
							  $q=mysqli_query($con,'SELECT * FROM tbl_kwikcategories');
							  while($row=mysqli_fetch_array($q))
							  {
								echo '<option value="'.$row['id'].'">'.$row['category_name'].'</option>';
							  }
							  ?>
                            </select> 
                          </div>
                    </div>
					<div class="form-group">
					
					  <div class="col-sm-12" id="subcat_drop"></div>
					</div>
					
					<div class="form-group">
					 <div class="pull-right">
				
					  <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save"></i> Next</button>
					  <button type="submit" class="btn btn-danger" onClick="document.location.href='';"><i class="ti-share-alt"></i> Cancel</button>
				     </div>
					</div>	
					
					
					</form>
                </div>  
            </div>
        </div> 
    <!-- jQuery-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> 
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
	<!-- Bootstrap Select-->
	<script type="text/javascript" src="plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
	<script type="text/javascript" src="build/js/page-content/file-uploads/bootstrap-file-input.js"></script>
    <!-- Summernote-->
    <script type="text/javascript" src="plugins/summernote/dist/summernote.min.js"></script>  
    <script type="text/javascript" src="build/js/page-content/e-commerce/edit-product.js"></script>
	<?php
	/*if(isset($_SESSION["msg"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Product Successfully Added!', 'Success'); 
	     });
	    </script>";  
 	  unset($_SESSION['msg']); 
	}
	
	if(isset($_SESSION["errormsg"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.error('We could not process your Request. Try again!'); 
	     });
	    </script>";  
 	  unset($_SESSION['errormsg']); 
	} 
	if(isset($_SESSION["img"]))
	{  
	  echo "<script>
	     $(document).ready(function(){
		 toastr.success('Product image uploaded!', 'Success'); 
	     });
	    </script>";  
 	  unset($_SESSION['img']); 
	  unset($_SESSION['p_id']);
	  unset($_SESSION['cat_id']);
	}*/
	?>
 <script> 	
   $(document).ready(function() {
		
	/* ======= category get sub category ======== */
	   $('#catdrop').change(function(){
		   val=$(this).val();
			 $.ajax({
				type: "POST",
				url: "get_subcat.php",
				data:'cat_id='+val,
				success: function(data){
					$("#subcat_drop").html(data);
				   }
			 });
	   });
	   
	/* === get submini category === */ 
	
	  /*=================== SUBMIT FORM ====================*/
	
	  /*=================== END SUBMIT FORM ====================*/
	  
});
	</script>
  </body>
</html>