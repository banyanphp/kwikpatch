<?php
include('header.php');
$cq = mysqli_query($con, 'SELECT * FROM tbl_kwikcategories WHERE id="' . $_GET['cat_id'] . '"');
$cat_row = mysqli_fetch_array($cq);
?>
<script type="text/javascript">
    $(document).ready(function () {
        var maxField = 1000; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div><br><input type="text" class="form-control" name="field_name[]" value="" style="float:left;width:50%;margin-right:14px;"/><button type="button" class="btn btn-danger remove_button" value="ADD+" ><i class=""></i> Remove</button></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        $(addButton).click(function () { //Once add button is clicked
            if (x < maxField) { //Check maximum number of input fields
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); // Add field html
            }
        });
        $(wrapper).on('click', '.remove_button', function (e) { //Once remove button is clicked
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

</script>
<SCRIPT type="text/javascript">
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
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                document.getElementById('fileChooser').value = '';
            }
        }
    }
</SCRIPT>

<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h2>Product Sub Categorys</h2> 
            <ol class="breadcrumb mb-0"> 
                <li><a href="categorys.php?id=1">Categorys</a></li>
                <li class="active"><?php echo $cat_row['category_name']; ?></li>
            </ol>
        </div>

    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="widget-body">
                    <form method="post" ID="add_product" action="addsubcategory_process.php" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="product">
                        <div class="form-group">
                            <label for="txtProductName" class="col-sm-3 control-label">Sub Category Name </label>
                            <div class="col-sm-9">
                                <input type="text" name="Category_Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtProductName" class="col-sm-3 control-label">Sub Category Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="category_img" id="fileChooser" onchange="return ValidateFileUpload();"required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="txtProductName" class="col-sm-3 control-label">Fields </label>
                            <div class="col-sm-9">
                                <div class="field_wrapper">
                                    <div>
                                        <input type="text" class="form-control" name="field_name[]" value="" style="width: 50%;float: left;margin-right:14px;"/>

                                        <button type="button" class="btn btn-primary add_button" value="ADD+" ><i class="icon-plus-sign"></i> Add</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="pull-right">
                                <input type="hidden" value="<?php echo $cat_row['category_name'] ?>"name="category">
                                <input type="hidden" value="<?php echo $cat_row['id'] ?>"name="cat_id">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="ti-save"></i> Save</button>
                                <button type="submit" class="btn btn-danger" onClick="document.location.href = '';"><i class="ti-share-alt"></i> Cancel</button>
                            </div>
                        </div>	


                    </form>
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
<script type="text/javascript" src="plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script> 
<!-- Custom JS-->
<script type="text/javascript" src="build/js/first-layout/app.js"></script>
<script type="text/javascript" src="build/js/first-layout/demo.js"></script>
<script type="text/javascript" src="build/js/page-content/tables/data-tables.js"></script> 
<!-- Sweet Alert-->
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/lib/sweet-alert.css">
<script type="text/javascript" src="plugins/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
<script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
<script>
//get cat_id from url
                                    function getUrlVars()
                                    {
                                        var vars = [], hash;
                                        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                                        for (var i = 0; i < hashes.length; i++)
                                        {
                                            hash = hashes[i].split('=');
                                            vars.push(hash[0]);
                                            vars[hash[0]] = hash[1];
                                        }
                                        return vars;
                                    }
                                    $(document).ready(function () {
                                        $(document).on('click', '.delete', function () {

                                            cat_id = getUrlVars()['cat_id'];  // call function cat_id from url

                                            subcat_id = $(this).attr('id'); //get current record id 

                                            swal({
                                                title: "Are you sure?",
                                                text: "Did you want delete category?",
                                                type: "warning",
                                                showCancelButton: !0,
                                                cancelButtonText: "No, cancel it!",
                                                confirmButtonClass: "btn btn-danger",
                                                confirmButtonText: "Yes, delete it!",
                                                closeOnConfirm: !1
                                            }
                                            , function () {
                                                window.location.href = "cat_process.php?cat_id=" + cat_id + "&delsubcat_id=" + subcat_id;
                                            }
                                            );
                                        });
                                    });
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
?>
</body>

</html>