<?php

  if(isset($_POST['submit']))
    {
     $name=$_REQUEST['name'];   
	$email= $_REQUEST["email"];
	$mobile= $_REQUEST["mobile"];
	
	$message= $_REQUEST["message"];
	$apply= $_REQUEST["apply"];
	
  function GetImageExtension($imagetype) {

            if (empty($imagetype))
                return false;

            switch ($imagetype) {

                case 'image/bmp': return '.bmp';

                case 'image/gif': return '.gif';

                case 'image/jpeg': return '.jpg';

                case 'image/png': return '.png';

                default: return false;
            }
        }
	$file_name = $_FILES["file"]["name"];

        $temp_name = $_FILES["file"]["tmp_name"];

        $imgtype = $_FILES["file"]["type"];

        $ext = GetImageExtension($imgtype);

      //  $imagename = date("d-m-Y") . "-" . time() . $ext;

        $target_path = "images/profile/". $file_name ;

        move_uploaded_file($temp_name, $target_path);
            $subject = 'Enquiry';

            $message = "<table align='center'  width='500' style='font-family:Arial; font-size:13px; color:#ffffff;  border:#333333 solid 2px; border-radius:10px; padding:5px;'>
<tr bgcolor='#830D16;' height='40px;'>
	<td colspan='2' align='center'><small style='font-size:14px;'>Zkaru Enquiry</small></td>
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
<tr >
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td  style='color:#212121;'> Purpose : ".$apply." </td>
</tr>
<tr> <td>&nbsp;&nbsp;</td></tr>

<tr> <td>&nbsp;&nbsp;</td></tr>
<tr  >
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td  style='color:#212121;'> Images : <img src='http://thebanyan.in/zkarutech/images/profile/".$file_name."' alt='zkaru'> </td>
</tr>
<tr> <td>&nbsp;&nbsp;</td></tr>









</table>";

 $subject="KwikPatch: New Order #";
   
$to = "hari@banyaninfotech.com";
$build = "hari@banyaninfotech.com";
$headers = "From: hari@banyaninfotech.com <" . $build . ">\r\n" ;

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "success";
}
else{
    echo "fail";
}
}
	

?>



