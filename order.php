<?php
include 'connection.php';
?>

<?php

if (isset($_GET['pro_id'])) {
    $product_id=$_GET['pro_id'];
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
  <meta name="description" content="Order Now">
  
  
  <title>Order</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-s9yfOLE25T" once="menu" id="menu1-1q">

    

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

<section class="engine"><a href="">wingsmartz</a></section><section class="mbr-section form1 cid-s9PutlBI4o mbr-parallax-background" id="form1-1v">

    

    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Buy Now</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Order Your Product Now &amp; Grab it fast ... !</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                
                <form action="" method="POST" class="mbr-form form-with-styler" >
                    
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" >
                            <label for="name-form1-1v" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name" required="required" class="form-control display-7" id="name-form1-1v">
                        </div>
                        <div class="col-md-4  form-group" >
                            <label for="email-form1-1v" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email"  required="required" class="form-control display-7" id="email-form1-1v">
                        </div>
                        <div  class="col-md-4  form-group">
                            <label for="phone-form1-1v" class="form-control-label mbr-fonts-style display-7">Phone</label>
                            <input type="tel" name="phone" class="form-control display-7" id="phone-form1-1v">
                        </div>
                        <div  class="col-md-12 form-group">
                            <label for="message-form1-1v" class="form-control-label mbr-fonts-style display-7">Address</label>
                            <textarea name="msg" class="form-control display-7" id="message-form1-1v"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4" name="ord"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span>Buy Now</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="cid-s9PGwerd00" id="footer1-27">

    

    

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


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>

<?php
global $con;
if (isset($_POST['ord'])) {
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $query="insert into orders(pro_id,name,email,telephone,address)values('$product_id','$name','$email','$phone','$msg')";
    if (mysqli_query($con,$query)) {
        echo "<script>alert('Order Placed ... !')</script>";
    }else{
        echo "<script>alert('Order Failed ... !')</script>";
    }

}

?>