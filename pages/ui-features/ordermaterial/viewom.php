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
            $odrer_matr_id = $_REQUEST['id'];
            $sql1 = "SELECT    
                                    employee.e_id,
                                    employee.e_name,
                                    employee.e_surename,
                                    supplier.supplier_name,
                                    supplier.supplier_address,
                                    supplier.supplier_phone,
                                    odrer_matr.odrer_matr_id,
                                    odrer_matr.e_id,
                                    odrer_matr.date_matr,
                                    odrer_matr.status
                                    
                                    FROM
                                    odrer_matr
                                    INNER JOIN employee ON odrer_matr.e_id = employee.e_id
                                    INNER JOIN supplier ON supplier.supplier_id  = odrer_matr.supplier_id
                                    WHERE odrer_matr.odrer_matr_id = '" . $_GET['id'] . "' ";
            $query1 = $conn->query($sql1);
            $row1 = mysqli_fetch_array($query1);

            // *****************************************************************************************************************************
            // <!-- อันนี้เป็นหัวข้อที่ทเราอยากให้มีในตารางรายละเอียดการสั่งซื้อ -->
            $sql2 = "SELECT odrer_matr_datail.order_matr_datail_id, 
                                    odrer_matr_datail.odrer_matr_id, 
                                    odrer_matr_datail.material_id, 
                                    odrer_matr_datail.amuont, 
                                    odrer_matr_datail.price, 

                                    material.material_id,
                                    material.material_name

                                    FROM odrer_matr_datail
                                    INNER JOIN material ON odrer_matr_datail.material_id = material.material_id 
                                    INNER JOIN odrer_matr ON odrer_matr_datail.odrer_matr_id = odrer_matr.odrer_matr_id
                                    WHERE odrer_matr.odrer_matr_id = '" . $row1['odrer_matr_id'] . "' ";
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
                                        <label for="odrer_matr_id">รหัสสั่งซื้อวัตถุดิบ : &nbsp;<?php echo $row1['odrer_matr_id']; ?> </label><br>
                                        <label for="date_matr">วันที่สั่งซื้อวัตถุดิบ : &nbsp;<?php echo $row1['date_matr']; ?> </label>
                                        <br><br>
                                    </div>

                                    <div class="col-sm-6" align="right">
                                        <label for="supplier_name">ชื่อร้าน :&nbsp;<?php echo $row1['supplier_name']; ?> </label>
                                        <br>
                                        <label for="supplier_address">ที่อยู่ : &nbsp;<?php echo $row1['supplier_address']; ?></label><br>
                                        <label for="supplier_phone">เบอร์โทรศัพท์ :&nbsp;<?php echo $row1['supplier_phone']; ?></label>
                                        <br><br>
                                    </div>
                                </div>
                                <br><br>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="e_name">ชื่อพนักงาน :&nbsp;<?php echo $row1['e_name']; ?>&nbsp;&nbsp;</label><?php echo $row1['e_surename']; ?></label>
                                        <br><br>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <section class="panel">
                                            <table class="table table-striped" id="odrer_matr">
                                                <?php $i = 0; ?>
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>ชื่อวัตถุดิบ</th>
                                                        <th>จำนวน</th>
                                                        <th>ราคาต่อหน่วย</th>
                                                        <th>ราคารวม</th>
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
                                                            <td><?php echo $row["amuont"] ?> </td>
                                                            <td><?php echo $row['price'] ?></td>
                                                            <td><?= $sum_price = $row["amuont"] * $row["price"] ?></td>
                                                            <?php $price = $price + $row['price'] * $row['amuont'] ?>
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
                                            <a href="ordermaterial.php"><button typr="cancel" class="btn btn-outline-primary  btn-rounded btn-fw"><span>กลับ</span> </button></a>
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