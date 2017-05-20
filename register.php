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

        <style>.form-group{height: 100px;}</style>



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
            <?php @include ('top.php'); ?> 
            <!-- Start main-content -->
            <div class="main-content">

                <!-- Section: inner-header -->
                <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.png">
                    <div class="container pt-90 pb-50">
                        <!-- Section Content -->
                        <div class="section-content pt-100">
                            <div class="row"> 
                                <div class="col-md-12">
                                    <h3 class="title text-white">Registration Form</h3>
                                    <ul class="list-inline text-white">
                                        <li>Home /</li>
                                        <li><span class="text-gray">Registration Form</span></li>
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
                                <form method="post" name="theform" id="registerform">


                                    <div id="dataresponse" >


                                    </div>

                                    <div class="col-md-12">
                                        <div class="billing-details">

                                            <h3 class="mb-30">Registration Form</h3>
                                            <div class="row">
                                                <span id="flash"></span>
                                                <span id="dataresponse1"></span>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-lname">First Name<span class="mand-field">*</span></label>
                                                    <input  type="text" class="form-control" placeholder="First Name" id="fname" name="fname" >
                                                    <span id="error_fname"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-lname">Last Name<span class="mand-field">*</span></label>
                                                    <input  type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" >
                                                    <span id="error_lname"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-fname">Email<span class="mand-field">*</span></label>
                                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email">
                                                    <span id="error_email"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-lname">Password<span class="mand-field">*</span></label>
                                                    <input  type="password" class="form-control" placeholder="Password" id="password" name="password" >
                                                    <span id="error_password"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-fname">Repeat Password<span class="mand-field">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Password" id="rpassword"   name="rpassword" >
                                                    <span id="error_rpassword"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6" id="phn">
                                                    <label for="checkuot-form-lname">Phone No<span class="mand-field">*</span></label>
                                                    <input type="tel" class="form-control" placeholder="Phone No" id="phoneno" name="phno" >
                                                    <span id="error_phno"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-lname">Company Name<span class="mand-field">*</span></label>
                                                    <input id="cname" type="text" class="form-control" placeholder="Company Name" id="cname" name="cname" >
                                                    <span id="error_cname"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-lname">Address Line 1 <span class="mand-field">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Address Line 1 " id="address" name="addressline1" >
                                                    <span id="error_address"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-lname">Address Line 2</label>
                                                    <input type="text" class="form-control" placeholder="Address Line 2" id="address2"name="addressline2" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-city">City<span class="mand-field">*</span></label>
                                                    <input  type="text" class="form-control" placeholder="City" name="city" id="city">
                                                    <span id="error_city"style="color: #ff0000;"></span>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-zip">Zip/Postal Code<span class="mand-field">*</span></label>
                                                    <input  type="text" class="form-control" placeholder="Zip/Postal Code" name="zip" id="zip" >
                                                    <span id="error_zip"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-zip">State<span class="mand-field">*</span></label>
                                                    <input  type="text" class="form-control" placeholder="State"  name="state" id="State" >
                                                    <span id="error_state"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-zip">Country<span class="mand-field">*</span></label>
                                                    <input  type="text" class="form-control" placeholder="country"  name="country"id="country" >
                                                    <span id="error_country"style="color: #ff0000;"></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkuot-form-zip">Fax no</label>
                                                    <input id="checkuot-form-zip" type="text" class="form-control" placeholder="Fax No" name="faxno" id="faxno">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                        <div class="text-right"><span id="ajaxloading" style="display:none;" ><img src="ajaxloading.svg" style="width:50px;"></span> <button type="button" class="btn btn-primary Proceed_button">Submit </button> &nbsp;&nbsp;
                                            <input type="reset" value="Reset" class="btn btn-primary"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end main-content -->

            </div>
            <?php @include ('bottom.php'); ?>
            <!-- end wrapper --> 

            <!-- Footer Scripts -->
            <!-- JS | Custom script for all pages -->
            <script src="js/custom.js"></script>
            <script>
                  $(document).on("keyup", "input#fname", function () {

                        $('#error_fname').html('');
                    });
                    $(document).on("keyup", "input#lname", function () {

                        $('#error_lname').html('');
                    });
                    $(document).on("keyup", "input#email", function () {

                        $('#error_email').html('');
                    });
                    $(document).on("keyup", "input#password", function () {

                        $('#error_password').html('');
                    });
                    $(document).on("keyup", "input#rpassword", function () {

                        $('#error_rpassword').html('');
                    });
                    $(document).on("keyup", "input#phoneno", function () {

                        $('#error_phno').html('');
                    });
                    $(document).on("keyup", "input#cname", function () {

                        $('#error_cname').html('');
                    });
                    $(document).on("keyup", "input#address", function () {

                        $('#error_address').html('');
                    });
                    $(document).on("keyup", "input#city", function () {

                        $('#error_city').html('');
                    });
                    $(document).on("keyup", "input#zip", function () {

                        $('#error_zip').html('');
                    });
                    $(document).on("keyup", "input#State", function () {

                        $('#error_state').html('');
                    });
                    $(document).on("keyup", "input#country", function () {

                        $('#error_country').html('');
                    });

                $(function () {
                  




                    $(".Proceed_button").click(function () {
                        var str = $("#registerform").serialize();
                        var email = $("#email").val();
                        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                        if (document.theform.fname.value == 0)
                        {
                            $('#error_fname').html('Enter your First Name');

                            document.theform.fname.focus();
                            return false;
                        }

                        if (document.theform.lname.value == 0)
                        {
                            $('#error_lname').html('Enter your Last Name');

                            document.theform.lname.focus();
                            return false;
                        }
                        if (email == '')
                        {
                            $('#error_email').html('Enter Email address');
                            $("#email").focus();
                            return false;
                        }
                        var x = $("#email").val();
                        var atpos = x.indexOf("@");
                        var dotpos = x.lastIndexOf(".");
                        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                            $('#error_email').html('Enter vaild Email address');
                            $("#email").focus();
                            return false;
                        }


                        if (document.theform.password.value.length == 0) {
                            $('#error_password').html('Enter Password');
                            //alert("Enter Password");
                          
                            document.theform.password.focus();
                            return false;
                        }
                        // check for minimum length
                        var minLength = 6; // Minimum length
                        if (document.theform.password.value.length < minLength) {
                            $('#error_password').html('Your password must be at least ' + minLength + ' characters long. Try again.');
                            //alert('Your password must be at least ' + minLength + ' characters long. Try again.');
                            document.theform.password.value = "";
                            document.theform.password.focus();
                            return false;
                        }

                        if (document.theform.password.value != document.theform.rpassword.value) {
                            $('#error_rpassword').html('Password does not match. Please make sure.');

                            document.theform.rpassword.focus();
                            return false;
                        }
                        if (document.theform.phoneno.value == 0)
                        {
                            $('#error_phno').html('Enter Your Phone No');

                            document.theform.phoneno.focus();
                            return false;
                        }
                        if (document.theform.cname.value == 0)
                        {
                            $('#error_cname').html('Enter the Company Name');

                            document.theform.cname.focus();
                            return false;
                        }
                        if (document.theform.addressline1.value == 0)
                        {
                            $('#error_address').html('Enter Your Address');

                            document.theform.addressline1.focus();
                            return false;
                        }

                        if (document.theform.city.value == 0)
                        {
                            $('#error_city').html('Enter your City');

                            document.theform.city.focus();
                            return false;
                        }
                        if (document.theform.state.value == 0)
                        {
                            $('#error_state').html('Enter Your State');

                            document.theform.state.focus();
                            return false;
                        }

                        if (document.theform.country.value == 0)
                        {
                            $('#error_country').html('Enter Your Country');

                            document.theform.country.focus();
                            return false;
                        }


                        if (document.theform.zip.value == 0)
                        {
                            $('#error_zip').html('Enter Your zip/pin code');

                            document.theform.zip.focus();
                            return false;

                        } else

                        {

$('#ajaxloading').show();
                       
                            $.ajax({
                                type: "POST",
                                url: "registration-process.php",
                                data: str,
                                cache: true,
                                success: function (data) {

$('#ajaxloading').hide();  
document.getElementById("registerform").reset();

                                    $('#dataresponse').html(data);

$('html, body').animate({ scrollTop: 500 }, 'slow');
        setTimeout(function () {
                            $('#dataresponse').html('');
                        }, 3000);

                                }
                            });
                        }
                        return false;
                    });
                });
            </script>
    </body>

</html>