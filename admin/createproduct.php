<?php
@session_start();
if (isset($_SESSION["uname"]) && $_SESSION["utype"] == "admin") {
    include("header.php");
    ?>
    <?php
    include("leftsidebar.php");
    ?>
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">Product Form</h4>
                    </div>
                </div>
                <!-- content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0">Create New Product</h4>
                                <form method="post" enctype="multipart/form-data" action="../admin/api/insertproduct.php"
                                    class="form-horizontal">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="simpleinput">Enter product
                                                    name</label>
                                                <div class="col-lg-9">
                                                    <input name="txtpname" type="text" class="form-control" tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="simpleinput">Enter product price
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="txtprice" tabindex="2" required>
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
                                                <label class="col-lg-3 col-form-label" for="example-email">Enter
                                                    description :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="txtPdesc" tabindex="3" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="example-fileinput">Choose Image
                                                    :</label>
                                                <div class="col-lg-9">
                                                    <input type="file" class="form-control" name="flimage" tabindex="4" required>
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
                                <h4 class="header-title mt-0 mb-1">Product List</h4>

                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Sn</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Description</th>
                                        
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        require_once("../admin/api/create_product_api.php");
                                        $p1 = new create_item;
                                        $res = $p1->readall();
                                        if (isset($_REQUEST["delid"])) {
                                            $p1->pname = $_REQUEST["delid"];
                                            $p1->delete();
                                        }
                                        ?>
                                        <tbody>
                                            <?php
                                            require_once("../admin/api/create_product_api.php");
                                            $rs = mysqli_query($con, "select * from product_info");
                                            $cnt = 0;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $cnt++;
                                                echo ("<tr>");
                                                echo ("<td>" . $cnt . "</td>");
                                                echo ("<td>" . $row["pname"] . "</td>");
                                                echo ("<td>" . $row["price"] . "</td>");
                                                echo ("<td>" . $row["pdesc"] . "</td>");
                                               
                                                $id = $row["pid"];

                                                echo ("<td><a href='../admin/api/deleteproduct.php?pid=$id' class='btn btn-danger btn-sm btnDelete'>Delete</a></td>");
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
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <?php
}
include("footer.php");
?>