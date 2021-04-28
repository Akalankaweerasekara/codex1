
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
                $csz= $roww['csld'];
               
               
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
  <meta name="description" content="Wingsmartz contact Area">
  
  
  <title>Contact Us</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-s9yfOLE25T" once="menu" id="menu1-11">

    

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

    <section class="engine"><a href="">wingsmartz</a></section><section class="header12 cid-s9Pa0JMwmE mbr-parallax-background"style="background-image: url(<?php echo $csz; ?>);" id="header12-16">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">
                        CONTACT WINGSMARTZ</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">Contact Us to solve Your Problems. Get a Idea About New Technical products.</p>
                    <div class="mbr-section-btn align-center py-2"><a class="btn btn-md btn-secondary display-4" href="contact.php">Contact Us</a></div>

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                            <a href="">
                                <span class="mbri-layers mbr-iconfont"></span>
                            </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Many Brands</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="">
                                    <span class="mbri-sun mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Many Categories</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="">
                                    <span class="mbri-cash mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Low Cost</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="">
                                    <span class="mbr-iconfont mbrib-sale"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">Offers</h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section contacts3 cid-s9PatbwLNq" id="contacts3-1c">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style display-1">
                    Our Contacts
                </h2>
                
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-thumbs-o-up fa"></span>
                            </span>
                            <div class="b-info b-adress">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Address:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    79/3A Gampaha Road , Ambagahawatta , Minuwangoda
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-phone fa"></span>
                            </span>
                            <div class="b-info b-phone">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Phone:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">+9476 152 59 29
<br>+9477 068 51 95
<br>+9470 100 13 44</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-comment-o fa"></span>
                            </span>
                            <div class="b-info b-mail">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    E-mail:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    wingsmobiles.shop@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-th-large fa"></span>
                            </span>
                            <div class="b-info b-mail">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Working Hours:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">We are working Every day. You can connect us anytime.<br>(24 x 7)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map1 cid-s9Paw23bd9" id="map1-1e">

     

    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63336.39669895964!2d79.9167764656964!3d7.180796082540436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e53c90c5fccb%3A0x330fe93bfc82930f!2sMinuwangoda!5e0!3m2!1sen!2slk!4v1599415332819!5m2!1sen!2slk" allowfullscreen=""></iframe></div>
</section>

<section class="cid-s9PazftfNp" id="social-buttons3-1f">
    
    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    SHARE WINGSMARTZ!
                </h2>
                <div>
                    <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-s9PGa6AFxI" id="footer1-24">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="">
                        <img src="assets/images/wm.png" alt="" title="">
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


  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>