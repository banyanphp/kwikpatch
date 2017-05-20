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
.mand-field
{
	color:red;
	
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
              <h3 class="title text-white">Shipping Details</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Shipping Address</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row mt-30">
		    <form id="shipping-form">
          <div class="col-md-12">     <span id="error"style="color:#ff0000;text-align: center;margin-left: 19%;font-size: 18px;"></span>      </div>

              <div class="col-md-8">
                <div class="billing-details">
                  <h3 class="mb-30">Shipping Details</h3>
				<?php @include ('include/config.php');
				
				  $id=$_SESSION['uid'];
               $query="SELECT * FROM `tbl_shipping_address` WHERE `user_id`='$id' AND `status`='1' AND `is_default`='1'";
			
			   $result=mysqli_query($con,$query);
			
			  
			   while($fetchuser2=mysqli_fetch_array($result))
			   { 
			  ?> 
                    
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-fname2">First Name</label>
                                                                    <input id="fname22" type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $fetchuser2['firstname']; ?>">
                                                                    <span id="error_fname22" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-lname2">Last Name</label>
                                                                    <input id="lname22" type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $fetchuser2['lastname']; ?>">
                                                                    <span id="error_lname22" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="checkuot-form-cname2">Company Name</label>
                                                                        <input id="cname22" type="text" class="form-control" placeholder="Company Name" name="cname" value="<?php echo $fetchuser2['companyname']; ?>">
                                                                        <span id="error_cname22" style="color: #ff0000;"></span>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="checkuot-form-address2">Address</label>
                                                                        <input id="address22" type="text" class="form-control" placeholder="Street address" name="addressline1" value="<?php echo $fetchuser2['addressline1']; ?>">
                                                                        <span id="error_address2"style="color: #ff0000;"></span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"name="addressline2" value="<?php echo $fetchuser2['addressline2']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-email">Email Address</label>
                                                                    <input id="email22" type="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo $fetchuser2['email']; ?>">
                                                                    <span id="error_email22"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-email">Phone No</label>
                                                                    <input id="phone22" type="tel" class="form-control" placeholder="Phone No" name="phone"  value="<?php echo $fetchuser2['phoneno']; ?>">
                                                                    <span id="error_phno22" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city2">City</label>
                                                                    <input id="city22" type="text" class="form-control" placeholder="City" name="city"  value="<?php echo $fetchuser2['city']; ?>">
                                                                    <span id="error_city22"style="color: #ff0000;"></span>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city">State</label>
                                                                    <input id="State22" type="text" class="form-control" placeholder="State" name="state"  value="<?php echo $fetchuser2['state']; ?>">
                                                                    <span id="error_state2"style="color: #ff0000;"></span>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                                    <input id="zip22" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip"  value="<?php echo $fetchuser2['zip']; ?>">
                                                                    <span id="error_zip22"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city">Country</label>
                                                                    <input id="Country22" type="text" class="form-control" placeholder="Country" name="country"  value="<?php echo $fetchuser2['country']; ?>">
                                                                    <span id="error_country22" style="color: #ff0000;"></span>
                                                                </div></div>
                                      <div class="col-md-12">
                                                    <div class="text-right"><span id="ajaxloading" style="display:none;" >
                                                            <img src="ajaxloading.svg" style="width:50px;"></span>
                                                        <button type="button" class="btn btn-primary Proceed_button">Submit </button> &nbsp;&nbsp;
                                                    </div></div>
                   <input type="hidden" name="id" value="<?php echo $id;?>">
                                                        <?php } ?>
                </div>
              </div>
              <div class="col-md-4" style="margin-top:60px;">
		
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
            </form>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->

  </div>
  <!-- Footer -->
  <?php @include('bottom.php'); ?>
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>
           $(document).on("keyup", "input#fname22", function () {

                        $('#error_fname22').html('');
                    });
                    $(document).on("keyup", "input#lname22", function () {

                        $('#error_lname22').html('');
                    });
                    $(document).on("keyup", "input#email22", function () {

                        $('#error_email22').html('');
                    });

                    $(document).on("keyup", "input#phone22", function () {

                        $('#error_phno22').html('');
                    });
                    $(document).on("keyup", "input#cname22", function () {

                        $('#error_cname22').html('');
                    });
                    $(document).on("keyup", "input#address22", function () {

                        $('#error_address22').html('');
                    });
                    $(document).on("keyup", "input#city22", function () {

                        $('#error_city22').html('');
                    });
                    $(document).on("keyup", "input#zip22", function () {

                        $('#error_zip22').html('');
                    });
                    $(document).on("keyup", "input#State2", function () {

                        $('#error_state22').html('');
                    });
                    $(document).on("keyup", "input#Country22", function () {

                        $('#error_country22').html('');
                    });
                    
                    $(function () {

                        $(".Proceed_button").click(function () {

                            var str = $("#shipping-form").serialize();
                            //  alert(str);


                            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                     var fname22 = $("#fname22").val();
                                var lname22 = $("#lname22").val();
                                var cname22 = $("#cname22").val();
                                var address22 = $("#address22").val();
                                var email22 = $("#email22").val();
                                var phone22 = $("#phone22").val();
                                var city22 = $("#city22").val();
                                var state22 = $("#State22").val();
                                var zip22 = $("#zip22").val();
                                var country22 = $("#Country22").val();
                                   if (fname22 == 0)
                                {
                                    $('#error_fname22').html('Enter your First Name');
                                    $("#fname122").focus();

                                    return false;
                                }

                                if (lname22 == 0)
                                {
                                    $('#error_lname22').html('Enter your Last Name');
                                    $("#lname22").focus();

                                    return false;
                                }


                                if (cname22 == 0)
                                {
                                    $('#error_cname22').html('Enter the Company Name');

                                    $("#cname22").focus();
                                    return false;
                                }

                                if (address22 == 0)
                                {
                                    $('#error_address22').html('Enter Your Address');
                                    $("#address22").focus();

                                    return false;
                                }
                                if (email22 == '')
                                {
                                    $('#error_email22').html('Enter Email address');
                                    $("#email22").focus();
                                    return false;
                                }
                                var x = $("#email22").val();
                                var atpos = x.indexOf("@");
                                var dotpos = x.lastIndexOf(".");
                                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                    $('#error_email22').html('Enter vaild Email address');
                                    $("#email22").focus();
                                    return false;
                                }

                                if (phone22 == 0)
                                {

                                    $('#error_phno22').html('Enter Your Phone No');
                                    $("#phone22").focus();

                                    return false;
                                }
                                if (city22 == 0)
                                {
                                    $('#error_city22').html('Enter your City');
                                    $("#city22").focus();

                                    return false;
                                }
                                if (state22 == 0)
                                {
                                    $('#error_state22').html('Enter Your State');
                                    $("#State22").focus();

                                    return false;
                                }

                                if (zip22 == 0)
                                {
                                    $('#error_zip22').html('Enter Your zip/pin code');
                                    $("#zip22").focus();

                                    return false;

                                }

                                if (country22 == 0)
                                {
                                    $('#error_country22').html('Enter Your Country');
                                    $("#Country22").focus();

                                    return false;
                                }
 else

                            {


                                $('#ajaxloading').show();

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "shippingaddressupdate.php",
                                                                    data: str,
                                                                    cache: true,
                                                                    success: function (data) {
                                                                        $('#ajaxloading').hide();
                               
                                                                      if(data==1){
                                                                       
                                                                       window.location.href='addressbook.php';
                                                                    }
                                else if(data==2){
                                    $('#error').html('Error Occured Please try again later');
                                    $('html, body').animate({ scrollTop: 500 }, 'slow');
        setTimeout(function () {
                            $('#error').html('');
                        }, 3000);

                                     
                                    
                                }
                                                                    }
                                                                });
                            }
                            return false;

                        });
                    });
                    </script>
</body>

</html>
<?php } ?>