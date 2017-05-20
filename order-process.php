<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['uid'])) {
    header("Location:login.php");
} else {
    @include('include/config.php');
    $fname1 = $_POST['fname1']; 
    $lname1 = $_POST['lname1'];
    $email1 = $_POST['email1'];
    $cname1 = $_POST['cname1'];
    $city1 = $_POST['city1'];
    $state1 = $_POST['state1'];
    $zip1 = $_POST['zip1'];
    $country1 = $_POST['country1'];
    $addressline1 = $_POST['addressline1'];
    $phone1 = $_POST['phone1'];
    if ($_POST['addressline2'] != "") {
        $addressline2 = $_POST['addressline2'];
    } else {
        $addressline2 = "";
    }
    if ($_POST['fname2'] != "") {
        $fname2 = $_POST['fname2'];
        $lname2 = $_POST['lname2'];
        $email2 = $_POST['email2'];
        $cname2 = $_POST['cname2'];
        $city2 = $_POST['city2'];
        $state2 = $_POST['state2'];
        $zip2 = $_POST['zip2'];
        $country2 = $_POST['country2'];
        $phone2 = $_POST['phone2'];
        $address2line1 = $_POST['address2line1'];
        if ($_POST['address2line2'] != "") {
            $address2line2 = $_POST['address2line2'];
        } else {
            $address2line2 = "";
        }
    } else {
        $fname2 = $_POST['fname1'];
        $lname2 = $_POST['lname1'];
        $email2 = $_POST['email1'];
        $cname2 = $_POST['cname1'];
        $city2 = $_POST['city1'];
        $state2 = $_POST['state1'];
        $zip2 = $_POST['zip1'];
        $country2 = $_POST['country1'];
        $phone2 = $_POST['phone1'];
        $address2line1 = $_POST['addressline11'];
        if ($_POST['addressline2'] != "") {
            $address2line2 = $_POST['addressline21'];
        } else {
            $address2line2 = "";
        }
    }
    $date = date('Y-m-d H:i:s');
    $rand = rand();
    $orderno = "kwikpatch" . "$rand";
    $id = $_SESSION['uid'];

    $name = $_SESSION['username'];
    $total = $_POST['total'];
    $prdcode = $_POST['prd_code'];
    $prd_name = $_POST['prd_name'];
    $product = "";
    $subcategoryname = $_POST['prd_category'];
    $prd_main_category = $_POST['prd_main_category'];
    $prd_qty = $_POST['prd_qty'];
 $prd_cushion=$_POST['prd_cushion_color'];
$prd_backpoly=$_POST['prd_backpoly_color'];
      if ($_POST['message'] != "") {
            $ordermesssage = $_POST['message'];
        } else {
            $ordermesssage = "";
        }
    for ($i = 1; $i <= $total; $i++) {
        $code = $prdcode[$i];
        $prdname = $prd_name[$i];
        $subcategoryname = $subcategoryname[$i];
        $prdmaincategory = $prd_main_category[$i];
        $qty = $prd_qty[$i];
$cushion=$prd_cushion[$i];
$backpoly=$prd_backpoly[$i];

       $q = "INSERT INTO tbl_order(order_no, user_id,user_name,ordermessage,billing_first_name,biling_last_name,shipping_email_id, shipping_first_name,shipping_last_name,billing_email_id,prd_code,prd_name,prd_category_name,prd_main_category_name,qty,shipping_address1, shipping_address2,billing_address1,billing_address_2,billng_city,billing_state,billing_country,billing_zip_code,shipping_city,shipping_state, shipping_country,shipping_zip_code,billing_company_name,shipping_company_name,billing_phone_no,shipping_phone_no,is_pending,is_shifted, is_processing,is_completed,date,is_abandonded,is_reorder,status,cushion_color,backpoly_color) VALUES ('$orderno', '$id', '$name','$ordermesssage', '$fname1', '$lname1', '$email2', '$fname2', '$lname2', '$email1', '$code', '$prdname', '$subcategoryname', '$prdmaincategory', '$qty', '$address2line1', '$address2line2', '$addressline1', '$addressline2', '$city1', '$state1', '$country1', '$zip1', '$city2', '$state2', '$country2', '$zip2', '$cname1', '$cname2', '$phone1', '$phone2', '1', '0', '0', '0', '$date', '0', '0', '1','$cushion','$backpoly')";
      
        $query = "UPDATE `tbl_addtocart` SET `is_shifted` = '1' WHERE `prd_code` = '$code' AND `backpoly_color`='$backpoly' AND `cushion_color`='$cushion' AND`user_id`='$id' ";

        if ((mysqli_query($con, $q)) && (mysqli_query($con, $query))) {
            $get_user = mysqli_fetch_array(mysqli_query($con, "select * from registration where `id`='$id'"));
            $order_select = "select * from tbl_order where `order_no`='$orderno'";
            $row = mysqli_fetch_array(mysqli_query($con, $order_select));
            $firstname = $get_user['firstname'];
            $lastname = $get_user['lastname'];
        }
    }
 $q1 = "SELECT * FROM `tbl_order` WHERE `order_no`= '$orderno'";

    $q2 = mysqli_query($con, $q1);
    while ($rows = mysqli_fetch_array($q2)) {
        $prdcode = $rows['prd_code'];
        $prd_name = $rows['prd_name'];
        $cushion_color = $rows['cushion_color'];
        $backpoly_color = $rows['backpoly_color'];
        $name111= $rows['prd_main_category_name'];
   $name112= $rows['prd_category_name'];
	$sq=mysqli_query($con,"select category_name from tbl_kwikcategories where id='$name111'");
											$names=mysqli_fetch_array($sq);
											 $names1=$names['category_name'];
		
		
      $maincategorynames = $rows['prd_category_name'];
		
		
		
if($maincategorynames!=''){
	$name=$rows['maincategorynames'];
	
								$sq=mysqli_query($con,"select fld_level2name from tbl_categorytblname where fld_level2id='$maincategorynames'");
											$names=mysqli_fetch_array($sq);

											$maincategorynames123=$names['fld_level2name'];									
}
else{
$a="select fld_level2name from tbl_categorytblname where fld_level1id='$name112'";
		$sq=mysqli_query($con,$a);
											$names=mysqli_fetch_array($sq);
											 $maincategorynames123=$names['fld_level2name'];			
	
}											
        $qty = $rows['qty'];
        $product.='  
                                      
                                      <tr>
                                            
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $prdcode . '</td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $prd_name . '</td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $names1. '</td>
                                               <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $maincategorynames123. '</td>    
 <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $cushion_color . '</td>       

 <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $backpoly_color . '</td>        
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">' . $qty . '</td>


                                            </td>
                                        </tr> ';
    }


    //while ($rows = mysqli_fetch_array($q2)) 


    $message = '<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
            <td align="center" valign="top" style="padding:20px">
                <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="750">

                    <tbody><tr>
                            <td align="center" valign="top"><a href="http://www.kwikpatch.com" target="_blank"> <img src="http://www.kwikpatch.com/images/logo3.jpg" alt="kwik Patch" style="margin-bottom:10px" border="0" class="CToWUd"></a></td>
                        </tr>

                        <tr>
                            <td valign="top">
                                <h1 style="font-size:16px;font-weight:700;line-height:20px;margin:0 0 16px 0">Hello &nbsp;' .   $firstname .  $lastname .','. '</h1>
                                <p style="line-height:16px;margin:0">
                                    Thank you for your order from Kwikpatch.
                                    Once your package ships we will send an email with a link to track your order.
                                    You can check the status of your order by <a href="http://www.kwikpatch.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">logging into your account</a>.
                                    If you have any questions about your order please contact us at <a href="mailto:sales@kwikpatch.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">sales@kwikpatch.com</a> or call us at <span class="m_3614019586807080933nobr"></span> Monday - <span class="aBn" data-term="goog_1280993810" tabindex="0"><span class="aQJ">Friday</span></span>, <span class="aBn" data-term="goog_1280993811" tabindex="0"><span class="aQJ">8am - 5pm PST</span></span>.
                                </p>
                                <p style="line-height:16px;margin:16px 0 6px">Your order confirmation is below. Thank you again for your business.</p>
                                <h2 style="font-weight:normal;margin:0;font-size:14px">Your Order # <span style="font-weight:700">' . $orderno . '  </span> (placed on ' . $date . ')</h2>
                            </td></tr>
                        <tr>
                       
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="750">
                                    <thead>
                                        <tr>
                                            <th align="left" width="325" style="font-size:18px;padding:10px 0;font-weight:700;line-height:1em">Billing Information:</th>
                                            <th width="10"></th>
                                            <th align="left" width="325" style="font-size:18px;padding:10px 0;font-weight:700;line-height:1em">Shipping Address:</th>
                                        </tr>
                                    </thead>
             <tbody>
                                        <tr>
                                            <td valign="top" style="padding:7px 0">
                                               
                                    ' . $fname1 . '
                                    ' . $lname1 . '<br/>
                                    ' . $cname1 . '<br/>
                                   
                                    ' . $addressline1 . ',' . $addressline2 . '<br/>
                                    
                                  
                                   
                                  ' . $city1 . '<br/>
                                  ' . $state1 . '<br/>
                                    
                                  ' . $country1 . '-
                                   
                                   
                                  ' . $zip1 . '<br/>
                                  
                                    <b>Email-Id:</b>
                                      ' . $email1 . '<br/>
                                    
                                      <b>Phone Number:</b>
                                       ' . $phone1 . '<br/>
                                       </td>
                                            <td>&nbsp;</td>
                                          <td valign="top" style="padding:7px 0">
                                            
                                  
                                     ' . $fname2 . '
                                      ' . $lname2 . '<br/>
                                   
                                    ' . $cname2 . '<br/>
                                     ' . $address2line1 . ',' . $address2line2 . '<br/>
                                   
                                   ' . $city2 . '<br/>
                                    ' . $state2 . '<br/>
                                   ' . $country2 . '-
                                   
                                   
                                   ' . $zip2 . '<br/>
                                   
                                    <b>Email-Id:</b>
                                        ' . $email2 . '<br/>
                                      <b>Phone Number:</b>
                                        ' . $phone2 . '<br/>
                                                                     
                                    <br/>
                                

                                              
                                            </td>
                                        </tr>
                                    </tbody>
            </table>
            <br>

<table cellspacing="0" cellpadding="0" border="0" width="650" style="border:1px solid #eaeaea">
                                    <thead>
                                        <tr>
                                            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Product Code</th>
                                            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Product Name</th>
                                            <th align="center" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Category Name</th>
                                            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Sub Category Name</th>
											<th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Cushion Color</th><th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">BackPoly Color</th>
                                            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Quantity</th>

                                    
                                        </tr>
                                    </thead>

                                    <tbody bgcolor="#F6F6F6">

         ' . $product . '
                </tbody>
                </table>

<p style="margin:0 0 10px 0"></p>
</td>
</tr>
<tr>
    <td align="right" style="text-align:right"><p style="margin:0">Thank you, <strong>Kwikpatch</strong></p></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>';
 $subject="KwikPatch: New Order #";
    $subject.=$orderno;
$bcc_id="support@banyaninfotech.com";
$to = $email1;
$build = "Sales";
$headers = "From: KwikPatch <" . $build . ">\r\n" ;
$headers .= "Cc: sales@kwikpatch.com'\r\n";
$headers .= "Bcc: $bcc_id\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
if (mail($to, $subject, $message, $headers)) {
    echo $rand;
}
else{
    echo $q;
}


}
?>    