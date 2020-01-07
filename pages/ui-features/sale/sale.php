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
                        <h3 class="page-title"> </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="insertsale.php">
                                    <button type="button" class="btn btn-outline-success btn-icon-text">เพิ่มข้อมูล<i class='mdi mdi-keyboard btn-icon-append'></i></button></a>&nbsp;
                                </a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $sql = "SELECT sum(`amount`*`price`) AS total FROM `sale_detail`";

                                include('../../../lib/config.php');
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);
                                ?>

                                <h3 class="page-title" align="right"> ราคารวมทั้งหมด &nbsp; : &nbsp; <?php echo $row["total"]; ?> บาท / ฿</h3>
                                <br>
                                <table class="table table-striped">
                                    <thead align="center">
                                        <tr>
                                            <th>
                                                รหัสใบสั่งซื้อ/ขาย
                                            </th>
                                            <th>
                                                ชื่อลูกค้า
                                            </th>
                                            <th>
                                                วันที่ขาย
                                            </th>
                                            <th>
                                                ราคารวม
                                            </th>
                                            <th>
                                                สถานะ
                                            </th>
                                            <th>

                                            </th>


                                            <?php include('../../../lib/config.php') ?>

                                            <!-- SELECT sum(`amount`*`price`) as total FROM `sale_detail` -->

                                            <?php
                                            $sql = "SELECT * FROM sale INNER JOIN sale_detail on sale_detail.sale_detail_id = sale.sale_id
                                                                INNER JOIN customer on customer.c_id = sale.c_id  where  status like 'ยังไม่ชำระ'  ORDER BY sale.sale_id DESC ";
                                            $result = $conn->query($sql);
                                            $total = 0;
                                            $sum_price = 0;
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                                    echo "<tr>";
                                                    echo "<td>" . $row['sale_id'] . "</td>";
                                                    echo "<td>" . $row['c_name'] . " " . $row['c_surename'] . "</td>";
                                                    echo "<td>" . $row['sale_date'] . "</td>";

                                                    // $sum_price = $row["amount"] * $row["price"];
                                                    // $total = $sum_price + $row['price'] * $row['amount'];
                                                    // echo "<td>" . $total . "</td>";


                                                    if ($row["status"] == 'ชำระแล้ว') {
                                                        echo "<td> <label class='badge badge-success  progress-bar-striped'> " . $row["status"] . "</td>";
                                                    } else
                                                        echo "<td> <label class='badge badge-danger  progress-bar-striped'>" . $row["status"] . "</td>";


                                                    if ($row["status"] == 'ชำระแล้ว') {
                                                        echo "<td>
                                                        <a href='viewsale.php?id=$row[sale_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                                        </td>";
                                                    } else {
                                                        echo "<td>
                                                        <a href='../pay/insertpay.php'><button type='button' class='btn btn-outline-info btn-rounded btn-icon'><i class='mdi mdi-coin' ></i></button></a>&nbsp;
                                                        <a href='viewsale.php?id=$row[sale_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                                        <a href='updatesale.php?id=$row[sale_id]'><button type='button' class='btn btn-outline-warning btn-rounded btn-icon'><i class='mdi mdi-border-color text-warning' ></i></button></a>&nbsp; 
                                                    </td>";
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