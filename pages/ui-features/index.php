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
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <body>
      <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.php"><img src="../../images/logoo.svg" alt="logo"></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../../images/logo-minii.svg" alt="logo"></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
              <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                  </div>
                  <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                </div>
              </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-img">
                    <img src="../../images/faces/face2.jpg" alt="image">
                    <span class="availability-status online"></span>
                  </div>
                  <div class="nav-profile-text">
                    <p class="mb-1 text-black">Sarridah Ma-isor</p>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i>
                    Signout
                  </a>
                </div>
              </li>
              <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                  <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
              </li>
              </li>
              <li class="nav-item dropdown">
                <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count-symbol bg-danger"></span>
                </a> -->
              <li class="nav-item  d-none nav-logout d-none d-lg-block">
                <a class="nav-link" href="logout.php">
                  <i class="mdi mdi-power" id="d-lg-block"></i>
                </a>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-format-line-spacing"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>

        </nav>
      </div>

      <body>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="../../images/faces/face2.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Sarridah M.</span>
                    <span class="text-secondary text-small">Project Manager</span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../ui-features/index.php">
                  <span class="menu-title">หน้าแรก</span>
                  <i class="mdi mdi-home menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#data-pages" aria-expanded="false" aria-controls="data-pages">
                  <span class="menu-title">ข้อมูล</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse" id="data-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/customer/customer.php"><i class="mdi mdi-account-multiple">&nbsp;</i>ข้อมูลลูกค้า</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/supplier/supplier.php"><i class="mdi mdi-truck">&nbsp;</i>ข้อมูลซับพลายเออร์</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#datacus-pages" aria-expanded="false" aria-controls="datacus-pages">
                  <span class="menu-title">ข้อมูลพนักงาน</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi mdi-dribbble menu-icon"></i>
                </a>
                <div class="collapse" id="datacus-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/employee/employee.php"><i class="mdi mdi-account-multiple-outline">&nbsp;</i>ข้อมูลพนักงาน</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/work/work.php"><i class="mdi mdi-fingerprint">&nbsp;</i>การเข้างาน</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/salary/salary.php"><i class="mdi mdi-coin">&nbsp;</i>ข้อมูลเงินเดือน</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#product-pages" aria-expanded="false" aria-controls="product-pages">
                  <span class="menu-title">ข้อมูลสินค้า</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs menu-icon"></i>
                </a>
                <div class="collapse" id="product-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/product/product.php"><i class="mdi mdi-food-variant">&nbsp;</i>ข้อมูลสินค้า</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#sale-pages" aria-expanded="false" aria-controls="sale-pages">
                  <span class="menu-title">การขาย</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-alarm-plus menu-icon"></i>
                </a>
                <div class="collapse" id="sale-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/sale/insertsale.php"><i class="mdi mdi-shape-polygon-plus">&nbsp;</i>new sale</a></li>
                    <li class=" nav-item"> <a class="nav-link" href="../ui-features/sale/sale.php"><i class="mdi mdi-book-plus">&nbsp;</i>ข้อมูลการขาย</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#pay-pages" aria-expanded="false" aria-controls="pay-pages">
                  <span class="menu-title">การชำระ</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-image-filter-tilt-shift  menu-icon"></i>
                </a>
                <div class="collapse" id="pay-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/pay/pay.php"><i class="mdi mdi-deskphone">&nbsp;</i>ข้อมูลการชำระ</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#manufacture-pages" aria-expanded="false" aria-controls="manufacture-pages">
                  <span class="menu-title">การผลิต</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-camera-iris menu-icon"></i>
                </a>
                <div class="collapse" id="manufacture-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/manufacture/manufacture.php"><i class="mdi mdi-amplifier">&nbsp;</i>ข้อมูลการผลิต</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#material-pages" aria-expanded="false" aria-controls="material-pages">
                  <span class="menu-title">วัตถุดิบ</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-blur-radial  menu-icon"></i>
                </a>
                <div class="collapse" id="material-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/material/material.php"><i class="mdi mdi-fish">&nbsp;</i>ข้อมูลวัตถุดิบ</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/ordermaterial/ordermaterial.php"><i class="mdi mdi-cart-plus">&nbsp;</i>การสั่งซื้อวัตถุดิบ</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#deli-pages" aria-expanded="false" aria-controls="deli-pages">
                  <span class="menu-title">จัดส่ง</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-dribbble menu-icon"></i>
                </a>
                <div class="collapse" id="deli-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/delivery/deli.php"><i class="mdi mdi-truck-delivery">&nbsp;</i>ข้อมูลจัดส่ง</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#mec-pages" aria-expanded="false" aria-controls="mec-pages">
                  <span class="menu-title">เครื่องจักร</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-bullseye menu-icon"></i>
                </a>
                <div class="collapse" id="mec-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/mechine/mechine.php"><i class="mdi mdi-wrench">&nbsp;</i>ข้อมูลเครื่องจักร</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/fix/fix.php"><i class="mdi mdi-screwdriver">&nbsp;</i>แจ้งซ่อม</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts-pages" aria-expanded="false" aria-controls="charts-pages">
                  <span class="menu-title">กราฟ</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-radiobox-marked  menu-icon"></i>
                </a>
                <div class="collapse" id="charts-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../ui-features/graph/index.php"><i class="mdi mdi-trending-up">&nbsp;</i>กราฟ</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                  </span>
                  หน้าแรก
                </h3>
              </div>
              <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                      <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Weekly Sales
                        <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">$ 15,0000</h2>
                      <h6 class="card-text">Increased by 60%</h6>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                      <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Weekly Orders
                        <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">45,6334</h2>
                      <h6 class="card-text">Decreased by 10%</h6>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                      <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Visitors Online
                        <i class="mdi mdi-diamond mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">95,5741</h2>
                      <h6 class="card-text">Increased by 5%</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">การเข้างาน</h4>
                      <table class="table table-striped">
                        <thead align="center">
                          <tr>
                            <th> วันที่ทำงาน </th>
                            <th> ชื่อพนักงาน</th>
                            <th> สถานะวันทำงาน</th>
                            <th> </th>
                            <?php include('../../lib/config.php') ?>
                            <?php
                            $sql = "SELECT DISTINCT start_date,e_name,e_surename,work_state FROM work INNER JOIN employee on employee.e_id=work.e_id WHERE work_state LIKE 'เข้างาน' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["start_date"] . "</td>";
                                echo "<td>" . $row["e_name"] . " " . $row['e_surename'] . "</td>";
                                if ($row["work_state"] == 'เข้างาน') {
                                  echo "<td>  <div class='progress'><div class='progress-bar progress-bar-striped' role='สถานะวันทำงาน' style='width: 100%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'> " . $row["work_state"] . "</td>";
                                } else
                                  echo "<td>  <div class='progress'><div class='progress-bar bg-danger' role='สถานะวันทำงาน' style='width: 50%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'> " . $row["work_state"] . "</td>";
                              }
                            }
                            $conn->close();
                            ?>
                          </tr>

                        </thead>
                      </table>

                    </div>
                  </div>
                </div>
                <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">รายชื่อลูกค้า</h4>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead align="center">
                            <tr>
                              <th>รหัสลูกค้า</th>
                              <th>ชื่อ</th>
                              <th>นามสกุล</th>
                              <th>ที่อยู๋</th>
                              <th>เบอร์โทรศัพท์</th>
                              <th></th>
                              <?php include('../../lib/config.php') ?>
                              <?php
                              $sql = "SELECT * FROM customer";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                  echo "<tr>";
                                  echo "<td>" . $row["c_id"] . "</td>";
                                  echo "<td>" . $row["c_name"] . "</td>";
                                  echo "<td>" . $row["c_surename"] . "</td>";
                                  echo "<td>" . $row["c_address"] . "</td>";
                                  echo "<td>" . $row["c_phone"] . "</td>";
                                  echo "<td>

                                    <a href='customer/viewcus.php?id=$row[c_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;</td>";

                                  echo "</tr>";
                                }
                              }
                              $conn->close();
                              ?>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="clearfix">
                        <h4 class="card-title float-left">ยอดขายประจำปี</h4>
                        <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                      </div>
                      <canvas id="visit-sale-chart" class="mt-4"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ยอดขายรายเดือน</h4>
                      <canvas id="traffic-chart"></canvas>
                      <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- content-wrapper ends -->
              <!-- partial:partials/_footer.html -->
              <?php include('../partials/_footer.php') ?>
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <script src="../../vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="../../js/off-canvas.js"></script>
        <script src="../../js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="../../js/dashboard.js"></script>
        <!-- End custom js for this page-->
      </body>

</html>