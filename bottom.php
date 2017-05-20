<!--<footer id="footer" class="divider layer-overlay overlay-dark-8" data-bg-img="images/bg/213.jpg">-->
<footer id="footer" class="divider layer-overlay overlay-dark-8" data-bg-img="images/bg/213.jpg">
    <div class="container pt-70 pb-40">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <h4 class="widget-title line-bottom-theme-colored">Quick Links</h4>
                    <ul class="list angle-double-right list-border">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>        
                         <li><a href="product-categories.php">Products</a></li>
                        <li><a href="echnical.php">Technical Support</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>              
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">

                    <h4 class="widget-title line-bottom-no-border">OurProduct Categories</h4>
                    <div id="flickr-feed" class="clearfix mt-30">
                        <!-- Flickr Link -->

                        <ul class="dropdown">
                            <?php
                            @include("include/config.php");
                            $q = "select * from tbl_kwikcategories where status='1' Limit 0,5";
                            $res = mysqli_query($con, $q);

                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <li><a href="products.php?catid=<?php echo $row['id']; ?>"style="color: white;"><?php echo $row['category_name']; ?></a></li>

                                <?php }
                            ?>     
                            </script>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="widget dark">
                    <img class="mt-5 mb-10" alt="" src="images/footerlogo.png">
                    <p style="color: white;">‘19A’, ‘A’ Super, 2nd Floor, Thiru Vi Ka Industrial Estate,Guindy, Chennai – 600 032</p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">(+91)044 22501202</a> 
                            <br/> <a class="text-gray" href="#">   <i class="fa fa-phone-square text-theme-colored font-18"style="visibility:hidden"></i>(+91) 044 22501477</a>   <br/>
                            <a class="text-gray" href="#"><i class="fa fa-phone-square text-theme-colored font-18"style="visibility:hidden"></i>(+91)044 22500077 </a><br/>
                            <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">sales@kwikpatch.com</a>
                        </li> 

                    </ul>            
                    <h5 class="widget-title mt-10 mb-10">Connect With Us</h5>
                    <ul class="styled-icons icon-sm icon-bordered icon-theme-colored">
                        <li><a href="https://www.facebook.com/kwik1987/" target='_blank' style="border-color:#fff"><i class="fa fa-facebook" style="color:#fff"></i></a></li>
                        <li><a href="https://twitter.com/patch_kwik" style="border-color:#fff" target='_blank'><i class="fa fa-twitter" style="color:#fff"></i></a></li>
                        <li><a href="#" style="border-color:#fff"><i class="fa fa-skype" style="color:#fff"></i></a></li>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom bg-gray">
        <div class="container pt-15 pb-15">
            <div class="row">
                <div class="col-md-6">
                    <p class="font-12 m-0">Copyright &copy;<?php echo date('y'); ?> KwikPatch. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Help Desk</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>