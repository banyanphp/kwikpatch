<?php include('header.php'); ?>
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

<form id="dvContainer">

<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h2>Order Details</h2>  
            </ol>
        </div> 
    </div>
    <div class="page-content container-fluid">
        <div class="widget">
            
            <div class="widget-body"> 

                <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM `tbl_order` WHERE `id`= '$id'";

//echo $query;  
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="tab-content">
                        <table class="table">
                            <tbody>
                            <th style="border-top: 0px !important"><h4>Order Details</h4></th>
                            <tr><td><strong>Order No</strong></td><td>:</td><td><?php echo $row['order_no'] ?></td></tr>
                            <tr><td><strong>Ordered By</strong></td><td>:</td><td><?php echo $row['user_name'] ?></td></tr>
                            <tr><td><strong>Ordered At</strong></td><td>:</td><td><?php echo $row['date'] ?></td></tr>
                               <tr><td><strong>Message</strong></td><td>:</td><td><?php echo $row['ordermessage'] ?></td></tr>
                            <tr style="    border-bottom: 1px solid #ddd !important;
"><td><strong>Order Status</strong></td><td>:</td>
                                <td>
                                    <?php
                                    if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 1) && ($row['is_completed'] == 1)) {
                                        ?> <span class="label label-success">
                                        <?php echo "Completed"; ?></span><?php
                                    } else if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 1) && ($row['is_completed'] == 0)) {
                                        ?> <span class="label label-success" >
                                        <?php echo "Processing"; ?></span><?php
                                    } else if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 0) && ($row['is_completed'] == 0)) {
                                        ?> <span class="label label-success" style="padding: 3px 10px;">
                                        <?php echo "Approved"; ?></span><?php
                                    } else if (($row['is_pending'] == 1) && ($row['is_shifted'] == 0) && ($row['is_processing'] == 0) && ($row['is_completed'] == 0)) {
                                        ?> <span class="label label-success" style="
                                            padding: 3px 15px;
                                            ">
                                        <?php echo "Pending"; ?></span><?php
                                    }
                                    ?> 
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <br/>
                        <table class="table">
                            <tbody>
                            <th style="border-top:0px solid !important">Address Details</th>
                            <tr><td style="border-right:1px solid #ddd"><h4>Billing Details</h4></td><td><h4>Shipping Details</h4></td></tr>
                             <tr>
                                 <td style="border-right:1px solid #ddd">
                                     <?php
                                    echo $row['billing_first_name'];
                                     echo $row['biling_last_name'];
                                    ?>
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
                                 <td style="border-right:1px solid #ddd">
                                  
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
                        
                           <br/>
                        <table class="table">
                            <tbody>
                            <th style="border-top:0px solid !important">Product Details</th>
                            <tr><td style="border-right:1px solid #ddd"><h4>Product Code</h4></td>
                                <td style="border-right:1px solid #ddd"><h4>Product Name</h4></td>
                                <td style="border-right:1px solid #ddd"><h4>Category Name</h4></td>
                                <td style="border-right:1px solid #ddd"><h4> Sub Category Name</h4></td>
                                <td style="border-right:1px solid #ddd"><h4>Quantity</h4></td>
                            </tr>
                            <?php 
                           $orderno= $row['order_no'];$query1 = "SELECT * FROM `tbl_order` WHERE `order_no`= '$orderno '";

//echo $query;  
                $result1 = mysqli_query($con, $query1);
                while ($row1 = mysqli_fetch_array($result1)) {  ?>
                            <tr style="border-bottom:1px solid #ddd !important;">
                                 <td><?php echo $row1['prd_code'] ?></td>
                                   <td><?php echo $row1['prd_name'] ?></td><?php
$name111=$row1['prd_main_category_name'];
$q="select category_name from tbl_kwikcategories where id='$name111'";
$sq=mysqli_query($con,$q);
											$names=mysqli_fetch_array($sq);
											 $names1=$names['category_name'];
		
		
?>  <td><?php echo $names1;?></td>  <?php 
$prd_category_namew=$row1['prd_category_name'];
if($prd_category_namew!=''){
$sq=mysqli_query($con,"select fld_level2name from tbl_categorytblname where fld_level2id='$prd_category_namew'");
											$names=mysqli_fetch_array($sq);
											?>	
                                 
                                     <td><?php echo $names['fld_level2name']; ?></td>    <?php  } else {
                                     
                              $q1="select fld_level2name from tbl_categorytblname where fld_level1id='$name111'"; 
                                     $sq1=mysqli_query($con,$q1);
											$names=mysqli_fetch_array($sq1);
											
                                     ?>
                                     <td> <?php echo $names1=$names['fld_level2name']; } ?></td>
                                    
                                     <td><?php echo $row1['qty'] ?></td>
                                     
                                     
                </tr><?php } ?>
                            </tbody>
                            
                        </table>
                        
                    </div>
                                <?php } ?>
            </div> 
        </div>
    </div></div>   <input type="button" class="btn btn-info pull-right" value="Print" onclick="window.location.href='print_order.php?orderno=<?php echo$orderno;?>'" style="margin-right:10%;"></form>
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





</body>
</html>