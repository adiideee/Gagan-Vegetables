<?php
@session_start();
$a = $_REQUEST["txtpquantity"];
$b = $_SESSION["prid"];
$c = $_SESSION["price"];
$d = $_SESSION["pname"];
$e = $_SESSION["name"];
include("../admin/api/dbconnect.php");
mysqli_query($con, "insert into order_info(oqty,pid,price,pname,usrname,reg_date) values('$a','$b','$c','$d','$e',now())") or die("Query Error");
echo "<script>

    alert('Your order has been saved...!!');
    window.location.href='order.php';

   </script>";
?>