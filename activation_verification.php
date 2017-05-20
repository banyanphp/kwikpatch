<?php


@include("include/config.php");
session_start();


 $username=$_REQUEST['username'];
 $activationcode=$_REQUEST['activation'];
$result="select * from registration where username='$username' and activation_code='$activationcode'";

 $q=  mysqli_query($con,$result);

$count=mysqli_num_rows($q);
 if($count==1){
      mysqli_query($con,"update registration  set status='1' where username='$username' and activation_code='$activationcode'");
      echo "Redirecting Page.....";
     echo "<script>window.location.href='login.php'</script>";
 }
 else{?>
       <div><input type='button' class='btn btn-primary' value='Sorry Your link is expired.Please login your account' style='font-weight:600;background-color:#FFFAFA;color:#FF0000;margin-left: 40%;margin-top: 2%;'>
        <div><input type='button' class='btn btn-primary' onclick='window.location.href="index.php"' value='Go Back' style='font-weight:600;background-color:#FFFAFA;color:#FF0000;margin-left: 40%;margin-top: 2%;'>
                           <?php
 }
?>