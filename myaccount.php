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

  
  <!-- Header -->
 <?php 
 @include('top.php');
 ?>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
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
                <div class="entry-header">
               
                  </div>
                 <div class="dashboard">My Dashboard</div>
                
                
				 <h4><b>Hello <?php  echo $_SESSION['fname']."!";   ?></b> </h4>

  <p style="margin-left:10px;">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information.

Select a link below to view or edit information
				  </p>
                  
                
                
              </article>
             
			 <br/><br/>
              <div class="comments-area">
                <div class="dashboard">Recent Orders<div style="font-size: large;float: right;margin-top: 10px;margin-right: 10px;"><a href="">View all</a></div></div>
               
			   
			    <table class="table table-striped table-bordered tbl-shopping-cart" style="margin-top:10px;">
                <thead>
                  <tr>
                  <th>S.No</th>
                    <th>Order No</th>
					 <th>Product Name</th>
                    <th>Ship to</th>
                   
                    <th>Status</th>
<th></th>
					
                  </tr>
                </thead>
                <tbody>
                
				  
				  <?php @include ('include/config.php');
				
				  $id=$_SESSION['uid'];

				  $query="SELECT * FROM `tbl_order` WHERE `user_id`='$id' AND status='1' GROUP BY order_no ORDER BY `tbl_order`.`id` DESC LIMIT 0,4 "; 
			
	$result=mysqli_query($con,$query);
			   $sno=0;
			  
			   while($row=mysqli_fetch_array($result))
			   { 
			  
			   ?>     <tr class="cart_item">
			 
                   <td> <?php $sno+=1;echo $sno;  ?></td>
                    <td class="product-price"><span class="amount"><?php echo $row['order_no'];?></span>                </td>
                    <td class="product-price"><span class="amount"><?php echo $row['prd_name'];?></span>                </td>
					
                   <td class="product-price"><span class="amount"><?php echo $row['shipping_first_name']." ". $row['shipping_last_name'];?></span>                </td>
				   <td class="product-price"><span class="amount">
				  
				   <?php	 
				     if(($row['is_pending']==1) && ($row['is_shifted']==1) && ($row['is_processing']==1) && ($row['is_completed']==1) )
				      {
					   echo "Completed";
					   }
					   
					   
					 else  if(($row['is_pending']==1) && ($row['is_shifted']==1) && ($row['is_processing']==1) && ($row['is_completed']==0)) 
				   {
					   echo "Processing";
					   }
					   
					else if(($row['is_pending']==1) && ($row['is_shifted']==1) && ($row['is_processing']==0) && ($row['is_completed']==0)) 
				   {
					   echo "Approved";
					   }
					   
					   
					else if(($row['is_pending']==1) && ($row['is_shifted']==0) && ($row['is_processing']==0) && ($row['is_completed']==0)) 
				   {
					   echo "Pending";   
					 
				   }
					   
			     ?>   	  </span>                </td>

					                    <td class="product-price"><span class="amount"><a href= "vieworder.php?id=<?php echo $row['order_no'];?>">View Order </a></span>                </td>
 
                  </tr> 
			<?php }   ?> 

                 
                  <tr class="cart_item">
                
                   
					
                  </tr>
                </tbody>
              </table>
			  
			   
			   
			   
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
   <?php
  @include("bottom.php");
  ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/demo/personal/j/horseman/demo/blog-single-right-sidebar.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2016 06:08:50 GMT -->
</html>
	
<?php
	
}
?>