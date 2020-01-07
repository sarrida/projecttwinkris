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
            // $ID = $_REQUEST['id'];
            // $sql = "SELECT * FROM customer where c_id = '$ID' ";
            // $result = $conn->query($sql);
            // $row = mysqli_fetch_assoc($result);
            ?>
            <?php
            $sale_id = $_REQUEST['id'];
            $sql1 = "SELECT    
                                    customer.c_id,
                                    customer.c_name,
                                    customer.c_surename,
                                    sale.sale_id,
                                    sale.sale_date,
                                    sale.status
                                    
                                    FROM
                                    sale
                                    INNER JOIN customer ON sale.c_id = customer.c_id
                                    WHERE sale.sale_id = '" . $_GET['id'] . "' ";
            $query1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($query1);

            // *****************************************************************************************************************************
            // <!-- อันนี้เป็นหัวข้อที่ทเราอยากให้มีในตารางรายละเอียดการสั่งซื้อ -->
            $sql2 = "SELECT sale_detail.sale_detail_id, 
                                    sale_detail.sale_id, 
                                    sale_detail.product_id, 
                                    sale_detail.amount, 
                                    sale_detail.price, 

                                    product.product_id,
                                    product.product_name

                                    FROM sale_detail
                                    INNER JOIN product ON sale_detail.product_id = product.product_id 
                                    INNER JOIN sale ON sale_detail.sale_id = sale.sale_id
                                    WHERE sale.sale_id = '" . $row1['sale_id'] . "' ";
            $query2 = mysqli_query($conn, $sql2);
            $price = 0;

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
                                    </h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="sale_id">รหัสการขาย : &nbsp;<?php echo $row1['sale_id']; ?> </label><br>
                                        <label for="c_name">ชื่อลูกค้า :&nbsp;<?php echo $row1['c_name']; ?>&nbsp;&nbsp;</label><?php echo $row1['c_surename']; ?></label>
                                        <br><br>

                                    </div>

                                    <div class="col-sm-6" align="right">
                                        <label for="sale_date">วันที่ขาย :&nbsp;<?php echo $row1['sale_date']; ?> </label>
                                    </div>
                                </div>
                                <br><br>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <section class="panel">
                                            <table class="table table-striped" id="sale">
                                                <?php $i = 0; ?>
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>ชื่อสินค้า</th>
                                                        <th>จำนวน</th>
                                                        <th>ราคาต่อหน่วย</th>
                                                        <th>ราคาทั้งหมด</th>
                                                        <!-- <th>วันหมดอายุ</th> -->
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    $total = 0;
                                                    $sum_price = 0;
                                                    while ($row = mysqli_fetch_assoc($query2)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $row['product_name'] ?></td>
                                                            <td><?php echo $row["amount"] ?> </td>
                                                            <td><?php echo $row['price'] ?></td>
                                                            <td><?= $sum_price = $row["amount"] * $row["price"] ?></td>
                                                            <?php $price = $price + $row['price'] * $row['amount'] ?>
                                                            <!-- <td><?php echo $row['manufacture_date2'] ?></td> -->
                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td colspan="10" align="right">ยอดรวมทั้งหมด &nbsp;&nbsp;&nbsp;&nbsp; <?php echo number_format($price, 2); ?> บาท</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <?php
                                            mysqli_close($conn);
                                            ?>
                                        </section>

                                        <br>
                                        <div align="center">
                                            <a href="sale.php"><button typr="cancel" class="btn btn-outline-primary  btn-rounded btn-fw"><span>กลับ</span> </button></a>
                                        </div>
                                    </div>
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