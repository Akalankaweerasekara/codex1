<?php

include 'connection.php';

?>

<?php

    $query2 = "select * from gallery";

    $sres = mysqli_query($con, $query2);

    if ($sres) {
        if (mysqli_num_rows($sres)) {
            while ($roww = mysqli_fetch_array($sres)) {
                $gzd = $roww['id'];
                $imz1 = $roww['im1'];
                $imz2 = $roww['im2'];
                $imz3 = $roww['im3'];
                $imz4 = $roww['im4'];
                $imz5= $roww['im5'];
                $imz6= $roww['im6'];
                $imz7= $roww['im7'];
                $imz8= $roww['im8'];
               
            }
        }
    }
?>

<?php

    $query23 = "select * from site_backs";

    $sres3 = mysqli_query($con, $query23);

    if ($sres3) {
        if (mysqli_num_rows($sres3)) {
            while ($roww3 = mysqli_fetch_array($sres3)) {
                $bzd = $roww3['id'];
                
                $abz= $roww3['absld'];
               
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
  <meta name="description" content="Who Are Wingsmartz">
  
  
  <title>About Us</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-s9yfOLE25T" once="menu" id="menu1-1h">

    

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
                        Wings Mobiles</a></span>
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
                        
                        On Sale</a></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Contact Us</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="contact.php" aria-expanded="false"><span class="mbrib-help mbr-iconfont mbr-iconfont-btn"></span>Contact Us</a><a class="text-white dropdown-item display-4" href="about.php" aria-expanded="false"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span>About Us</a></div></li></ul>
            
        </div>
    </nav>
</section>

    <section class="engine"><a href="">Wingsmartz</a></section><section class="mbr-section info3 cid-s9Ph33hFbx" id="info3-1i" style="  background-image: url(<?php echo $abz; ?>);">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    WHO ARE WINGSMARTZ ?</h2>
                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    The Biggest Online Devices &amp; Accessories Store</h3>
                <p class="mbr-text align-left mbr-white mbr-fonts-style display-7">
                    Find your product within your own category and also your choices.</p>
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="Store.php"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"></span>Store</a>
                    <a class="btn btn-success display-4" href="onsale.php"><span class="mobi-mbri mobi-mbri-sale mbr-iconfont mbr-iconfont-btn"></span>Offers</a></div>
            </div>
        </div>
    </div>
</section>

<section class="counters1 counters cid-s9PhneFddb" id="counters1-1j">

    

    

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            WINGSMARTZ</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            The Biggest Online Store</h3>

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbrib-apple"></span>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  100</h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">BRANDS</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                Find your products with your preffered brands</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbri-touch-swipe mbr-iconfont"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">100
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                CATEGORIES</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                    Find your products with your preffered categories</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbri-responsive mbr-iconfont"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">100
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                CUSTOMER SUPPORT</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">Contact our mobile doctors to get support to your problems<br>(24 x 7)</p>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
   </div>
</section>

<section class="counters4 counters cid-s9PhpEwJyX" id="counters4-1k">

    

    

    <div class="container pt-4 mt-2">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Why Choose Us</h2>
        <h3 class="mbr-section-subtitle pb-5 align-center mbr-fonts-style display-5">Wingsmartz are &nbsp;the best solution for order electronic devices</h3>
        <div class="media-container-row">
            <div class="media-block m-auto" style="width: 49%;">
                <div class="mbr-figure">
                    <img src="assets/images/background6.jpg">
                </div>
            </div>
            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    1
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Cash On Delivery</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Find your product and Order it for cash on delivery. Fast Delivery Crew / All Island delivery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    2
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Better Brands &amp; Categories</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Many Brands And Categories we Provides.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12">
                        <div class="panel-item p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="img-text d-flex align-items-center justify-content-center">
                                    3
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">100 % Technical Support</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                        We have clever Technical Crew. They will solve any problem with your devices.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-s9PhEIXq2U" id="gallery2-1l">

    

    <div class="container">
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-1l" data-slide-to="0" data-toggle="modal"><img src="<?php echo $imz1; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-1l" data-slide-to="1" data-toggle="modal"><img src="<?php echo $imz2; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Creative"><div href="#lb-gallery2-1l" data-slide-to="2" data-toggle="modal"><img src="<?php echo $imz3; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated"><div href="#lb-gallery2-1l" data-slide-to="3" data-toggle="modal"><img src="<?php echo $imz4; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-1l" data-slide-to="4" data-toggle="modal"><img src="<?php echo $imz5; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-1l" data-slide-to="5" data-toggle="modal"><img src="<?php echo $imz6; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-1l" data-slide-to="6" data-toggle="modal"><img src="<?php echo $imz7; ?>" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated"><div href="#lb-gallery2-1l" data-slide-to="7" data-toggle="modal"><img src="<?php echo $imz8; ?>" alt="" title=""><span class="icon-focus"></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-1l"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item"><img src="<?php echo $imz1; ?>" alt="" title=""></div><div class="carousel-item active"><img src="<?php echo $imz2; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php echo $imz3; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php echo $imz4; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php echo $imz5; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php echo $imz6; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php echo $imz7; ?>" alt="" title=""></div><div class="carousel-item"><img src="<?php echo $imz8; ?>" alt="" title=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-1l"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-1l"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>

</section>

<section class="cid-s9PGl3DPVj" id="footer1-25">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.php">
                        <img src="assets/images/wm.png" alt="wingsmartz" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">79/3A Gampaha Road , Ambagahawatta ,<br> Minuwangoda</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">Email: wingsmobiles.shop@gmail.com<br>Phone: +9476 152 59 29<br>+9477 068 51 95 &nbsp;<br>+9470 100 13 44<br></p><p></p><p></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
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
                            <a href="https://www.facebook.com/wingsmartz/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
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
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  
  
</body>
</html>