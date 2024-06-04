<?php
@session_start();
if (isset($_SESSION["uname"]) && $_SESSION["utype"] == "user") {
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
                    <h4 class="mb-1 mt-0">Complain </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="insertcomplain.php">
                                <?php
                                $name = "Admin";
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Complain To:</label>
                                    <input type="text" class="form-control" name="txtpquantity"
                                        aria-describedby="emailHelp" value="<?php echo ("$name"); ?>">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Complain Heading:</label>
                                    <input type="text" class="form-control" name="txtheading"
                                        aria-describedby="emailHelp" placeholder="">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Complain Deatils:</label>
                                    <textarea name="txtdetails" id="" cols="30" rows="10" class="form-control"></textarea>

                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
                <!-- end col -->

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