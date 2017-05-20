<?php 

session_start();
include('../include/config.php');
$orderno=$_REQUEST['orderno'];
  $query = "SELECT * FROM `tbl_order` WHERE `order_no`= '$orderno'";


                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                $user_id=$row['user_id'];
             //   echo $user_id;
                $q=  mysqli_fetch_array(mysqli_query($con, "select * from registration where id=$user_id"));
                $fname=  ucfirst($q['firstname']);
                $lname=ucfirst($q['lastname']);
$status=$_REQUEST['status'];
$statuscontent=1;
   if($status==4){
               $statuscontent = "Completed";
     }
     else if($status==2){
                $statuscontent = "Approved";
     }
          else if($status==3){
               $statuscontent = "Processing";
     }
          else if($status==1){
              $statuscontent = "Pending";
     }

$page=$_REQUEST['page'];
$messages=$_REQUEST['message'];
if($status==4){
    $q="UPDATE `tbl_order` SET `is_pending` = '1', `is_shifted` = '1', `is_processing` = '1', `is_completed` = '1' WHERE `tbl_order`.`order_no` = '$orderno'";
    
}
else if($status==3){
    $q="UPDATE `tbl_order` SET `is_pending` = '1', `is_shifted` = '1', `is_processing` = '1', `is_completed` = '0' WHERE `tbl_order`.`order_no` = '$orderno'";
}
else if($status==2){
    $q="UPDATE `tbl_order` SET `is_pending` = '1', `is_shifted` = '1', `is_processing` = '0', `is_completed` = '0' WHERE `tbl_order`.`order_no` = '$orderno'";
}
else if($status==1){
    $q="UPDATE `tbl_order` SET `is_pending` = '1', `is_shifted` = '0', `is_processing` = '0', `is_completed` = '0' WHERE `tbl_order`.`order_no` = '$orderno'";
}
$query=  mysqli_query($con, $q);
 if ($query == true) {
  $message='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_-4918261904254443738background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px"><tbody><tr>
<td valign="top" class="m_-4918261904254443738container-td" align="center" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
            <table cellpadding="0" cellspacing="0" border="0" align="center" class="m_-4918261904254443738container-table" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
<tbody><tr>
<td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                        <table cellpadding="0" cellspacing="0" border="0" class="m_-4918261904254443738logo-container" style="border-collapse:collapse;padding:0;margin:0;width:100%"><tbody><tr>
<td class="m_-4918261904254443738logo" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0">
                                    <a href="thebanyan.in/kwikpatch/index.php/" style="color:#3696c2;float:left;display:block" target="_blank" >
                                        <img width="200" height="100" src="../images/logo3.jpg" alt="Gem Spares" border="0" style="outline:none;text-decoration:none" class="CToWUd"></a>
                                </td>
                            </tr></tbody></table>
</td>
                </tr>
<tr>
<td valign="top" class="m_-4918261904254443738top-content" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px;margin:0;border:1px solid #ebebeb;background:#fff">
                    



<table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;width:100%"><tbody><tr>
<td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
            <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0"><tbody><tr>
<td class="m_-4918261904254443738action-content" style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 20px 15px;margin:0;line-height:18px">
                        <h1 style="font-family:Verdana,Arial;font-weight:bold;font-size:25px;margin-bottom:25px;margin-top:5px;line-height:28px">Hello&nbsp; '.$fname.''.$lname.',</h1>
                        <p style="font-family:Verdana,Arial;font-weight:normal">Your order <span class="m_-4918261904254443738no-link"><strong>#'.$orderno.'</strong></span> has been updated to: <strong style="font-family:Verdana,Arial;font-weight:normal">'. $statuscontent.'</strong></p>
                        
                        <table cellspacing="0" cellpadding="0"  style="border-collapse:collapse;padding:0;margin:15px 0;width:100%;background-color:#fffdd9;border:1px solid #fff74c"><tbody><tr>
<td style="font-family:Verdana,Arial;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:0">'.$messages.'</td>
                            </tr></tbody></table>
<p style="font-family:Verdana,Arial;font-weight:normal">You can check the status of your order by <a href="http://thebanyan.in/kwikpatch/login.php" style="color:#3696c2" target="_blank" >logging into your account</a>.</p>
                        <p style="font-family:Verdana,Arial;font-weight:normal">
                            If you have any questions, please feel free to contact us at
                            <a href="mailto:sales@kwikpatch.com" style="color:#3696c2" target="_blank">sales@kwikpatch.com</a>
                             or by phone at <a style="color:#3696c2">+91 422 2363800</a>.
                        </p>
                    </td>
                </tr></tbody></table>
</td>
    </tr></tbody></table>

</td>
                </tr>
</tbody></table>
<h5 class="m_-4918261904254443738closing-text" style="font-family:Verdana,Arial;font-weight:normal;text-align:center;font-size:22px;line-height:32px;margin-bottom:75px;margin-top:30px">Thank you, <span class="il">KwikPatch</span>!</h5>
        </td>
    </tr></tbody></table>';

             
 
 
   echo $message;
   if($status==4){
                $_SESSION['msg'] = "completed";
     }
     else if($status==2){
                $_SESSION['msg'] = "approved";
     }
          else if($status==3){
                $_SESSION['msg'] = "processing";
     }
          else if($status==1){
                $_SESSION['msg'] = "pending";
     }
     if($page==1){
                header("Location: pending_orders.php");
     }
      else if($page==2){
                header("Location: processing_orders.php");
     }
       else if($page==3){
                header("Location: completed_orders.php");
     }
       else if($page==4){
                header("Location: orderlist.php");
     }
            } else {
                $_SESSION['error'] = "yes";
                header("Location: orderlist.php");
            }