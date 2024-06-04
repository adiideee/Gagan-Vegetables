<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Gagan Vegetables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png">
    <!-- plugins -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

    <body class="authentication-bg">
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-6 p-5">
                                        <div class="mx-auto mb-5">
                                            <a href="../index.php">
                                                <img src="assets/images/Myfinallogo.png" alt="" height="40" />
                                               
                                            </a>
                                        </div>
                                        <form action="../admin/api/insertuser.php" class="authentication-form" method="post">
                                            <div class="form-group">
                                                <label class="form-control-label">Enter your name</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <img src="assets/images/user.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Your name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Enter your mobile</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <img src="assets/images/telephone.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <input type="number" class="form-control" name="usermobile"
                                                        placeholder="Your mobile" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-control-label">Enter your email </label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <img src="assets/images/email.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="useremail" placeholder="hello@coderthemes.com" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Enter your address</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <img src="assets/images/home.png" alt="" height="18">
                                                        </span>
                                                    </div>
                                                    <textarea class="form-control" name="useraddress" rows="2" placeholder="Enter address" required></textarea>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="checkbox-signup" checked>
                                                    <label class="custom-control-label" for="checkbox-signup">
                                                        I accept <a href="javascript: void(0);">Terms and Conditions</a>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>
