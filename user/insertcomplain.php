<?php 
@session_start();
    $a=$_REQUEST["txtheading"];
    $b=$_REQUEST["txtdetails"];
    $usr=$_SESSION["name"];
    include("../admin/api/dbconnect.php");
    mysqli_query($con, "insert into complain_info(heading,detail,username,reg_date) values('$a','$b','$usr',now())") or die("Query Error");
    echo "<script>
    
        alert('Your complain has been saved...!!');
        window.location.href='complain.php';
    
       </script>";
    ?>
