<?php @session_start();
unset($_SESSION["uname"]);
unset($_SESSION["utype"]);
unset($_SESSION["name"]);
header("location:../index.php");
?>