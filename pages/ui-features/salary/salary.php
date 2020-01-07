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
                                
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="search" align="center">
                                    <form action="#" method="post">
                                        <!-- <input type="txet" autocomplete="off" class="btn btn-outline-warning btn-icon-text" name="txtsearch"> -->
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">ชื่อพนักงาน :</label>
                                                    <div class="col-sm-9">
                                                        <?php $result = $conn->query("SELECT * FROM employee"); ?> <input autocomplete="off" type="text" id="e_id" name="e_id" class="btn btn-outline-warning btn-icon-text" list='list'>
                                                        <?php $sql = "SELECT * FROM work INNER JOIN employee on employee.e_id=work.e_id "; ?>
                                                        <datalist id='list'>
                                                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                                <option value="<?php echo $row['e_id'] . " " . $row['e_name'] . " " . $row['e_surename'] ?>">
                                                                </option><?php } ?>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label"> เดือน / ปี &nbsp; : </label>
                                                    <div class="col-sm-9">
                                                        <input type="MONTH" class="btn btn-outline-warning btn-icon-text" name="start_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-outline-primary btn-rounded btn-icon" name="search" title="search" value="ค้นหา"><i class='mdi mdi-search'></i>
                                        </div>
                                    </form>
                                </div>
                                <br><br>
                                <table class="table table-striped">
                                    <thead align="center">
                                        <tr>
                                            <th>รหัสการทำงาน</th>
                                            <th>วันที่ทำงาน</th>
                                            <th>ชื่อพนักงาน</th>
                                            <th>สถานะวันทำงาน</th>
                                            <!-- <th> </th> -->
                                            <?php include('../../../lib/config.php') ?>
                                            <?php
                                            // เงื่อนไขการค้นหาข้อมูล
                                            // SELECT * FROM work INNER JOIN employee on employee.e_id=work.e_id WHERE employee.e_id LIKE '1' and work.start_date LIKE '2019-10%'
                                            // $sql = "SELECT * FROM work INNER JOIN employee on employee.e_id=work.e_id  ";

                                            if (isset($_POST['search'])) {

                                                $sql .= "WHERE employee.e_id LIKE ' " . $_POST['e_id'] . " ' ";
                                                $sql .= "WHERE work.start_date LIKE ' " . $_POST['start_date'] . "% ' ";
                                            }
                                            $sql .= "order by work_id DESC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["work_id"] . "</td>";
                                                    echo "<td>" . $row["start_date"] . "</td>";
                                                    echo "<td>" . $row["e_id"] . " " . $row["e_name"] . " " . $row['e_surename'] . "</td>";
                                                    if ($row["work_state"] == 'เข้างาน') {
                                                        echo "<td>  <div class='progress'><div class='progress-bar progress-bar-striped' role='สถานะวันทำงาน' style='width: 100%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'> " . $row["work_state"] . "</td>";
                                                    } else
                                                        echo "<td>  <div class='progress'><div class='progress-bar bg-danger' role='สถานะวันทำงาน' style='width: 50%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'> " . $row["work_state"] . "</td>";
                                                }
                                            }
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