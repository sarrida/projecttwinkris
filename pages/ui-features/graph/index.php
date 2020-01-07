<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Twin Kris</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include('../../partials/_navbar.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php include('../../partials/_sidebar.php') ?>
      <!-- partial -->
      <?php include('../../../lib/config.php'); ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">

          </div>
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"></h4>
                <?php
                // require_once('condb.php');
                // include('navbar.php');
                include('intro.php');
                $p = (isset($_GET['p']) ? $_GET['p'] : '');
                if ($p == 'daily') {
                  include('r_daily.php');
                } elseif ($p == 'monthy') {
                  include('r_monthy.php');
                } elseif ($p == 'yearly') {
                  include('r_yearly.php');
                } elseif ($p == 'add') {
                  include('form.php');
                } elseif ($p == 'adddb') {
                  include('form_db.php');
                } else {
                  include('r_daily.php');
                }
                // include('footer.php');
                ?>

              </div>
            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php include('../../partials/_footer.php') ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- plugins:js -->
  <script src="../../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../js/off-canvas.js"></script>
  <script src="../../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>