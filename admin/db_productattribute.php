<?php
session_start();
include('db_config.php');

if(isset($_POST['submit']))
{
	$cat_id=$_POST['cat_id'];
	$subcat_id=$_POST['subcat_id'];
	$subminicat_id=$_POST['subminicat_id'];
	$attribute=$_POST['attribute'];
	foreach($attribute as $attri)
	{
	  mysqli_query($con,'INSERT INTO product_attributes (cat_id, subcat_id, submini_id, specification) VALUES ("'.$cat_id.'","'.$subcat_id.'","'.$subminicat_id.'","'.$attri.'")');
	  if($attri===end($attribute))
	  {
		$_SESSION['msg']='done';
		header("Location: product-attribute.php");
		exit;
	  }
	}
}

/*------------ update product specification ------------- */

else if(isset($_POST['update']))
{
  $q=mysqli_query($con,'UPDATE product_attributes SET specification="'.$_POST['attribute'].'" WHERE id="'.$_POST['id'].'"');
  if($q==true)
  {
	$_SESSION['msg']='done';
	header("Location: product-attribute.php");
	exit;
  }
  else
  {
	$_SESSION['error']='yes';
	header("Location: product-attribute.php");
  }
}

/* ------------ delete product specification -------------- */
if(isset($_GET['id']))
{
  $q=mysqli_query($con,'DELETE FROM product_attributes WHERE id="'.$_GET['id'].'"');
  if($q==true)
  {
	$_SESSION['del']='done';
	header("Location: product-attribute.php");
  }
  else
  {
	$_SESSION['error']='yes';
	header("Location: product-attribute.php");
  }
}
?>