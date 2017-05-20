<?php
error_reporting('0');
session_start();
if(!isset($_SESSION['login']))
{
  header("Location: index.php");

}

//get page
$page= basename($_SERVER['PHP_SELF']);
$page =str_replace('.php','',$page);


include('../include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kwik Patch Admin</title>  
    <!-- Bootstrap CSS-->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> 
	<link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="plugins/themify-icons/themify-icons.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"> 
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">  
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap-fileinput/css/fileinput.min.css">
	<!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="build/css/first-layout.css"> 	
	<!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/fc3ccb8ffb.css">
    <!-- Summernote-->
    <link rel="stylesheet" type="text/css" href="plugins/summernote/dist/summernote.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	
    <![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
  </head>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
    <!-- Header start-->
    <header>
      <a href="dashboard.php" class="brand pull-left"><h2>Kwik Patch</h2></a> 
      <ul class="notification-bar list-inline pull-right"> 
        <?php
		 if($_SESSION['login']=='Admin')
		 {
		?>
		<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-form1" role="button" class="header-icon"><i class="ti-lock"></i> Change password</a></li>
		 <?php
		 }
		 ?>
        <li><a href="logout.php" role="button" class="header-icon"><i class="ti-power-off"></i> Logout</a></li>
      </ul>
    </header>
    <!-- Header end-->
	
	
	<div class="main-container">
      <!-- Main Sidebar start-->
      <aside data-mcs-theme="minimal-dark" style="background-image: url(build/images/backgrounds/11.jpg)" class="main-sidebar mCustomScrollbar">
        <div class="user">
          <div id="esp-user-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart">
		  <img src="../images/logo3.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
         
          <p class="mb-0 text-muted"><?php echo $_SESSION['login'];?></p>
        </div>
        <ul class="list-unstyled navigation mb-0">
          <li class="sidebar-header pt-0">Main</li>
          <li><a href="dashboard.php" <?php if($page=="dashboard") { echo 'class="active"'; }?>><i class="ti-home"></i> Dashboard</a></li>
         <?php
		  if($_SESSION['login']=='Admin')
		  {
		 ?>
		  <li class="sidebar-header">Category</li>
          <li class="panel"><a href="categorys.php?id=1" class="collapsed"><i class="ti-view-list"></i> Visible Category List</a></li>
          <li class="panel"><a href="categorys.php?id=0" class="collapsed"><i class="ti-view-list"></i> InVisible Category List</a></li> 	
		 <?php
		 }
		 ?>
         <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="<?php if($page=="add_product" || $page=="product-list" ) { echo 'true';} else { echo 'false'; }?>" aria-controls="collapse2" class="<?php if($page=="add_product" || $page=="product-list" || $page=="product-attribute") { echo 'active';}?> collapsed"><i class="ti-shopping-cart"></i> Products</a>
            <ul id="collapse2" class="list-unstyled collapse <?php if($page=="add_product" || $page=="product-list" || $page=="product-attribute") { echo 'in';}?>">
            <li><a href="add_product.php" class="<?php if($page=="add_product") { echo 'active';}?>">Add Product</a></li>
            <li><a href="product-list.php" class="<?php if($page=="product-list") { echo 'active';}?>">Product list</a></li>
           
          
            </ul>
          </li>
		  <?php
		 if($_SESSION['login']=='Admin')
		 {
		 ?>
          <li class="sidebar-header">Users</li>
          <li class="panel"><a href="add_users.php" class="collapsed"><i class="ti-user"></i> Add Users</a></li>
          <li class="panel"><a href="list_users.php" class="collapsed"><i class="ti-view-list"></i> List Users</a></li> 	
		  <?php
		 }
		 ?>
		 
		   <?php
		 if($_SESSION['login']=='Admin')
		 {
		 ?>
          <li class="sidebar-header">Orders</li>
          <li class="panel"><a href="orderlist.php" class="collapsed"><i class="ti-view-list"></i>  List All Orders</a></li>
          <li class="panel"><a href="pending_orders.php" class="collapsed"><i class="ti-view-list"></i> List Pending Orders</a></li> 
          <li class="panel"><a href="approved_orders.php" class="collapsed"><i class="ti-view-list"></i> List Approved Orders</a></li> 	
		  <li class="panel"><a href="processing_orders.php" class="collapsed"><i class="ti-view-list"></i> List Processing Orders</a></li> 	
		  <li class="panel"><a href="completed_order_list.php" class="collapsed"><i class="ti-view-list"></i> List Completed Orders</a></li> 	
		  <?php
		 }
		 ?>
		 
		  <li class="sidebar-header"> </li>  
          <li class="sidebar-header"></li>
          <li class="panel"><a class="collapsed"> </a> 
          </li>
        </ul> 
      </aside>
      <!-- Main Sidebar end-->
        <div tabindex="-1" id="new11" role="dialog" aria-labelledby="modalWithForm" class="modal fade bs-example-modal-form1">
				<div role="document" class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
					  <h4 id="modalWithForm" class="modal-title">Change Password</h4>
					</div>
					<div class="modal-body">
					<span id="datarss"></span>
<form>
						<div class="form-group">
						  <label for="exampleInputEmail1">Enter Current Password</label>
						  <input id="current" name="catname" type="password" placeholder="Enter Current Password" class="form-control" required>
                                                   <span id="error_password"style="color: #ff0000;"></span>
						</div>  
						<div class="form-group">
						  <label for="exampleInputEmail1">Change Password</label>
						  <input id="cpassword" name="catname" type="password" placeholder="Enter Password" class="form-control" required>
                                                   <span id="error_passwords"style="color: #ff0000;"></span>
						</div>  
					</div>
					<div class="modal-footer">
					<div class="col-sm-9">
                                            <input type="hidden" value="<?php  echo $_SESSION['user'];?>" id="user">
					  <button type="button"  onclick="fsubmit()" class="btn btn-primary"style="float: left;">Save</button>
					  	  <input type="reset"  class="btn btn-info"style="float: left;"></div>
                                                  
						  <div class="col-sm-3">
						    <button type="button" data-dismiss="modal"  class="btn btn-default">Close</button>
							</div>
					</div>
				  </form>
				  </div>
				</div>
			  </div>  
	
<script language="JavaScript" type="text/javascript">
        $(document).on("keyup", "input#current", function () {
           

                        $('#error_password').html('');
                    });
                        $(document).on("keyup", "input#cpassword", function () {

                        $('#error_passwords').html('');
                    });
 function fsubmit(){
	
var current = $('#current').val();
 var cpassword = $('#cpassword').val();
  var user = $('#user').val();
 if((current)=="")
 {
	 $('#error_password').html('Enter current Password');
	 $('#current').focus();
	 return false;
 }
 if((cpassword)=="")
 {
      $('#error_passwords').html('Enter Password');
	 
	 $('#cpassword').focus();
	 return false;
 }
else{
	 	  $.ajax({
                    type: "POST",
                    url: 'chgpassword.php',
                    data: {
                       current:current,
		       cpassword:cpassword,
                       user:user
                       
        },
		 success: function(data)
    {   
  // alert(data);
      
          $('#datarss').html(data);
               setTimeout(function () {
                         $('#new').modal('toggle');
                        }, 3000);
           
  // location.reload();
    },
		  
                   
                });
}
				
		
	 
	 
	
	

}

</script>