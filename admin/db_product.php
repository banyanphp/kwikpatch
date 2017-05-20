<?php
session_start();
include('db_config.php');

/* ========= product add insert ============== */
if(isset($_REQUEST['submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
	$dno=mysqli_real_escape_string($con,$_POST['designno']);
	$quantity=mysqli_real_escape_string($con,$_POST['quantity']);
	$cat=$_POST['category'];
	$desc=mysqli_real_escape_string($con,$_POST['description']);
	$q=mysqli_query($con, 'INSERT INTO product (cat_id, design_no, name, quantity, description) VALUES ("'.$cat.'","'.$dno.'","'.$name.'","'.$quantity.'","'.$desc.'")');
	  
	//get max id from product table
	$max=mysqli_query($con, 'SELECT MAX(p_id) as id FROM product');
	$max_id=mysqli_fetch_array($max);
	  
	 if($q==true)
	  {
		$_SESSION['msg']='add';
		$_SESSION['cat_id']=$cat;
		$_SESSION['p_id']=$max_id['id'];
		header('Location: add_product.php');
	  }
	  else
	  {
		$_SESSION['errormsg']='error';
		header('Location: add_product.php');
	  } 
} 

/*============ image upload ================*/ 	 
$total = count($_FILES['image']['name']);
for($i=0; $i<$total; $i++) 
{
  $tmpFilePath = $_FILES['image']['tmp_name'][$i];
  if($tmpFilePath != "")
  {
	$newFilePath = "../products/" .$_SESSION['p_id'].'_'.$_FILES['image']['name'][$i];
	$file=$_FILES['image']['name'][$i];
	if(move_uploaded_file($tmpFilePath, $newFilePath)) 
	{
	  //insert db
	  $q=mysqli_query($con, 'INSERT INTO product_image (p_id, cat_id, image) VALUES ("'.$_SESSION['p_id'].'","'.$_SESSION['cat_id'].'","'.$file.'")'); 	
	  $_SESSION['img']='done';
	  header('Location: product-list.php');
	} 
  } 
}
?>