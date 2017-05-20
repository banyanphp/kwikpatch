$(function() {
    $(document).on("keyup", "input#username", function() {
        $("#errors").html("")
    });
    $(document).on("keyup", "input#email", function() {
        $("#errors").html("")
    });
    $(document).on("keyup", "input#mobile", function() {
        $("#errors").html("")
    });
    $(document).on("keyup", "#message", function() {
       
        $("#errors").html("")
    });
    $(".proceedbutton").click(function() {

        var b = $("#username").val();
        var e = $("#email").val();
        var d = $("#mobile").val();
        var i = $("#message").val();
      var subject = $("#subject ").val();
        var f = $("#enqform").serialize();
        var h = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (b == "") {
 $("#errors").html("Enter Name");
            $("#username").focus();
            return false
        }
        if (e == "") {
            $("#errors").html("Enter Email address");
            $("#email").focus();
            return false
        }
        var g = $("#email").val();
        var a = g.indexOf("@");
        var c = g.lastIndexOf(".");
        if (a < 1 || c < a + 2 || c + 2 >= g.length) {
            $("#errors").html("Enter vaild Email address");
            $("#email").focus();
            return false
        }
       
 if (subject == "") {
            $("#errors").html("Enter subject ");
            $("#subject ").focus();
            return false
        }
 if (d == "") {
            $("#errors").html("Enter Phone");
            $("#mobile").focus();
            return false
        }
        if (i == "") {
            $("#errors").html("Enter message");
            $("#message").focus();
            return false
        } else {
$('#ajaxloading').show();

            $("#errors").html("");
            $("#flash").show();
            $("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
            $.ajax({
                type: "POST",
                url: "contactmail.php",
                data: f,
                cache: true,
                success: function(j) {

$('#ajaxloading').hide();  
                    $("#flash").hide();
                    $("#errors").html("");
                    if (j == 0) {
                        $("#mail_success").show()
                    } else {
                        if (j == 1) {
                            $("#mail_fail").show()
                        }
                    }
                    document.getElementById("enqform").reset();
                    setTimeout(function() {
                        $(".response").hide()
                    }, 3000)
                }
            })
        }
        return false
    })
});