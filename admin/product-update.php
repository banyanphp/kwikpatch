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
<?php 
include('../include/config.php');

$sku=$_GET['id'];

$productname=$_GET['productname'];
$tablename=$_GET['tablename'];
$query1="select * from $tablename where fld_prodcode='$sku' and fld_prodname='$productname'";
//echo $query1;exit();
$result=mysqli_query($con,$query1);
//get sub category name
$query2="select * from tbl_categorytblname where fld_tablename='$tablename'";
$result2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($result2);
$subcategoryname=$row2['fld_level2name'];
//get maincategory name
$main_cat_id=$row2['fld_level1id'];
$query3="select * from tbl_kwikcategories where id='$main_cat_id'";
$result3=mysqli_query($con,$query3);
$row3=mysqli_fetch_array($result3);
$maincategoryname=$row3['category_name'];
while($row=mysqli_fetch_array($result))
{ 
$id=$row['fld_id'];
?>


      <div class="page-container">
	  
          <div class="widget">
            <div class="widget-heading clearfix">
              <h3 class="widget-title pull-left">Update <?php echo $row['fld_prodname']?></h3> 
            </div>
            <div class="widget-body"> 
			
               
                <div class="tab-content">
                 <div id="general" role="tabpanel" class="tab-pane <?php if(isset($_SESSION["msg"])){ echo '';} else { echo 'active';}?>"><?php $count=1; ?>
				  <form method="post" ID="add_product" action="product_update.php" class="form-horizontal" enctype="multipart/form-data" name="product">
				    <input type="hidden" name="action" value="product">
						
					<div class="form-group">
					
                      <label for="txtProductName" class="col-sm-3 control-label">Main Category</label>
                      <div class="col-sm-9">
	
                        <input type="text" name="maincategory" class="form-control"  value="<?php echo $maincategoryname?>"readonly>
                      </div>
                    </div>
						
					
					<div class="form-group">
                      <label for="txtProductName" class="col-sm-3 control-label"> Sub Category Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="subcategory" class="form-control"  value="<?php echo $subcategoryname;?>"readonly>
                      </div>
                    </div>
				
					<div class="form-group">
                      <label for="txtProductName" class="col-sm-3 control-label" > Status</label>
                      <div class="col-sm-9">
							  <select name="status"  style="width:100%"required>
								  <option value="1" <?php if($row['fld_delstatus']==1 ){  ?>  selected <?php }?> >Enabled</option>
								  <option value="0" <?php if($row['fld_delstatus']==0 ){  ?>  selected <?php }?>> Disabled</option>

							  </select>
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label for="txtProductName" class="col-sm-3 control-label">Product Code</label>
                      <div class="col-sm-9">
                        <input type="text" name="designno" class="form-control"  value="<?php echo $row['fld_prodcode'];?>"required>
                      </div>
                    </div>
					
					<div class="form-group">
							  <label for="txtProductName" class="col-sm-3 control-label">Product Name</label>
							  <div class="col-sm-9">
								<input name="name" type="text" class="form-control"  value="<?php echo $row['fld_prodname'];?>"required>
							  </div>
             `       </div>  
                    <div class="form-group">
                      <label for="txtMetaTagKeywords" class="col-sm-3 control-label">Quantity</label>
                      <div class="col-sm-9">
                        <input type="number" name="quantity" class="form-control" value="<?php echo $row['fld_qty'];?>" required>
                      </div>
                    </div>
					
						<?php 	

						//select field
					
				      $query = mysqli_query($con,"select * from $tablename ") or die("mysqli error"); 
					  $count1 = mysqli_num_fields($query);
					  $specheadingg=array();  
					  $specheadingg1=array();  
					  $testt =array();
					  $columnnamess = array();
					  //$specname=array();
					  $i=0;
					  $j=0;
					  while ($property = mysqli_fetch_field($query))
					   {
					   if($i>2)
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
								  <div class="col-sm-9"> <?php  $co=$count++;?><?php  
								  //select dynamic field value
								 $new="fld_";
	$key=strtolower($test_fld[$f]);
	$new.="$key";
								  $q4="select $new from $tablename where fld_prodcode='$sku'";
//echo $q4;
								  $result4=mysqli_query($con,$q4);
								  $row4=mysqli_fetch_array($result4);
								  ?>
									<input type="text" name="field[<?php echo $new ?>]" class="form-control" value="<?php echo $row4["$new"] ?>" required>
								  </div>
								</div>
					   <?php         } } ?>	
					
					
					<div class="form-group">
					 <div class="pull-right">
					 <input type="hidden" name="count" value="<?php echo $co;?>">
					<input type="hidden" name="tablename" value="<?php echo $tablename ?>">
					<input type="hidden" value="<?php echo $id?>" name="sku">
				
					  <input type="submit" name="btnsavesuppprod" id="btnsavesuppprod" class="btn btn-primary" style="margin-right: 32px;" value="Update">
				     </div>
					</div>
  				   </form>

                 
                </div>
            </div>
          </div>
        </div> 
</div><?php } ?>
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
	
 </body>
</html>