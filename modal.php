<?php $catid=$_POST['catid'];
$sid=$_POST['sid'];
?>
<div class="modal fade" id="myModal" role="dialog" style="    margin-left: 12%;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:60%">
       
        <div class="modal-body" style="text-align: center;padding-bottom: 0px;">
          <p>Product was successfully added in your cart</p>
        </div>
        <div class="modal-footer" style="border-top: 0px !important">
              <button type="button" class="btn btn-success"  onclick="window.location.href='shop-cart.php'"style="
                      float: left;margin-left: 66px;">View Cart (<span id="countdown">5</span>)</button>
          <button type="button" class="btn btn-danger"  onclick="window.location.href='products.php?catid=<?php echo $catid?>&sid=<?php echo $sid;?>'"
     style="
    float: left;">Close</button>
         
        </div>
      </div>
      
    </div>
  </div>
  
