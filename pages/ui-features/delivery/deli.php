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
                                                รหัสการจัดส่ง
                                            </th>
                                            <th>
                                                รหัสการชำระ
                                            </th>
                                            <th>
                                                วันที่จัดส่ง
                                            </th>
                                            <th>
                                                ชื่อพนักงาน
                                            </th>
                                            <th>
                                                วันที่สั่งสินค้า
                                            </th>
                                            <th>
                                                ชื่อลูกค้า
                                            </th>
                                            <th>

                                            </th>
                                            <?php include('../../../lib/config.php') ?>


                                            <?php

                                            $sql = "SELECT * FROM delivery 
                                            INNER JOIN employee ON employee.e_id=delivery.e_id
                                            INNER JOIN pay on pay.pay_id=delivery.pay_id
                                            INNER JOIN sale on sale.sale_id=pay.sale_id
                                            INNER JOIN customer on customer.c_id=sale.c_id
                                            ";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["deli_id"] . "</td>";
                                                    echo "<td>" . $row["pay_id"] . "</td>";
                                                    echo "<td>" . $row["deli_date"] . "</td>";
                                                    echo "<td>" . $row["e_id"] . " " . $row["e_name"] . " " . $row["e_surename"] . "</td>";
                                                    echo "<td>" . $row["sale_date"] . "</td>";
                                                    echo "<td>" . $row["c_id"] . " " . $row["c_name"] . " " . $row["c_surename"] . "</td>";

                                                    echo "<td>

                                    <a href='viewdeli.php?id=$row[deli_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                   <td>";

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
    <script src="../../js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>