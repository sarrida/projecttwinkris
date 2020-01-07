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
            <?php
            include('../../../lib/config.php');
            $ID = $_REQUEST['id'];
            $sql = "SELECT * FROM product where product_id = '$ID' ";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">

                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-header">
                                    <h3 class="page-title">
                                        รายละเอียดข้อมูลสินค้า
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <section class="panel">
                                            <table class="table table-bordered" id="customer">
                                                <thead>
                                                <tbody>
                                                    <tr>
                                                        <td width=30% class="table-primary" align="right">รูปภาพ</td>
                                                        <td><?php echo '<img src="../pic/' . $row["product_img"] . '"style="width:150px;height:150px;"/>' ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width=30% class="table-primary" align="right">รหัสสินค้า</td>
                                                        <td><?php echo $row['product_id'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width=30% class="table-primary" align="right">ชื่อสินค้า</td>
                                                        <td><?php echo $row["product_name"] ?> </td>
                                                    </tr>

                                                    <tr>
                                                        <td width=30% class="table-primary" align="right">จำนวนสินค้า</td>
                                                        <td><?php echo $row['product_amout'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td width=30% class="table-primary" align="right">ราคาสินค้า</td>
                                                        <td><?php echo $row['product_price'] ?></td>
                                                    </tr>

                                                </tbody>
                                                </thead>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                                <br>
                                <div align="center">
                                    <a href="product.php"><button typr="cancel" class="btn btn-outline-primary  btn-rounded btn-fw"><span>กลับ</span> </button></a>
                                </div>
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
    <script src="../../js/off-canvas.js"></script>
    <script src="../../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>