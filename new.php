<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches" />
<meta name="keywords" content="tirerepairs,gums,cements,earthmovers,conveyor,beltrepairs,tubelesstirerepairs,tube repairs" />
<meta name="author" content="Banyan Infotech" />

<title>Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches</title>
    </head><body><?php error_Reporting('0');

session_start();
if(!isset($_SESSION['uid'])){
	echo "<script>window.location.href=login.php'</script>";
	
} 
else if(empty($_GET['orderno']))
{
    header("Location:page-404.php");
}
$orderids="#";
$orderids.=$_GET['orderno'];

?>
<script type="text/javascript" src="print/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
             $('#btnPrint').hide();
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=800,width=800');
            printWindow.document.write('<html><head><title></title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
            location.reload();
        });
    </script>
   <style>
   table td { border: 1px solid #eee; }
    table td { width:25% }
   </style> 
    
<?php 
 
include('include/config.php');
$orderid=$_GET['orderno'];
  $query = "SELECT * FROM `tbl_order` WHERE `order_no`= '$orderid'";


                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                $user_id=$row['user_id'];
                $q=  mysqli_fetch_array(mysqli_query($con, "select * from registration where id=$user_id"));
              
                ?>
   <form id="dvContainer">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tbody><tr>
            <td align="center" valign="top" style="padding:20px">
                <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" border="0" width="750">

                    <tbody><tr>
                            <td align="center" valign="top"><a href="http://thebanyan.in/index.php" target="_blank"> <img src="images/logo3.jpg" alt="Checkers Bay" style="margin-bottom:10px" border="0" class="CToWUd"></a></td>
                        </tr>

                        <tr>
                            <td valign="top">
                                <h1 style="font-size:16px;font-weight:700;line-height:20px;margin:0 0 16px 0">Hello, <?php echo $q['firstname']; ?>&nbsp;<?php echo $q['lastname']; ?></h1>
                                <p style="line-height:16px;margin:0">
                                    Thank you for your order from Kwikpatch.
                                    Once your package ships we will send an email with a link to track your order.
                                    You can check the status of your order by <a href="http://thebanyan.in/kwikpatch/" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">logging into your account</a>.
                                    If you have any questions about your order please contact us at <a href="mailto:sales@kwikpatch.com" style="font-weight:700;color:#46b08d;text-decoration:none" target="_blank">sales@kwikpatch.com</a> or call us at <span class="m_3614019586807080933nobr"></span> Monday - <span class="aBn" data-term="goog_1280993810" tabindex="0"><span class="aQJ">Friday</span></span>, <span class="aBn" data-term="goog_1280993811" tabindex="0"><span class="aQJ">8am - 5pm PST</span></span>.
                                </p>
                                <p style="line-height:16px;margin:16px 0 6px">Your order confirmation is below. Thank you again for your business.</p>
                                <h2 style="font-weight:normal;margin:0;font-size:14px">Your Order # <span style="font-weight:700"><?php echo $orderid; ?> </span> (placed on November <?php echo $row ['date'] ?>)</h2>
                            </td></tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="750">
                                    <thead>
                                        <tr>
                                            <th align="left" width="325" style="font-size:18px;padding:10px 0;font-weight:700;line-height:1em">Billing Information:</th>
                                         
                                            <th align="left" width="325" style="font-size:18px;padding:10px 7px;font-weight:700;line-height:1em">Shipping Address:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td valign="top" style="padding:7px 7px;border: 1px solid #eee;">
                                               
                                     <?php
                                    echo ucfirst($row['billing_first_name']);
                                     echo ucfirst($row['biling_last_name']);
                                    ?><br/>
                                     <?php if(!empty($row['billing_company_name'])) {
                                    echo $row['billing_company_name'];
                                    ?>
                                     <br/><?php } ?>
                                    <?php
                                    echo $row['billing_address1'];
                                    ?>
                                    <br/>
                                    
                                   <?php if(!empty($row['billing_address_2'])) {
                                    echo $row['billing_address_2'];
                                   
                                    ?>
                                   <br/><?php  } ?>
                                    <?php
                                    echo $row['billng_city'];
                                    ?>
                                    <br/>
                                    <?php
                                    echo $row['billing_state'];
                                    ?>
                                    <br/>
                                    <?php
                                    echo $row['billing_country']."-";
                                   
                                   
                                    echo $row['billing_zip_code'];
                                    ?>
                                    <br/>
                                    <b>Email-Id:</b>
                                        <?php
                                       
                                    echo $row['billing_email_id'];
                                                                      ?>
                                    <br/>
                                      <b>Phone Number:</b>
                                        <?php
                                       
                                    echo $row['billing_phone_no'];
                                                                      ?>
                                    <br/>
                          


                                            </td>
                                          
                                           <td valign="top" style="padding:7px 7px;border: 1px solid #eee;">
                                            
                                  
                                      <?php
                                    echo  ucfirst($row['shipping_first_name']);
                                     echo  ucfirst($row['shipping_last_name']);
                                    ?>
                                    <br/>
                                     <?php if(!empty($row['shipping_company_name'])) {
                                    echo $row['shipping_company_name'];
                                    ?>
                                     <br/><?php } ?>
                                    <?php
                                    echo $row['shipping_address1'];
                                    ?>
                                    <br/>
                                    
                                   <?php if(!empty($row['shipping_address2'])) {
                                    echo $row['shipping_address2'];
                                   
                                    ?>
                                   <br/><?php  } ?>
                                    <?php
                                    echo $row['shipping_city'];
                                    ?>
                                    <br/>
                                    <?php
                                    echo $row['shipping_state'];
                                    ?>
                                    <br/>
                                    <?php
                                    echo $row['shipping_country']."-";
                                   
                                   
                                    echo $row['shipping_zip_code'];
                                    ?>
                                    <br/>
                                    <b>Email-Id:</b>
                                        <?php
                                       
                                    echo $row['shipping_email_id'];
                                                                      ?>
                                    <br/>
                                      <b>Phone Number:</b>
                                        <?php
                                       
                                    echo $row['shipping_phone_no'];
                                                                      ?>
                                    <br/>
                                

                                              
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>

                               

                                <table cellspacing="0" cellpadding="0" border="0" width="750" style="border:1px solid #eaeaea">
                                    <thead>
                                        <tr>
                                            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Product Code</th>
                                            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Product Name</th>
                                            <th align="center" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Category Name</th>
                                            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Sub Category Name</th>
																						<th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Cushion Color</th>

											<th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">BackPoly Color</th>
                                            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px">Quantity</th>

                                    
                                        </tr>
                                    </thead>

                                    <tbody bgcolor="#F6F6F6">
                                        <?php $q1= "SELECT * FROM `tbl_order` WHERE `order_no`= '$orderid'";
                                        
                                        $q2=mysqli_query($con,$q1);
                                        while($rows= mysqli_fetch_array($q2)){
                                           
                                        ?>
                                        <tr>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">
                                                <strong style="font-size:11px"><?php echo $rows['prd_code'] ?></strong>
                                                
                                            </td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['prd_name'] ?></td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php $name=$rows['prd_main_category_name'];

											$sq=mysqli_query($con,"select category_name from tbl_kwikcategories where id='$name'");
											$names=mysqli_fetch_array($sq);
											echo $names1=$names['category_name'];
											?></td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc">
											<?php
$names=$rows['prd_category_name'];
if($names!=''){
	$name=$rows['prd_category_name'];
	
								$sq=mysqli_query($con,"select fld_level2name from tbl_categorytblname where fld_level2id='$names'");
											$names=mysqli_fetch_array($sq);
											echo $names1=$names['fld_level2name'];									
}
else{
$a="select fld_level2name from tbl_categorytblname where fld_level1id='$name'";
		$sq=mysqli_query($con,$a);
											$names=mysqli_fetch_array($sq);
											echo $names1=$names['fld_level2name'];			
	
}											
											?></td> 
                                                
												<td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['cushion_color'] ?></td>
                                                            
															<td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['backpoly_color'] ?></td>
															
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['qty'] ?></td>



                                            </td>
                                        </tr>
                                        <?php } ?>
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
    </tbody></table>
                     <input type="button" value="Confirm Print" class="btn btn-info" id="btnPrint" style="cursor: pointer;margin-left:40%;color: #fff;background-color: #337ab7;border-color: #2e6da4;padding: 5px;border-radius: 13px;font-family: verdana;">  
   </form>
    </body></html>
    