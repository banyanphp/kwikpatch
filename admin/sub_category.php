<?php
include('header.php');
$cq = mysqli_query($con, 'SELECT * FROM tbl_kwikcategories WHERE id="' . $_GET['cat_id'] . '"');
$catid = $_GET['cat_id'];
$cat_row = mysqli_fetch_array($cq);
?>
<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h2>Product Sub categories</h2> 
            <ol class="breadcrumb mb-0"> 
                <li><a href="categorys.php">Categories</a></li>
                <li class="active"><?php echo $cat_row['category_name']; ?></li>
            </ol>
        </div>
        <div class="pull-right">

            <a href="add_subcategory.php?cat_id=<?php echo $cat_row['id']; ?>" type="button" class="btn btn-warning">+ Add Sub Category</a>


        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <span id="dataresponse"></span>
            <div class="col-lg-12"> 
                <div class="widget-body">
                    <table id="example-1" cellspacing="0" width="100%" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Sub Category</th> 
                                <th>Sub Category Image</th>
                                <th>Action</th> 
                            </tr>
                        </thead> 
                        <tbody>
                            <?php
                            $query = "SELECT * FROM tbl_categorytblname WHERE fld_level1id='$_GET[cat_id]' ORDER BY fld_delstatus  DESC";
                            // echo $query;
                            $qr = mysqli_query($con, $query);
                            $sno = 1;
                            while ($row = mysqli_fetch_array($qr)) {
                                ?>

                                <tr> 
                                    <td><?php echo $sno++; ?></td>
                                    <td><?php echo $row['fld_level2name'] ?></td>
                                    <?php if(!empty($row['fld_level2_img'])){ ?>
                                    <td><img src="images/sub_category/<?php echo $row['fld_level2_img'] ?>" style="width:100px;height:100px"></td>
                                    <?php } else {?>
                                    <td></td>
                                    <?php } ?>
                                    <td>
                                        <button type="button"  onclick="changesubcategory(<?php echo $row['fld_level2id'] ?>,<?php echo $catid; ?>)" class="btn btn-success"><i class="ti-pencil"></i></button>
    <?php if ($row['fld_delstatus'] == '1') { ?>
                                            <button type="button" onclick="updatestatus(<?php echo $row['fld_level2id'] ?>,<?php echo 0; ?>)" class="delete btn btn-danger"><i class="ti-trash"></i></button>
                                        <?php } else { ?>  
                                            <button type="button" onclick="updatestatus(<?php echo $row['fld_level2id'] ?>,<?php echo 1; ?>)" class="delete btn btn-success" >   <img src="image/tick1.png"style="width: 14px;"/></button>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <!-- Edit category popup -->

    <?php
}
?>
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</div>

<!-- jQuery-->
<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Animo.js-->
<script type="text/javascript" src="plugins/animo.js/animo.min.js"></script>
<!-- Malihu Scrollbar-->
<script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>  
<!-- jQuery Easy Pie Chart-->
<script type="text/javascript" src="plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- DataTables-->
<script type="text/javascript" src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>  

<!-- Custom JS-->
<script type="text/javascript" src="build/js/first-layout/app.js"></script>
<script type="text/javascript" src="build/js/first-layout/demo.js"></script>
<script type="text/javascript" src="build/js/page-content/tables/data-tables.js"></script> 
<!-- Sweet Alert-->
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/lib/sweet-alert.css">
<script type="text/javascript" src="plugins/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
<script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
<!--<script type="text/javascript">
                                        function ValidateFileUpload() {

                                            var fuData = document.getElementById('fileChooser');
                                            var FileUploadPath = fuData.value;

//To check if user upload any file
                                            if (FileUploadPath == '') {
                                                alert("Please upload an image");

                                            } else {
                                                var Extension = FileUploadPath.substring(
                                                        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

                                                if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                                                        || Extension == "jpeg" || Extension == "jpg") {

// To Display
                                                    if (fuData.files && fuData.files[0]) {
                                                        var reader = new FileReader();

                                                        reader.onload = function (e) {
                                                            $('#blah').attr('src', e.target.result);
                                                        }

                                                        reader.readAsDataURL(fuData.files[0]);
                                                    }

                                                }

//The file upload is NOT an image
                                                else {
                                                    $("#image_error").html("Please upload a image as 137px height");
                                                    document.getElementById('fileChooser').value = '';
                                                }
                                            }
                                        }
</script>-->
<script language="JavaScript" type="text/javascript">
    function updatestatus(id, status) {
// alert(id);
        var result = confirm("Are you sure for Update Product category ?");
        //alert(id);
        if (result)
        {
            // alert('sss');
            $.ajax({
                type: "POST",
                url: 'sub_category_process.php',
                data: {
                    id: id,
                    status: status,
                },
                success: function (data)
                {
                    alert(data);
//alert("Category is Updated Successfully");    

                    location.reload();
                },
            });

        }




    }

    function changesubcategory(id, catid) {

        $.ajax({
            type: "POST",
            url: 'subcategory_edit.php',
            data: {
                id: id,
                catid: catid,
            },
            success: function (data)
            {
                //alert(data);
                $('#dataresponse').html(data);
                $('#myModal12').modal('show');

                //location.reload();
            },
        });






    }

</script>	
</script>
<?php
/* ====== Success Message ====== */
if (isset($_SESSION["msg"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.success('Subcategory Added!', 'Success'); 
	     });
	    </script>";
    unset($_SESSION['msg']);
}
/* ====== Deleted Message ====== */
if (isset($_SESSION["del"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.success('Subcategory Deleted!', 'Success'); 
	     });
	    </script>";
    unset($_SESSION['del']);
}
/* ====== Query Error Message ====== */
if (isset($_SESSION["error"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.error('We could not process your Request. Try again!'); 
	     });
	    </script>";
    unset($_SESSION['error']);
}
/* ===== updated message ======= */
if (isset($_SESSION["update"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.success('Subcategory updated!', 'Success'); 
	     });
	    </script>";
    unset($_SESSION['update']);
}
?>
</body>

</html>