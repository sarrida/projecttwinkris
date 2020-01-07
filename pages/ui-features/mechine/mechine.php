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
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="insertmechine.php">
                                    <button type="button" class="btn btn-outline-success btn-icon-text">เพิ่มข้อมูล<i class='mdi mdi-keyboard btn-icon-append'></i></button></a>&nbsp;
                                <a href="../../../pdf/pdf_mechine.php">
                                    <button type="button" class="btn btn-outline-info btn-icon-text">Print<i class="mdi mdi-printer btn-icon-append"></i></button>
                                </a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead align="center">
                                        <tr>
                                            <th>
                                                รหัสเครื่องจักร
                                            </th>
                                            <th>
                                                ชื่อเครื่องจักร
                                            </th>
                                            <th>
                                                ประเภทเครื่องจักร
                                            </th>
                                            <th>
                                                จำนวนเครื่องจักร
                                            </th>

                                            <th>

                                            </th>
                                            <?php include('../../../lib/config.php') ?>


                                            <?php

                                            $sql = "SELECT * FROM mechine";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["mechine_id"] . "</td>";
                                                    echo "<td>" . $row["mechine_name"] . "</td>";
                                                    echo "<td>" . $row["mechine_type"] . "</td>";
                                                    echo "<td>" . $row["mechine_amout"] . "</td>";
                                                    echo "<td>
                                                    
                                    <a href='viewmechine.php?id=$row[mechine_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;

                                    <a href='updatemechine.php?id=$row[mechine_id]'><button type='button' class='btn btn-outline-warning btn-rounded btn-icon'>
                          <i class='mdi mdi-border-color text-warning' ></i></button></a>&nbsp;
                                    <a href='db-deletemeahine.php?id=" . $row['mechine_id'] . "'onclick=\"return confirm('ต้องการจะลบข้อมูลนี้ใช่หรือไม่?')\">
                        <button type='button' class='btn btn-outline-danger btn-rounded btn-icon'><i class='mdi mdi-broom text-danger'></i> </button></td>";
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