<?php
    $a=$_REQUEST["pid"];
    require_once("dbconnect.php");
    require_once("create_product_api.php");
    $b2= new create_item();
    $b2->pid=$a;
    $b2->delete();
    echo "<script>
    alert('Your data has been deleted...!!');
    window.location.href='../createproduct.php';
    </script>";
   
?>
