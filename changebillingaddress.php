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
              <h3 class="title text-white">Billing Details</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Billing Address</span></li>
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
		      <form id="billform">
 <div class="col-md-12">     <span id="error"style="color:#ff0000;text-align: center;margin-left: 19%;font-size: 18px;"></span>      </div>
              <div class="col-md-8">
                <div class="billing-details">
                  <h3 class="mb-30">Billing Details</h3>
				<?php @include ('include/config.php');
				
				  $id=$_SESSION['uid'];
               $query="SELECT * FROM `tbl_billing_address` WHERE `user_id`='$id' AND `status`='1' AND `is_default`='1'";
			
			   $result=mysqli_query($con,$query);
			
			  
			   while($row=mysqli_fetch_array($result))
			   { 
			  ?> 
                
                 
                                               <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-fname">First Name</label>
                                                                <input id="fname12" type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $row['firstname']; ?>">
                                                                <span id="error_fname12" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-lname">Last Name</label>
                                                                <input id="lname12" type="text" class="form-control" placeholder="Last Name"  name="lname" value="<?php echo $row['lastname']; ?>">
                                                                <span id="error_lname12" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="checkuot-form-cname">Company Name</label>
                                                                    <input id="cname12" type="text" class="form-control" placeholder="Company Name" name="cname" value="<?php echo $row['companyname']; ?>">
                                                                    <span id="error_cname12" style="color: #ff0000;"></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="checkuot-form-address">Address</label>
                                                                    <input id="address12" type="text" class="form-control" placeholder="Street address" name="addressline1" value="<?php echo $row['addressline1']; ?>">
                                                                    <span id="error_address12"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" name="addressline2" value="<?php echo $row['addressline2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-email">Email Address</label>
                                                                <input id="email12" type="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo $row['email']; ?>">
                                                                <span id="error_email12"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-email">Phone No</label>
                                                                <input id="phone12" type="tel" class="form-control" placeholder="Phone No" name="phone" value="<?php echo $row['phoneno']; ?>">
                                                                <span id="error_phno" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">City</label>
                                                                <input id="city12" type="text" class="form-control" placeholder="City" name="city" value="<?php echo $row['city']; ?>">
                                                                <span id="error_city12"style="color: #ff0000;"></span>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">State</label>
                                                                <input id="State12" type="text" class="form-control" placeholder="State" name="state" value="<?php echo $row['state']; ?>">
                                                                <span id="error_state12"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                                <input id="zip12" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip" value="<?php echo $row['zip']; ?>">
                                                                <span id="error_zip12"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">Country</label>
                                                                <input id="Country12" type="text" class="form-control" placeholder="Country" name="country" value="<?php echo $row['country']; ?>">
                                                                <span id="error_country12" style="color: #ff0000;"></span>
                                                            </div>
                                                        </div>
                       <div class="col-md-12">
                                                    <div class="text-right"><span id="ajaxloading" style="display:none;" >
                                                            <img src="ajaxloading.svg" style="width:50px;"></span>
                                                        <button type="button" class="btn btn-primary Proceed_button">Submit </button> &nbsp;&nbsp;
                                                    </div>
                           <input type="hidden" name="id" value="<?php echo $id;?>">
                                            </div>

                                                   
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

                           $(document).on("keyup", "input#fname12", function () {

                        $('#error_fname12').html('');
                    });
                    $(document).on("keyup", "input#lname12", function () {

                        $('#error_lname12').html('');
                    });
                    $(document).on("keyup", "input#email12", function () {

                        $('#error_email12').html('');
                    });
               
                    $(document).on("keyup", "input#phone12", function () {

                        $('#error_phno12').html('');
                    });
                    $(document).on("keyup", "input#cname12", function () {

                        $('#error_cname12').html('');
                    });
                    $(document).on("keyup", "input#address12", function () {

                        $('#error_address12').html('');
                    });
                    $(document).on("keyup", "input#city12", function () {

                        $('#error_city12').html('');
                    });
                    $(document).on("keyup", "input#zip12", function () {

                        $('#error_zip12').html('');
                    });
                    $(document).on("keyup", "input#State12", function () {

                        $('#error_state12').html('');
                    });
                    $(document).on("keyup", "input#Country12", function () {

                        $('#error_country12').html('');
                    });
                    $(function () {

                        $(".Proceed_button").click(function () {
   var fname12 = $("#fname12").val();
                                var lname12 = $("#lname12").val();
                                var cname12 = $("#cname12").val();
                                var address12 = $("#address12").val();
                                var email12 = $("#email12").val();
                                var phone12 = $("#phone12").val();
                                var city12 = $("#city12").val();
                                var state12 = $("#State12").val();
                                var zip12 = $("#zip12").val();
                                var country12 = $("#Country12").val();
                          var str = $("#billform").serialize();

                                if (fname12 == 0)
                                {
                                    $('#error_fname12').html('Enter your First Name');
                                    $("#fname12").focus();

                                    return false;
                                }

                                if (lname12 == 0)
                                {
                                    $('#error_lname12').html('Enter your Last Name');
                                    $("#lname12").focus();

                                    return false;
                                }


                                if (cname12 == 0)
                                {
                                    $('#error_cname12').html('Enter the Company Name');

                                    $("#cname12").focus();
                                    return false;
                                }

                                if (address12 == 0)
                                {
                                    $('#error_address12').html('Enter Your Address');
                                    $("#address12").focus();

                                    return false;
                                }
                                if (email12 == '')
                                {
                                    $('#error_email12').html('Enter Email address');
                                    $("#email12").focus();
                                    return false;
                                }
                                var x = $("#email12").val();
                                var atpos = x.indexOf("@");
                                var dotpos = x.lastIndexOf(".");
                                if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                    $('#error_email12').html('Enter vaild Email address');
                                    $("#email12").focus();
                                    return false;
                                }

                                if (phone12 == 0)
                                {

                                    $('#error_phno12').html('Enter Your Phone No');
                                    $("#phone12").focus();

                                    return false;
                                }
                                if (city12 == 0)
                                {
                                    $('#error_city12').html('Enter your City');
                                    $("#city12").focus();

                                    return false;
                                }
                                if (state12 == 0)
                                {
                                    $('#error_state12').html('Enter Your State');
                                    $("#State12").focus();

                                    return false;
                                }

                                if (zip12 == 0)
                                {
                                    $('#error_zip12').html('Enter Your zip/pin code');
                                    $("#zip12").focus();

                                    return false;

                                }

                                if (country12 == 0)
                                {
                                    $('#error_country12').html('Enter Your Country');
                                    $("#Country12").focus();

                                    return false;
                                }
                               
 else

                            {


                                $('#ajaxloading').show();

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "billingdetailsupdate.php",
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