<?php

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
    
    echo $title;
    echo '<br>';
    echo $categ;
    echo '<br>';
    echo $brand;
    echo '<br>';
    echo $img1;
    echo '<br>';
    echo $img2;
    echo '<br>';
    echo $img3;
    echo '<br>';
    echo $price;
    echo '<br>';
    echo $fprice;
    echo '<br>';
    echo $sdesc;
    echo '<br>';
    echo $fdesc;
    echo '<br>';
    echo $pkey;
    echo '<br>';
    echo $ptype;
    echo '<br>';
    
}

?>