<?php

	@include('include/config.php');
$email=$_GET['username'];
        


//$activation="1";
 $activation = md5($email . time());
$query="SELECT * FROM `registration` WHERE `username`= '$email'";
$result=mysqli_query($con,$query);
$val=mysqli_num_rows($result);

if($val==1){
	$query1="SELECT * FROM `registration` WHERE `username`= '$email'";
$result1=mysqli_query($con,$query1);
$fetchuser=  mysqli_fetch_array($result1);
$fname=$fetchuser['firstname'];
$lname=$fetchuser['lastname'];
       
    
$confirmationlink = "http://www.kwikpatch.com/activation_verification.php?username=$email&activation=$activation";
  $message='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_4275388581297042370background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px">
  <tbody>
    <tr>
      <td valign="top" align="center" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
	  <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
          <tbody>
            <tr>
              <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
			  <table cellpadding="0" cellspacing="0" border="0"  style="border-collapse:collapse;padding:0;margin:0;width:100%">
                  <tbody>
                    <tr>
                      <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0"><a href="http://www.kwikpatch.com/" style="color:#3696c2;float:left;display:block" target="_blank"> <img width="200" height="100" src="http://www.kwikpatch.com/images/logo3.jpg" alt="kwikpatch" border="0" style="outline:none;text-decoration:none" ></a></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr>
              <td valign="top" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px;margin:0;border:1px solid #ebebeb;background:#fff"><table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;width:100%">
                  <tbody>
                    <tr>
                      <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0"><table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                          <tbody>
                            <tr>
                              <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 20px 15px;margin:0;line-height:18px"><h1 style="font-family:Verdana,Arial;font-weight:bold;font-size:25px;margin-bottom:25px;margin-top:5px;line-height:28px">Hello &nbsp;' .   $fname .  $lname .','. '</h1>
                                <p style="font-family:Verdana,Arial;font-weight:normal">Your email <a href="mailto:'.$email.'" target="_blank">'.$email.'</a> must be confirmed before using it to log in to our store.</p>
                                <p  style="font-family:Verdana,Arial;font-weight:normal;border:1px solid #c3ced4;padding:13px 18px;background:#f1f1f1"> Use the following values when prompted to log in:<br>
                                  <strong style="font-family:Verdana,Arial;font-weight:normal">Email:</strong> <a href="'.$email.'" target="_blank">'.$email.'</a><br>
                                  <strong style="font-family:Verdana,Arial;font-weight:normal">Password:</strong>***** </p>
                                <p style="font-family:Verdana,Arial;font-weight:normal">Click here to confirm your email and instantly log in (the link is valid only once):</p>
                                <table cellspacing="0" cellpadding="0"  style="border-collapse:collapse;padding:0;margin:0 auto;width:220px;text-align:center">
                                  <tbody>
                                    <tr>
                                      <td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:middle;padding:0;margin:0 auto;background-color:#3696c2;color:#fff;width:100%;height:40px;display:block;border:0 none;text-align:center;text-transform:uppercase;white-space:nowrap">
                                          <a href="'.$confirmationlink.'" style="color:#3696c2;width:100%;height:100%;line-height:40px;font-size:15px;display:inline-block;text-decoration:none" target="_blank" >
                                              <span style="color:#fff">Confirm Account</span></a></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p style="font-family:Verdana,Arial;font-weight:normal"> If you have any questions, please feel free to contact us at <a href="mailto:sales@kwikpatch.com" style="color:#3696c2" target="_blank">sales@kwikpatch.com</a> or by phone at <a style="color:#3696c2">+91 422 2363800</a>. </p></td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
          </tbody>
        </table>
        <h5  style="font-family:Verdana,Arial;font-weight:normal;text-align:center;font-size:22px;line-height:32px;margin-bottom:75px;margin-top:30px">Thank you, <span >KwikPatch</span>
            !</h5></td>
    </tr>
  </tbody>
</table>';
   $to = $email;
    $subject = 'Enquiry|KwikPatch';
    $build = "Enquiry";
$headers = "From:KwikPatch <" . $build . ">\r\n" ;

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (mail($email, $subject, $message, $headers)) {
    $updatequery=mysqli_query($con,"UPDATE `registration` SET `activation_code` = '$activation' WHERE `registration`.`username` ='$email'");
    if($updatequery){
    header("Location:login.php?verify=error");

    }
} else {

    header("Location:login.php?verify=invalid");
}

 }




	
         
?>