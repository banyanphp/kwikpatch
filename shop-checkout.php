<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("Location:login.php");
} else {
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
         <style>.form-group{height: 100px;}</style>
        <body class="">
            <div id="wrapper" class="clearfix">
                <!-- preloader -->
                

                <!-- Header -->
                <?php @include('top.php'); ?>
                <!-- Start main-content -->
                <div class="main-content">

                    <!-- Section: inner-header -->
                    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg2.png">
                        <div class="container pt-90 pb-50">
                            <!-- Section Content -->
                            <div class="section-content pt-100">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <h3 class="title text-white">Shop Checkout</h3>
                                        <ul class="list-inline text-white">
                                            <li>Home /</li>
                                            <li><span class="text-gray">Shop Checkout</span></li>
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
                                    <form  method="POST" name="theform" id="orderform">
                                        <div class="col-md-12">
                                            <label>
                                               
                                            </label>

                                            <div class="col-md-12" id="different">                                                    
                                                <div class="col-md-6" >
                                                    <div class="billing-details">
                                                        <h3 class="mb-30">Billing Details</h3>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-fname">First Name</label>
                                                                <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname1">
                                                                <span id="error_fname" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-lname">Last Name</label>
                                                                <input id="lname" type="text" class="form-control" placeholder="Last Name"  name="lname1">
                                                                <span id="error_lname" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="checkuot-form-cname">Company Name</label>
                                                                    <input id="cname" type="text" class="form-control" placeholder="Company Name" name="cname1">
                                                                    <span id="error_cname" style="color: #ff0000;"></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="checkuot-form-address">Address</label>
                                                                    <input id="address" type="text" class="form-control" placeholder="Street address" name="addressline1">
                                                                    <span id="error_address"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" name="addressline2">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-email">Email Address</label>
                                                                <input id="email" type="email" class="form-control" placeholder="Email Address" name="email1">
                                                                <span id="error_email"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-email">Phone No</label>
                                                                <input id="phone1" type="tel" class="form-control" placeholder="Phone No" name="phone1">
                                                                <span id="error_phno" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">City</label>
                                                                <input id="city" type="text" class="form-control" placeholder="City" name="city1">
                                                                <span id="error_city"style="color: #ff0000;"></span>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">State</label>
                                                                <input id="State" type="text" class="form-control" placeholder="State" name="state1">
                                                                <span id="error_state"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                                <input id="zip" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip1">
                                                                <span id="error_zip"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">Country</label>
                                                                <input id="Country" type="text" class="form-control" placeholder="Country" name="country1">
                                                                <span id="error_country" style="color: #ff0000;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="shipping-details">
                                                        <h3 class="mb-30"> Ship to a different address?
                                                            <span class="checkbox pull-right flip mt-0">
                                                                <label>
                                                                    <input type="checkbox" id="checkbox-ship-to-different-address" value="1" aria-label="..." name="checkbox-ship-to-different-address">
                                                                </label>
                                                            </span>
                                                        </h3>
                                                        <div id="checkout-shipping-address">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-fname2">First Name</label>
                                                                    <input id="fname2" type="text" class="form-control" placeholder="First Name" name="fname2">
                                                                    <span id="error_fname2" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-lname2">Last Name</label>
                                                                    <input id="lname2" type="text" class="form-control" placeholder="Last Name" name="lname2">
                                                                    <span id="error_lname2" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="checkuot-form-cname2">Company Name</label>
                                                                        <input id="cname2" type="text" class="form-control" placeholder="Company Name" name="cname2">
                                                                        <span id="error_cname2" style="color: #ff0000;"></span>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="checkuot-form-address2">Address</label>
                                                                        <input id="address2" type="text" class="form-control" placeholder="Street address" name="address2line1">
                                                                        <span id="error_address2"style="color: #ff0000;"></span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"name="address2line2">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-email">Email Address</label>
                                                                    <input id="username2" type="email" class="form-control" placeholder="Email Address" name="email2">
                                                                    <span id="error_email2"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-email">Phone No</label>
                                                                    <input id="phone2" type="tel" class="form-control" placeholder="Phone No" name="phone2">
                                                                    <span id="error_phno2" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city2">City</label>
                                                                    <input id="city2" type="text" class="form-control" placeholder="City" name="city2">
                                                                    <span id="error_city2"style="color: #ff0000;"></span>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city">State</label>
                                                                    <input id="State2" type="text" class="form-control" placeholder="State" name="state2">
                                                                    <span id="error_state2"style="color: #ff0000;"></span>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                                    <input id="zip2" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip2">
                                                                    <span id="error_zip2"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city">Country</label>
                                                                    <input id="Country2" type="text" class="form-control" placeholder="Country" name="country2">
                                                                    <span id="error_country2" style="color: #ff0000;"></span>
                                                                </div></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Order Notes</label>
                                                            <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." name="message"rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" id="default2" style="display:none;">  
                                                <?php
                                                $ids = $_SESSION['uid'];
                                                $query1 = "SELECT * FROM `tbl_billing_address` WHERE `user_id`='$id' AND `status`='1' AND `is_default`='1'";
                                                $fetchuserquery = mysqli_query($con, $query1);
                                                $fetchuser = mysqli_fetch_array($fetchuserquery);
                                                ?>
                                                <div class="col-md-6" >
                                                    <div class="billing-details">
                                                        <h3 class="mb-30">Billing Details</h3>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-fname">First Name</label>
                                                                <input id="fname12" type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $fetchuser['firstname']; ?>">
                                                                <span id="error_fname12" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-lname">Last Name</label>
                                                                <input id="lname12" type="text" class="form-control" placeholder="Last Name"  name="lname" value="<?php echo $fetchuser['lastname']; ?>">
                                                                <span id="error_lname12" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="checkuot-form-cname">Company Name</label>
                                                                    <input id="cname12" type="text" class="form-control" placeholder="Company Name" name="cname" value="<?php echo $fetchuser['companyname']; ?>">
                                                                    <span id="error_cname12" style="color: #ff0000;"></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="checkuot-form-address">Address</label>
                                                                    <input id="address12" type="text" class="form-control" placeholder="Street address" name="addressline11" value="<?php echo $fetchuser['addressline1']; ?>">
                                                                    <span id="error_address12"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" name="addressline21" value="<?php echo $fetchuser['addressline2']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-email">Email Address</label>
                                                                <input id="email12" type="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo $fetchuser['email']; ?>">
                                                                <span id="error_email12"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-email">Phone No</label>
                                                                <input id="phone12" type="tel" class="form-control" placeholder="Phone No" name="phone" value="<?php echo $fetchuser['phoneno']; ?>">
                                                                <span id="error_phno" style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">City</label>
                                                                <input id="city12" type="text" class="form-control" placeholder="City" name="city" value="<?php echo $fetchuser['city']; ?>">
                                                                <span id="error_city12"style="color: #ff0000;"></span>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">State</label>
                                                                <input id="State12" type="text" class="form-control" placeholder="State" name="state" value="<?php echo $fetchuser['state']; ?>">
                                                                <span id="error_state12"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                                <input id="zip12" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip" value="<?php echo $fetchuser['zip']; ?>">
                                                                <span id="error_zip12"style="color: #ff0000;"></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="checkuot-form-city">Country</label>
                                                                <input id="Country12" type="text" class="form-control" placeholder="Country" name="country" value="<?php echo $fetchuser['country']; ?>">
                                                                <span id="error_country12" style="color: #ff0000;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="shipping-details">
                                                        <h3 class="mb-30"> Shipping address
                                                                        <?php
                                                $ids = $_SESSION['uid'];
                                                $query2 = "SELECT * FROM `tbl_shipping_address` WHERE `user_id`='$ids' AND `status`='1' AND `is_default`='1'";
                                                $fetchuserquery2 = mysqli_query($con, $query2);
                                                $fetchuser2 = mysqli_fetch_array($fetchuserquery2);
                                                ?>
                                                        </h3>
                                                        <div id="checkout-shipping-addresss">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-fname2">First Name</label>
                                                                    <input id="fname22" type="text" class="form-control" placeholder="First Name" name="fname2" value="<?php echo $fetchuser2['firstname']; ?>">
                                                                    <span id="error_fname22" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-lname2">Last Name</label>
                                                                    <input id="lname22" type="text" class="form-control" placeholder="Last Name" name="lname2" value="<?php echo $fetchuser2['lastname']; ?>">
                                                                    <span id="error_lname22" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="checkuot-form-cname2">Company Name</label>
                                                                        <input id="cname22" type="text" class="form-control" placeholder="Company Name" name="cname2" value="<?php echo $fetchuser2['companyname']; ?>">
                                                                        <span id="error_cname22" style="color: #ff0000;"></span>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="checkuot-form-address2">Address</label>
                                                                        <input id="address22" type="text" class="form-control" placeholder="Street address" name="address2line1" value="<?php echo $fetchuser2['addressline1']; ?>">
                                                                        <span id="error_address2"style="color: #ff0000;"></span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"name="address2line2" value="<?php echo $fetchuser2['addressline2']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-email">Email Address</label>
                                                                    <input id="email22" type="email" class="form-control" placeholder="Email Address" name="email2" value="<?php echo $fetchuser2['email']; ?>">
                                                                    <span id="error_email22"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-email">Phone No</label>
                                                                    <input id="phone22" type="tel" class="form-control" placeholder="Phone No" name="phone2"  value="<?php echo $fetchuser2['phoneno']; ?>">
                                                                    <span id="error_phno22" style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city2">City</label>
                                                                    <input id="city22" type="text" class="form-control" placeholder="City" name="city2"  value="<?php echo $fetchuser2['city']; ?>">
                                                                    <span id="error_city22"style="color: #ff0000;"></span>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city">State</label>
                                                                    <input id="State22" type="text" class="form-control" placeholder="State" name="state2"  value="<?php echo $fetchuser2['state']; ?>">
                                                                    <span id="error_state2"style="color: #ff0000;"></span>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-zip">Zip/Postal Code</label>
                                                                    <input id="zip22" type="text" class="form-control" placeholder="Zip/Postal Code" name="zip2"  value="<?php echo $fetchuser2['zip']; ?>">
                                                                    <span id="error_zip22"style="color: #ff0000;"></span>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="checkuot-form-city">Country</label>
                                                                    <input id="Country22" type="text" class="form-control" placeholder="Country" name="country2"  value="<?php echo $fetchuser2['country']; ?>">
                                                                    <span id="error_country22" style="color: #ff0000;"></span>
                                                                </div></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Order Notes</label>
                                                            <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." name="message"rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h3>Your order</h3>
                                                <table class="table table-striped table-bordered tbl-shopping-cart">
                                                    <thead>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Product Code</th>
                                                            <th>Product Name</th>
     <th>Cushion Color</th>
<th>BackPoly Color</th>
                                                            <th>Quantity</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
                                                        @include ('include/config.php');

                                                        $id = $_SESSION['uid'];
                                                        $query = "SELECT * FROM `tbl_addtocart` WHERE 	`user_id`='$id' AND is_shifted='0'";
                                                        $result = mysqli_query($con, $query);
                                                        $sno = 0;
                                                        $no = mysqli_num_rows($result);

                                                        if ($no > 0) {
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                ?>     <tr class="cart_item">

                                                                    <td> <?php
                                                                        $sno+=1;
                                                                        echo $sno;
                                                                        ?></td>
                                                                    <td class="product-price"><span class="amount"><?php echo $row['prd_code']; ?></span> </td>  
                                                                    <td class="product-price"><span class="amount"><?php  echo $row['prd_name']; ?></span></td>
   <td class="product-price"><span class="amount"><?php echo $row['cushion_color']; ?></span>   </td>
                                                                    <td class="product-price"><span class="amount"><?php  echo $row['backpoly_color']; ?></span></td>               
                                                                    <td class="product-price"><span class="amount"><?php echo $row['qty']; ?></span></td>                            

                                                                </tr>


                                                            <input type="hidden" name="prd_code[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_code']; ?>">        
                                                            <input type="hidden" name="prd_name[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_name']; ?>">       
                                                            <input type="hidden" name="prd_category[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_sub_categoryname']; ?>">      
                                                            <input type="hidden" name="prd_main_category[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_main_category']; ?>">     
                                                            <input type="hidden" name="prd_qty[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['qty']; ?>">
															<input type="hidden" name="prd_cushion_color[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['cushion_color']; ?>">
														     <input type="hidden" name="prd_backpoly_color[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['backpoly_color']; ?>">
                                                        <?php } ?>
                                                        <tr class="cart_item">


                                                        <input type="hidden" name="total" value="<?php echo $sno; ?>">
                                                        </tr>

                                                        <?php
                                                    } else {
                                                        ?> <tr><td colspan="5">No Items Available in cart;</td></tr><?php }
                                                    ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <?php if ($no > 0) { ?>
                                                <div class="col-md-12">
                                                    <div class="text-right"><span id="ajaxloading" style="display:none;" >
                                                            <img src="ajaxloading.svg" style="width:50px;"></span>
                                                        <button type="button" class="btn btn-primary Proceed_button">Submit </button> &nbsp;&nbsp;
                                                    </div>
                                                <?php } ?>
                                            </div>


                                        </div> </form>
                                </div>
                            </div>
                    </section>
                    <!-- end main-content -->

                </div>
                <!-- Footer -->

     

                <!-- Footer Scripts -->
                <!-- JS | Custom script for all pages -->
                <script src="js/custom.js"></script>
                <script src="js/shop_checkout.js" type="text/javascript"></script>
        </body>

    </html>
<?php } ?>