<?php
$a = $_REQUEST["oid"];
include("../admin/api/dbconnect.php");
mysqli_query($con, "delete from order_info where oid='$a'");
echo "<script>
    alert('Your order has been deleted...!!');
    window.location.href='order.php';
    </script>";

?>