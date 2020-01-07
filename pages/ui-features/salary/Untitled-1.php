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
                        <h3 class="page-title">
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="insertwork.php">
                                    <button type="button" class="btn btn-outline-success btn-icon-text">เพิ่มข้อมูล<i class='mdi mdi-keyboard btn-icon-append'></i></button></a>&nbsp;
                                <!-- <a href="../../../pdf/pdf_product.php"> -->
                                <button type="button" class="btn btn-outline-info btn-icon-text">Print<i class="mdi mdi-printer btn-icon-append"></i></button>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Striped Table</h4>
                                <p class="card-description">
                                    Add class <code>.table-striped</code>
                                </p> -->
                                <div class="search" align="center">
                                    <form action="#" method="post">
                                        <!-- <input type="txet" autocomplete="off" class="btn btn-outline-warning btn-icon-text" name="txtsearch"> -->
                                        <div class="col-sm-6">
                                            ชื่อพนักงาน &nbsp; : &nbsp;
                                            <?php $result = $conn->query("SELECT * FROM employee"); ?>
                                            <input autocomplete="off" type="text" id="e_id" name="e_id" class="btn btn-outline-warning btn-icon-text" list='list'>
                                            <?php $sql = "SELECT * FROM work INNER JOIN employee on employee.e_id=work.e_id "; ?>
                                            <datalist id='list'>
                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                    <option value="<?php echo $row['e_id'] . " " . $row['e_name'] . " " . $row['e_surename'] ?>">
                                                    </option><?php } ?>
                                            </datalist>
                                        </div><br><br>
                                        เดือน / ปี &nbsp; : &nbsp;
                                        <input type="MONTH" class="btn btn-outline-warning btn-icon-text" name="start_date">
                                        <br><br>

                                        <input type="submit" class="btn btn-outline-primary btn-rounded btn-icon" name="search" title="search" value="ค้นหา"><i class='mdi mdi-search'></i>
                                    </form>
                                </div>
                                <br><br>
                                <table class="table table-striped">
                                    <thead align="center">
                                        <tr>
                                            <?php include('../../../lib/config.php') ?>
                                            <?php
                                            // เงื่อนไขการค้นหาข้อมูล
                                            if (isset($_POST['search'])) {

                                                $sql .= "WHERE employee.e_id LIKE ' %" . $_POST['e_id'] . " ' and ' %" . $_POST['start_date'] . "% ' ";


                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                            }
                                            ?>
                                            <br><br>
                                            <div class="card border-success mb-10" style="max-width: 50rem;">
                                                <div class="card-headre">เงินเดือน </div>
                                                <div class="card card-body">
                                                    <h4>ชื่อพนักงาน &nbsp; : &nbsp; <?= $row['e_id'] . " " . $row['e_name'] . " " . $row['e_surename'] ?></h4>
                                                    <h4>จำนวนวันมาทำงาน &nbsp; : &nbsp; <?php $work = explode(" ", $start_date) ?></h4>
                                                    <?php
                                                    $e_id = $_POST['e_id'];
                                                    $date_start = $work[1];
                                                    $sql = "SELECT count(work_date) AS sum FROM work WHERE e_id = '$e_id'  AND MONTH(work_date)= '$start_date' ";

                                                    $result = $conn->query($sql);
                                                    $row = $result->fetch_assoc();

                                                    echo $row["sum"];
                                                    ?>

                                                </div>
                                            </div>

                                            <?php
                                            $conn->close();
                                            ?>
                                        </tr>

                                    </thead>
                                </table>
                                <br><br>
                                <div align="center">
                                    <a href="salary.php"><button typr="cancel" class="btn btn-outline-danger  btn-rounded btn-fw"><span>กลับ</span> </button></a>
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
    <script src=" ../../../vendors/js/vendor.bundle.base.js"> </script>
    <script src="../../../vendors/js/vendor.bundle.addons.js">
    </script>
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