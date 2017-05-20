<?php
@include('include/config.php');
if(isset($_POST['submit']))
{
	$email=$_POST['username'];
$q="select * from registration where username='$email'  and status='1'";
$res=mysqli_query($con,$q);
$count=mysqli_num_rows($res);
if($count>0)
{
	?>
	<script type="text/javascript">
 alert("Password details send to your email id");
	  window.location = 'index.php';
</script><?php
}
	else{
			?>
	<script type="text/javascript">
 alert("Your account is not activated or Your account not exists");
   window.location = 'index.php';
 
</script><?php
	
	
		
	}
}
?>