<?PHP
session_start();
@include('include/config.php');
if(isset($_SESSION['uid'])){
    header("location:myaccount.php");
}


$email=$_POST['username'];
$psw=md5($_POST['psw']);
if((isset($_POST['pid']))&&(isset($_POST['pname'])) && (isset($_POST['pcategory'])) && (isset($_POST['psubcategorytblname'])) && (isset($_POST['psubcategoryname']))){
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pcategory=$_POST['pcategory'];
$psubcategorytblname=$_POST['psubcategorytblname'];
$psubcategoryname=$_POST['psubcategoryname'];
$sid=$_POST['sid'];
$cid=$_POST['cid'];
}

$q="select * from registration where username='$email' and password='$psw' and status='1'";

$res=mysqli_query($con,$q);
while($row=mysqli_fetch_array($res))

{
	
	$_SESSION['username'] = $row['username'];
	
	$_SESSION['uid'] = $row['id'];
	$_SESSION['fname']=$row['firstname'];
}
if(isset($_SESSION['username'])&& (isset($_POST['pid'])))
{
	
header("Location:addtocart.php?cid=$cid&sid=$sid&pid=$pid&pname=$pname&pcategory=$pcategory&psubcategorytblname=$psubcategorytblname&psubcategoryname=$psubcategoryname");
}

else if (isset($_SESSION['username']))
	
{	
	
	header("Location:product-categories.php");
}
else{
$q1="select * from registration where username='$email' and password='$psw'";

$res1=mysqli_query($con,$q1);	
$count=  mysqli_num_rows($res1);
if($count==1){
    header("Location:login.php?message=error&username=$email");
    
}
else{
      header("Location:login.php?message=invalid");
   
}
}
?>