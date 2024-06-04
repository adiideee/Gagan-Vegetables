<?php @session_start();
if (isset($_SESSION["uname"]) && $_SESSION["utype"] == "admin")
 {
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
                    <h4 class="mb-1 mt-0">Inbox</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1">Inbox Form</h4>

                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Sn</th>
                                            <th>Sender Name</th>
                                            <th>Message Title</th>
                                            <th>Deatils</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            include("./api/dbconnect.php");
                                        $rs = mysqli_query($con, "select * from complain_info");
                                        $cnt = 0;
                                        
                                        while ($row = mysqli_fetch_assoc($rs)) {
                                            $cnt++;
                                            echo ("<tr>");
                                            echo ("<td>" . $cnt . "</td>");
                                            echo ("<td>" . $row["username"] . "</td>");
                                            echo ("<td>" . $row["heading"] . "</td>");
                                            echo ("<td>" . $row["detail"] . "</td>");
                                            echo ("<td>" . $row["reg_date"] . "</td>");
                                            $id = $row["cid"];
                                        
                                            echo ("<td><a href='deleteinbox.php?cid=$id' class='btn btn-danger btn-sm btnDelete'>Delete</a></td>");
                                            echo ("</tr>");
                                        }
                                        ?>

                                    </tbody>
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
                    &copy; 2023 By Gagan Vegetables | Design & Developed : <a href="index.php"
                        target="_blank">Gagan Vegetables</a>
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