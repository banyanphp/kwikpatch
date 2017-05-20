<?php 
include('../include/config.php');
if(isset($_POST['id']))
	{
		$id=$_POST['id'];
		$status=$_POST['status'];
		$q="select * from tbl_categorytblname where `fld_level2id`=$id";
	//echo $q; exit();
		$results=mysqli_query($con,$q);
		$row2=mysqli_fetch_array($results);
		//print_r($row2);
		
		//echo $row2['cat_id'];exit();
		//check main category
$q4="select * from tbl_kwikcategories where `id`=$row2[fld_level1id] and `status`='1'";
//echo $q4;exit();
$result2=mysqli_query($con,$q4);
$count=mysqli_num_rows($result2);
if($count>0){
	

	  $query1="UPDATE `tbl_categorytblname` SET `fld_delstatus` = $status  WHERE `fld_level2id` = $id";
	  //select products table
	  $query2="select * from tbl_categorytblname where `fld_level2id` = $id";
	  $result=mysqli_query($con,$query2);
	 
	  
	  
	  while($row1=mysqli_fetch_array($result))
	  {
		  $tablename=$row1['fld_tablename'];
		  
	  	  $query3="UPDATE $tablename SET `fld_delstatus` = $status";
		  $q3=mysqli_query($con,$query3);
		  
	  }

		  
		  $q1=mysqli_query($con,$query1);
	  
	  
	  if($q1==true&$q3==true)
	  {
		echo "Update Sub Category  successfully"; 
	  }
	  else
	  {
		echo "Failed to Update Sub Category"; 
	  }
}
else{
	echo "First update the main category";
}
	}