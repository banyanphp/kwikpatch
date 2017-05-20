<?php
include('header.php');
?>
<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h2>Users List</h2> 
        </div>
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="widget-body">
                    <table id="example-1" cellspacing="0" width="100%" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Users Name</th> 
                                <th>Action</th> 
                            </tr>
                        </thead> 
                        <tbody>
                            <?php
                            $qr = mysqli_query($con, 'SELECT * FROM registration');
                            $sno = 1;
                            while ($row = mysqli_fetch_array($qr)) {
                                ?>
                                <tr> 
                                    <td><?php echo $sno++; ?></td>
                                    <td><?php $fname = $row['firstname'];
                            $fname.= " ";
                            $fname.= $row['lastname'];
                            echo $fname; ?></td>
                                    <td>
                                        <button type="button"  onClick="window.location = 'users_update.php?id=<?php echo $row['id']; ?>'" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>

                                        <button type="button"  class="btn btn-outline btn-danger" onClick="deleteusers('<?php echo $row['id']; ?>')"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>


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
  function deleteusers(id) {
      var result = confirm("Are you sure for delete users ?");
      if (result)
     {
         $.ajax({
                         type: "POST",
                         url: 'delete_process.php',
                         data: {
                             id: id,
                         },
                         success: function (data)
                         {
                           toastr.success('Users Successfully deleted!', 'Success');
                             $(document).ready(function () {
                                 setInterval(function () {
                                 cache_clear()
                              }, 1000);
                         });
                         function cache_clear()
                           {
                            window.location.reload(true);
                            }
                      },
                 });
           }

       }

</script>
<?php
/* ====== Success Message ====== */
if (isset($_SESSION["msg"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.success('Users Successfully Updated!', 'Success'); 
	     });
	    </script>";
    unset($_SESSION['msg']);
}
/* ====== Add Users Message ====== */
if (isset($_SESSION["add"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.success('Users Successfully Created!', 'Success'); 
	     });
	    </script>";
    unset($_SESSION['add']);
}

/* ====== Query Error Message ====== */
if (isset($_SESSION["error"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.error('Username already exists. Try again!'); 
	     });
	    </script>";
    unset($_SESSION['error']);
}
if (isset($_SESSION["updatemsg"])) {
    echo "<script>
	     $(document).ready(function(){
		 toastr.success('Users Successfully Updated!', 'Success'); 
	     });
	    </script>";
    unset($_SESSION['updatemsg']);
}

/* ====== Query Error Message ====== */
if (isset($_SESSION["updateerror"])) {
    echo "<script>
	     $(document).ready(function(){
				 toastr.error('We could not process your Request. Try again!'); 

	     });
	    </script>";
    unset($_SESSION['updateerror']);
}
?> 
</body>

</html>