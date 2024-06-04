<?php
session_start();

$_SESSION["pid"] = $_REQUEST["pid"];
$_SESSION["price"] = $_REQUEST["price"];
$_SESSION["pname"] = $_REQUEST["pname"];
if (isset($_SESSION["name"])) 
{
    header("location:productquantityforbuy.php");
} 
else
{
    echo "<script>
        alert('Please login hare...!!');
        window.location.href='../../login/login.php';
        </script>";
}
?>