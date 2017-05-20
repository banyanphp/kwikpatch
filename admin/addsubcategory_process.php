<?php
session_start();
//print_r($_POST);exit();
include('../include/config.php');
if(isset($_REQUEST['submit']))
{
      function GetImageExtension($imagetype) {

            if (empty($imagetype))
                return false;

            switch ($imagetype) {

                case 'image/bmp': return '.bmp';

                case 'image/gif': return '.gif';

                case 'image/jpeg': return '.jpg';

                case 'image/png': return '.png';

                default: return false;
            }
        }
      

            $file_name = $_FILES["category_img"]["name"];
            $temp_name = $_FILES["category_img"]["tmp_name"];

            $imgtype = $_FILES["category_img"]["type"];

            $ext = GetImageExtension($imgtype);

            $imagename = date("d-m-Y") . "-" . time() . $ext;

            $target_path = "images/sub_category/" . $imagename;

            move_uploaded_file($temp_name, $target_path);

            
        
	$field_values_array = $_REQUEST['field_name'];
	$sub_category_name2=$_REQUEST['Category_Name'];
	$sub_category_name=$_REQUEST['Category_Name'];
	$maincategoryname=$_REQUEST['category'];//category_img
	$maincat_id=$_REQUEST['cat_id'];
	$sub_category_name =str_replace("/", "", $sub_category_name);
	$tablename="tbl_";
	$tablename.=$maincategoryname;
	$tablename.="_";
    $tablename.="$sub_category_name";
	$string = str_replace(' ', '', $tablename);
    $tablename = "" . $string . " ";
	$tablename = strtolower($tablename);

	
	$sql = "CREATE TABLE $tablename (`id` INT NOT NULL AUTO_INCREMENT,`fld_prodcode` VARCHAR(255) NOT NULL,`fld_prodname` TEXT,";
	

foreach($field_values_array as $field) {
	$string = str_replace(' ', '', $field);
	$new="fld_";
	$new.=$string;
    $sql .= "" . $new . " TEXT,";
}
$sql .= "`fld_qty` INT NOT NULL,`fld_delstatus` INT NOT NULL, PRIMARY KEY ( `id` ))";


//echo $sql;



    $res=mysqli_query($con,$sql);
	
	if($res)
	{
	
		   

		$q="INSERT INTO `tbl_categorytblname` (`fld_level2id`,`fld_level1id`, `fld_level2name`, `fld_level2_img`,
		`fld_tablename`,`fld_delstatus`) VALUES (NULL, '$maincat_id', '$sub_category_name2','$imagename', '$tablename','1')";
//echo $q;
			  $result=mysqli_query($con,$q);
	//echo $target_file;
         $_SESSION['msg'] = 'done';

            header('Location: sub_category.php?cat_id=' . $maincat_id);
		  
  
	}
	else{
                     $_SESSION['error'] = 'yes';
            header('Location: sub_category.php?cat_id=' . $maincat_id);
        }
	 
	}

?>