<?php
include('db_config.php');

 $cat_id = $_POST['cat_id'];
 $subcat_id = $_POST['subcat_id'];
 $submini_id = $_POST['subminicat_id'];

 if($subcat_id!="")
 {
	$subcat_id=" AND subcat_id=".$subcat_id;
 } else {
	$subcat_id=''; 
 }
  
 if($submini_id!="undefined" || $submini_id!="0")
 {
	$submini_id=" AND submini_id='".$submini_id."'";
 } else { 
	$submini_id="";
 } 
 //echo 	'SELECT * FROM product_attributes WHERE cat_id='.$cat_id.$subcat_id.$submini_id;
 $q=mysqli_query($con,
					'SELECT * FROM product_attributes WHERE cat_id='.$cat_id.$subcat_id.$submini_id.' GROUP by specification');
 if(mysqli_num_rows($q)>0)
 {
	while($r=mysqli_fetch_array($q))
	{
	   echo '<div class="form-group">
				<label class="col-sm-3 control-label">'.$r['specification'].'</label>
                      <div class="col-sm-3">
                        <input name="'.$r['specification'].'" id="txt'.$r['specification'].'" type="text" class="form-control">
                      </div>
			    </div>';
	}
 }
 
?>
