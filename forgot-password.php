<?php

session_start();
if(isset($_SESSION['username']))
{
	header("Location:product-categories.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

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
  @include("top.php");
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
              <h3 class="title text-white">Welcome to Kwik Patch</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Forgot Password</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row ">
          <div class="col-md-9">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">
		
<form  method="post" action="send-password.php">
	<h1>Forgot Password</h1>
	
	 <div class="form-group col-md-9">
                      <label for="checkuot-form-fname">Username<span class="mand-field">*</span></label>
                      <input id="checkuot-form-fname" type="text" class="form-control" placeholder="email" name="username" required>
					  <br/>
					
					  <input type="submit" name="submit" class="btn btn-default" style="background-color: #0A4764;color: white;float:right;" value="submit" >
	<br/><br/><a href="login.php" style="float:right;text-decoration: underline;color: black;font-size: larger;"> Go Back to Login Page</a>
                    </div>
    
                    
	   <?php if(isset($_GET['pid'])){?>
	   <input type="hidden" name="pid" value="<?php echo $_GET['pid'];?>">
	    <input type="hidden" name="pname" value="<?php echo $_GET['pname'];?>">
		 <input type="hidden" name="pcategory" value="<?php echo $_GET['pcategory'];?>">
		  <input type="hidden" name="psubcategorytblname" value="<?php echo $_GET['psubcategorytblname'];?>">
		   <input type="hidden" name="psubcategoryname" value="<?php echo $_GET['psubcategoryname'];?>">
	   <?php }?>

	 </form>  
 </div>
              </div>
              
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Our Products</h5>
                <ul class="list-divider list-border list check">
        
<?php
				$p = "SELECT * FROM tbl_kwikcategories where  status='1' ";
	         $res = mysqli_query($con,$p);
	     while($row = mysqli_fetch_array($res))
	{
		
			$category_name = $row['category_name'];
			$category_id = $row['id'];
			
			?>
                  <li><a  href="products.php?catid=<?php echo $category_id?>"><?php echo $category_name;?></a></li>
<?php	}  ?>
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
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>

</html>