<?php
session_start();
if(isset($_SESSION['login']))
{
  header("Location: dashboard.php");
  exit;
}
include('../include/config.php');
/* Login authendication */
if(isset($_REQUEST['login']))
{
   $user=$_POST['user'];
   $pass=md5($_POST['pass']); 
   $query='SELECT * FROM admin WHERE user="'.htmlspecialchars($user).'" AND pass="'.htmlspecialchars($pass).'"';
 
   $q=mysqli_query($con,$query);
   if(mysqli_num_rows($q)==1)
   {
	   while($row=mysqli_fetch_array($q)){
	 $_SESSION['user']=$user;
	 $_SESSION['login']='Admin';
	 $_SESSION['user_id']=$row['id'];
	
	   }
     header("Location: dashboard.php");
	 exit;
   }
else{
    $_SESSION['error']="error";
}
      
}
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kwik Patch - Login</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="plugins/themify-icons/themify-icons.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="build/css/first-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(build/images/backgrounds/24.jpg)" class="body-bg-full">
    <div class="container page-container">
      <div class="page-content">
        <div class="logo"><h1 class="text-primary">KwikPatch</h1></div>
        <form method="post" action="" class="form-horizontal">
          <div class="form-group">
            <div class="col-xs-12">
              <input type="text" name="user" placeholder="Username" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">  
            </div>
          </div>
          <button type="submit" name="login" class="btn-lg btn btn-primary btn-rounded btn-block">Sign in</button>
        </form> 
      </div>
    </div>
     
    <!-- jQuery-->
     <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->  
	<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
	<script>
	$(document).ready(function(){
	  <?php
	  if(isset($_SESSION['error']))
	  {
	  ?>
	  toastr.error('Username & Password Incorrect!', 'Error');
	  <?php
	  unset($_SESSION['error']);
	  } 
	  ?>
	});
	</script>
  </body>
</html>