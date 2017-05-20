
 

 <?php
include('../include/config.php');
 session_start();
// exit();
if(isset($_POST['submit']))
{



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$psw=md5($_POST['password']);
$rpsw=md5($_POST['rpassword']);
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
$query="SELECT * FROM `registration` WHERE `username`= '$email'";

//echo $query;  
$result=mysqli_query($con,$query);
$val=mysqli_num_rows($result);	

//echo $val;
if($val==0){
	
 if($psw===$rpsw){
	
	 
	$q="INSERT INTO `registration` (`id`, `username`, `password`, `firstname`, `lastname`, `company_name`, `addressline1`, `addressline2`,`ph_no`, `zip`,`city`, `state`,  `country`,   `status`) VALUES ('', '$email', '$psw', '$fname', '$lname', '$cname', '$addressline1', '$addressline2','$phno','$zip', '$city', '$state',  '$country',  '$status')";
 //echo $q;
	$res=mysqli_query($con,$q);
		$_SESSION['add']="add";
	 header('location:list_users.php');
	 
 }


}
else{
 	$_SESSION['error']="123";
	 header('location:list_users.php');
 }
	
}
?>