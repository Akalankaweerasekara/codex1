<?php
include 'connection.php';
?>

<?php

$gid="";
$gtt="";
$mim="";
$sim="";
$tim="";
$prc="";
$fprc="";
$sde="";
$fde="";
$pke="";
$pty="";
$c_id="";
$c_title="";
$b_id="";
$b_title="";

?>

 <?php
    if (isset($_POST['sech'])) {

        $b = $_POST['pid'];
        $query2 = "select * from products where id='$b'";

        $sres = mysqli_query($con, $query2);

        if ($sres) {
            if (mysqli_num_rows($sres)) {
                while ($roww = mysqli_fetch_array($sres)) {
                    $gid = $roww['id'];
                    $gtt = $roww['title'];
                    $cid = $roww['categ'];
                    $bid = $roww['brand'];
                    $mim = $roww['image'];
                    $sim = $roww['img2'];
                    $tim = $roww['img3'];
                    $prc = $roww['price'];
                    $sde = $roww['sdesc'];
                    $fde = $roww['fdesc'];
                    $pke = $roww['keyword'];
                    $pty = $roww['ptp'];
                }
            } else {
                echo "<script>alert('no product for this product id ... !')</script>";
            }
            $query3 = "select * from categories where cat_id='$cid'";
            $rss = mysqli_query($con, $query3);
            while ($gtdt = mysqli_fetch_array($rss)) {
                $c_title = $gtdt['cat_title'];
                $c_id = $gtdt['cat_id'];
            }

            $query4 = "select * from brands where brand_id='$bid'";
            $rse = mysqli_query($con, $query4);
            while ($gtar = mysqli_fetch_array($rse)) {
                $b_id = $gtar['brand_id'];
                $b_title = $gtar['brand_title'];
            }
        } else {
            echo 'system error';
        }
    }
    ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wingsmartz | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>WM</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Wingsmartz</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Malinga Nipun</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Malinga Nipun - Online Trader
                                            <small>Since Oct. 2020</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Change Password</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Malinga Nipun</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->

                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>


                         <li>
            <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <li>
            <a href="icategories.php">
            <i class="fa fa-calculator"></i> <span>Categories</span>
            
          </a>
        </li>
        <li>
            <a href="ibrands.php">
            <i class="fa fa-briefcase"></i> <span>Brands</span>
            
          </a>
        </li>
        <li>
            <a href="iproducts.php">
            <i class="fa fa-laptop"></i> <span>Products</span>
            
          </a>
        </li>
        <li>
            <a href="irepair.php">
            <i class="fa fa-recycle"></i> <span>Repair</span>
            
          </a>
        </li>
        
        <li>
            <a href="iblog.php">
            <i class="fa fa-edit"></i> <span>Blog</span>
            
          </a>
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view_orders.php"><i class="fa fa-archive"></i> View Orders</a></li>
            <li><a href="confirmed_orders.php"><i class="fa fa-ambulance"></i> Confirmed Orders</a></li>
            
          </ul>
        </li>
        <li>
            <a href="iback.php">
            <i class="fa fa-photo"></i> <span>Backgrounds</span>
            
          </a>
        </li>
        <li>
            <a href="igallery.php">
            <i class="fa fa-camera"></i> <span>Gallery</span>
            
          </a>
        </li>
        
        


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        My Products
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">Products</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-7">

                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Manage Products</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product ID</label>
                                            <input type="text" class="form-control" name="pid" value="<?php echo $gid;  ?>"  placeholder="Auto Generated">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Title</label>
                                            <input type="text" class="form-control" name="title" value="<?php echo $gtt;  ?>"  placeholder="Enter Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <select class="form-control" name="pcateg">
                                                <option value="<?php echo $c_id; ?>"><?php echo $c_title; ?></option>
                                                <?php
                                                global $con;

                                                $query = "select * from categories";

                                                $result = mysqli_query($con, $query);

                                                while ($get_cats = mysqli_fetch_array($result)) {

                                                    $cat_id = $get_cats['cat_id'];
                                                    $cat_title = $get_cats['cat_title'];


                                                    echo "
                                    <option value='$cat_id'>$cat_title</option>
                                    
                                    
                                ";
                                                }
                                                ?>



                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Brand</label>
                                            <select class="form-control" name="pbrand">
                                                <option value="<?php echo $b_id; ?>"><?php echo $b_title; ?></option>
                                                <?php
                                                global $con;

                                                $query = "select * from brands";

                                                $result = mysqli_query($con, $query);

                                                while ($get_brands = mysqli_fetch_array($result)) {
                                                    $brand_id = $get_brands['brand_id'];
                                                    $brand_title = $get_brands['brand_title'];


                                                    echo "
                                    <option value='$brand_id'>$brand_title</option>
                                    
                                ";
                                                }
                                                ?>



                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 1</label>
                                            <input type="text" name="mimg" class="form-control" value="<?php echo $mim;  ?>"  placeholder="Enter Product Main Image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 2</label>
                                            <input type="text" name="simg" class="form-control" value="<?php echo $sim;  ?>"  placeholder="Enter Product Second Image">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image3</label>
                                            <input type="text" name="timg" class="form-control" value="<?php echo $tim;  ?>"  placeholder="Enter Product Third Image">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="text" name="price" class="form-control" value="<?php echo $prc;  ?>"  placeholder="Enter Product Price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fake Price</label>
                                            <input type="text" name="fprice" class="form-control" value="<?php echo $fprc;  ?>"  placeholder="Enter Fake Price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sample Description</label>
                                            <input type="text" name="sdesc" class="form-control" value="<?php echo $sde;  ?>"  placeholder="Enter Sample Description">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Description</label>
                                            <input type="text" name="fdesc" class="form-control" value="<?php echo $fde;  ?>"  placeholder="Enter Full Description">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Keyword</label>
                                            <input type="text" name="pkey" class="form-control" value="<?php echo $pke;  ?>"  placeholder="Enter Keyword For Search">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <select class="form-control" name="ptype">
                                                <option value="<?php echo $pty;  ?>"><?php echo $pty;  ?></option>
                                                <option value="Reguler">Regular</option>
                                                <option value="Sale">Sale</option>
                                                <option value="Sale">Used</option>

                                            </select>
                                        </div>


                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="save" class="btn btn-primary" style="padding-left: 18px;padding-right: 18px;">Save</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" name="upd" class="btn btn-primary">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" name="delt" class="btn btn-primary">Delete</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" name="sech" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2020 <a href="https://beesoftz.business.site/">Beesoftz Solutions</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="bower_components/raphael/raphael.min.js"></script>
        <script src="bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>

<?php
global $con;

if (isset($_POST['save'])) {


    $title = $_POST['title'];
    $categ = $_POST['pcateg'];
    $brand = $_POST['pbrand'];
    $img1 = $_POST['mimg'];
    $img2 = $_POST['simg'];
    $img3 = $_POST['timg'];
    $price = $_POST['price'];
    $fprice = $_POST['fprice'];
    $sdesc = $_POST['sdesc'];
    $fdesc = $_POST['fdesc'];
    $pkey = $_POST['pkey'];
    $ptype = $_POST['ptype'];

    $queryss = "insert into products(title,categ,brand,image,img2,img3,price,sdesc,fdesc,keyword,ptp)values('$title','$categ','$brand','$img1','$img2','$img3','$price','$sdesc','$fdesc','$pkey','$ptype')";
    if (mysqli_query($con, $queryss)) {
        echo "<script>alert('Product Saved')</script>";
    }else{
        echo "<script>alert('Product Not Saved')</script>";
    }
}
?>
