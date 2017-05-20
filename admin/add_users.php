<?php include('header.php'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#upload').on('click', function () {
            $('#upload_form').ajaxForm({
                target: '#preview',
                beforeSubmit: function (e) {
                    $('.progress').show();
                },
                success: function (e) {
                    $('.progress').hide();
                },
                error: function (e) {
                }
            }).submit();
        });
    });
</script>
<script type="text/javascript" language="javascript">


    function checkform(theform) {

        if (document.theform.fname.value == 0)
        {
            alert("Enter your First Name");
            document.theform.fname.focus();
            return false;
        }

        if (document.theform.lname.value == 0)
        {
            alert("Enter your Last Name");
            document.theform.lname.focus();
            return false;
        }

        if (document.theform.username.value.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
        {
            alert("Enter Valid Username. Ex:abc@abc.com");
            document.theform.username.value = "";
            document.theform.username.focus();
            return false;
        }

        if (document.theform.password.value.length == 0) {
            alert("Enter Password");
            document.theform.password.focus();
            return false;
        }
        // check for minimum length
        var minLength = 6; // Minimum length
        if (document.theform.password.value.length < minLength) {
            alert('Your password must be at least ' + minLength + ' characters long. Try again.');
            document.theform.password.value = "";
            document.theform.password.focus();
            return false;
        }

        if (document.theform.password.value != document.theform.cpassword.value) {
            alert("Password does not match. Please make sure.");
            document.theform.cpassword.focus();
            return false;
        }

        if (document.theform.cname.value == 0)
        {
            alert("Enther the Company Name");
            document.theform.cname.focus();
            return false;
        }

        if (document.theform.city.value == 0)
        {
            alert("Enter your City");
            document.theform.city.focus();
            return false;
        }
        if (document.theform.state.value == 0)
        {
            alert("Enter Your State");
            document.theform.state.focus();
            return false;
        }
        if (document.theform.country.value == 0)
        {
            alert("Enter Your Country");
            document.theform.country.focus();
            return false;
        }

        if (document.theform.addressline1.value == 0)
        {
            alert("Enter Your Address.");
            document.theform.addressline1.focus();
            return false;
        }


        if (document.theform.zip.value == 0)
        {
            alert("Enter Your zip/pin code");
            document.theform.zip.focus();
            return false;
        }

        if (document.theform.phoneno.value == 0)
        {
            alert("Enter Your Phone No.");
            document.theform.phoneno.focus();
            return false;
        }
        var fupload = $("#fileChooser").val();
        if (fupload == "") {
            alert("Please choose the image");
            $("#fupload").focus();
            return false;
        }
    }
</script>


<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h2>Add Users</h2>  
            </ol>
        </div> 
    </div>
    <div class="page-content container-fluid">
        <div class="widget">
            <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Add New Users</h3> 
            </div>
            <div class="widget-body"> 


                <div class="tab-content">

                    <form action="users_process.php" method="POST" name="theform" enctype="multipart/form-data"onsubmit="return checkform();">



                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="checkuot-form-fname">First Name<span class="mand-field">*</span></label>
                                <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="checkuot-form-lname">Last Name<span class="mand-field">*</span></label>
                                <input id="lname" type="text" class="form-control" placeholder="Last Name"    name="lname" >
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="checkuot-form-cname">Company Name<span class="mand-field">*</span></label>
                                    <input id="cname" type="text" class="form-control" placeholder="Company Name"   name="cname" >
                                </div>
                                <div class="form-group">
                                    <label for="checkuot-form-email">Email Address<span class="mand-field">*</span></label>
                                    <input id="username" type="email" class="form-control" placeholder="Email Address"   name="email" > 
                                </div>

                                <div class="form-group">
                                    <label for="checkuot-form-Password">Password<span class="mand-field">*</span></label>
                                    <input id="password" type="password" class="form-control" placeholder="Password"   name="password" >
                                </div>
                                <div class="form-group">
                                    <label for="checkuot-form-Re-Password">Confirm Password<span class="mand-field">*</span></label>
                                    <input id="cpassword" type="password" class="form-control" placeholder="Confirm Password"   name="rpassword" > 
                                </div>
                                <div class="form-group">
                                    <label for="checkuot-form-phone">Phone No<span class="mand-field">*</span></label>
                                    <input id="phoneno" type="tel" class="form-control" placeholder="Phone No"   name="phoneno" > 
                                </div>
                                <div class="form-group">
                                    <label for="checkuot-form-address">Address<span class="mand-field">*</span></label>
                                    <input id="addressline1" type="text" class="form-control" placeholder="Street address"   name="addressline1" >
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"  name="addressline2" >
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="checkuot-form-zip">Status<span class="mand-field ">*</span></label>
                                <select name="status"  style="width:100%"required>
                                    <option value="1"  >Enabled</option>
                                    <option value="0" > Disabled</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="checkuot-form-city">City</label><span class="mand-field">*</span></label>
                                <input id="city" type="text" class="form-control" placeholder="City"   name="city" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="checkuot-form-state">State</label><span class="mand-field">*</span></label>
                                <input id="state" type="text" class="form-control" placeholder="State"    name="state" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="checkuot-form-state">Country</label><span class="mand-field">*</span></label>
                                <input id="country" type="text" class="form-control" placeholder="Country"  name="country" >
                            </div>
                            <div class="form-group col-md-6"><span class="mand-field">*</span></label>
                                <label for="checkuot-form-zip">Zip/Postal Code</label>
                                <input id="zip" type="text" class="form-control" placeholder="Zip/Postal Code"  name="zip"  >
                            </div>





                            <input type="submit" name="submit" style="float:right;padding:10px 80px; background-color:#0667D6;color:#fff">
                        </div>




                </div>
            </div> 
        </div>
        <!-- jQuery-->
        <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
        <!-- Bootstrap JavaScript-->
        <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Malihu Scrollbar-->
        <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> 
        <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
        <!-- Bootstrap Select-->
        <script type="text/javascript" src="plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
        <script type="text/javascript" src="build/js/page-content/file-uploads/bootstrap-file-input.js"></script>




        </script>
        </body>
        </html>