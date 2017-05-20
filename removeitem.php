<?php
session_start();
@include('include/config.php');

$code=$_POST['id'];
$id=$_SESSION['uid'];
$q="DELETE FROM `tbl_addtocart` WHERE `id`='$code' AND `user_id`='$id' AND `is_Shifted`='0'";
$q1=mysqli_query($con,$q);
if($q1){
    echo "1";
}
