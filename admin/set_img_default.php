<?php
include_once('db_config.php');
$pid=$_POST['pid'];
$cat_id=$_POST['cat_id'];
$sku=$_POST['sku'];


if(isset($_POST['default']))
{
	
	$img_id=$_POST['default'];
	$q1="UPDATE `product_image` SET `is_default`='0' WHERE  `sku`='$sku' AND `sub_cat_id`='$cat_id'  AND `pid`='$pid'";
	//echo $q1;

	$res=mysqli_query($con,$q1);
	if($res)
	{	$q2="UPDATE `product_image` SET `is_default`='1' WHERE `img_id`='$img_id' AND `sku`='$sku' AND `sub_cat_id`='$cat_id'  AND `pid`='$pid'";
	$res=mysqli_query($con,$q2);
	}
	//echo $q2;
}

if(isset($_POST['remove'])){
$id=$_POST['remove'];
//print_r($id); 
$total=count($id);

for($i=0;$i<$total;$i++)
{
	$rem_img=$id[$i];
	$q3="SELECT * FROM `product_image` WHERE `img_id`='$rem_img' AND `sku`='$sku' AND `sub_cat_id`='$cat_id'  AND `pid`='$pid'";
	$query1=mysqli_query($con,$q3);
	
	
	if($query1)
	{
		$row1=mysqli_fetch_array($query1);
		  unlink($row1['imagepath']);
		
		$q="DELETE FROM `product_image` WHERE `img_id`='$rem_img' AND `sku`='$sku' AND `sub_cat_id`='$cat_id'  AND `pid`='$pid'";
	$query=mysqli_query($con,$q);
	
	}
}
}
header("Location:product-list.php");
?>