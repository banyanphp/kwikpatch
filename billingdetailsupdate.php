<?php

	@include('include/config.php');


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$cname=$_POST['cname'];

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
$id=$_POST['id'];
$phoneno=$_POST['phone'];





	 
	 
	 $q="UPDATE `tbl_billing_address` SET `firstname` = '$fname',`lastname` = '$lname', `email` = '$email',`phoneno`='$phoneno',`addressline1` = '$addressline1', `addressline2` = '$addressline2', `companyname` = '$cname', `city` = '$city', `state` = '$state', `zip` = '$zip', `country` = '$country' WHERE `tbl_billing_address`.`id` = '$id'";

	 $res=mysqli_query($con,$q);
	if($res){
        echo "1";
        
        }
        else{
            echo "2";
        }

	


?>