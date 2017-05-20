<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("Location:login.php");
} else {
    ?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

        <head>
            <style type="text/css">
                .dashboard {
                    font-size: xx-large;
                    color: white;
                    background-color: #0A4764 !important;
                    padding-left: 37px;

                }
            </style>
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
                <div id="preloader">
                    <div id="spinner" class="spinner large-icon">
                        <img alt="" src="images/preloaders/logo.gif">
                    </div>
                    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
                </div>

                <!-- Header -->
    <?php
    @include('top.php');
    ?>
                <!-- Start main-content -->
                <div class="main-content">

                    <!-- Section: inner-header -->
                    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
                        <div class="container pt-90 pb-50">
                            <!-- Section Content -->
                            <div class="section-content pt-100">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <h3 class="title text-white">Single Post</h3>
                                        <ul class="list-inline text-white">
                                            <li>Home /</li>
                                            <li><span class="text-gray">Single Post</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section: myaccount -->
                    <section>
                        <div class="container mt-30 mb-30 pt-30 pb-30">
                            <div class="row">
                                <div class="col-md-9 blog-pull-right">
                                    <div class="blog-posts single-post">



                                        <div class="comments-area">
                                            <div class="dashboard">Orders
                                            </div>


                                            <table class="table table-striped table-bordered tbl-shopping-cart" style="margin-top:10px;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Order No</th>
                                                        <th>Product Name</th>
                                                        <th>Ship to</th>

                                                        <th>Status</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>


    <?php
    @include ('include/config.php');
    $per_page = 10;
    if (isset($_GET['page'])) {

        $page = $_GET['page'];
    } else {

        $page = 1;
    }
    $start_from = ($page - 1) * $per_page;

    $id = $_SESSION['uid'];
    $query = "SELECT * FROM `tbl_order` WHERE 	`user_id`='$id' AND status='1' ORDER BY `tbl_order`.`id` DESC LIMIT $start_from,$per_page";
    $result = mysqli_query($con, $query);
    $sno = 0;

    while ($row = mysqli_fetch_array($result)) {
        ?>     <tr class="cart_item">

                                                            <td> <?php $sno+=1;
                                                echo $sno; ?></td>
                                                            <td class="product-price"><span class="amount"><?php echo $row['order_no']; ?></span>                </td>
                                                            <td class="product-price"><span class="amount"><?php echo $row['prd_name']; ?></span>                </td>

                                                            <td class="product-price"><span class="amount"><?php echo $row['shipping_first_name'] . " " . $row['shipping_last_name']; ?></span>                </td>
                                                            <td class="product-price"><span class="amount">

        <?php
        if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 1) && ($row['is_completed'] == 1)) {
            echo "Completed";
        } else if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 1) && ($row['is_completed'] == 0)) {
            echo "Processing";
        } else if (($row['is_pending'] == 1) && ($row['is_shifted'] == 1) && ($row['is_processing'] == 0) && ($row['is_completed'] == 0)) {
            echo "Approved";
        } else if (($row['is_pending'] == 1) && ($row['is_shifted'] == 0) && ($row['is_processing'] == 0) && ($row['is_completed'] == 0)) {
            echo "Pending";
        }
        ?>   	  </span>                </td>

                                                            <td class="product-price"><span class="amount"><a href= "vieworder.php?id=<?php echo $row['order_no']; ?>">View Order </a></span>                </td>

                                                        </tr> 
                                                                <?php } ?> 





                                                    <tr class="cart_item">



                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div style="float:right;">
                                                                <?php
//Now select all from table
                                                                $query = "SELECT * FROM `tbl_order` WHERE `user_id`='$id' AND status='1' ORDER BY `tbl_order`.`id` DESC ";
                                                                $result = mysqli_query($con, $query);

// Count the total records
                                                                $total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
                                                                $total_pages = ceil($total_records / $per_page);

//Going to first page
                                                                echo "<a href='orderdetails.php?page=1' style='border-right: 1px solid white;padding:5px;background-color:#0A4764 !important;' title='FirstPage '>" . '<<' . "</a> ";

                                                                for ($i = 1; $i <= $total_pages; $i++) {

                                                                    echo "<a href='orderdetails.php?page=" . $i . "'style='border-right: 1px solid white;padding:5px;background-color:#0A4764 !important;'>" . $i . "</a> ";
                                                                };
// Going to last page
                                                                echo "<a href='orderdetails.php?page=$total_pages' style='border-right: 1px solid white;padding:5px;background-color:#0A4764 !important;'title='Last Page '>" . '>>' . "</a> ";
                                                                ?>
                                            </div>	   


                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="sidebar sidebar-left mt-sm-30">

                                        <div class="widget">
                                            <h3 class="widget-title line-bottom">My Account</h3>
                                            <div class="categories">
                                                <ul class="list list-border angle-double-right">
                                                    <li><a href="myaccount.php">Account Dashboard</a></li>
                                                    <li><a href="accountinformation.php">Account Information</a></li>
                                                    <li><a href="addressbook.php">Address Books</a></li>
                                                    <li><a href="orderdetails.php">My Orders</a></li>
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
    <?php @include('bottom.php'); ?>
            </div>

            <!-- Footer Scripts --> 
            <!-- JS | Custom script for all pages --> 
            <script src="js/custom.js"></script>

        </body>

    </html>

    <?php
}
?>