<?php
$a = $_REQUEST["cid"];
include("./api/dbconnect.php");
mysqli_query($con, "delete from complain_info where cid='$a'");
echo "<script>
    alert('Message has been deleted...!!');
    window.location.href='inbox.php';
    </script>";

?>