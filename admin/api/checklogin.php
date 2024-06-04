<?php
@session_start();
$a = $_REQUEST["txtemail"];
$b = $_REQUEST["txtpassword"];
include("dbconnect.php");
$rs = mysqli_query($con, "select * from user_info where uemail='$a'");
if (mysqli_num_rows($rs) == 0) {
    echo "<script>

    alert('Invalid Username...!!');
    window.location.href='../../login/login.php';

   </script>";
} else {
    $row = mysqli_fetch_array($rs);
    $n = $row["uname"];
    if ($row['umobile'] == $b) {
        $_SESSION["name"] = $n;
        if ($row["utype"] == "admin") {
            $_SESSION["uname"] = $a;
            $_SESSION["utype"] = "admin";
            header("location:../index.php");
        } else {
            $_SESSION["uname"] = $a;
            $_SESSION["utype"] = "user";
            header("location:../../user/index.php");
        }
    } else {

        echo "<script>

    alert('Invalid Password...!!');
    window.location.href='../../login/login.php';

   </script>";
    }
}
?>