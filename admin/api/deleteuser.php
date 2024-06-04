<?php
    $a=$_REQUEST["uid"];
    require_once("dbconnect.php");
    require_once("create_user_api.php");
    $b2= new create_user();
    $b2->uid=$a;
    $b2->delete();
    echo "<script>
    alert('Your data has been deleted...!!');
    window.location.href='../createcustomer.php';
    </script>";
   
?>
