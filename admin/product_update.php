<?php
session_start();
include('../include/config.php');
if(isset($_POST['btnsavesuppprod'])){
	//print_r($_POST);exit();
$tablename=$_POST['tablename'];
$productname=$_POST['name'];
$designno=$_POST['designno'];
$status=$_POST['status'];

$total=$_POST['count'];
$field=$_POST['field'];
$sku=$_POST['sku'];
		
		
		$q="UPDATE $tablename SET `fld_prodname` = '$productname',`fld_prodcode` = '$designno', `fld_delstatus` = '$status' WHERE `id` = '$sku'";
//echo $q;exit();
		mysqli_query($con,$q);
									
foreach( $field as $key => $value){

	

	
	
$query="UPDATE $tablename SET `$key` = '$value' WHERE $tablename.`fld_id` = $sku";
echo $query."<br/>";
$res=mysqli_query($con,$query);



}

	$_SESSION['msg']="Update";
				header("Location:product-list.php");	


				}
				
				
				

			
				
	
?>