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
            <?php
            include('../../../lib/config.php');

            $ID = $_REQUEST['id'];
            $sql = "SELECT * FROM customer where c_id = '$ID' ";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            ข้อมูลลูกค้า
                        </h3>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ประวัติข้อมูลลูกค้า</h4>
                                <form class="form-sample" method="post" action="db-updatecustomer.php?id=<?php echo $ID; ?> ">
                                    <div class=" row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ชื่อ</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="c_name" value="<?php echo $row['c_name'] ?> " />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">นามสกุล</label>
                                                <div class=" col-sm-9">
                                                    <input type="text" class="form-control" name="c_surename" value="<?php echo $row['c_surename'] ?> " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">เพศ</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="c_gender" value="<?php echo $row['c_gender'] ?> ">
                                                        <option>ผู้ชาย</option>
                                                        <option>ผู้หญิง</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">ที่อยู่ปัจจุบัน</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="c_address" value="<?php echo $row['c_address'] ?> " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">เบอร์โทรศัพท์</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="c_phone" value="<?php echo $row['c_phone'] ?> " />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">อีเมล์</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="c_email" value="<?php echo $row['c_email'] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div align="center">
                                        <button type="submit" class="btn btn-outline-primary btn-rounded btn-fw">บันทึก</button>&nbsp;
                                        <button typr="cancel" class="btn btn-outline-secondary  btn-rounded btn-fw" formaction="customer.php">ยกเลิก</button>
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