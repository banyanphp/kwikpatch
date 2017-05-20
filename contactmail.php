<?php


    $name=$_REQUEST['username'];   
	$email= $_REQUEST["email"];
	$mobile= $_REQUEST["mobile"];
	$message= $_REQUEST["message"];
	

            $subject =  $_REQUEST["subject"];

            $message = "<table align='center'  width='500' style='font-family:Arial; font-size:13px; color:#ffffff;  border:#333333 solid 2px; border-radius:10px; padding:5px;'>
<tr bgcolor='#830D16;' height='40px;'>
	<td colspan='2' align='center'><small style='font-size:14px;'>KwikPatch Enquiry</small></td>
</tr>

<tr> <td>&nbsp;&nbsp;</td></tr>


<tr >

	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td style='color:#212121;'>Name : ".$name." </td>
	 
</tr>
<tr> <td>&nbsp;&nbsp;</td></tr>
<tr >
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td  style='color:#212121;'> Email : ".$email." </td>
</tr>
<tr> <td>&nbsp;&nbsp;</td></tr>
<tr >
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td  style='color:#212121;'> Mobile : ".$mobile." </td>
</tr>

<tr> <td>&nbsp;&nbsp;</td></tr>
<tr >
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td  style='color:#212121;'> Message : ".$message." </td>
</tr>

<tr> <td>&nbsp;&nbsp;</td></tr>
<tr> <td>&nbsp;&nbsp;</td></tr>

<tr> <td>&nbsp;&nbsp;</td></tr>

<tr> <td>&nbsp;&nbsp;</td></tr>









</table>";


   
$to = "sales@kwikpatch.com";
$build = "KwikPatch";
$headers = "From: Contacts <" . $build . ">\r\n" ;

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (mail($to, $subject, $message, $headers)) {
echo '0';
}
else {
    echo '1';
}
?>



