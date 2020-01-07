<?php
$sql = "SELECT  * FROM work INNER JOIN employee on ( employee.e_id=fix.e_id) JOIN mechine on ( mechine.mechine_id=fix.mechine_id) ";


?>
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
            $sql = "SELECT * FROM fix where fix_id = '$ID' ";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">

                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ข้อมูลแจ้งซ่อม</h4><br><br>
                                <form class="form-sample" method="post" action="db-updatefix.php?txtID=<?php echo $ID; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ชื่อพนักงาน</label>
                                                <div class="col-sm-9">
                                                    <?php $result = $conn->query("SELECT * FROM employee"); ?>
                                                    <input autocomplete="off" type="text" id="e_id" name="e_id" class="form-control" list='list' value="<?php echo $row['e_id'] ?>">
                                                    <?php $sql = "SELECT * FROM fix INNER JOIN employee on employee.e_id=fix.e_id "; ?>
                                                    <datalist id='list'>
                                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                            <option value="<?php echo $row['e_id'] . " " . $row['e_name'] . " " . $row['e_surename'] ?>">
                                                            </option><?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ชื่อเครื่องจักร</label>
                                                <div class="col-sm-9">
                                                    <?php $result = $conn->query("SELECT * FROM mechine"); ?>
                                                    <input autocomplete="off" type="text" id="mechine_id" name="mechine_id" class="form-control" list='list1' value="<?php echo $row['mechine_id'] . " " . $row['mechine_name']  ?>">
                                                    <?php $sql = "SELECT * FROM fix INNER JOIN mechine on mechine.mechine_id=fix.mechine_id "; ?>
                                                    <datalist id='list1'>
                                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                            <option value="<?php echo $row['mechine_id'] . " " . $row['mechine_name']  ?>">
                                                            </option><?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">วันที่แจ้งซ่อม</label>
                                                <div class=" col-sm-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="fix_date" value="<?php echo $row['fix_date'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleTextarea1">รายละเอียดการซ่อม</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="12" name="fix_deteil" value="<?php echo $row['fix_deteil'] ?>"></textarea>
                                    </div>

                                    <div align=" center">
                                        <button type="submit" class="btn btn-outline-primary btn-rounded btn-fw" name="save">บันทึก</button>&nbsp;
                                        <button typr="cancel" class="btn btn-outline-secondary  btn-rounded btn-fw" formaction="fix.php">ยกเลิก</button>
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