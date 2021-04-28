<?php

include 'connection.php';

?>

<?php
if (isset($_GET['rsid'])) {

    $bbd = $_GET['rsid'];
    
    
  
        $query = "delete from repair where rep_id='$bbd' ";

    $result = mysqli_query($con, $query);
    if ($result) {
        
        echo "<script>window.open('irepair.php','_self')</script>";
    }
    
}
?>