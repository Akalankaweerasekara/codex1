
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
                $rz1= $roww['rsld1'];
                $rz2= $roww['rsld2'];
                $rz3= $roww['rsld3'];
                $csz= $roww['csld'];
                $abz= $roww['absld'];
               
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
  <meta name="description" content="Wingsmartz Mobile Repair">
  
  
  <title>Repair</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-s9Cq8rVZK2" once="menu" id="menu1-d">

    

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

<section class="engine"><a href="">wingsmartz</a></section><section class="carousel slide cid-s9MP5GR1lL" data-interval="false" id="slider1-i">

    

    <div class="full-screen"><div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="4000" data-pause="true"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-i" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-i" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-i" class=" active" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo $rz1; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $rz1; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ REPAIR</h2><p class="lead mbr-text mbr-fonts-style display-5">Tell us about the problems with your devices &amp; we will solve it soon.</p><div class="mbr-section-btn" buttons="0"><a class="btn btn-success display-4" href="repair.php"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>INQUERY</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(<?php echo $rz2; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $rz2; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ STORE</h2><p class="lead mbr-text mbr-fonts-style display-5">Buy your mobile at out biggest online store</p><div class="mbr-section-btn" buttons="0"><a class="btn btn-primary display-4" href="store.php"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"></span>STORE</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(<?php echo $rz3; ?>);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="<?php echo $rz3; ?>" alt="" title=""><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">WINGSMARTZ SALE</h2><p class="lead mbr-text mbr-fonts-style display-5">Limited Time Offers available Now ... !</p><div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-primary" href="onsale.php"><span class="mbri-sale mbr-iconfont mbr-iconfont-btn"></span>OFFERS AVAILABLE</a> </div></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-i"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-i"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="mbr-section form1 cid-s9MQKvoJX5 mbr-parallax-background" id="form1-m">

    

    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    REPAIR INQUERY FORM
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Tell your Device Problems to our Mobile Doctors.</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                
                <form action="" method="POST" >
                    
                    <div class="dragArea row">
                        <div class="col-md-4  form-group">
                            <label  class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name"  required="required" class="form-control display-7" >
                        </div>
                        <div class="col-md-4  form-group" >
                            <label  class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email"  required="required" class="form-control display-7" >
                        </div>
                        <div class="col-md-4  form-group">
                            <label  class="form-control-label mbr-fonts-style display-7">Phone</label>
                            <input type="text" name="phone"  class="form-control display-7" >
                        </div>
                        <div  class="col-md-4  form-group">
                            <label  class="form-control-label mbr-fonts-style display-7">Address</label>
                            <input type="text" name="address"  class="form-control display-7">
                        </div>
                        <div class="col-md-4  form-group" >
                            <label  class="form-control-label mbr-fonts-style display-7">Brand</label>
                            <input type="text" name="brand"  required="required" class="form-control display-7">
                        </div>
                        <div class="col-md-4  form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Problem</label>
                            <input type="text" name="problem"  class="form-control display-7" placeholder="Hardware / Software">
                        </div>
                        <div class="col-md-12 form-group">
                            <label  class="form-control-label mbr-fonts-style display-7">Message</label>
                            <textarea name="msg"  class="form-control display-7"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" name="send" class="btn btn-primary btn-form display-4">SEND INQUERY</button></div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

<section class="progress-bars3 cid-s9MTwXkYbO" id="progress-bars3-o">
 
     

    
    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Why Should You Choose Us</h2>

        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            We are the largest mobile &amp; accessories online Store <br>and also <br>we have 100% Proffessional Technical Crew.</h3>
    
        <div class="media-container-row pt-5 mt-2">
            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress1" role="progressbar" data-goal="100">
                        <p class="pie_progress__number mbr-fonts-style display-5">97%</p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">Technical Support<br>(24 x 7)</h4>
                </div>                 
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress2" role="progressbar" data-goal="100">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Cash On Delivery</h4>
                </div>                 
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress3" role="progressbar" data-goal="100">
                        <p class="pie_progress__number mbr-fonts-style display-5">100%</p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        Fast Delivery</h4>
                </div>                 
            </div>

            

            

            
        </div>
</div></section>

<section class="cid-s9PD5AaiCu" id="footer1-1z">

    

    

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
            <div class="col-12 col-md-3 mbr-fonts-style display-4">
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
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  
  
</body>
</html>

<?php
global $con;
if (isset($_POST['send'])) {

   $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $brand=$_POST['brand'];
    $problem=$_POST['problem'];
    $msg=$_POST['msg'];

    $query="insert into repair(name,email,phone,address,brand,problem,msg) values('$name','$email','$phone','$address','$brand','$problem','$msg')";
    if (mysqli_query($con,$query)) {
        echo "<script>alert('Inquery Sended ... !')</script>";
    }else{
        echo "<script>alert('Inquery Sending Failed ... !')</script>";
    }

   }

?>