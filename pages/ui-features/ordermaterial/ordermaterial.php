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
                        <h3 class="page-title">
                            <!-- ข้อมูลการทำงาน -->
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="insertordermaterial.php">
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
                                                รหัสการสั่งซื้อ
                                            </th>
                                            <th>
                                                ชื่อพนักงาน
                                            </th>

                                            <th>
                                                ชื่อซับพลายเออร์
                                            </th>
                                            <th>
                                                วันที่สั่งซื้อ
                                            </th>

                                            <th>
                                                สถานะ
                                            </th>
                                            <th>

                                            </th>


                                            <?php include('../../../lib/config.php') ?>

                                            <!-- date_rm e_id supplier_id state -->
                                            <?php
                                            $sql = "SELECT * FROM   odrer_matr 
                                            INNER JOIN employee on employee.e_id = odrer_matr.e_id  
                                            INNER JOIN supplier on supplier.supplier_id = odrer_matr.supplier_id ORDER BY  odrer_matr.odrer_matr_id DESC ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                                    echo "<tr>";
                                                    echo "<td>" . $row['odrer_matr_id'] . "</td>";
                                                    echo "<td>" . $row['e_name'] . "</td>";
                                                    echo "<td>" . $row['supplier_name'] . "</td>";
                                                    echo "<td>" . $row['date_matr'] . "</td>";
                                                    
                                                    if ($row["status"] == 'ได้รับของแล้ว') {
                                                        echo "<td> <label class='badge badge-success  progress-bar-striped'> " . $row["status"] . "</td>";
                                                    } else
                                                        echo "<td> <label class='badge badge-danger  progress-bar-striped'> " . $row["status"] . "</td>";
                                                  if ($row["status"] == 'ได้รับของแล้ว') {
                                                    echo "<td>
                                    <a href='viewom.php?id=$row[odrer_matr_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;</td>";
                                                  }else {
                                     echo "<td>
                                     <a href='viewom.php?id=$row[odrer_matr_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                    <a href='updateordermaterial.php?id=$row[odrer_matr_id]'><button type='button' class='btn btn-outline-warning btn-rounded btn-icon'>
                          <i class='mdi mdi-border-color text-warning' ></i></button></a>&nbsp;
                                    <a href='db-deleteordermaterial.php?id=$row[odrer_matr_id]'><button type='button' class='btn btn-outline-danger btn-rounded btn-icon'><i class='mdi mdi-broom text-danger'></i> </button></td>";
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