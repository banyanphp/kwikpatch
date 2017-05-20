<?php include('header.php'); ?>




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
                        <form action="change_order_status_process.php" method="post">
                            <table class="table">
                                <tbody>
                                <th style="border-top: 0px !important"><h4>Order Details</h4></th>
                                <tr><td><strong>Order No</strong></td><td>:</td><td><input type="text" name="orderno" value="<?php echo $row['order_no'] ?>" style="border: 0px !important;"readonly></td></tr>
                                <tr><td><strong>Ordered By</strong></td><td>:</td><td><input type="text" name="user_name" value="<?php echo $row['user_name'] ?>"style="border: 0px !important;" readonly></td></tr>
                                <tr><td><strong>Ordered At</strong></td><td>:</td><td><input type="text" name="date" value="<?php echo $row['date'] ?>" style="border: 0px !important;"readonly></td></tr>

                                <tr style="    border-bottom: 1px solid #ddd !important;
                                    "><td><strong>Order Status</strong></td><td>:</td>
                                    <td><select name="status">
                                            <option value="1" <?php if (($row['is_pending'] == 1) && ($row['is_shifted'] == 0) && ($row['is_processing'] == 0) && ($row['is_completed'] == 0)) {
                    echo "selected";
                }
                ?>> Pending </option>
                                                                <option value="2" <?php if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 0) && ($row['is_completed'] == 0)) {
                    echo "selected";
                }
                ?>> Approved </option>
                                            <option  value="3"<?php if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 1) && ($row['is_completed'] == 0)) {
                    echo "selected";
                } ?>  > Processing </option>
                                            <option  value="4" <?php if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 1) && ($row['is_completed'] == 1)) {
                                    echo "selected";
                                } ?>  > Completed </option> 
                                            
                                        </select></td>
 
                
                                
                                </tr>
                                <tr><td><strong>Order Notes</strong></td><td>:  </td><td>  <div class="form-group">
                                                    
                                                    <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." name="message"rows="3"></textarea>
                                                </div></td></tr>
                                <tr><td colspan="3"><input type="hidden" name="page" value="<?php echo $_GET['page'] ?>"><input type="submit" name="submit" class="btn btn-info pull-right"></td></tr>
                            
                                </tbody>
                                
                            </table></form>
                        <br/>


                    </div>
<?php } ?>
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