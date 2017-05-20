<?php
include('../include/config.php');
session_start();
$sku=$_POST['fld_prodcode'];
$prodname=$_POST['fld_prodname'];
$tablename=$_POST['tablename'];




$q1="delete from $tablename where fld_prodcode='$sku' and fld_prodname='$prodname'";

//echo $q1;exit();
$query1=mysqli_query($con,$q1);
if($query1==true)
{
	echo "Product is Deleted successfully";
}
else
	{
echo "Error in product delete ";
}
?>