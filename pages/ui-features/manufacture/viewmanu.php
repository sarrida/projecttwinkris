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
            $manufacture_id = $_REQUEST['id'];
            $sql1 = "SELECT    
                                    employee.e_id,
                                    employee.e_name,
                                    employee.e_surename,
                                    product.product_id,
                                    product.product_name,
                                    manufacture.manufacture_id,
                                    manufacture.e_id,
                                    manufacture.manufacture_amout,
                                    manufacture.manufacture_date,
                                    manufacture.manufacture_date2
                                    
                                    FROM
                                    manufacture
                                    INNER JOIN employee ON manufacture.e_id = employee.e_id
                                    INNER JOIN product ON product.product_id  = manufacture.product_id
                                    WHERE manufacture.manufacture_id = $manufacture_id ";
            $query1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($query1);

            // *****************************************************************************************************************************
            // <!-- อันนี้เป็นหัวข้อที่ทเราอยากให้มีในตารางรายละเอียดการสั่งซื้อ -->
            $sql2 = "SELECT * FROM mnf_dt  INNER JOIN manufacture on  mnf_dt.manufacture_id = manufacture.manufacture_id
            INNER JOIN material ON mnf_dt.material_id = material.material_id WHERE  mnf_dt.manufacture_id = $manufacture_id  ";
            $query2 = mysqli_query($conn, $sql2);
            $price = 0;
            // $sql2 = " SELECT * FROM mnf_dt INNER JOIN manufacture on mnf_dt.manufacture_id = manufacture.manufacture_id INNER JOIN odrer_matr_datail ON odrer_matr_datail.order_matr_datail_id=odrer_matr_datail.odrer_matr_id INNER JOIN odrer_matr ON odrer_matr_datail.odrer_matr_id=odrer_matr.odrer_matr_id INNER JOIN material ON material.material_id=odrer_matr_datail.material_id INNER JOIN supplier ON supplier.supplier_id=odrer_matr.supplier_id";
            // $query2 = mysqli_query($conn, $sql2);
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
                                        <label for="manufacture_id">รหัสการผลิต : &nbsp;<?php echo $row1['manufacture_id']; ?> </label><br>
                                        <label for="product_name">ชื่อสินค้า : &nbsp;<?php echo $row1['product_name']; ?> </label>
                                        <br><br>
                                    </div>

                                    <div class="col-sm-6" align="right">
                                        <label for="e_name">ชื่อพนักงาน :&nbsp;<?php echo $row1['e_name']; ?>&nbsp;&nbsp;</label><?php echo $row1['e_surename']; ?></label>
                                        <br>
                                        <label for="manufacture_amout">จำนวนที่ผลิต : &nbsp;<?php echo $row1['manufacture_amout']; ?></label><br>
                                    </div>
                                </div>
                                <br><br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="manufacture_date">วันที่ผลิต : &nbsp;<?php echo $row1['manufacture_date']; ?></label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="manufacture_date2">วันที่หมดอายุ : &nbsp;<?php echo $row1['manufacture_date2']; ?> </label>
                                        <br><br>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <section class="panel" align="center">
                                            <table class="table table-striped" id="mnf_dt">
                                                <?php $i = 0; ?>
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            ลำดับ
                                                        </th>
                                                        <th class="text-center">
                                                            ชื่อวัตถุดิบ
                                                        </th>
                                                        <th class="text-center">
                                                            จำนวน
                                                        </th>

                                                        <!-- <th class="text-center">
                                                            ชื่อซัพพลายเออร์
                                                        </th> -->
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
                                                            <td><?php echo $row['material_name'] ?></td>
                                                            <td><?php echo $row["amount"] ?> </td>
                                                            <!-- <td><?php echo $row["supplier_name"] ?> </td> -->

                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                            <?php
                                            mysqli_close($conn);
                                            ?>
                                        </section>

                                        <br>
                                        <div align="center">
                                            <a href="manufacture.php"><button typr="cancel" class="btn btn-outline-primary  btn-rounded btn-fw"><span>กลับ</span> </button></a>
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