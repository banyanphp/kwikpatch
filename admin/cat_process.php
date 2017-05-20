<?php

session_start();
error_reporting(0);
include('../include/config.php');
//print_r($_REQUEST);exit();
if (isset($_REQUEST['submit'])) {
    /* ========= add new category =========== */
    if ($_POST['action'] == 'cat') {
        $cat = $_POST['catname'];
 
        $rand = rand();
        $image_name = $rand;
        $image_name.= $_FILES["file"]["name"];

        $target_dir = "../images/product/";
        $target_file = $target_dir . $image_name;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            $q1 = "INSERT INTO tbl_kwikcategories (category_name,category_img,status) VALUES ('$cat','$image_name','1')";

            $q = mysqli_query($con, $q1);
            if ($q == true) {
                $_SESSION['msg'] = "added";
                header("Location: categorys.php?id=1");
            } else {
                $_SESSION['error'] = "yes";
                header("Location: categorys.php?id=1");
            }
        }
    }

    /* ========= update category =========== */ 
    else if ($_POST['action'] == 'update') {
        $cat = $_POST['catname'];
        $id=$_POST['sid'];
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
       if ($_FILES["uploadedimage"]["name"] != "") {

            $file_name = $_FILES["uploadedimage"]["name"];
            $temp_name = $_FILES["uploadedimage"]["tmp_name"];

            $imgtype = $_FILES["uploadedimage"]["type"];

            $ext = GetImageExtension($imgtype);

            $imagename = date("d-m-Y") . "-" . time() . $ext;

            $target_path = "../images/product/" . $imagename;

            move_uploaded_file($temp_name, $target_path);
        $query1 = "UPDATE tbl_kwikcategories SET category_name='$cat',category_img='$imagename ' WHERE id='$id'";
}
else{
  $query1 = "UPDATE tbl_kwikcategories SET category_name='$cat' WHERE id='$id'";
}
        $q = mysqli_query($con, $query1);

        if ($q == true) {
            $_SESSION['update'] = "updated";
       header("Location: categorys.php?id=1");
        } else {
            $_SESSION['error'] = "yes";
       header("Location: categorys.php?id=1");
        }
    }

    /* ========= add sub category =========== */ else if ($_REQUEST['action'] == 'subcat') {


        $q = mysqli_query($con, 'INSERT INTO sub_category (cat_id, sub_category) VALUES ("' . $_POST['cat_id'] . '","' . $_POST['subcat'] . '")');

        if ($q == true) {
            $_SESSION['msg'] = "done";
            header("Location: sub_category.php?cat_id=" . $_POST['cat_id']);
        } else {
            $_SESSION['error'] = "yes";
            header("Location: sub_category.php?cat_id=" . $_POST['cat_id']);
        }
    }

    /* ========= update sub_category =========== */ else if ($_REQUEST['action'] == 'sub_update') {

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

        $subcatname = $_REQUEST['subcatname'];
        $id = $_REQUEST['sid'];
$desc=$_REQUEST['desc'];
$catid=$_REQUEST['catid'];
        if ($_FILES["uploadedimage"]["name"] != "") {

            $file_name = $_FILES["uploadedimage"]["name"];
            $temp_name = $_FILES["uploadedimage"]["tmp_name"];

            $imgtype = $_FILES["uploadedimage"]["type"];

            $ext = GetImageExtension($imgtype);

            $imagename = date("d-m-Y") . "-" . time() . $ext;

            $target_path = "images/sub_category/" . $imagename;

            move_uploaded_file($temp_name, $target_path);

            $result = mysqli_query($con, "SELECT * FROM tbl_categorytblname WHERE fld_level2id=$id");
            $unlinkimage = mysqli_fetch_array($result);
            $unlink = "images/sub_category/";
            $unlink.=$unlinkimage['fld_level2_img'];
            if (!empty($unlinkimage['fld_level2_img'])) {
                unlink($unlink);
            }

            $q = mysqli_query($con, 'UPDATE tbl_categorytblname SET fld_level2name="' . $subcatname . '" , fld_level2_img="' . $imagename . '",fld_level2_desc="' . $desc. '" WHERE fld_level2id="' . $id . '"');
        } else {
            $q = mysqli_query($con, 'UPDATE tbl_categorytblname SET fld_level2name="' . $subcatname . '",fld_level2_desc="' . $desc. '" WHERE fld_level2id="' . $id . '"');
        }

        if ($q == true) {
            // echo 'UPDATE tbl_categorytblname SET fld_level2name	="'.$subcatname.'" WHERE fld_level2id="'.$id.'"';
            $_SESSION['update'] = 'done';

            header('Location: sub_category.php?cat_id=' . $catid);
        } else {
            //echo 'UPDATE tbl_categorytblname SET fld_level2name	="'.$subcatname.'" WHERE fld_level2id="'.$id.'"';
            $_SESSION['error'] = 'yes';
            header('Location: sub_category.php?cat_id=' . $catid);
        }
    }
    /* ========= add sub mini category =========== */ else if ($_POST['action'] == 'subminicat') {
        $q = mysqli_query($con, 'INSERT INTO submini_category (cat_id, subcat_id, submini_category) VALUES ("' . $_POST['cat_id'] . '","' . $_POST['subcat_id'] . '","' . $_POST['submini_cat'] . '")');
        if ($q == true) {
            $_SESSION['msg'] = "done";
            header("Location: submini_category.php?cat_id=" . $_POST['cat_id'] . "&subcat_id=" . $_POST['subcat_id']);
        } else {
            $_SESSION['error'] = "yes";
            header("Location: submini_category.php?cat_id=" . $_POST['cat_id'] . "&subcat_id=" . $_POST['subcat_id']);
        }
    }

    /* ========= update sub mini category =========== */ else if ($_POST['action'] == 'submini_update') {
        $q = mysqli_query($con, 'UPDATE submini_category SET submini_category="' . $_POST['submininame'] . '" WHERE submini_id="' . $_POST['id'] . '"');
        if ($q == true) {
            $_SESSION['msg'] = "done";
            header("Location: submini_category.php?cat_id=" . $_POST['cat_id'] . "&subcat_id=" . $_POST['subcat_id']);
        } else {
            $_SESSION['error'] = "yes";
            header("Location: submini_category.php?cat_id=" . $_POST['cat_id'] . "&subcat_id=" . $_POST['subcat_id']);
        }
    }
}

/* ========= delete category =========== */
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE `tbl_kwikcategories` SET `status` = $status WHERE `id` = $id";
    // echo $query;
    $query1 = "UPDATE `tbl_categorytblname` SET `fld_delstatus` = $status  WHERE `fld_level1id` = $id";
    //select products table
    $query2 = "select * from tbl_categorytblname where `fld_level1id` = $id";
    $result = mysqli_query($con, $query2);


    while ($row1 = mysqli_fetch_array($result)) {
        $tablename = $row1['fld_tablename'];

        $query3 = "UPDATE $tablename SET `fld_delstatus` = $status";
        //echo $query3.';';
        $q3 = mysqli_query($con, $query3);
    }

    $q = mysqli_query($con, $query);

    $q1 = mysqli_query($con, $query1);
    $count=  mysqli_num_rows($result);
if($count>0){

    if ($q == true & $q1 == true & $q3 == true) {
        echo "Category Is Updated Successfully";
    } else {
         echo "Error occured.Please Try again Later";
    }
}
else{
      if ($q == true){
          echo "Category Is Updated Successfully";
      }

      else {
         echo "Error occured.Please Try again Later";
    }
      }
}

/* ========= delete sub_category =========== */
if (isset($_GET['delsubcat_id'])) {
    $q = mysqli_query($con, 'DELETE sub_category, submini_category from sub_category, submini_category WHERE sub_category.subcat_id="' . $_GET['delsubcat_id'] . '"');
    if ($q == true) {
        $_SESSION['del'] = "delete";
        header("Location: sub_category.php?cat_id=" . $_GET['cat_id']);
    } else {
        $_SESSION['error'] = "yes";
        header("Location: sub_category.php?cat_id=" . $_GET['cat_id']);
    }
}

/* ========= delete submini_category =========== */
if (isset($_GET['delsubmini_id'])) {
    $q = mysqli_query($con, 'DELETE FROM submini_category WHERE submini_id=' . $_GET['delsubmini_id']);
    if ($q == true) {
        $_SESSION['del'] = "delete";
        header("Location: submini_category.php?cat_id=" . $_GET['cat_id'] . "&subcat_id=" . $_GET['subcat_id']);
    } else {
        $_SESSION['error'] = "yes";
        header("Location: submini_category.php?cat_id=" . $_GET['cat_id'] . "&subcat_id=" . $_GET['subcat_id']);
    }
}
?>