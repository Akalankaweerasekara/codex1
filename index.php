<?php
include 'connection.php';
?>

<?php

    $query2 = "select * from site_backs";

    $sres = mysqli_query($con, $query2);

    if ($sres) {
        if (mysqli_num_rows($sres)) {
            while ($roww = mysqli_fetch_array($sres)) {
                $bzd = $roww['id'];
                $hz1 = $roww['hsld1'];
                $hz2 = $roww['hsld2'];
                $hz3 = $roww['hsld3'];
                $hz4 = $roww['hsld4'];
                
               
            }
        }
    }
?>

<!DOCTYPE html>
<html  >
    <head>
        <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/wm.png" type="image/x-icon">
        <meta name="description" content="">


        <title>Home</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

            <link rel="stylesheet" href="fontawesome/css/all.css"/>
        <link rel="stylesheet" href="fontawesome/css/v4-shims.min.css"/>

    </head>
    <body>
        <section class="menu cid-s9yfOLE25T" once="menu" id="menu1-0">



            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">

                            <a href="index.php"><img src="assets/images/wm.png" alt="WingsMartz" title="" style="height: 3.8rem;"></a>

                        </span>
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.php">
                                Wingsmartz</a></span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                            <a class="nav-link link text-white display-4" href="index.php">
                                <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                                Home                  </a>
                        </li><li class="nav-item"><a class="nav-link link text-white display-4" href="Store.php"><span class="mbrib-cart-add mbr-iconfont mbr-iconfont-btn"></span>

                                Store              </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="blog.php"><span class="mbrib-image-gallery mbr-iconfont mbr-iconfont-btn"></span>

                                Blog           </a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="repair.php"><span class="mbrib-setting3 mbr-iconfont mbr-iconfont-btn"></span>

                                Repair  </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="onsale.php"><span class="mbrib-sale mbr-iconfont mbr-iconfont-btn"></span>

                                On Sale</a></li>
                                <li class="nav-item"><a class="nav-link link text-white display-4" href="used.php"><span class="mbrib-laptop mbr-iconfont mbr-iconfont-btn"></span>

                                Used</a></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>

                                Contact Us</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="contact.php" aria-expanded="false"><span class="mbrib-help mbr-iconfont mbr-iconfont-btn"></span>Contact Us</a><a class="text-white dropdown-item display-4" href="about.php" aria-expanded="false"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span>About Us</a></div></li></ul>

                </div>
            </nav>
        </section>

        <section class="engine"><a href="">Beesoftz</a></section><section class="carousel slide cid-s9AWyzT7BY" data-interval="false" id="slider1-6">



            <div class="full-screen"><div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="4000" data-pause="true"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-6" class=" active" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo $hz1; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $hz1; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ MOBILES</h2><p class="lead mbr-text mbr-fonts-style display-5">Buy your mobile at out biggest online store<br></p><div class="mbr-section-btn" buttons="0"><a class="btn btn-success display-4" href="Store.php"><span class="mbri-cart-add mbr-iconfont mbr-iconfont-btn"></span>SHOP NOW</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(<?php echo $hz2; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $hz2; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ ACCESSORIES</h2><p class="lead mbr-text mbr-fonts-style display-5">Find your Accessories with our quality brands.</p><div class="mbr-section-btn" buttons="0"><a class="btn btn-primary display-4" href="Store.php"><span class="mbri-cart-add mbr-iconfont mbr-iconfont-btn"></span>SHOP NOW</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo $hz3; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $hz3; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ BLOG</h2><p class="lead mbr-text mbr-fonts-style display-5">Update your technological knowledge with our blog</p><div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-primary" href="blog.php"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>READ MORE</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo $hz4; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $hz4; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ REPAIR</h2><p class="lead mbr-text mbr-fonts-style display-5">Tell us about the problems with your devices &amp; we will solve it soon.</p><div class="mbr-section-btn" buttons="0"><a class="btn btn-success display-4" href="repair.php"><span class="mbrib-refresh mbr-iconfont mbr-iconfont-btn"></span>REPAIR</a> </div></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-6"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-6"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

        </section>

        <section class="mbr-section form3 cid-s9CbdbWiN9 mbr-parallax-background" id="form3-7">



            <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(239, 239, 239);">
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-12 col-lg-8">
                        <h2 class="align-center pb-2 mbr-fonts-style display-2">
                            Search Your Product</h2>
                        <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                            Find your device from our online shop</h3>
                    </div>
                </div>

                <div class="row py-2 justify-content-center">
                    <div class="col-12 col-lg-6  col-md-8 " >

                        <form action="" method="POST" class="mbr-form form-with-styler">

                            <div class="dragArea row">
                                <div class="form-group col">
                                    <input type="text" placeholder="Search the product" name="sp"  required="required" class="form-control display-7" >
                                </div>
                                <div class="col-auto input-group-btn">
                                    <button type="submit" name="sch" class="btn btn-primary display-4"><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>SEARCH</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="services1 cid-s9yfYlzfYp" id="services1-2">
            <!---->

            <!---->
            <!--Overlay-->

            <!--Container-->
            <div class="container">
                <div class="row justify-content-center">
                    <!--Titles-->
                    <div class="title pb-5 col-12">
                        <h2 class="align-left pb-3 mbr-fonts-style display-1">
                            Featured Mobiles</h2>

                    </div>

                    <?php

                    function getproducts() {

                        if (!isset($_GET['cat'])) {
                            if (!isset($_GET['brand'])) {


                                global $con;

                                $query = "select * from products where categ='1' and ptp='Reguler' order by RAND() LIMIT 0,4";

                                $result = mysqli_query($con, $query);

                                while ($get_row = mysqli_fetch_array($result)) {
                                    $product_id = $get_row['id'];
                                    $product_price = $get_row['price'];
                                    $product_title = $get_row['title'];
                                    
                                    $product_image = $get_row['image'];
                                    $product_sdesc = $get_row['sdesc'];

                                    echo "<div class='card col-12 col-md-6 p-3 col-lg-3'>
                        <div class='card-wrapper'>
                        
                            <div class='card-img'>
                                <img src='$product_image' width='200' height='200' alt='wingsmartz' title=''>
                                 
                                 </div>
                                 
                            <div class='card-box'>
                                <h4 class='card-title mbr-fonts-style display-5'>
                                    $product_title
                                </h4>
                                <div style='height: 55px;'>
                                <p class='mbr-text mbr-fonts-style display-7'>
                                    $product_sdesc
                                    </p>
                                </div>
                                <!--Btn-->
                                <div class='mbr-section-btn align-left'><a href='view_product.php?pro_id=$product_id' class='btn btn-warning-outline display-4'>
                                      Rs.  $product_price
                                    </a></div>
                            </div>
                        </div>
                    </div> ";
                                }
                            }
                        }
                    }
                    ?>

                    <?php
                    getproducts();
                    ?>




                </div>
            </div>
        </section>

        <section class="services1 cid-s9yfZAP33c" id="services1-3">
            <!---->

            <!---->
            <!--Overlay-->

            <!--Container-->
            <div class="container">
                <div class="row justify-content-center">
                    <!--Titles-->
                    <div class="title pb-5 col-12">
                        <h2 class="align-left pb-3 mbr-fonts-style display-1">
                            Featured Accessories</h2>

                    </div>

                    <?php

                    function getaccess() {

                        if (!isset($_GET['cat'])) {
                            if (!isset($_GET['brand'])) {


                                global $con;

                                $query = "select * from products where categ='4' order by RAND() LIMIT 0,4";

                                $result = mysqli_query($con, $query);

                                while ($get_row = mysqli_fetch_array($result)) {
                                    $product_id = $get_row['id'];
                                    $product_price = $get_row['price'];
                                    $product_title = $get_row['title'];
                                    
                                    $product_image = $get_row['image'];
                                    $product_sdesc = $get_row['sdesc'];

                                    echo "<div class='card col-12 col-md-6 p-3 col-lg-3'>
                        <div class='card-wrapper'>
                            <div class='card-img'>
                                <img src='$product_image' width='200' height='200' alt='wingsmartz' title=''>
                            </div>
                            <div class='card-box'>
                                <h4 class='card-title mbr-fonts-style display-5'>
                                    $product_title
                                </h4>
                                <div style='height: 55px;'>
                                <p class='mbr-text mbr-fonts-style display-7'>
                                    $product_sdesc
                                    </p>
                                </div>
                                <!--Btn-->
                                <div class='mbr-section-btn align-left'><a href='view_product.php?pro_id=$product_id' class='btn btn-warning-outline display-4'>
                                      Rs.  $product_price
                                    </a></div>
                            </div>
                        </div>
                    </div> ";
                                }
                            }
                        }
                    }
                    ?>
                    <?php
                    getaccess();
                    ?>

                    <!--Card-1-->
                    
                </div>
            </div>
        </section>

        <section class="cid-s9yg5gqXNO" id="footer1-4">





            <div class="container">
                <div class="media-container-row content text-white">
                    <div class="col-12 col-md-3">
                        <div class="media-wrap">
                            <a href="https://mobirise.co/">
                                <img src="assets/images/wm.png" alt="Mobirise" title="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mbr-fonts-style display-7">
                        <h5 class="pb-3">
                            <i class="fa fa-home">&nbsp;</i>Address
                        </h5>
                        <p class="mbr-text">79/3A Gampaha Road , Ambagahawatta ,<br> Minuwangoda</p>
                    </div>
                    <div class="col-12 col-md-3 mbr-fonts-style display-7">
                        <h5 class="pb-3">
                            <i class="fa fa-phone">&nbsp;</i>Contacts
                        </h5>
                        <p class="mbr-text"></p><p>
                            Email: wingsmobiles.shop@gmail.com<br>Phone: +9476 152 59 29
                            <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +9477 068 51 95
                            <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +9470 100 13 44<br></p><p></p>
                    </div>
                    <div class="col-12 col-md-3 mbr-fonts-style display-7">
                        <h5 class="pb-3">
                            <i class="fa fa-link">&nbsp;</i>Links
                        </h5>
                        <p class="mbr-text"><a href="https://www.facebook.com/wingsmartz/">FACEBOOK</a><br><a href="https://www.instagram.com/wingsmartz/">INSTAGRAM</a><br><a href="https://twitter.com/MobilesWings?s=09">TWITTER</a></p>
                    </div>
                </div>
                <div class="footer-lower">
                    <div class="media-container-row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="media-container-row mbr-white">
                        <div class="col-sm-6 copyright">
                            <p class="mbr-text mbr-fonts-style display-7">
                                © Copyright 2020 Bee-Soft Solutions - All Rights Reserved<br>Developer : Akalanka Weerasekara
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="social-list align-right">
                                <div class="soc-item">
                                    <a href="https://twitter.com/MobilesWings?s=09" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://www.facebook.com/wingsmartz/" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://wa.me/+94754472201" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://www.instagram.com/wingsmartz/" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
        <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
        <script src="assets/parallax/jarallax.min.js"></script>
        <script src="assets/dropdown/js/nav-dropdown.js"></script>
        <script src="assets/dropdown/js/navbar-dropdown.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/theme/js/script.js"></script>
        <script src="assets/formoid/formoid.min.js"></script>
        <script src="assets/slidervideo/script.js"></script>


    </body>
</html>

<?php
if (isset($_POST['sch'])) {

    echo "<script>window.open('blog.php','_self')</script>";
}
?>