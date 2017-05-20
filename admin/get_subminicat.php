<?php
include('db_config.php');
	$q=mysqli_query($con,'SELECT * FROM submini_category WHERE subcat_id="'.$_POST['subcat_id'].'"');
	if(mysqli_num_rows($q)>0)
	{
		echo '<label for="ddlStatus">Sub mini categorys</label>
				<select id="submini_drop" name="subminicat_id" onChange="changeminicat(this.value)" class="form-control">
				  <option value="">--- Select Sub mini category ---</option>';
		while($r=mysqli_fetch_array($q))
		 {
			echo '<option value="'.$r['submini_id'].'">'.$r['submini_category'].'</option>';
		 }
		echo '</select>';
	}
?>