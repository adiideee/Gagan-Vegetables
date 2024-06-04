<?php
    $a=$_REQUEST["username"];
    $b=$_REQUEST["usermobile"];
    $c=$_REQUEST["useremail"];
    $d=$_REQUEST["useraddress"];
    include("dbconnect.php");
    include("create_user_api.php");
    $b2=new create_user();
    $b2->uname=$a;
    $b2->umobile=$b;
    $b2->uemail=$c;
    $b2->uaddress=$d;
    $b2->add();
    echo"<script>
     alert('Your data has been saved....!!');
    window.location.href='../../index.php';
     </script>";
   
?>