<?php
@session_start();
if (isset($_SESSION["uname"]) && $_SESSION["utype"] == "admin") {
    include("header.php");
    ?>
    <?php
    include("leftsidebar.php");
    ?>
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">

                        <h4 class="mb-1 mt-0">Basic Tables</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">Order Form</h4>

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Sn</th>
                                                <th>Customer Name</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Price</th>
                                                <th>Order Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("./api/dbconnect.php");
                                            $rs = mysqli_query($con, "select * from order_info");
                                            $cnt = 0;
                                            $total = 0;
                                            while ($row = mysqli_fetch_assoc($rs)) {
                                                $cnt++;
                                                echo ("<tr>");
                                                echo ("<td>" . $cnt . "</td>");
                                                echo ("<td>" . $row["usrname"] . "</td>");
                                                echo ("<td>" . $row["pname"] . "</td>");
                                                echo ("<td>" . $row["oqty"] . "</td>");
                                                echo ("<td>" . $row["price"] . "</td>");
                                                echo ("<td>");
                                                $amt = ($row["oqty"] * $row["price"]);
                                                echo ($amt);
                                                $total = $total + $amt;
                                                echo ("</td>");
                                                $id = $row["oid"];
                                                echo ("<td>" . $row["reg_date"] . "</td>");
                                                echo ("<td><a href='deleteproductorderadmin.php?oid=$id' class='btn btn-danger btn-sm btnDelete'>Delete</a></td>");
                                                echo ("</tr>");
                                            }
                                            ?>
                                        </tbody>
                                        <?php
                                        echo ("<tr><td colspan='5' ><b style='color:red;'>Total Amount</b></td><td colspan='1'><b style='color:red;'>$total</b></td><td colspan='1' ></td></tr>");
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->


            </div> <!-- container-fluid -->

        </div> <!-- content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="text-align: center;">
                        &copy; 2023 By Gagan Vegetables | Design & Developed : <a href="index.php" target="_blank">Gagan
                            Vegetables</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <?php
}
include("footer.php");
?>