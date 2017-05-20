 <?php session_start();?>
<header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0" style="background-color:#000 !important">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">
<!--               <li>
                  <a class="text-white" href="#">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#">Help Desk</a>
                </li>
                <li class="text-white">|</li>-->
                <li class="text-white">
                 
				  <?php 
				  if(isset($_SESSION['username']))
				  { ?><a class="text-white" href="myaccount.php"><?php
			      echo "My Account";
                            
				  }
				  else {?>   </a><a class="text-white" href="login.php"><?php
					  echo "login";
				  }?></a>
                </li>
				<li class="text-white">|</li>
				<li>
                  <a class="text-white" href="register.php">Register</a>
                </li>
				
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget m-0 pull-right flip sm-pull-none sm-text-center">
              <ul class="list-inline pull-right flip">
                <li class="mb-0 pb-0">
                  <div class="top-dropdown-outer pt-5 pb-10">
				  
                    <a class="top-cart-link has-dropdown text-white"><i class="fa fa-shopping-cart font-13"></i>(
					<?php 
					@include('include/config.php');
					 if(isset($_SESSION['username']))
						{
					       $id=$_SESSION['uid'];
					           $query="SELECT * FROM `tbl_addtocart` WHERE user_id='$id' AND is_shifted='0'";
					
					              $res=mysqli_query($con,$query);
					$rowcount=$res->num_rows;
			
						echo $rowcount;
						}
						else
						{
							echo "0";
						}
					?> ) </a>
                    <ul class="dropdown">
                      <li>
                        <!-- dropdown cart -->
                        <div class="dropdown-cart">
						
                          <table class="table cart-table-list table-responsive">
                            <tbody>
						<?php 
						if(isset ($_SESSION['username'])&& ($rowcount>0))
						{?>
                              <tr>
							  <?php

							  $query="SELECT * FROM tbl_addtocart WHERE user_id='$id' AND is_shifted='0' GROUP BY prd_name "; 
							 
							  $result=mysqli_query($con,$query);
							  while ($row=mysqli_fetch_array($result)){?>
                                
                                <td><a href="#">
								<?php echo $row['prd_code'];?></a></td>
                                <td><?php echo $row['prd_name'];?></td>
                               <td><?php echo $row['qty'];?></td>
							  <td><a class="close" onclick="fndelete('<?php echo $row['prd_code']; ?>')"><i class="fa fa-close font-13"></i></a></td></tr><?php
							  }
							  ?>
                              
                              	<?php } else{ ?>
								
								<tr><td style="text-align:center;font-size:large;"> No items available in your cart</td></tr><?php } ?>
                            </tbody>
                          </table>
					<?php 
						if(isset ($_SESSION['username'])&& ($rowcount>0))
						{?>
                          <div class="cart-btn text-right">
                              <a class="btn btn-theme-colored btn-xs" href="shop-cart.php"> View cart</a>
                              <a class="btn btn-dark btn-xs" href="shop-checkout.php"> Checkout</a>
                          </div>
						<?php }?>
                        </div>
                        <!-- dropdown cart ends -->
                      </li>
                    </ul>
                  </div>
                </li>
          
				<?php if(isset($_SESSION['username']))
						{?>
				 <li class="text-white">|</li>
				<li>
                  <a class="text-white" href="logout.php">Logout(<?php echo $_SESSION['fname']; ?>)</a>
                </li>
						<?php }?>
              </ul>
            </div>
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="https://www.facebook.com/kwik1987/" target='_blank'><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="https://twitter.com/patch_kwik" target='_blank'><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
          
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 xs-text-center" style="background-color: #285b7d !important;color:#000">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-6">
            <div class="widget no-border m-0">
              <a href="index.php" class="menuzord-brand pull-left flip xs-pull-center mt-20 mb-10"><img alt="" src="images/logo-kwik.png" style="border-radius:10px;max-height:150px;width:300px;"></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-15 mb-10 text-right flip sm-text-center text-white">
                <div class="font-15 mb-5 font-weight-400"><i class="fa fa-envelope font-18 text-white"></i> Mail Us Today</div>
                <a href="#" class="font-12 text-white">sales@kwikpatch.com</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-15 mb-10 text-right flip sm-text-center text-white" >
                <div class="font-15  mb-5 font-weight-400"><i class="fa fa-map-marker font-18 text-white"></i> Administrative Office</div>
                <a href="#" class="font-12 text-white"> ‘19A’, ‘A’ Super, 2nd Floor,<br/>Thiru–Vi- Ka Industrial Estate,<br/>Guindy,<br/>Chennai-600 032.</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-15 mb-10 text-right text-white flip sm-text-center">
                <div class="font-15 mb-5 font-weight-400">Call us for more details</div>
            							

             <i class="fa fa-phone-square font-18"></i> <a href="#" class="font-12 text-white">+(91)  044 22501202 </a><br/>
            <i class="fa fa-phone-square  font-18"style="visibility:hidden"></i> <a href="#" class="font-12 text-white">+(91) 044 22501477 </a><br/>
            <i class="fa fa-phone-square  font-18"style="visibility:hidden"></i> <a href="#" class="font-12 text-white">+(91) 044 22500077 </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lighter">
        <div class="container">
          <nav id="menuzord" class="menuzord pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li <?php if($page==home){ ?> class="active"<?php } ?>><a href="index.php">Home</a>
                
              </li>
              <li <?php if($page==aboutus){ ?> class="active"<?php } ?> ><a href="about_us.php">About Us</a>
                
              </li>
             
              <li <?php if($page==products){ ?> class="active"<?php } ?> ><a href="product-categories.php" >Our Products</a>
                <ul class="dropdown">
				<?php
				@include("include/config.php");
				$q="select * from tbl_kwikcategories where status='1' ";
				$res=mysqli_query($con,$q);
				
			while($row=mysqli_fetch_array($res))
			{
				
			
				
				?>
                  <li><a href="products.php?catid=<?php echo $row['id'];?>"><?php echo $row['category_name'];?></a></li>
				  
<?php
			}?>
						  
                </ul>
              </li>
               <li <?php if($page==technical){ ?> class="active"<?php } ?> ><a href="technical.php">Technical Support</a>
                
              </li>
            
              <li <?php if($page==contact){ ?> class="active"<?php } ?> ><a href="contact_us.php">Contact Us</a>
             
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: donate now Starts -->
                <!-- Modal: donate now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
<div class="modal fade" id="myModal11" role="dialog" style="margin-left: 12%;display:none">
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
                             $('#myModal11').modal('show');
                                setTimeout(function () {
                       location.reload();
                        }, 2000);
                        },
                    });

                }




            }
        </script>