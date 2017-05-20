
<?php
include('../include/config.php');
$id=$_POST['orderid'];


$q="select * from tbl_order where id='$id'";

$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($result==true)
{
	$q1="update tbl_order set is_shifted=1 and is_processing=1";
	$row1=mysqli_query($con,$q1);
	
         $to = "hari@banyaninfotech.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:hp.hari423@gmail.com \r\n";
         $header .= "Cc:hp.hari1a@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    
	
}





/*
         $to = "xyz@somedomain.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
  */    ?>;
