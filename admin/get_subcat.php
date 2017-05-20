<?php
include('../include/config.php');
	$q=mysqli_query($con,'SELECT * FROM tbl_categorytblname WHERE fld_level1id="'.$_POST['cat_id'].'"');
	if(mysqli_num_rows($q)>0)
	{
		echo '<label for="col-sm-3 control-label" style="float: left; margin-left: 107px;margin-right: 50px;">Sub Categorys</label>
		
			   <select id="subcatdrop" name="subcat_id" onChange="getSubminicat(this.value)" class="form-control" style=" width: 74% !important;">
				<option value="">--- Select Sub Category ---</option>';
		while($r=mysqli_fetch_array($q))
		 {
			echo '<option value="'.$r['fld_level2id'].'">'.$r['fld_level2name'].'</option>';
		 }
		 echo '</select>';
	}
?>