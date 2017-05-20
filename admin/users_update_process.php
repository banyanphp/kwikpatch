
 

 <?php
include('../include/config.php');
// exit();
session_start();
if(isset($_POST['submit']))
{
@include('include/config.php');

$vendorid=$_POST['vendor_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$phno=$_POST['phoneno'];
$cname=$_POST['cname'];
$status=$_POST['status'];
$addressline1=$_POST['addressline1'];
if($_POST['addressline2']!=""){
$addressline2=$_POST['addressline2'];


}
else{
	$addressline2="";
}
$city=$_POST['city'];
$zip=$_POST['zip'];

$state=$_POST['state'];
$country=$_POST['country'];

//check if user exist
$query="SELECT * FROM `registration` WHERE `id`= '$vendorid'";


//echo $query;  
$result=mysqli_query($con,$query);
$val=mysqli_num_rows($result);	
//upload images in vendors folder

	

	 
 
 $q="UPDATE `registration` SET `username` = '$email', `firstname` = '$fname', `lastname` = '$lname', `company_name` = '$cname', `addressline1` = '$addressline1', `addressline2` = '$addressline2', `ph_no` = '$phno', `zip` = '$zip', `city` = '$city', `state` = '$state', `country` = '$country',  `status` = '$status' WHERE `registration`.`id` = $vendorid";
 
	

$res=mysqli_query($con,$q);
if($res)
{
	
	$_SESSION['updatemsg']="123";
	echo "<script>window.location.href='list_users.php'</script>";
}
else{
	$_SESSION['updateerror']="123";
	echo "<script>window.location.href='list_users.php'</script>";
}
}
?>