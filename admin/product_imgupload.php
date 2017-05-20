   <?php include('header.php');?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#images').on('change',function(){
		$('#multiple_upload_form').ajaxForm({
			target:'#images_preview',
			beforeSubmit:function(e){
				$('.uploading').show();
			},
			success:function(e){
				$('.uploading').hide();
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
            <h2>Product Image Upload</h2>  
            </ol>
          </div> 
        </div>
        <div class="page-content container-fluid">
          <div class="widget">
            <div class="widget-heading clearfix">
              <h3 class="widget-title pull-left">Add New Product</h3> 
            </div>
            <div class="widget-body"> 
			
               
                <div class="upload_div">
    <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="upload.php">
    	<input type="hidden" name="image_form_submit" value="1"/>
            <label style="float:left;font-size: x-large;color: #055bbd!important;margin-right: 32px;">Choose Image:</label>
            <input type="file" name="images[]"  id="images" multiple  >
    
	
		   <div class="form-group">
					 <div class="pull-right">
					   <input type="hidden" value="<?php  echo $_GET['id'];?>" name="cat_id">
						<input type="hidden" value="<?php  echo $_GET['sku'];?>" name="sku">
					<input type="hidden" value="<?php  echo $_GET['pid'];?>" name="pid">
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
<script type="text/javascript" src="jquery.form.js"></script>
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