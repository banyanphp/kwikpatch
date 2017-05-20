<?php
include_once('db_config.php');
if($_POST['image_form_submit'] == 1)
{
	$images_arr = array();
	foreach($_FILES['images']['name'] as $key=>$val){
		$image_name = $_FILES['images']['name'][$key];
		$tmp_name 	= $_FILES['images']['tmp_name'][$key];
		$size 		= $_FILES['images']['size'][$key];
		$type 		= $_FILES['images']['type'][$key];
		$error 		= $_FILES['images']['error'][$key];
		$sku=$_POST['sku'];
		$id=$_POST['cat_id'];
		$pid=$_POST['pid'];
		$image_name1=$_FILES['images']['name'];

		############ Remove comments if you want to upload and stored images into the "uploads/" folder #############
		$rand=rand();
		$target_dir = "uploads/";
		$img_name=$rand;
	$img_name.=$_FILES['images']['name'][$key];

	

		$target_file = $target_dir.$img_name;
		if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$target_file)){
			$images_arr[] = $target_file;
		}
		
		
		//display images without stored
		/* $extra_info = getimagesize($_FILES['images']['tmp_name'][$key]);
    	$images_arr[] = "data:" . $extra_info["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name'][$key])); */
	}
$result = count($images_arr);
for($i=0;$i<$result;$i++){
	$path=$images_arr[$i];
	$image_name = $_FILES['images']['name'][$i];
	$q="INSERT INTO `product_image`(`sku`,`sub_cat_id`,`pid`,`image_name`,`imagepath`,`is_default`,`status`) Values('$sku','$id','$pid','$image_name','$path','0','0')"; 
	
	echo "<br/>";
	$results=mysqli_query($con,$q);
	
}
	header("Location:product_imgdefault.php?id=$id&sku=$sku&pid=$pid");

	
}
?>