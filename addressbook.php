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
              <h3 class="title text-white">Single Post</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Single Post</span></li>
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
             
                 <div class="dashboard">My Address</div>
                 <div class="col-md-12">
                <div class="billing-details">
                 
                  <div class="row">
				  
                    <div class="form-group col-md-6"><h3>Default Billing Address</h3>
                   
					  <?php @include ('include/config.php');
				
				  $id=$_SESSION['uid'];
               $query="SELECT * FROM `tbl_billing_address` WHERE `user_id`='$id' AND `status`='1' AND `is_default`='1'";
			
			   $result=mysqli_query($con,$query);
			
			  
			   while($row=mysqli_fetch_array($result))
			   { 
			  ?>
			  <p><?php echo $row['firstname']." ". $row['lastname'].",";?></p>
			  <p>  <?php echo $row['email'].",";?></p>
			  <p>  <?php echo $row['addressline1'].",";?></p>
			  <p>  <?php echo $row['addressline2'].",";?></p>
			   <p>  <?php echo $row['companyname'].",";?></p>
			  <p>  <?php echo $row['city'].",";?></p>
			  <p>  <?php echo $row['state'].",";?></p>
			  <p>  <?php echo $row['country']."-" . $row['zip'].".";?></p>
			    <p> Tel: <?php echo $row['phoneno'].",";?></p>
			<div style="font-size: large;float: right;margin-top: 10px;margin-right: 10px;">
			<a href="changebillingaddress.php?id=<?php  echo $row['id'];?>" style="color:#0A4764 !important;">Change billing address</a></div>
			   
			   <?php } ?>
                    </div>
					   <div class="form-group col-md-6"><h3>Default Shipping Address</h3>
					   
                      
                      					  <?php @include ('include/config.php');
				
				  $id=$_SESSION['uid'];
               $query="SELECT * FROM `tbl_shipping_address` WHERE `user_id`='$id' AND `status`='1' AND `is_default`='1'";
			
			   $result=mysqli_query($con,$query);
			
			  
			   while($row=mysqli_fetch_array($result))
			   { 
			  ?>
			 <p><?php echo $row['firstname']." ". $row['lastname'].",";?></p>
			  <p>  <?php echo $row['email'].",";?></p>
			  <p>  <?php echo $row['addressline1'].",";?></p>
			  <p>  <?php echo $row['addressline2'].",";?></p>
			   <p>  <?php echo $row['companyname'].",";?></p>
			  <p>  <?php echo $row['city'].",";?></p>
			  <p>  <?php echo $row['state'].",";?></p>
			  <p>  <?php echo $row['country']."-" . $row['zip'].".";?></p>
			  <p> Tel: <?php echo $row['phoneno'].",";?></p>
			
			   <div style="font-size: large;float: right;margin-top: 10px;margin-right: 10px;">
			<a href="changeshippingaddress.php?id=<?php echo $row['id'];?>" style="color:#0A4764 !important">Change shipping address</a></div>
			   <?php } ?>
                    </div>
				
      

                    
				</div>
                </div>
 </div>
			
                
                
              </article>
             
			 <br/><br/>
            
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
    
     
    
    </div>
  </div>
</body>

</html>
	
<?php
	
}
?>