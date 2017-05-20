<?php

$id = $_POST['id'];

include('../include/config.php');
$query = "SELECT * FROM tbl_kwikcategories WHERE id=$id";
$qr = mysqli_query($con, $query);

$row = mysqli_fetch_array($qr);
?>



<div class="modal fade" id="myModal12" role="dialog">
    <div class="modal-dialog" style="width:83%">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update sub category</h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form class="form-horizontal" role="form" action="cat_process.php" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input type="text" name="catname" class="form-control" value="<?php echo $row['category_name']; ?>">
                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-md-2 control-label">image</label>
                            <div class="col-md-10">
                                <?php if (!empty($row['category_img'])) { ?>
                                    <img src="../images/product/<?php echo $row['category_img']; ?>" height="100" width="100" /><br/><br/>
                                <?php } ?>
                                <input type="file" name="uploadedimage" id="fileChooser" onchange="return ValidateFileUpload()">

                            </div>
                        </div>

                        <div class="form-group">

                            <div class="pull-right">
                                <input type="hidden" value="<?php echo $id; ?>" name="sid">
                              <input type="hidden" value="update" name="action">

                        
                                <input type="submit" class="btn btn-info" name="submit">
                            </div>
                        </div>
                    </form>
                </div><!-- end col -->
            </div>

            <div class="modal-footer" style="border-top:none;border-bottom:1px solid #CACACA">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>



    </div>
</div>