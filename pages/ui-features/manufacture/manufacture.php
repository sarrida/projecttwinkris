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
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <!-- ข้อมูลการผลิต -->
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="insertmanufacture.php">
                                    <button type="button" class="btn btn-outline-success btn-icon-text">เพิ่มข้อมูล<i class='mdi mdi-keyboard btn-icon-append'></i></button></a>&nbsp;
                                </a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Striped Table</h4>
                                <p class="card-description">
                                    Add class <code>.table-striped</code>
                                </p> -->
                                <table class="table table-striped">
                                    <thead align="center">
                                        <tr>
                                            <th>
                                                รหัสการผลิต
                                            </th>
                                            <th>
                                                สินค้า
                                            </th>
                                            <th>
                                                วันที่ผลิต
                                            </th>
                                            <th>
                                                วันที่หมดอายุ
                                            </th>
                                            <th>
                                                สถานะ
                                            </th>

                                            <th>

                                            </th>
                                            <?php include('../../../lib/config.php') ?>


                                            <?php

                                            $sql = "SELECT * FROM manufacture INNER JOIN product on product.product_id = manufacture.product_id ORDER BY  manufacture.manufacture_id DESC ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["manufacture_id"] . "</td>";
                                                    echo "<td>" . $row["product_name"] . "</td>";
                                                    echo "<td>" . $row["manufacture_date"] . "</td>";
                                                    echo "<td>" . $row["manufacture_date2"] . "</td>";
                                                    // echo "<td>" . $row["status"] . "</td>";
                                                  if ($row["status"] == 'ผลิตเสร็จสิ้น') {
                                                     echo "<td>  <label class='badge badge-info progress-bar-striped'>" . $row["status"] . "</td>";
                                                 } else
                                                     echo "<td>  <label class='badge badge-success  progress-bar-striped'> " . $row["status"] . "</td>";
                                                  if ($row["status"] == 'ผลิตเสร็จสิ้น'){
                                                    echo "<td>                                            
                                    <a href='viewmanu.php?id=$row[manufacture_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                    <button type='button' class='btn btn-outline-danger btn-rounded btn-icon'><i class='mdi mdi-broom text-danger'></i> </button></td>"; 
                                                  }else {
                                     echo "<td>                                            
                                    <a href='viewmanu.php?id=$row[manufacture_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                    <a href='updatemanufacture.php?id=$row[manufacture_id]'><button type='button' class='btn btn-outline-warning btn-rounded btn-icon'><i class='mdi mdi-border-color text-warning' ></i></button></a>&nbsp;
                                    <button type='button' class='btn btn-outline-danger btn-rounded btn-icon'><i class='mdi mdi-broom text-danger'></i> </button></td>"; 
                                                  }
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