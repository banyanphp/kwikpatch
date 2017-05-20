<?php 

include('../include/config.php');
session_start();
$total=$_POST['count'];
$field=$_POST['field'];

$sub_cat_id=$_POST['sub_cat_id'];

$qty=$_POST['quantity'];
$name=$_POST['name'];
$sku=$_POST['designno'];
$cq="SELECT * FROM tbl_categorytblname WHERE fld_level2id= '$sub_cat_id'";
//echo $cq; exit();
$res=mysqli_query($con,$cq);
$cat_row=mysqli_fetch_array($res);


$tablename=$cat_row['fld_tablename'];	


 $tablename=lcfirst($tablename);    	
//check sku is unique
 $q11="select * from $tablename where fld_prodcode='$sku'";

$result11=mysqli_query($con,$q11);
$count3=mysqli_num_rows($result11);
if($count3>0){
?>
<script>
alert('Product code  is unique');
window.location.href='add_product.php';

</script>
<?php
//header("Location:add_product.php");
 }
else {
		    
			$q="INSERT INTO $tablename (`fld_id`,`fld_prodcode`,`fld_delstatus`, `fld_qty`,`fld_prodname`)VALUES (NULL,'$sku','1', '$qty', '$name')";
			echo $q; 
				$res=mysqli_query($con,$q);
				$id=mysqli_insert_id($con);
		
					
									
foreach( $field as $key => $value){
	$new="fld_";
	$key=strtolower($key);
	$new.="$key";
	
	echo $new;
	
	
$query="UPDATE $tablename SET `$new` = '$value' WHERE $tablename.`fld_id` = $id";
//echo $query."<br/>";
$res=mysqli_query($con,$query);
echo "<script>window.location.href='add_product.php'</script>";


}

									


	}
	

							

				
				
?>

