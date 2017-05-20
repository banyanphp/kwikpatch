      <script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<?php

error_reporting(0);
@include("include/config.php");

$sku=$_GET['pid'];
$productname=$_GET['pname'];
$prod_main_category=$_GET['pcategory'];
$psubcategorytblname=$_GET['psubcategorytblname'];
$psubcategoryname=$_GET['psubcategoryname'];
$subcatid=$_GET['sid'];
 $maincatid=$_GET['cid'];
$username=$_GET['username'];
$uid=$_GET['uid'];




if($maincatid==1){
	
	
	
$cushion_color=$_GET['cushion_color'];
$backpoly_color=$_GET['backpoly_color'];
$cushion_color_array=explode(",",$cushion_color);
$backpoly_color_array=explode(",",$backpoly_color);
$backpoly_color_count=count($backpoly_color_array);
$cushion_color_count=count($cushion_color_array);
for($i=0;$i<$cushion_color_count;$i++){
	
		
	for($j=0;$j<$backpoly_color_count;$j++)
	{

		$cushion_colors=$cushion_color_array[$i];
		$backpoly_colors=$backpoly_color_array[$j];
		
 $query="SELECT * FROM `tbl_addtocart` WHERE  `user_id`='$uid' AND `prd_code`='$sku'  and `is_shifted`='0' and `cushion_color`='$cushion_colors' and `backpoly_color`='$backpoly_colors'";

$result=mysqli_query($con,$query);
$rowcount=$result->num_rows;

if($rowcount > 0)
{
	while($row=mysqli_fetch_array($result)){
		$quantity=$row['qty']+1;
$update="UPDATE `tbl_addtocart` SET `qty` = '$quantity'  WHERE `user_id` = '$uid' AND  `prd_code`='$sku' and `cushion_color`='$cushion_colors' and `backpoly_color`='$backpoly_colors'";

$qtyupdate=mysqli_query($con,$update);

?>


      
<script type="text/javascript">
    $(function () {
         
	    var data="<?php echo $subcatid; ?>";
            var data1="<?php echo $maincatid; ?>";
	// alert( "Product Added Your Cart successfully");
          var success="1";
	location.href = "products.php?catid="+data1 + "&sid="+data+ "&cart="+success;
    });
	 </script>
<?php 


}}

else{
 $q="INSERT INTO `tbl_addtocart` (`id`, `prd_code`, `prd_name`, `prd_main_category`, `prd_sub_categoryname`, `prd_sub_categorytblname`, `user_id`, `username`, `qty`, `status`,`cushion_color`,`backpoly_color`) 
VALUES ('', '$sku', '$productname', '$maincatid','$subcatid', '$psubcategorytblname','$uid', '$username', '1','1','$cushion_colors','$backpoly_colors')";


$add=mysqli_query($con,$q);

?>
<script type="text/javascript">
    $(function () {
        
	    var data="<?php echo $subcatid; ?>";
            var data1="<?php echo $maincatid; ?>";
	// alert( "Product Added Your Cart successfully");
          var success="1";
	location.href = "products.php?catid="+data1 + "&sid="+data+ "&cart="+success;
    });
	 </script>
<?php
}
	}
}
}


else if($maincatid=='23'|| $maincatid=='2'){
	
	 $cushion_color=$_GET['cushion_color'];

$cushion_color_array=explode(",",$cushion_color);
$cushion_color_count=count($cushion_color_array);
for($i=0;$i<$cushion_color_count;$i++){
	

	
		$cushion_colors=$cushion_color_array[$i];
		
		
 $query="SELECT * FROM `tbl_addtocart` WHERE  `user_id`='$uid' AND `prd_code`='$sku'  and `is_shifted`='0' and `cushion_color`='$cushion_colors'";

$result=mysqli_query($con,$query);
$rowcount=$result->num_rows;

if($rowcount > 0)
{
	while($row=mysqli_fetch_array($result)){
		$quantity=$row['qty']+1;
$update="UPDATE `tbl_addtocart` SET `qty` = '$quantity'  WHERE `user_id` = '$uid' AND  `prd_code`='$sku' and `cushion_color`='$cushion_colors'";

$qtyupdate=mysqli_query($con,$update);

?>


      
<script type="text/javascript">
    $(function () {
         
	    var data="<?php echo $subcatid; ?>";
            var data1="<?php echo $maincatid; ?>";
	// alert( "Product Added Your Cart successfully");
          var success="1";
	location.href = "products.php?catid="+data1 + "&sid="+data+ "&cart="+success;
    });
	 </script>
<?php 


}}

else{
 $q="INSERT INTO `tbl_addtocart` (`id`, `prd_code`, `prd_name`, `prd_main_category`, `prd_sub_categoryname`, `prd_sub_categorytblname`, `user_id`, `username`, `qty`, `status`,`cushion_color`,`backpoly_color`) 
VALUES ('', '$sku', '$productname', '$maincatid','$subcatid', '$psubcategorytblname','$uid', '$username', '1','1','$cushion_colors','$backpoly_colors')";


$add=mysqli_query($con,$q);

?>
<script type="text/javascript">
    $(function () {
        
	    var data="<?php echo $subcatid; ?>";
            var data1="<?php echo $maincatid; ?>";
	// alert( "Product Added Your Cart successfully");
          var success="1";
location.href = "products.php?catid="+data1 + "&sid="+data+ "&cart="+success;
    });
	 </script>
<?php
}
	}
}




else{
	
$query="SELECT * FROM `tbl_addtocart` WHERE  `user_id`='$uid' AND `prd_code`='$sku' and `is_shifted`='0'";

$result=mysqli_query($con,$query);
$rowcount=$result->num_rows;

if($rowcount > 0)
{
	while($row=mysqli_fetch_array($result)){
		$quantity=$row['qty']+1;
$update="UPDATE `tbl_addtocart` SET `qty` = '$quantity' WHERE `user_id` = '$uid' AND  `prd_code`='$sku'  ";	

$qtyupdate=mysqli_query($con,$update);

?>


      
<script type="text/javascript">
    $(function () {
         
	    var data="<?php echo $subcatid; ?>";
            var data1="<?php echo $maincatid; ?>";
	// alert( "Product Added Your Cart successfully");
          var success="1";
	location.href = "products.php?catid="+data1 + "&sid="+data+ "&cart="+success;
    });
	 </script>
<?php 


}}

else{
$q="INSERT INTO `tbl_addtocart` (`id`, `prd_code`, `prd_name`, `prd_main_category`, `prd_sub_categoryname`, `prd_sub_categorytblname`, `user_id`, `username`, `qty`, `status`,`cushion_color`,`backpoly_color`) 
VALUES ('', '$sku', '$productname', '$maincatid','$subcatid', '$psubcategorytblname','$uid', '$username', '1','1',$cushion_color,$backpoly_color)";


$add=mysqli_query($con,$q);

?>
<script type="text/javascript">
    $(function () {
        
	    var data="<?php echo $subcatid; ?>";
            var data1="<?php echo $maincatid; ?>";
	// alert( "Product Added Your Cart successfully");
          var success="1";
	location.href = "products.php?catid="+data1 + "&sid="+data+ "&cart="+success;
    });
	 </script>
<?php
}
	
}
?>



