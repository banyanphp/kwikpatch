   <?php
    include('header.php');
   ?> 
      <div class="page-container"> 
        <div class="page-content container-fluid">  
          <div class="row">
            <div class="col-md-3 col-sm-6">
			 
              <div class="widget text-center">
                <div class="widget-body">
                  <div class="clearfix">
                    <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-reload text-muted"></i></a></div> 
                  </div>
				
                 <h2 class="mb-5">Users</h2>
                 <div class="fs-36 fw-600 mb-20 counter"><?php $q=  mysqli_num_rows(mysqli_query($con,"select * from registration"));echo $q;?></div>
                 <div id="esp-comment" data-percent="75" style="height: 50px; width: 140px; line-height: 20px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-user text-muted"></i></div>
				
                </div>
              </div>
			  
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget text-center">
                <div class="widget-body">
                  <div class="clearfix">
                    <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-reload text-muted"></i></a></div> 
                  </div>
                  <h2 class="mb-5">Categorys</h2>
                  <div class="fs-36 fw-600 mb-20 counter">
			 <?php $q1=  mysqli_num_rows(mysqli_query($con,"select * from tbl_kwikcategories "));echo $q1;?>

				  </div>
                  <div id="esp-comment" data-percent="75" style="height: 50px; width: 140px; line-height: 20px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-shopping-cart text-muted"></i></div> 	
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget text-center">
                <div class="widget-body">
                  <div class="clearfix">
                    <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-reload text-muted"></i></a></div> 
                  </div>
                  <h2 class="mb-5">Products</h2>
                  <div class="fs-36 fw-600 mb-20 counter">
				 <?php 
include('../include/config.php');
error_reporting(0);
 $q12=0;
 $row=mysqli_query($con,"select * from tbl_categorytblname");
 while($result=  mysqli_fetch_array($row)){
      
     $tablename=$result['fld_tablename'];
    $count="select * from  `$tablename`";
    $count1=mysqli_query($con,$count);
     $productcount=  mysqli_num_rows($count1);
        $q12+=$productcount;
     
 }echo $q12;
 ?>
				  </div>
                  <div id="esp-comment" data-percent="75" style="height: 50px; width: 140px; line-height: 20px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-view-list-alt text-muted"></i></div> 	
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget text-center">
                <div class="widget-body">
                  <div class="clearfix">
                    <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-reload text-muted"></i></a></div> 
                  </div>
                  <h2 class="mb-5">Orders</h2>
                  <div class="fs-36 fw-600 mb-20 counter"> <?php $q3=  mysqli_num_rows(mysqli_query($con,"select * from tbl_order group by order_no"));echo $q3;?>
</div>
                  <div id="esp-comment" data-percent="75" style="height: 50px; width: 140px; line-height: 20px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-email text-muted"></i></div> 	
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>  
     <?php
	 include('footer.php');
	 ?> 
	