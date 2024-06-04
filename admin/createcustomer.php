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
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Customer Form</h4>
                    </div>
                </div>
                <!-- content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0">Create New Customer</h4>
                                <form method="post" action="../admin/api/insertuseradmin.php" class="form-horizontal">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="simpleinput">Enter your
                                                    name:</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="username" tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="simpleinput">Enter you mobile:
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="number" class="form-control" name="usermobile"
                                                        tabindex="2" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="example-email">Enter your
                                                    email:</label>
                                                <div class="col-lg-9">
                                                    <input type="email" id="example-email" name="useremail"
                                                        class="form-control" tabindex="3" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="example-textarea">Enter your
                                                    address:</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="useraddress" class="form-control"
                                                        id="example-password" tabindex="4" required>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-1">Customer List</h4>

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Sn</th>
                                                <th>Customer Name</th>
                                                <th>Customer Mobile</th>
                                                <th>Customer Email</th>
                                                <th>Address</th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        require_once("../admin/api/create_user_api.php");
                                        $p1 = new create_user;
                                        $res = $p1->readall();
                                        if (isset($_REQUEST["delid"])) {
                                            $p1->uname = $_REQUEST["delid"];
                                            $p1->delete();
                                        }
                                        ?>
                                        <tbody>
                                            <?php
                                               require_once("../admin/api/create_user_api.php");
                                               $rs=mysqli_query($con,"select * from user_info");
                                            $cnt = 0;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $cnt++;
                                                echo ("<tr>");
                                                echo ("<td>" . $cnt . "</td>");
                                                echo ("<td>" . $row["uname"] . "</td>");
                                                echo ("<td>" . $row["umobile"] . "</td>");
                                                echo ("<td>" . $row["uemail"] . "</td>");
                                                echo ("<td>" . $row["uaddress"] . "</td>");
                                                echo ("<td>" . $row["utype"] . "</td>");
                                                $id = $row["uid"];
                                                echo ("<td><a href='../admin/api/deleteuser.php?uid=$id' class='btn btn-danger btn-sm btnDelete'>Delete</a></td>");
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
               
            </div>
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
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <?php
}
include("footer.php");
?>