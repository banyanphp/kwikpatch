<?php session_start();
@include('include/config.php');
$id=$_SESSION['uid'];
$total=$_POST['total'];
$prdcode=$_POST['prd_code'];
$prd_qty=$_POST['quantity'];
$prd_cushion=$_POST['prd_cushion'];
$prd_backpoly=$_POST['prd_backpoly'];

for($i=1;$i<=$total;$i++){
	$code=$prdcode[$i];
	$cushion=$prd_cushion[$i];
$backpoly=$prd_backpoly[$i];
	$qty=$prd_qty[$i];
	$query="UPDATE `tbl_addtocart` SET `qty` = '$qty' WHERE `prd_code` = '$code' AND `backpoly_color`='$backpoly' AND `cushion_color`='$cushion' AND  `user_id`='$id' ";
$res=mysqli_query($con,$query);

	header("Location:shop-cart.php");
}

?>