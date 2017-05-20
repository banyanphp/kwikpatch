<?php
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	
}
else
{?>
	<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<style type="text/css">
.dashboard {
    font-size: xx-large;
    color: white;
    background-color: #0A4764 !important;
    padding-left: 37px;

}
</style>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches" />
<meta name="keywords" content="tirerepairs,gums,cements,earthmovers,conveyor,beltrepairs,tubelesstirerepairs,tube repairs" />
<meta name="author" content="Banyan Infotech" />

<!-- Page Title -->
<title>Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches</title>


<!-- Favicon and Touch Icons -->
<link href="images/icon.png" rel="shortcut icon" type="image/png">
<link href="images/icon.png" rel="apple-touch-icon">
<link href="images/icon.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/icon.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/icon.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script type="text/javascript" language="javascript">
function checkform(theform) {

if(document.theform.fname.value == 0)
{
alert("Enter your First Name");
document.theform.fname.focus();
return false;
}

if(document.theform.lname.value == 0)
{
alert("Enter your Last Name");
document.theform.lname.focus();
return false;
}

if(document.theform.username.value.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
{
alert("Enter Valid Username. Ex:abc@abc.com");
document.theform.username.value = "";
document.theform.username.focus();
return false;
}


if(document.theform.phoneno.value == 0)
{
alert("Enter Your Phone No.");
document.theform.phoneno.focus();
return false;
}

}
</script>
<script type="text/javascript" language="javascript">
function checkpasswordform(passwordform) {
if (document.passwordform.cpassword.value.length== 0) {
   alert("Password and username not exist");
   document.passwordform.cpassword.focus(); 
   return false;
  	}	

if (document.passwordform.password.value.length == 0) {
   alert("Enter Password");
   document.passwordform.password.focus(); 
   return false;
  	}
	// check for minimum length
	var minLength = 6; // Minimum length
	if (document.passwordform.password.value.length < minLength) {
	alert('Your password must be at least ' + minLength + ' characters long. Try again.');
	document.passwordform.password.value = "";
	document.passwordform.password.focus();
	return false;
	}
	
if (document.passwordform.password.value != document.passwordform.rpassword.value) {
   alert("Password does not match. Please make sure.");
   document.passwordform.rpassword.focus(); 
   return false;
  	}	
	

}
</script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner" class="spinner large-icon">
      <img alt="" src="images/preloaders/logo.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
 <?php 
 @include('top.php');
 ?>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.png">
      <div class="container pt-90 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">My Account</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">My Account</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: myaccount -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
             
                 <div class="dashboard">My Account</div>
                <?php  
			   @include('include/config.php');
			   $uname=$_SESSION['username'];
$q="select * from registration where username='$uname'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result)){


  ?> <form action="change-user.php" method="POST" name="theform" onsubmit="return checkform();">
                           
              <div class="col-md-12">
                <div class="billing-details">
                 
                  <div class="row">
				  <br/>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-fname">First Name<span class="mand-field">*</span></label>
                      <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $row['firstname'];?>" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-lname">Last Name<span class="mand-field">*</span></label>
                      <input id="lname" type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $row['lastname'];?>" >
                    </div>
					<div class="form-group col-md-6" >
                      <label for="checkuot-form-fname">Email<span class="mand-field">*</span></label>
                      <input id="username" type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row['username'];?>" >
				 </div>
					<div class="form-group col-md-6">
                      <label for="checkuot-form-lname">Phone No<span class="mand-field">*</span></label>
                      <input id="phoneno" type="tel" class="form-control" placeholder="Phone No" name="phno"  value="<?php echo $row['ph_no'];?>">
                    </div>
      

                    
				</div>
                </div>
 </div>
              <div class="col-md-12">
			  
                <div class="text-right" > <input type="submit" name="submit" style="padding:5px 20px; background-color:#0A4764;color:#fff;    border-radius: 6px;" >
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="    font-size: 14px;
    padding: 10px 4px;">Change Password</button></div>
              </div>
            </form>
<?php } ?>
			
                
                
              </article>
             
			 <br/><br/>
              <div class="comments-area">
               
               
			   
			
			
			
			   
			   
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
            
              <div class="widget">
                <h3 class="widget-title line-bottom">My Account</h3>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <li><a href="myaccount.php">Account Dashboard</a></li>
                    <li><a href="accountinformation.php">Account Information</a></li>
                    <li><a href="addressbook.php">Address Books</a></li>
                    <li><a href="orderdetails.php">My Orders</a></li>
                  </ul>
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->

  </div>
  <!-- Footer -->
 <?php @include('bottom.php');?>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
		   <form action="change-password.php" method="POST" name="passwordform" onsubmit="return checkpasswordform();">
		
            <label for="checkuot-form-cpassword">Current Password<span class="mand-field">*</span></label>
            <input id="checkuot-form-cpassword" type="password" class="form-control"  name="cpassword" >
			<label for="checkuot-form-password">Password<span class="mand-field">*</span></label>
            <input id="checkuot-form-password" type="password" class="form-control" name="password" >
	        <label for="checkuot-form-rpassword">Repeat Password<span class="mand-field">*</span></label>
            <input id="checkuot-form-rpassword" type="password" class="form-control" name="rpassword" >
				  
        </div>
        <div class="modal-footer" style="border-top:none !important">
		 <input type="submit" name="submit" style="padding:5px 20px; background-color:#0A4764;color:#fff;    border-radius: 6px;" >
		
			
		</form>	
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>

</html>
	
<?php
	
}
?>