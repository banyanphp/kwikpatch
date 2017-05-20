<?php
include('../include/config.php');
$id=$_POST['id'];

$q="Delete from registration where id='$id'";
$result=mysqli_query($con,$q);


 ?>