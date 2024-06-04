<?php
    $a=$_REQUEST["txtpname"];
    $b=$_REQUEST["txtprice"];
    $c=$_REQUEST["txtPdesc"];
    $d=$_FILES["flimage"];
    $img=$d["name"];
    move_uploaded_file($d["tmp_name"],"../collection/$img");
    include("dbconnect.php");
    include("create_product_api.php");
    $b2=new create_item();
    $b2->pname=$a;
    $b2->price=$b;
    $b2->pdesc=$c;
    $b2->image_path=$img;
    $b2->add();
    echo "<script>

    alert('Product has been added...!!');
    window.location.href='../createproduct.php';

   </script>";
   
?>  
