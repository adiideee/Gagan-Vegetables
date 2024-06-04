<?php
@session_start();
include("../admin/api/dbconnect.php");
$rs = mysqli_query($con, "select * from product_info order by pname");
while ($row = mysqli_fetch_array($rs)) {
  echo ("<div id='myitem'>");

  $id = $row["pid"];
  $final = $row["price"];
  $item = $row["pname"];
  $img = $row["image_path"];
  echo ("<img src='..\\admin\\collection\\$img' width='100' height='100' border='2px solid black'>");
  echo ("<br>");
  echo ("Item Name : " . $row["pname"]);
  echo ("<br>");
  echo ("Rate : ₹" . $row["price"] . " Rs. per Kg/Piece");
  echo ("<br>");
  echo ("Description : " . $row["pdesc"]);
  echo ("<br><br>");
  echo ("<button type='button' class='btn btn-success'><a href='checkalreadylogin.php?prid=$id&price=$final&pname=$item' style='color:white;'>Buy Now</a></button>");
  echo ("<br><br>");
  echo ("</div>");
}
?>
<style>
  #myitem {
    width: 200px;
    height: 340px;
    border: 2px solid black;
    display: inline-block;
    margin: 10px;
    border-radius: 10px;
    text-align: center;
    margin-top: 10px;
    padding-top: 20px;
    line-height: 30px;
    color: black;
    font-size: 16px;
    margin-left: 15px;
  }

  #myitem img {
    border: 2px solid black;
  }
</style>