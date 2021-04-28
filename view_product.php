    <?php
include 'connection.php';
?>
<?php



    if (isset($_GET['pro_id'])) {

        $product_ct = $_GET['pro_id'];
        global $con;

        $query = "select * from products where id='$product_ct'";

        $result = mysqli_query($con, $query);

        while ($get_row = mysqli_fetch_array($result)) {
            $product_id = $get_row['id'];
            $product_price = $get_row['price'];
            $product_title = $get_row['title'];
            $product_image = $get_row['image'];
            $product_image2 = $get_row['img2'];
            $product_image3 = $get_row['img3'];
            $product_sdesc = $get_row['sdesc'];
            $product_fdesc = $get_row['fdesc'];
            $pcateg = $get_row['brand'];

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
        <meta name="description" content="View Product Details">


        <title>View Product</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

        <link rel="stylesheet" href="fontawesome/css/all.css"/>
        <link rel="stylesheet" href="fontawesome/css/v4-shims.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>

          .checked {
  color: orange;
}
            
            /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 105px;
  right: 75px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

        </style>

        <style>
            
            /* Style the Image Used to Trigger the Modal */
#myImg1 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg1:hover {opacity: 0.7;}

/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal1-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption1 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal1-content, #caption1 {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close1 {
  position: absolute;
  top: 105px;
  right: 75px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close1:hover,
.close1:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal1-content {
    width: 100%;
  }
}

        </style>

        <style>
            
            /* Style the Image Used to Trigger the Modal */
#myImg2 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg2:hover {opacity: 0.7;}

/* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal2-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption2 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal2-content, #caption2 {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close2 {
  position: absolute;
  top: 105px;
  right: 75px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close2:hover,
.close2:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal2-content {
    width: 100%;
  }
}

        </style>

         <style>
            
            /* Style the Image Used to Trigger the Modal */
#myImg3 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg3:hover {opacity: 0.7;}

/* The Modal (background) */
.modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal3-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption3 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal3-content, #caption3 {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close3 {
  position: absolute;
  top: 105px;
  right: 75px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close3:hover,
.close3:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal3-content {
    width: 100%;
  }
}

        </style>


    </head>
    <body>
        <section class="menu cid-s9yfOLE25T" once="menu" id="menu1-1p">



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

        <section class="engine"><a href="index.php">wingsmartz</a></section><section class="features11 cid-s9Ptj5H8Gp" id="features11-1r">





            <div class="container">   
                <div class="col-md-12">
                    <form action="" method="post">

                        <div class="media-container-row">
                            <div class="mbr-figure m-auto" style="width: 50%;">
                                <img id="myImg" src="<?php echo $product_image ?>" alt="wingsmartz" title="">
                            
                                <div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

                            </div>
                            
                            <div class=" align-left aside-content">
                                <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                                    <?php echo $product_title; ?></h2>
                                <div class="mbr-section-text">
                                    <p class="mbr-text mb-2 pt-3 mbr-light mbr-fonts-style display-7">
                                    <?php echo $product_sdesc; ?>    
                                    </p>

                                </div>

                                <div class="block-content">
                                    <div class="card p-3 pr-3">
                                        <div class="media">

                                            <div class="media-body">
                                                <h4 class="card-title mbr-fonts-style display-7">
                                                    Product Price
                                                </h4>
                                                <p class="block-text mbr-fonts-style display-7">
                                                   Rs. <?php echo $product_price; ?> </p>
                                            </div>

                                        </div>                

                                    </div>

                                    <div class="card p-3 pr-3">
                                        <div class="media">

                                            <div class="media-body">
                                                <h4 class="card-title mbr-fonts-style display-7">
                                                    Description
                                                </h4>
                                            </div>
                                        </div>                

                                        <div class="card-box">
                                            <p class="block-text mbr-fonts-style display-7">
                                            <?php echo $product_fdesc; ?>    
                                            </p>
                                            <p>
                                              <span class='fa fa-star checked'></span>
                                    <span class='fa fa-star checked'></span>
                                    <span class='fa fa-star checked'></span>
                                    <span class='fa fa-star checked'></span>
                                    <span class='fa fa-star'></span>
                                            </p>
                                            <h4 class="card-title mbr-fonts-style display-7" style="color: green;">
                                                <i class="fa fa-money"></i>&nbsp;Cash On Delivery
                                            </h4>



                                            <a class="btn btn-primary display-4" href="order.php?pro_id=<?php echo $product_id; ?>">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="media-container-row">
                            <div class="mbr-light m-1">
                                <img id="myImg1" src="<?php echo $product_image ?>" alt="wingsmartz" title=""  style="width:150px;">

                            
                                <div id="myModal1" class="modal1">

  <!-- The Close Button -->
  <span class="close1">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal1-content" id="img011">

  <!-- Modal Caption (Image Text) -->
  <div id="caption1"></div>
</div>

                            </div>

<div class="mbr-light m-1">
                                <img id="myImg2" src="<?php echo $product_image2 ?>" alt="wingsmartz" title=""  style="width:150px; margin-left:0px;">
                                
                            
                                <div id="myModal2" class="modal2">

  <!-- The Close Button -->
  <span class="close2">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal2-content" id="img02">

  <!-- Modal Caption (Image Text) -->
  <div id="caption2"></div>
</div>

                            </div>
                            <div class="mbr-light m-1">
                                <img id="myImg3" src="<?php echo $product_image3 ?>" alt="wingsmartz" title=""  style="width:150px;">
                                
                            
                                <div id="myModal3" class="modal3">

  <!-- The Close Button -->
  <span class="close3">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal3-content" id="img03">

  <!-- Modal Caption (Image Text) -->
  <div id="caption3"></div>
</div>

                            </div><div class="col-md-7">
                                    </div>



                            </div>



                    </form>
                </div> 
            </div>          
        </section>

        <section class="services1 cid-s9PtxQZrhm" id="services1-1t">
            <!---->

            <!---->
            <!--Overlay-->

            <!--Container-->
            <div class="container">
                <div class="row justify-content-center">
                    <!--Titles-->
                    <div class="title pb-5 col-12">
                        <h2 class="align-left pb-3 mbr-fonts-style display-1">Related Products</h2>

                    </div>
                    
                    <?php
                    
                    global $con;

                            $query = "select * from products where brand='$pcateg'";

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
                    </div>";
                            }
                    
                    ?>
                    
                </div>
            </div>
        </section>

        <section class="cid-s9PGrm6QmP" id="footer1-26">





            <div class="container">
                <div class="media-container-row content text-white">
                    <div class="col-12 col-md-3">
                        <div class="media-wrap">
                            <a href="index.php">
                                <img src="assets/images/wm.png" alt="Mobirise" title="">
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
                                    <a href="https://wa.me/+94754472201/" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="viber://chat?number=+94770685195" target="_blank">
                                        <span class="mbr-iconfont mbr-iconfont-social socicon-viber socicon"></span>
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
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/dropdown/js/nav-dropdown.js"></script>
        <script src="assets/dropdown/js/navbar-dropdown.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/theme/js/script.js"></script>

        <script>
            
            // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

        </script>

        <script>
            
            // Get the modal
var modal = document.getElementById("myModal1");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1");
var modalImg = document.getElementById("img011");
var captionText = document.getElementById("caption1");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

        </script>

        <script>
            
            // Get the modal
var modal = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption2");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

        </script>

        <script>
            
            // Get the modal
var modal = document.getElementById("myModal3");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption3");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close3")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

        </script>

        


    </body>
</html>