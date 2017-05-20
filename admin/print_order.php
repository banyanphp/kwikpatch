 <script type="text/javascript" src="../print/jquery.min.js"></script>
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
 
include('../include/config.php');
$orderid=$_GET['orderno'];
  $query = "SELECT * FROM `tbl_order` WHERE `order_no`= '$orderid'";


                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                $user_id=$row['user_id'];
                $q=  mysqli_fetch_array(mysqli_query($con, "select * from registration where id=$user_id"));
              
                ?><form id="dvContainer">
<table cellspacing="0" cellpadding="0"  style="border: 1px solid #eee;" width="100%">
    <tbody><tr>
            <td align="center" valign="top" style="padding:20px">
                <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="10" style="border: 1px solid #eee;" width="750">

                    <tbody><tr>
                            <td align="center" valign="top"><a href="http://thebanyan.in/index.php" target="_blank"> <img src="../images/logo3.jpg" alt="KwikPatch" style="margin-bottom:10px" border="0" class="CToWUd"></a></td>
                        </tr>

                        <tr>
                            <td valign="top">
                                <table cellspacing="0" cellpadding="0" style="border: 1px solid #eee;" width="750">
                                   <tr><td align="left" width="325" style="font-size:18px;padding:10px 0;font-weight:700;line-height:1em;border:1px solid #eee">Order No</td><td style="padding:15px;border: 1px solid #eee;"><?php echo $row['order_no'] ?></td></tr>
                            <tr><td align="left" width="325" style="font-size:18px;padding:10px 0;font-weight:700;line-height:1em;border:1px solid #eee"><strong>Ordered By</strong></td><td style="padding:15px;border: 1px solid #eee;"><?php echo $row['user_name'] ?></td></tr>
                            <tr><td align="left" width="325" style="font-size:18px;padding:10px 0;font-weight:700;line-height:1em;border:1px solid #eee"><strong>Ordered At</strong></td><td style="padding:15px;border: 1px solid #eee;"><?php echo $row['date'] ?></td></tr>
                                </table>
                            </td></tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" style="border: 1px solid #eee;" width="750">
                                    <thead>
                                        <tr>
                                            <th align="left" width="325" style="font-size:18px;padding:10px 0;border: 1px solid #eee;font-weight:700;line-height:1em">Billing Information:</th>
                                         
                                            <th align="left" width="325" style="font-size:18px;padding:10px 7px;border: 1px solid #eee;font-weight:700;line-height:1em">Shipping Address:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td valign="top" style="padding:7px 7px;border: 1px solid #eee;">
                                               
                                     <?php
                                    echo $row['billing_first_name'];
                                     echo $row['biling_last_name'];
                                    ?> <br/>
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
                                    echo $row['shipping_first_name'];
                                     echo $row['shipping_last_name'];
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

                               

                                <table cellspacing="0" cellpadding="0" border="0" width="650" style="border:1px solid #eaeaea">
                                    <thead>
                                        <tr>
                                            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px;border: 1px solid #eee;">Product Code</th>
                                            <th align="left" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px;border: 1px solid #eee;">Product Name</th>
                                            <th align="center" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px;border: 1px solid #eee;">Category Name</th>
                                            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px;border: 1px solid #eee;">Sub Category Name</th>
                                            <th align="right" bgcolor="#EAEAEA" style="font-size:13px;padding:16px 9px;border: 1px solid #eee;">Quantity</th>

                                    
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
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['prd_code'] ?></td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['prd_name'] ?></td>
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['prd_main_category_name'] ?>
                                                <span class="m_3614019586807080933price"><?php echo $rows['prd_category_name'] ?></span>            
                                            <td align="left" valign="top" style="font-size:11px;padding:16px 9px;border-bottom:1px dotted #cccccc"><?php echo $rows['qty'] ?></td>



                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                   
                                </table>

                                <p style="margin:0 0 10px 0"></p>
                            </td>
                        </tr>
                        
                    </tbody></table>
            </td>
        </tr>
    </tbody></table>
<input type="button" value="Confirm Print" class="btn btn-info" id="btnPrint" style="margin-left:40%;color: #fff;background-color: #337ab7;border-color: #2e6da4;padding: 5px;border-radius: 13px;font-family: verdana;cursor: pointer;">    </form>