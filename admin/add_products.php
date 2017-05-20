   <?php include('header.php');?>
  <script type="text/javascript">
$(document).ready(function(){
	$('#upload').on('click',function(){
		$('#upload_form').ajaxForm({
			target:'#preview',
			beforeSubmit:function(e){
				$('.progress').show();
			},
			success:function(e){
				$('.progress').hide();
			},
			error:function(e){
			}
		}).submit();
	});
});
</script>

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
              <h3 class="widget-title pull-left">Add New Product</h3> 
            </div>
            <div class="widget-body"> 
			
               
                <div class="tab-content">
                 <div id="general" role="tabpanel" class="tab-pane <?php if(isset($_SESSION["msg"])){ echo '';} else { echo 'active';}?>"><?php $count=1; ?>
				  <form method="post" ID="add_product" action="product_process.php" class="form-horizontal" enctype="multipart/form-data" name="product">
				    <input type="hidden" name="action" value="product">
                    <div class="form-group">
                      <label for="txtProductName" class="col-sm-3 control-label">Design no</label>
                      <div class="col-sm-9">
                        <input type="text" name="designno" class="form-control" required>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="txtProductName" class="col-sm-3 control-label">Product Name</label>
                      <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" required>
                      </div>
             `       </div>  
                    <div class="form-group">
                      <label for="txtMetaTagKeywords" class="col-sm-3 control-label">Quantity</label>
                      <div class="col-sm-9">
                        <input type="number" name="quantity" class="form-control" required>
                      </div>
                    </div>

					
				<?php 	//include_once('db_config.php');
				//print_r($_POST);
						$sub_cat_id=$_POST['subcat_id'];
						$cq="SELECT * FROM tbl_categorytblname WHERE fld_level2id= '$sub_cat_id'";
					//	echo $cq;
						$res=mysqli_query($con,$cq);
						$cat_row=mysqli_fetch_array($res);


						$tablename=$cat_row['fld_tablename'];
				      $query = mysqli_query($con,"select * from $tablename ") or die("mysqli error"); 
					 // echo $query;
					  $count1 = mysqli_num_fields($query);
					//  echo $count1;
					  $specheadingg=array();  
					  $specheadingg1=array();  
					  $testt =array();
					  $columnnamess = array();
					  //$specname=array();
					  $i=0;
					  $j=0;
					  while ($property = mysqli_fetch_field($query))
					   {
					   if($i>2 )
						{
						 $specheadingg = $property->name;
						 $remove = array("fld_");
						 $spec = str_replace($remove, "", $specheadingg);
						 $spec1 = strtolower($spec);
						 $specname = ucwords($spec1);
						 //echo $specname;         
						 $columnnamess[$j] = $specheadingg;
						 
						 $test_fld[$j]=$specname;
						 $j++;
						}
					   $i++;
					   
				   
					   } ?>
					   <?php   for($f=0;$f<$count1-5;$f++)
								 {
									if($test_fld[$f]!="")
									{ ?>
								 <div class="form-group">
								  <label for="txtMetaTagKeywords" class="col-sm-3 control-label"><?php echo $test_fld[$f] ?></label>
								  <div class="col-sm-9"><?php  $q=$count++;?>
									<input type="text" name="field[<?php echo $test_fld[$f] ?>]" class="form-control" >
								  </div>
								</div>
					   <?php         } } ?>	
					

					
					<div class="form-group">
					 <div class="pull-right">
					  <input type="hidden" name="count" value="<?php echo $q;?>">
					
					 <input type="hidden" name="sub_cat_id" value="<?php echo $_POST['subcat_id']?>">
					  <input type="submit" name="btnsavesuppprod" id="btnsavesuppprod" class="btn btn-primary" value="Next">
					  <button type="submit" class="btn btn-danger" onClick="document.location.href='';"><i class="ti-share-alt"></i> Cancel</button>
				     </div>
					</div>
  				   </form>
                  </div>
                 
                </div>
            </div>
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
	
 <script> 	
   $(document).ready(function() {
		
	
	   
	
		$("#txtDescription").summernote({
			height: 200,
			toolbar: [
				["style", ["style"]],
				["font", ["bold", "italic", "underline"]],
				["fontname", ["fontname"]],
				["fontsize", ["fontsize"]],
				["color", ["color"]],
				["para", ["ul", "ol", "paragraph"]],
				["height", ["height"]],
				["table", ["table"]],
				["insert", ["link", "hr"]],
				["view", ["fullscreen"]]
			]
		})
	});
	</script>
	</body>
</html>