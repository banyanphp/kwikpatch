<?php 
include("../include/config.php");	
$current=md5($_POST['current']);
$cpassword=md5($_POST['cpassword']);
$user=$_POST['user'];
$q=mysqli_num_rows(mysqli_query($con,"select * from admin where user='$user'and pass='$current'"));

if($q==1){
	$update=mysqli_query($con,"UPDATE admin SET pass='$cpassword' where user='$user'");
	if($update)
	{
		echo "<div style='color:#00c292;text-align:center'>Password Successfully changed</div>";
	}
	else{
		echo "<div style='color:#c9302c;text-align:center'>Error to update  Password .Please contact Your service Provider</div>";
	}
}
else{
	echo "<div style='color:#c9302c;text-align:center'>Please enter Correct Password</div>";
  //  echo "select * from admin where user=$user and pass='$current'";
}
?> 