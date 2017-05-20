<?php
@include('include/config.php');

session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	
}
else
{
	$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$phno=$_POST['phno'];
$uid=$_SESSION['uid'];
if((isset($_POST['fname']))&&(isset($_POST['lname'])) && (isset($_POST['email'])) && (isset($_POST['phno'])) && ($uid!="")){
$q="UPDATE `registration` SET `username` = '$email', `firstname` = '$fname', `lastname` = '$lname', `ph_no` = '$phno' WHERE `registration`.`id` = '$uid'";
$query=mysqli_query($con,$q);
?><script type ="text/javascript">
alert('Account Details Updated Successfully');

</script>
<?php  header("Location:accountinformation.php");}}

?>