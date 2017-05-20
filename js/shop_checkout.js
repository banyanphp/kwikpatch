   
                    $(document.body).on('click', '#checkbox-ship', function (e) {

                        if ($('#checkbox-ship').prop('checked')) {
                            $('#different').hide();
                            $('#default2').show();


                        } else {
                            $('#different').show();
                            $('#default2').hide();
                        }
                    });
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
                    $(document).on("keyup", "input#phone1", function () {

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
                    $(document).on("keyup", "input#Country", function () {

                        $('#error_country').html('');
                    });

                    $(document).on("keyup", "input#fname2", function () {

                        $('#error_fname2').html('');
                    });
                    $(document).on("keyup", "input#lname2", function () {

                        $('#error_lname2').html('');
                    });
                    $(document).on("keyup", "input#username2", function () {

                        $('#error_email2').html('');
                    });

                    $(document).on("keyup", "input#phone2", function () {

                        $('#error_phno2').html('');
                    });
                    $(document).on("keyup", "input#cname2", function () {

                        $('#error_cname2').html('');
                    });
                    $(document).on("keyup", "input#address2", function () {

                        $('#error_address2').html('');
                    });
                    $(document).on("keyup", "input#city2", function () {

                        $('#error_city2').html('');
                    });
                    $(document).on("keyup", "input#zip2", function () {

                        $('#error_zip2').html('');
                    });
                    $(document).on("keyup", "input#State2", function () {

                        $('#error_state2').html('');
                    });
                    $(document).on("keyup", "input#Country2", function () {

                        $('#error_country2').html('');
                    });
                    
                    
                    
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

                            var str = $("#orderform").serialize();
                            //  alert(str);


                            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                            if ($('#checkbox-ship').prop('checked')) {
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
                                                                    url: "order-process.php",
                                                                    data: str,
                                                                    cache: true,
                                                                    success: function (data) {

                                                              $('#ajaxloading').hide();
                                
                                                                     location.href = "ordersuccess.php?orderid=" + data;
                                                                        //window.location.href="new.php?orderid=".data;
                                
                                
                                                                    }
                                                                });
                            }
                            return false;


                            } 
                            if(!$('#checkbox-ship').prop('checked')) {

                               



                                var fname = $("#fname").val();
                                var lname = $("#lname").val();
                                var cname = $("#cname").val();
                                var address = $("#address").val();
                                var email = $("#email").val();
                                var phone1 = $("#phone1").val();
                                var city = $("#city").val();
                                var state = $("#State").val();
                                var zip = $("#zip").val();
                                var country = $("#Country").val();

                                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


                                if ($('#checkbox-ship-to-different-address').prop('checked')) {
                             
                                    if (fname == 0)
                                    {
                                        $('#error_fname').html('Enter your First Name1');
                                        $("#fname").focus();

                                        return false;
                                    }

                                    if (lname == 0)
                                    {
                                        $('#error_lname').html('Enter your Last Name');
                                        $("#lname").focus();

                                        return false;
                                    }


                                    if (cname == 0)
                                    {
                                        $('#error_cname').html('Enter the Company Name');

                                        $("#cname").focus();
                                        return false;
                                    }

                                    if (address == 0)
                                    {
                                        $('#error_address').html('Enter Your Address');
                                        $("#address").focus();

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

                                    if (phone1 == 0)
                                    {

                                        $('#error_phno').html('Enter Your Phone No');
                                        $("#phone1").focus();

                                        return false;
                                    }
                                    if (city == 0)
                                    {
                                        $('#error_city').html('Enter your City');
                                        $("#city").focus();

                                        return false;
                                    }
                                    if (state == 0)
                                    {
                                        $('#error_state').html('Enter Your State');
                                        $("#State").focus();

                                        return false;
                                    }

                                    if (zip == 0)
                                    {
                                        $('#error_zip').html('Enter Your zip/pin code');
                                        $("#zip").focus();

                                        return false;

                                    }

                                    if (country == 0)
                                    {
                                        $('#error_country').html('Enter Your Country');
                                        $("#Country").focus();

                                        return false;
                                    }
       var fname2 = $("#fname2").val();
                                    var lname2 = $("#lname2").val();
                                    var cname2 = $("#cname2").val();
                                    var address2 = $("#address2").val();
                                    var email2 = $("#username2").val();
                                    var phone2 = $("#phone2").val();
                                    var city2 = $("#city2").val();
                                    var state2 = $("#State2").val();
                                    var zip2 = $("#zip2").val();
                                    var country2 = $("#Country2").val();

                                    if (fname2 == 0)
                                    {
                                        $('#error_fname2').html('Enter your First Name');

                                         $("#fname2").focus();
                                        return false;
                                    }

                                    if (lname2 == 0)
                                    {
                                        $('#error_lname2').html('Enter your Last Name');

                                        $("#lname2").focus();
                                        return false;
                                    }


                                    if (cname2 == 0)
                                    {
                                        $('#error_cname2').html('Enter the Company Name');

                                       $("#cname2").focus();
                                        return false;
                                    }

                                    if (address2 == 0)
                                    {
                                        $('#error_address2').html('Enter Your Address');

                                        $("#address2").focus();
                                        return false;
                                    }
                                    if (email2 == '')
                                    {
                                        $('#error_email2').html('Enter Email address');
                                        $("#username2").focus();
                                        return false;
                                    }
                                    var x = $("#username2").val();
                                    var atpos = x.indexOf("@");
                                    var dotpos = x.lastIndexOf(".");
                                    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                                        $('#error_email2').html('Enter vaild Email address');
                                        $("#username2").focus();
                                        return false;
                                    }


                                    if (phone2 == 0)
                                    {
                                        $('#error_phno2').html('Enter Your Phone No');

                                        $("#phone2").focus();
                                        return false;
                                    }
                                    if (city2 == 0)
                                    {
                                        $('#error_city2').html('Enter your City');

                                         $("#city2").focus();
                                        return false;
                                    }
                                    if (state2 == 0)
                                    {
                                        $('#error_state2').html('Enter Your State');

                                        $("#State2").focus();
                                        return false;
                                    }

                                    if (zip2 == 0)
                                    {
                                        $('#error_zip2').html('Enter Your zip/pin code');

                                        $("#zip2").focus();
                                        return false;

                                    }

                                    if (country2 == 0)
                                    {
                                        $('#error_country2').html('Enter Your Country');

                                         $("#Country2").focus();
                                        return false;
                                    }
                                }
                                if (fname == 0)
                                {
                                    $('#error_fname').html('Enter your First Name1');
                                    $("#fname").focus();

                                    return false;
                                }

                                if (lname == 0)
                                {
                                    $('#error_lname').html('Enter your Last Name');
                                    $("#lname").focus();

                                    return false;
                                }


                                if (cname == 0)
                                {
                                    $('#error_cname').html('Enter the Company Name');

                                    $("#cname").focus();
                                    return false;
                                }

                                if (address == 0)
                                {
                                    $('#error_address').html('Enter Your Address');
                                    $("#address").focus();

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

                                if (phone1 == 0)
                                {

                                    $('#error_phno').html('Enter Your Phone No');
                                    $("#phone1").focus();

                                    return false;
                                }
                                if (city == 0)
                                {
                                    $('#error_city').html('Enter your City');
                                    $("#city").focus();

                                    return false;
                                }
                                if (state == 0)
                                {
                                    $('#error_state').html('Enter Your State');
                                    $("#State").focus();

                                    return false;
                                }

                                if (zip == 0)
                                {
                                    $('#error_zip').html('Enter Your zip/pin code');
                                    $("#zip").focus();

                                    return false;

                                }

                                if (country == 0)
                                {
                                    $('#error_country').html('Enter Your Country');
                                    $("#Country").focus();

                                    return false;
                                }
                                else

                            {



                                $('#ajaxloading').show();

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "order-process.php",
                                                                    data: str,
                                                                   
                                                                    success: function (data) {
                                                                        $('#ajaxloading').hide();

                       location.href = "ordersuccess.php?orderid=" + data;
                                                                        //window.location.href="new.php?orderid=".data;
                                
                                
                                                                    }
                                                                });
                            }
                            }
                            
                            return false;
                        });
                    });
              