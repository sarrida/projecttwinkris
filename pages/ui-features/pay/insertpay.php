<?php

$connect = new PDO("mysql:host=localhost;dbname=twinkris", "root", "");
function fill_unit_select_box($connect)
{
    $output = '';
    $query = "SELECT * FROM  sale ORDER BY  sale_id ASC";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        $output .= '<option value="' . $row[" sale_id"] . '">' . $row[" sale_id"] . '</option>';
    }
    return $output;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
</head>
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
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ข้อมูลการชำระ</h4><br><br>

                                <form class="form-sample" method="post" action="db-insertpay.php" enctype="multipart/form-data">
                                    <!-- รหัสอัตโนมัติของ รหัสการชำระ -->
                                    <?php
                                    $pay_id = 0;
                                    $result = $conn->query("SELECT * FROM  pay");
                                    $sql  = "SELECT * FROM  pay";
                                    $query = mysqli_query($conn, $sql);
                                    while ($result = mysqli_fetch_array($query)) {
                                        $pay_id = $result['pay_id'];
                                    }
                                    $pay_id += 1;
                                    ?>
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">รหัสการชำระ</label>
                                                <div class=" col-sm-9">
                                                    <input type="pay_id" id="pay_id" class="form-control" name="pay_id" value=" <?php echo $pay_id; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- รหัสอัตโนมัติของ รหัสการขาย -->
                                        <?php
                                        $sale_id = 0;
                                        $result = $conn->query("SELECT * FROM sale INNER JOIN customer on customer.c_id=sale.c_id");
                                        $sql  = "SELECT * FROM sale INNER JOIN customer on customer.c_id=sale.c_id";
                                        $query = mysqli_query($conn, $sql);
                                        while ($result = mysqli_fetch_array($query)) {
                                            $sale_id = $result['sale_id'];
                                            $c_name = $result['c_name'];
                                            $c_surename = $result['c_surename'];
                                        }
                                        $sale_id += 1;
                                        ?>
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ชื่อลูกค้า</label>
                                                <div class=" col-sm-9">
                                                    <input type="sale_id" id="sale_id" class="form-control" name="sale_id" value=" <?php echo $sale_id . ' ' . $c_name . ' ' . $c_surename; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ข้อมูล -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">วันที่ชำระ</label>
                                                <div class=" col-sm-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="date_pay" name="date_pay">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">รูปภาพ</label>
                                                <div class="btn btn-outline-info col-sm-7">
                                                    <input type="file" name="p_img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <br><br>
                                    <div align="center">
                                        <button type="submit" name="save" id="save" class="btn btn-outline-primary btn-rounded btn-fw">บันทึก</button>&nbsp;
                                        <button typr="cancel" class="btn btn-outline-secondary  btn-rounded btn-fw" formaction="pay.php"> ยกเลิก</button>
                                    </div>
                                </form>
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