<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Twin Kris</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <form method="POST" action="db_login.php">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                    <div class="row w-100">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left p-5">
                                <div class="brand-logo" align="center">
                                    <a class="navbar-brand brand-logo"><img src="../../images/logoo.svg" alt="logo"></a>
                                    <!-- <a class="navbar-brand brand-logo-mini"><img src="../../images/logo-minii.svg" alt="logo"></a> -->
                                </div>
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                <form class="pt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="passwd" placeholder="Password">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" name="submit" id="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light">
                                        Don't have an account? <a href="register.php" class="text-primary">Create</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- content-wrapper ends -->
    <!-- </div> -->
    <!-- page-body-wrapper ends -->
    <!-- </div> -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
</body>

</html>