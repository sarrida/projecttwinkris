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
                            <!-- ข้อมูลสินค้า -->
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="insertproduct.php">
                                    <button type="button" class="btn btn-outline-info btn-fw"><i class='mdi mdi-keyboard'>&nbsp;</i>เพิ่มข้อมูล</button></a>&nbsp;
                                <a href="../../../pdf/pdf_product.php">
                                    <button type="button" class="btn btn-outline-success btn-fw"><i class='mdi mdi-printer'>&nbsp;</i>พิมพ์ข้อมูล</button></a>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $sql = "SELECT sum(`product_amout`*`product_price`) AS total FROM `product`";

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
                                                รหัสสินค้า
                                            </th>
                                            <th>
                                                ชื่อสินค้า
                                            </th>
                                            <th>
                                                รูปภาพ
                                            </th>
                                            <th>
                                                จำนวนสินค้า
                                            </th>
                                            <th>
                                                ราคาสินค้า
                                            </th>
                                            <th>
                                                ราคารวม
                                            </th>

                                            <th>

                                            </th>
                                            <?php include('../../../lib/config.php') ?>

                                            <?php
                                            // $sql = "SELECT * FROM `product` where product.product_amout<50 and product.product_price=25 ";

                                            $sql = "SELECT * FROM product";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["product_id"] . "</td>";
                                                    echo "<td>" . $row["product_name"] . "</td>";
                                                    echo '<td><img src="../pic/' . $row["product_img"] . '"style="width:50px;height:50px;"/></td>';
                                                    echo "<td>" . $row["product_amout"] . "</td>";
                                                    echo "<td>" . $row["product_price"] . "</td>";

                                                    $sum_price = $row["product_amout"] *  $row["product_price"];
                                                    echo "<td>" . $sum_price . "</td>";

                                                    echo "<td>
                                                   
                                    <a href='viewpro.php?id=$row[product_id]'><button type='button' class='btn btn-outline-primary btn-rounded btn-icon'><i class='mdi mdi-eye' ></i></button></a>&nbsp;
                                    <a href='updateproduct.php?id=$row[product_id]'><button type='button' class='btn btn-outline-warning btn-rounded btn-icon'>
                          <i class='mdi mdi-border-color text-warning' ></i></button></a>&nbsp;
                                    <a href='db-deleteproduct.php?id=" . $row['product_id'] . "'onclick=\"return confirm('ต้องการจะลบข้อมูลนี้ใช่หรือไม่?')\"><button type='button' class='btn btn-outline-danger btn-rounded btn-icon'><i class='mdi mdi-broom text-danger'></i> </button></td>";
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