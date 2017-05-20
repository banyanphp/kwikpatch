<?php
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	
}
else
{?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches" />
<meta name="keywords" content="tirerepairs,gums,cements,earthmovers,conveyor,beltrepairs,tubelesstirerepairs,tube repairs" />
<meta name="author" content="Banyan Infotech" />

<!-- Page Title -->
<title>Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches</title>

<!-- Favicon and Touch Icons -->
<link href="images/icon.png" rel="shortcut icon" type="image/png">
<link href="images/icon.png" rel="apple-touch-icon">
<link href="images/icon.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/icon.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/icon.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->

  
  <!-- Header -->
  <?php
  @include('top.php');
  ?>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.png">
      <div class="container pt-90 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Shop Cart</h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray">Shop Cart</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
			<form method="POST" action="update-cart.php">
              <table class="table table-striped table-bordered tbl-shopping-cart">
                <thead>
                  <tr>
                  <th>S.No</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                   <th>Cushion Color</th>
<th>BackPoly Color</th>
                    <th>Quantity</th>
                    <th>Action</th>
					
                  </tr>
                </thead>
                <tbody>
                
				  
				  <?php @include ('include/config.php');
				
				  $id=$_SESSION['uid'];
               $query="SELECT * FROM `tbl_addtocart` WHERE 	`user_id`='$id' AND is_shifted='0'";
			   $result=mysqli_query($con,$query);
			   $no=mysqli_num_rows($result);
			  
			   $sno=0;
			   if($no > 0){
			   while($row=mysqli_fetch_array($result)){
			   ?>     <tr class="cart_item">
			 
                   <td> <?php $sno+=1;echo $sno;  ?></td>
                    <td class="product-price"><span class="amount"><input name="prd_code[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_code'];?>"></span>                </td>
                    <td class="product-price"><span class="amount">
					<input type="text" name="prd_name[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['prd_name'];?>"></span>                </td>
			  <td class="product-price"><span class="amount">
					<input type="text" name="prd_cushion[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['cushion_color'];?>"></span>                </td>
  <td class="product-price"><span class="amount">
					<input type="text" name="prd_backpoly[<?php echo $sno ?>]" style="background-color: #F9F9F9;border: none;" value="<?php echo $row['backpoly_color'];?>"></span>                </td>		
                    <td class="product-quantity"><div class="quantity buttons_added">
                        <input type="button" class="minus" value="-">
                        <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $row['qty'];?>" name="quantity[<?php echo $sno ?>]" min="1" step="1">
                        <input type="button" class="plus" value="+">
                      </div></td>
					  <td class="product-remove">
					  <a  onclick="fndelete('<?php echo $row['id']; ?>')"style="
    cursor: pointer;
">x </a></td>

</td>
					
                  </tr>
			   <?php } ?>
                 
                  <tr class="cart_item">
                
                    <td colspan="6">&nbsp</td>
					
                    <td><input type="submit" class="btn" name="submit" value="Update cart"></td>
					<input type="hidden" name="total" value="<?php  echo $sno;?>">
                  </tr>
			   <?php } else{
				   
				   ?> <tr><td colspan="5">No Items Available in cart;</td></tr><?php
			   } ?>
                </tbody>
              </table>
			  </form>
            </div>
            <div class="col-md-10 col-md-offset-1 mt-30">
              <div class="row" style="text-align:right;">
             
			 <?php if($no > 0) { ?>
                  
                  <a class="btn btn-default "  href="shop-checkout.php" style="background-color: #0A4764;color: #fff;" >Proceed to Checkout</a> </div>
			 <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->

  </div>
  <!-- Footer -->
 <?php @include('bottom.php');?>
<!-- end wrapper --> 

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

</html>
<?php }
?>
<div class="modal fade" id="myModal2" role="dialog" style="margin-left: 12%;display:none">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:60%">
       
        <div class="modal-body" style="text-align: center;padding-bottom: 0px;">
          <p>Product is removed in your cart</p>
        </div>
        <div class="modal-footer" style="border-top: 0px !important">
            
        
         
        </div>
      </div>
      
    </div>
  </div>
 <script language="JavaScript" type="text/javascript">
            function fndelete(id) {



                var result = confirm("Are you sure want to remove  this item? ");
                //alert(id);
                if (result)
                {
                    // alert('sss');
                    $.ajax({
                        type: "POST",
                        url: 'removeitem.php',
                        data: {
                            id: id,
                        },
                        success: function (data)
                        {
                             $('#myModal2').modal('show');
                                setTimeout(function () {
                    $('#myModal2').modal('hide');
                        }, 2000);
                        },
                    });

                }




            }
        </script>