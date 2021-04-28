<?php
include 'connection.php';
?>

<?php
$gzd = "";
$imz1 = "";
$imz2 = "";
$imz3 = "";
$imz4 = "";
$imz5 = "";
$imz6 = "";
$imz7 = "";
$imz8 = "";

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
                        My Gallery
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-7">

                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Manage Gallery</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Gallery ID</label>
                                            <input type="text" class="form-control" name="gid" value="<?php echo $gzd; ?>"  placeholder="Auto Generated" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 1</label>
                                            <input type="text" class="form-control" name="im1" value="<?php echo $imz1; ?>"  placeholder="Enter Image 1">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 2</label>
                                            <input type="text" name="im2" class="form-control" value="<?php echo $imz2; ?>"  placeholder="Enter Image 2">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 3</label>
                                            <input type="text" name="im3" class="form-control" value="<?php echo $imz3; ?>"  placeholder="Enter Image 3">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 4</label>
                                            <input type="text" name="im4" class="form-control" value="<?php echo $imz4; ?>"  placeholder="Enter Image 4">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 5</label>
                                            <input type="text" name="im5" class="form-control" value="<?php echo $imz5; ?>"  placeholder="Enter Image 5">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 6</label>
                                            <input type="text" name="im6" class="form-control" value="<?php echo $imz6; ?>"  placeholder="Enter Image 6">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 7</label>
                                            <input type="text" name="im7" class="form-control" value="<?php echo $imz7; ?>"  placeholder="Enter Image 7">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Image 8</label>
                                            <input type="text" name="im8" class="form-control" value="<?php echo $imz8; ?>"  placeholder="Enter Image 8">
                                        </div>



                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="upd" class="btn btn-primary">Update</button>
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

if (isset($_POST['upd'])) {


    $gid = $_POST['gid'];
    $im1 = $_POST['im1'];
    $im2 = $_POST['im2'];
    $im3 = $_POST['im3'];
    $im4 = $_POST['im4'];
    $im5 = $_POST['im5'];
    $im6 = $_POST['im6'];
    $im7 = $_POST['im7'];
    $im8 = $_POST['im8'];
    
    $queryss = "update gallery set im1='$im1',im2='$im2',im3='$im3',im4='$im4',im5='$im5',im6='$im6',im7='$im7',im8='$im8' where id='$gid'";
    if (mysqli_query($con, $queryss)) {
       echo "<script>document.location='igallery.php'</script>";
    } else {
        echo "<script>alert('Gallery Not Updated')</script>";
    }
}
?>
