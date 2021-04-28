<?php

include 'connection.php';
?>

<?php

if (isset($_GET['orid'])) {

    $bbd = $_GET['orid'];

    $qrs = "select * from orders where ord_id='$bbd'";

    $resultd = mysqli_query($con, $qrs);
    if ($resultd) {
        while ($gr = mysqli_fetch_array($resultd)) {
            $corid = $gr['ord_id'];
            $opid = $gr['pro_id'];
            $nm = $gr['name'];
            $eml = $gr['email'];
            $tp = $gr['telephone'];
            $adrss = $gr['address'];

            $qrc = "insert into confirmed_orders(ord_id,pro_id,name,email,tele,address)values('$corid','$opid','$nm','$eml','$tp','$adrss')";
            mysqli_query($con, $qrc);

            
        }
        $qrd = "delete from orders where ord_id='$corid'";
            $result = mysqli_query($con, $qrd);
            if ($result) {

                echo "<script>window.open('view_orders.php','_self')</script>";
            }
    }
}
?>