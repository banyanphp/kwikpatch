<?php
@include('include/config.php');

session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	
}
else
{
		$cpassword=$_POST['cpassword'];
		$password=md5($_POST['password']);
		$rpassword=md5($_POST['rpassword']);
				$uid=$_SESSION['uid'];
		$conn="select * from registration where id='$uid' and password='$cpassword'";
		
						$query=mysqli_query($con,$conn);
$res=mysqli_num_rows($query);

			if(($res>=1)&& 	($password===$rpassword) ) 
			{
				
			
 
				
						$q="UPDATE `registration` SET `password` = '$password' WHERE `registration`.`id` = '$uid'";
						$query=mysqli_query($con,$q);
			?>
					<script type ="text/javascript">
					
					alert('Account Details Updated Successfully');

					</script>
					
					
			<?php  header("Location:accountinformation.php");
			
			}
			
			else
			
			{
			
			?>
	
			<script type ="text/javascript">
				
				alert('Password Not match');

			</script>
			
			<?php 
			}
			header("Location:accountinformation.php");
}

?>