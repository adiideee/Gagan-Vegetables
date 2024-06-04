<?php
@session_start();
if (isset($_SESSION["uname"]) && $_SESSION["utype"] == "user") {


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
                    <h4 class="mb-1 mt-0">Product</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row bg-light p-3">
                            <?php
                            include("displayAllproduct.php");

                            ?>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end card -->
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
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<?php
}
include("footer.php");
?>