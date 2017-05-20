<?php $page="products"; 

@ob_start();
session_start();

@include("include/config.php");
$id = $_GET['catid'];
if(empty($id)){
   header("Location:page-404.php");
}
$q = "select * from tbl_kwikcategories where id=$id limit 0,1";

$res = mysqli_query($con, $q);
while ($row = mysqli_fetch_array($res)) {
    $level1name = $row['category_name'];
    $level1id = $row['id'];
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches" />
<meta name="keywords" content="tirerepairs,gums,cements,earthmovers,conveyor,beltrepairs,tubelesstirerepairs,tube repairs" />
<meta name="author" content="Banyan Infotech" />

<!-- Page Title -->
<title>Kwik Patch Ltd., is a leading manufacturer of Tyre and Tube repair Patches</title>

<!-- Favicon and Touch Icons -->
<link href="images/icon.png" rel="shortcut icon" type="image/png">
<link href="images/icon.png" rel="apple-touch-icon">
<link href="images/icon.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/icon.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/icon.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix"> 
  <!-- preloader -->
  
  <span id="dataresponse"></span>
  <!-- Header -->
  <?php
@include("top.php");
if(!empty($_GET['cart'])){
    
    ?>
  <script>
      (function () {
    var timeLeft = 6,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();
    $(function () {
        var catid=<?php echo $_GET['catid']; ?>;
        var sid=<?php echo $_GET['sid']; ?>;
                  $.ajax({
                                type: "POST",
                                url: "modal.php",
                                   data: {
                        catid: catid,
                        sid:sid,
                    },
                                
                                success: function (data) {


                        $('#dataresponse').html(data);
                        $('#myModal').modal('show');
                        setTimeout(function () {
                         location.href = "products.php?catid="+catid + "&sid="+sid;
                        }, 5000);

                                }
                            });
              });
              </script>
<?php }
?>
  
  <!-- Start main-content -->
  <div class="main-content"> 
    
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.png">
      <div class="container pt-90 pb-50"> 
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title text-white"><?php echo $level1name; ?></h3>
              <ul class="list-inline text-white">
                <li>Home /</li>
                <li><span class="text-gray"><?php echo $level1name; ?></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row"style="background-image: url(images/bg/pro-1.png)";>
        <div class="col-md-7" >
          <div class="blog-posts">
            <div class="col-md-12">
              <div class="row list-dashed">
                <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="left" valign="top"  class="main-content"><!-- CSS goes in the document HEAD or added to your external stylesheet -->
                      
                      <style type="text/css">
                                                            table.gridtable {
                                                                font-family: verdana,arial,sans-serif;
                                                                font-size:11px;
                                                                color:#333333;
                                                                border-width: 1px;
                                                                border-color: #0A4764;
                                                                border-collapse: collapse;
                                                                width:88%;
                                                            }
                                                            table.gridtable th {
                                                                border-width: 1px;
                                                                padding: 8px;
                                                                border-style: solid;
                                                                border-color: #0A4764;
                                                                background-color: #0A4764;
                                                                color: #fff;
                                                                text-align:center;
                                                            }
                                                            table.gridtable td {
                                                                border-width: 1px;
                                                                padding: 8px;
                                                                border-style: solid;
                                                                border-color: #0A4764;
                                                                background-color:none;
                                                                text-align:center;
                                                            }
                                                        </style>
                      
                      <!-- Table goes in the document BODY -->
                      
                      <?php
if (isset($_GET['sid'])) {
    $levv = $_GET['sid'];
    if ($levv != '') {
        $id = $_GET['catid'];
        $pdt11 = "SELECT * FROM tbl_categorytblname where  fld_level1id='$id' and fld_level2id='$levv' and fld_delstatus='1'  limit 0,1";
    }
} else {
    $id = $_GET['catid'];
    $pdt11 = "SELECT * FROM tbl_categorytblname where  fld_level1id='$id'  and fld_delstatus='1' limit 0,1";
}
if($id==1){
$pdt111 = mysqli_query($con, $pdt11);
	while ($rowPd1t = mysqli_fetch_array($pdt111)) {
		$level2name = $rowPd1t['fld_level2name'];
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
        $image = $rowPd1t['fld_level2_img'];
$fld_level2_desc= $rowPd1t['fld_level2_desc'];
    ?>
                      <br/>
                      <div class="col-md-12">
                      <p style="font-family: 'Raleway', sans-serif;font-weight: 700;font-size: 30px;white-space: nowrap;color: #285b7d !important">
					  
					  <?php $level2names=explode("-",$level2name);
					  
					  echo ucwords($level2names['0']); ?>
					  <br>
					  <?php if($level2names['1']!=''){ echo '-'; echo ucwords($level2names['1']);} ?>
					  </p>
					  
                      </div>
<div class="col-md-12"><p style="font-family: 'Raleway','sans-serif';"><?php echo $fld_level2_desc; ?></p></div>
                      <?php  if(!empty($image)){?>
                      <div class="col-md-12"><img src="admin/images/sub_category/<?php echo $image; ?>"></div>
                      <?php } ?>
                      <br/>
                      <br/>
					     <table class="gridtable">
                        <tr>
                          <th>Product Code</th>
                          <th>Product Name</th>
						  <th>Ply</th>
						  <th>Dimension</th>
						  <th>Cushion Color</th>
						  <th>Backpoly Color</th>
						    <th>Qty/Box</th>
						  <th>Action</th>
						  </tr>
					  <?php
					  $prods = "SELECT * FROM $tblname where fld_delstatus=1";
                                                              
                                                                 
                                                                    $prods1 = mysqli_query($con, $prods);
                                                                    while ($prods11 = mysqli_fetch_array($prods1)) {
                                                                        $prdid = $prods11['fld_id'];
                                                                        $prdcode = $prods11['fld_prodcode'];
                                                                        $prdcode=  mysqli_real_escape_string($con,$prdcode);
                                                                        $prdname = $prods11['fld_prodname'];
                                                                   $prdname1 = htmlentities($prdname);
                                                                        $prdqty = $prods11['fld_qty'];
                                                                        $fld_ply = $prods11['fld_ply'];
                                                                        $fld_dimensions = $prods11['fld_dimensions'];
                                                                        $cushion_color = $prods11['cushion_color'];
                                                                        $backpoly_color = $prods11['backpoly_color'];
						  ?>
                        <tr>
                          <?php
                                                                        ?>
                          <td><?php echo $prdcode; ?></td>
                          <td><?php echo $prdname; ?></td>
		 <td><?php echo $fld_ply; ?></td>
		  <td><?php echo $fld_dimensions; ?></td>
		   <td><?php  $cushion_color=explode(",",$cushion_color);
		   $cushion_color_count=count($cushion_color);
		   for($i=0;$i<$cushion_color_count;$i++){
			?>   <input type="checkbox" value="<?php echo $cushion_color[$i] ?>" style="float:left" name="cushion"> <?php echo $cushion_color[$i]; ?><br>
		 <?php  }
		   ?></td>
		    <td><?php  
			 $backpoly_color=explode(",",$backpoly_color);
		   $backpoly_color_count=count($backpoly_color);
		   for($j=0;$j<$backpoly_color_count;$j++){
			?>   <input type="checkbox" value="<?php echo $backpoly_color[$j] ?>" style="float:left" name="backpoly"> <?php echo $backpoly_color[$j]; ?><br>
		 <?php  }
		   ?>
			</td>
			 <td><?php echo $prdqty; ?></td>
			  <td><?php
                                                                        if (isset($_SESSION['username'])) {

                                         $names=     $_SESSION['username'];                         
                                        $uid=$_SESSION['uid'];          ?>    
                          
                              <img src="images/cart.png" onclick="addtocart('<?php echo $level1id;?>','<?php echo $level2id;?>','<?php echo $prdcode;?>','<?php echo $prdname1; ?>','<?php echo $level1name; ?>','<?php echo $tblname; ?>','<?php echo $level2name; ?>','<?php echo $names; ?>','<?php echo $uid; ?>')" style="cursor:pointer;"/> 

                                                                        <?php }  else {
                                                                            ?>
                                <img src="images/cart.png"  onclick="myFunction()" style="cursor:pointer;"/>
                            <?php } ?></td><?php
	}
	
}
}
else if($id=='23'){
	
$pdt111 = mysqli_query($con, $pdt11);
	while ($rowPd1t = mysqli_fetch_array($pdt111)) {
		$level2name = $rowPd1t['fld_level2name'];
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
        $image = $rowPd1t['fld_level2_img']; 
$fld_level2_desc= $rowPd1t['fld_level2_desc'];

    ?>
                      <br/>
                      <div class="col-md-12">
                      <p style="font-family: 'Raleway', sans-serif;font-weight: 700;font-size: 30px;white-space: nowrap;color: #285b7d !important">
					  
					  <?php $level2names=explode("-",$level2name);
					  
					  echo ucwords($level2names['0']); ?>
					  <br>
					  <?php if($level2names['1']!=''){ echo '-'; echo ucwords($level2names['1']);} ?>
					  </p>
					  
                      </div>
<div class="col-md-12"><p style="font-family: 'Raleway', sans-serif;"><?php echo $rowPd1t['fld_level2_desc']; ?></p></div>
                      <?php  if(!empty($image)){?>
                      <div class="col-md-12"><img src="admin/images/sub_category/<?php echo $image; ?>"></div>
                      <?php } ?>
                      <br/>
                      <br/>
					     <table class="gridtable">
                        <tr>
                          <th>Product Code</th>
                          <th>Product Name</th>
						  <th>Ply</th>
						  <th>Dimension</th>
						  <th>Cushion Color</th>
						  
						    <th>Qty/Box</th>
						  <th>Action</th>
						  </tr>
					  <?php
			 $prods = "SELECT * FROM $tblname where fld_delstatus=1";
                                                              
                                                                 
                                                                    $prods1 = mysqli_query($con, $prods);
                                                                    while ($prods11 = mysqli_fetch_array($prods1)) {
                                                                        $prdid = $prods11['fld_id'];
                                                                        $prdcode = $prods11['fld_prodcode'];
                                                                        $prdcode=  mysqli_real_escape_string($con,$prdcode);
                                                                        $prdname = $prods11['fld_prodname'];
                                                                   $prdname1 = htmlentities($prdname);
                                                                        $prdqty = $prods11['fld_qty'];
                                                                        $fld_ply = $prods11['fld_ply'];
                                                                        $fld_dimensions = $prods11['fld_dimensions'];
                                                                        $cushion_color = $prods11['cushion_color'];

						  ?>
                        <tr>
                          <?php
                                                                        ?>
                          <td><?php echo $prdcode; ?></td>
                          <td><?php echo $prdname; ?></td>
		 <td><?php echo $fld_ply; ?></td>
		  <td><?php echo $fld_dimensions; ?></td>
		   <td><?php  $cushion_color=explode(",",$cushion_color);
		   $cushion_color_count=count($cushion_color);
		   for($i=0;$i<$cushion_color_count;$i++){
			?>   <input type="checkbox" value="<?php echo $cushion_color[$i] ?>" style="float:left" name="cushions"> <?php echo $cushion_color[$i]; ?><br>
		 <?php  }
		   ?></td>
		    
			 <td><?php echo $prdqty; ?></td>
			  <td><?php
                                                                        if (isset($_SESSION['username'])) {

                                         $names=     $_SESSION['username'];                         
                                        $uid=$_SESSION['uid'];          ?>    
                          
                              <img src="images/cart.png" onclick="addtocart1('<?php echo $level1id;?>','<?php echo $level2id;?>','<?php echo $prdcode;?>','<?php echo $prdname1; ?>','<?php echo $level1name; ?>','<?php echo $tblname; ?>','<?php echo $level2name; ?>','<?php echo $names; ?>','<?php echo $uid; ?>')" style="cursor:pointer;"/> 

                                                                        <?php }  else {
                                                                            ?>
                                <img src="images/cart.png"  onclick="myFunction()" style="cursor:pointer;"/>
                            <?php } ?></td><?php
	}
	
}
}

else if($id=='2'&& $levv=='4'){
	
$pdt111 = mysqli_query($con, $pdt11);
	while ($rowPd1t = mysqli_fetch_array($pdt111)) {

		$level2name = $rowPd1t['fld_level2name'];
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
        $image = $rowPd1t['fld_level2_img'];$fld_level2_desc= $rowPd1t['fld_level2_desc'];

    ?>
                      <br/>
                      <div class="col-md-12">
                      <p style="font-family: 'Raleway', sans-serif;font-weight: 700;font-size: 30px;white-space: nowrap;color: #285b7d !important">
					  
					  <?php $level2names=explode("-",$level2name);
					  
					  echo ucwords($level2names['0']); ?>
					  <br>
					  <?php if($level2names['1']!=''){ echo '-'; echo ucwords($level2names['1']);} ?>
					  </p>
					  
                      </div><div class="col-md-12"><p style="font-family: 'Raleway', sans-serif;white-space: nowrap;color: #ddd !important><?php echo $fld_level2_desc; ?></p></div>
                      <?php  if(!empty($image)){?>
                      <div class="col-md-12"><img src="admin/images/sub_category/<?php echo $image; ?>"></div>
                      <?php } ?>
                      <br/>
                      <br/>
					     <table class="gridtable">
                        <tr>
                          <th>Product Code</th>
                          <th>Product Name</th>
						  <th>Ply</th>
						  <th>Dimension</th>
						  <th>Cushion Color</th>
						  
						    <th>Qty/Box</th>
						  <th>Action</th>
						  </tr>
					  <?php
			 $prods = "SELECT * FROM $tblname where fld_delstatus=1";
                                                              
                                                                 
                                                                    $prods1 = mysqli_query($con, $prods);
                                                                    while ($prods11 = mysqli_fetch_array($prods1)) {
                                                                        $prdid = $prods11['fld_id'];
                                                                        $prdcode = $prods11['fld_prodcode'];
                                                                        $prdcode=  mysqli_real_escape_string($con,$prdcode);
                                                                        $prdname = $prods11['fld_prodname'];
                                                                   $prdname1 = htmlentities($prdname);
                                                                        $prdqty = $prods11['fld_qty'];
                                                                        $fld_ply = $prods11['fld_ply'];
                                                                        $fld_dimensions = $prods11['fld_dimensions'];
                                                                        $cushion_color = $prods11['cushion_color'];

						  ?>
                        <tr>
                          <?php
                                                                        ?>
                          <td><?php echo $prdcode; ?></td>
                          <td><?php echo $prdname; ?></td>
		 <td><?php echo $fld_ply; ?></td>
		  <td><?php echo $fld_dimensions; ?></td>
		   <td><?php  $cushion_color=explode(",",$cushion_color);
		   $cushion_color_count=count($cushion_color);
		   for($i=0;$i<$cushion_color_count;$i++){
			?>   <input type="checkbox" value="<?php echo $cushion_color[$i] ?>" style="float:left" name="cushions"> <?php echo $cushion_color[$i]; ?><br>
		 <?php  }
		   ?></td>
		    
			 <td><?php echo $prdqty; ?></td>
			  <td><?php
                                                                        if (isset($_SESSION['username'])) {

                                         $names=     $_SESSION['username'];                         
                                        $uid=$_SESSION['uid'];          ?>    
                          
                              <img src="images/cart.png" onclick="addtocart1('<?php echo $level1id;?>','<?php echo $level2id;?>','<?php echo $prdcode;?>','<?php echo $prdname1; ?>','<?php echo $level1name; ?>','<?php echo $tblname; ?>','<?php echo $level2name; ?>','<?php echo $names; ?>','<?php echo $uid; ?>')" style="cursor:pointer;"/> 

                                                                        <?php }  else {
                                                                            ?>
                                <img src="images/cart.png"  onclick="myFunction()" style="cursor:pointer;"/>
                            <?php } ?></td><?php
	}
	
}
}

else if($id=='2'&& $levv=='5'){
	
$pdt111 = mysqli_query($con, $pdt11);
	while ($rowPd1t = mysqli_fetch_array($pdt111)) {
		$level2name = $rowPd1t['fld_level2name'];
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
        $image = $rowPd1t['fld_level2_img']; $fld_level2_desc= $rowPd1t['fld_level2_desc'];

    ?>
                      <br/>
                      <div class="col-md-12">
                      <p style="font-family: 'Raleway', sans-serif;font-weight: 700;font-size: 30px;white-space: nowrap;color: #285b7d !important">
					  
					  <?php $level2names=explode("-",$level2name);
					  
					  echo ucwords($level2names['0']); ?>
					  <br>
					  <?php if($level2names['1']!=''){ echo '-'; echo ucwords($level2names['1']);} ?>
					  </p>
					  
                      </div><div class="col-md-12"><p style="font-family: 'Raleway', sans-serif;white-space: nowrap;color: #ddd !important><?php echo $fld_level2_desc; ?></p></div>
                      <?php  if(!empty($image)){?>
                      <div class="col-md-12"><img src="admin/images/sub_category/<?php echo $image; ?>"></div>
                      <?php } ?>
                      <br/>
                      <br/>
					     <table class="gridtable">
                        <tr>
                          <th>Product Code</th>
                          <th>Product Name</th>
						  <th>Ply</th>
						  <th>Dimension</th>
						  <th>Cushion Color</th>
						  
						    <th>Qty/Box</th>
						  <th>Action</th>
						  </tr>
					  <?php
			 $prods = "SELECT * FROM $tblname where fld_delstatus=1";
                                                              
                                                                 
                                                                    $prods1 = mysqli_query($con, $prods);
                                                                    while ($prods11 = mysqli_fetch_array($prods1)) {
                                                                        $prdid = $prods11['fld_id'];
                                                                        $prdcode = $prods11['fld_prodcode'];
                                                                        $prdcode=  mysqli_real_escape_string($con,$prdcode);
                                                                        $prdname = $prods11['fld_prodname'];
                                                                   $prdname1 = htmlentities($prdname);
                                                                        $prdqty = $prods11['fld_qty'];
                                                                        $fld_ply = $prods11['fld_ply'];
                                                                        $fld_dimensions = $prods11['fld_dimensions'];
                                                                        $cushion_color = $prods11['cushion_color'];

						  ?>
                        <tr>
                          <?php
                                                                        ?>
                          <td><?php echo $prdcode; ?></td>
                          <td><?php echo $prdname; ?></td>
		 <td><?php echo $fld_ply; ?></td>
		  <td><?php echo $fld_dimensions; ?></td>
		   <td><?php  $cushion_color=explode(",",$cushion_color);
		   $cushion_color_count=count($cushion_color);
		   for($i=0;$i<$cushion_color_count;$i++){
			?>   <input type="checkbox" value="<?php echo $cushion_color[$i] ?>" style="float:left" name="cushions"> <?php echo $cushion_color[$i]; ?><br>
		 <?php  }
		   ?></td>
		    
			 <td><?php echo $prdqty; ?></td>
			  <td><?php
                                                                        if (isset($_SESSION['username'])) {

                                         $names=     $_SESSION['username'];                         
                                        $uid=$_SESSION['uid'];          ?>    
                          
                              <img src="images/cart.png" onclick="addtocart1('<?php echo $level1id;?>','<?php echo $level2id;?>','<?php echo $prdcode;?>','<?php echo $prdname1; ?>','<?php echo $level1name; ?>','<?php echo $tblname; ?>','<?php echo $level2name; ?>','<?php echo $names; ?>','<?php echo $uid; ?>')" style="cursor:pointer;"/> 

                                                                        <?php }  else {
                                                                            ?>
                                <img src="images/cart.png"  onclick="myFunction()" style="cursor:pointer;"/>
                            <?php } ?></td><?php
	}
	
}
}
else{
	$pdt111 = mysqli_query($con, $pdt11);
while ($rowPd1t = mysqli_fetch_array($pdt111)) {

    $level2name = $rowPd1t['fld_level2name'];
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
        $image = $rowPd1t['fld_level2_img']; $fld_level2_desc= $rowPd1t['fld_level2_desc'];

    ?>
                      <br/>
                      <div class="col-md-12">
                      <p style="font-family: 'Raleway', sans-serif;font-weight: 700;font-size: 30px;white-space: nowrap;color: #285b7d !important"><?php echo ucwords($level2name); ?></p>
                      </div><div class="col-md-12"><p style="font-family: 'Raleway', sans-serif;"><?php echo $fld_level2_desc;?></p></div>
                      <?php  if(!empty($image)){?>
                      <div class="col-md-12"><img src="admin/images/sub_category/<?php echo $image; ?>"></div>
                      <?php } ?>
                      <br/>
                      <br/>
                      <table class="gridtable">
                        <tr>
                          <th>Product Code</th>
                          <th>Product Name</th>
                          <?php
 $tablename = $tblname;
$ss="select * from $tablename";
    $query = mysqli_query($con, $ss) or die("mysqli error");
    // echo $query;
    $count1 = mysqli_num_fields($query);
    $specheadingg = array();
    $specheadingg1 = array();
    $testt = array();
    $columnnamess = array();
    //$specname=array();
    $i = 0;
    $j = 0;
    while ($property = mysqli_fetch_field($query)) {
        if ($i > 2) {
            $specheadingg = $property->name;
            $remove = array("fld_");
            $spec = str_replace($remove, "", $specheadingg);
            $spec1 = strtolower($spec);
            $specname = ucwords($spec1);
            //echo $specname;         
            $columnnamess[$j] = $specheadingg;

            $test_fld[$j] = $specname;
            $j++;
        }
        $i++;
    }
    ?>
                          <?php
                                                                    for ($f = 0; $f < $count1 - 5; $f++) {
                                                                        if ($test_fld[$f] != "") {
                                                                            ?>
                          <th><?php echo $test_fld[$f] ?></th>
                          <?php }
                                                                    } ?>
                          <th>Qty/Box</th>
                          <th>Action</th>
                          <?php
                                                                    ?>
                        </tr>
                        <?php
                                                                    $prods = "SELECT * FROM $tblname where fld_delstatus=1";
                                                              
                                                                 
                                                                    $prods1 = mysqli_query($con, $prods);
                                                                    while ($prods11 = mysqli_fetch_array($prods1)) {
                                                                        $prdid = $prods11['fld_id'];
                                                                        $prdcode = $prods11['fld_prodcode'];
                                                                        $prdcode=  mysqli_real_escape_string($con,$prdcode);
                                                                        $prdname = $prods11['fld_prodname'];
                                                                   $prdname1 = htmlentities($prdname);
                                                                        $prdqty = $prods11['fld_qty'];
                                                                    
                                                                        ?>
                        <tr>
                          <?php
                                                                        ?>
                          <td><?php echo $prdcode; ?></td>
                          <td><?php echo $prdname; ?></td>
                          <?php
                                                                    //get dynamic field value
                                                                    for ($f = 0; $f < $count1 - 5; $f++) {
                                                                        if ($test_fld[$f] != "") {
                                                                            ?>
                          <?php
                                                                            //select dynamic field value
                                                                            $new = "fld_";
                                                                            $key = strtolower($test_fld[$f]);
                                                                            $new.="$key";
                                                                            
                                                                            ?>
                          <td><?php echo $prods11["$new"] ?></td>
                          <?php }
        } ?>
                          <td><?php echo $prdqty; ?></td>
                          <td><?php
                                                                        if (isset($_SESSION['username'])) {

                                         $names=     $_SESSION['username'];                         
                                        $uid=$_SESSION['uid'];          ?>    
                          
                              <img src="images/cart.png" onclick="window.location.href='addtocart.php?cid=<?php echo $level1id;?>&sid=<?php echo $level2id;?>&pid=<?php echo $prdcode; ?>&pname=<?php echo $prdname1; ?>&pcategory=<?php echo $level1name; ?>&psubcategorytblname=<?php echo $tblname; ?>&psubcategoryname=<?php echo $level2name; ?>&username=<?php echo $names; ?>&uid=<?php echo $uid; ?>'" style="cursor:pointer;"/> 

                                                                        <?php }  else {
                                                                            ?>
                                <img src="images/cart.png" onclick="window.location.href='login.php?cid=<?php echo $level1id;?>&sid=<?php echo $level2id;?>&pid=<?php echo $prdcode; ?>&qty=1&pname=<?php echo $prdname1;?>&pcategory=<?php echo $level1name;?>&psubcategorytblname=<?php echo $tblname; ?>&psubcategoryname=<?php echo $level2name ?>'" style="cursor:pointer;"/>
                            <?php } ?></td>
                        </tr>
                        <?php
                                                                    }
                                                                    ?>
                      </table>
                      <?php
}
}
?></td>
         
                  </tr>
                  
                </table>
                </td>
                </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget"style="margin-top:160px;  margin-left:50px;">
              <h5 class="widget-title line-bottom" style="font-family: 'Times New Roman', sans-serif; font-weight: 700;font-size: 20px; white-space: owrap;
    ">Related to <?php echo $level1name; ?></h5>
	
	<?php if($id==4){ ?>
	 <h6 class="" style="font-family: 'Times New Roman', sans-serif; font-weight: 700;font-size: 16px; white-space: owrap;border:none
    ">Related to Permanent tubeless tire repairs</h6>
              <ul class="list-divider list-border list check">
                <?php
$pdt11 = "SELECT * FROM tbl_categorytblname where  fld_level1id='$id'  and fld_level2id in('14','13') and fld_delstatus=1";
$pdt111 = mysqli_query($con, $pdt11);
while ($rowPd1t = mysqli_fetch_array($pdt111)) {

    $level2name = $rowPd1t['fld_level2name'];
     $level2name= strtolower($level2name);
     $level2name= ucfirst($level2name);
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
?>
                <li><a  href="products.php?catid=<?php echo $id ?>&sid=<?php echo $level2id ?>" style="font-size: 16px;
    font-weight: 500;
    color: #2b257d;
    
    font-family: 'Raleway', sans-serif;"><?php echo $level2name; ?></a></li>
                <?php } ?>

				
              </ul>
 <h6 class="" style="font-family: 'Times New Roman', sans-serif; font-weight: 700;font-size: 16px; white-space: owrap;border:none
    ">Related to Temporary tubeless tire repairs</h6>
              <ul class="list-divider list-border list check">
                <?php
$pdt11 = "SELECT * FROM tbl_categorytblname where  fld_level1id='$id'  and fld_level2id in('12','29') and fld_delstatus=1";
$pdt111 = mysqli_query($con, $pdt11);
while ($rowPd1t = mysqli_fetch_array($pdt111)) {

    $level2name = $rowPd1t['fld_level2name'];
     $level2name= strtolower($level2name);
     $level2name= ucfirst($level2name);
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
?>
                <li><a  href="products.php?catid=<?php echo $id ?>&sid=<?php echo $level2id ?>" style="font-size: 16px;
    font-weight: 500;
    color: #2b257d;
    
    font-family: 'Raleway', sans-serif;"><?php echo $level2name; ?></a></li>
                <?php } ?>

				
              </ul>





			  <?php } else{ ?>
              <ul class="list-divider list-border list check">
                <?php
$pdt11 = "SELECT * FROM tbl_categorytblname where  fld_level1id='$id'  and fld_delstatus=1";
$pdt111 = mysqli_query($con, $pdt11);
while ($rowPd1t = mysqli_fetch_array($pdt111)) {

    $level2name = $rowPd1t['fld_level2name'];
     $level2name= strtolower($level2name);
     $level2name= ucfirst($level2name);
    $level2id = $rowPd1t['fld_level2id'];
    $tblname = $rowPd1t['fld_tablename'];
?>
                <li><a  href="products.php?catid=<?php echo $id ?>&sid=<?php echo $level2id ?>" style="font-size: 16px;
    font-weight: 500;
    color: #2b257d;
    
    font-family: 'Raleway', sans-serif;"><?php echo $level2name; ?></a></li>
                <?php } ?>
				
              </ul>
			  <?php } ?>
            </div>
          </div>
          <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget" style=" margin-left:50px;" >
              <h5 class="widget-title line-bottom" style="font-family: 'Times New Roman', sans-serif; font-weight: 700;font-size: 20px; white-space: owrap;">Related to Our Products</h5>
              <ul class="list-divider list-border list check">
                <?php
$p = "SELECT * FROM tbl_kwikcategories where  status='1' ";
$res = mysqli_query($con, $p);
while ($row = mysqli_fetch_array($res)) {

    $category_name = $row['category_name'];
    $category_id = $row['id'];
    ?>
                <li ><a  href="products.php?catid=<?php echo $category_id ?>" style="font-size: 16px;
    font-weight: 500;
    color: #2b257d ;
    font-family: 'Raleway', sans-serif !important;"><?php echo $category_name; ?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- end main-content --> 
  
</div>
<!-- Footer -->
<?php
@include("bottom.php");
?>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

<script type="text/javascript">

     function addtocart(level1id,level2id,prdcode,prdname1,level1name,tblname,level2name,names,uid){
            var favorite = [];
            $.each($("input[name='cushion']:checked"), function(){            
                favorite.push($(this).val());
            });
var cushion=favorite.join(", ");

 var backpoly = [];
            $.each($("input[name='backpoly']:checked"), function(){            
                backpoly.push($(this).val());
            });
var backpoly=backpoly.join(", ");


window.location.href='addtocart.php?cid='+ level1id +'&sid='+ level2id +'&pid='+ prdcode +'&pname='+ prdname1 +'&pcategory='+ level1name + '&psubcategorytblname='+ tblname + '&psubcategoryname= '+ level2name + ' &username= '+ names +'&uid='+uid + '&cushion_color='+ cushion +' &backpoly_color='+ backpoly;
	 }
         function addtocart1(level1id,level2id,prdcode,prdname1,level1name,tblname,level2name,names,uid){
            var favorite = [];
            $.each($("input[name='cushions']:checked"), function(){            
                favorite.push($(this).val());
            });
var cushion=favorite.join(", ");
alert(cushion);


window.location.href='addtocart.php?cid='+ level1id +'&sid='+ level2id +'&pid='+ prdcode +'&pname='+ prdname1 +'&pcategory='+ level1name + '&psubcategorytblname='+ tblname + '&psubcategoryname= '+ level2name + ' &username= '+ names +'&uid='+uid + '&cushion_color='+ cushion;
	 }
        


</script>
<script>
function myFunction() {
    alert("Please Login to add your products in your cart");
}
</script>
</body>
</html>