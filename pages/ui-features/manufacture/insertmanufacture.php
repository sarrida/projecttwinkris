<?php

$connect = new PDO("mysql:host=localhost;dbname=twinkris", "root", "");
function fill_unit_select_box($connect)
{
    $output = '';
    $query = "SELECT * FROM  material ORDER BY  material_name ASC";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        $output .= '<option value="' . $row[" material_name"] . '">' . $row[" material_name"] . '</option>';
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
                                <h4 class="card-title">ข้อมูลการผลิต</h4><br><br>

                                <form name="add_name" id="add_name">
                                    <?php
                                    $manufacture_id = 0;
                                    $result = $conn->query("SELECT * FROM manufacture");
                                    $sql  = "SELECT * FROM  manufacture";
                                    $query = mysqli_query($conn, $sql);
                                    while ($result = mysqli_fetch_array($query)) {
                                        $manufacture_id = $result['manufacture_id'];
                                    }
                                    $manufacture_id += 1;
                                    ?>
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">รหัสการผลิต</label>
                                                <div class=" col-sm-9">
                                                    <input type="manufacture_id" id="manufacture_id" class="form-control" name="manufacture_id" value=" <?php echo $manufacture_id; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    $mysqli = new mysqli('localhost', 'root', '', 'twinkris');
                                    mysqli_set_charset($mysqli, "utf8");
                                    $result = $mysqli->query("SELECT * FROM employee ");
                                    ?>
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">ชื่อพนักงาน</label>
                                                <div class=" col-sm-9">
                                                    <input type="text" id="e_id" name="e_id" class="form-control" list='list1'>
                                                    <?php $sql = "SELECT * FROM employee";
                                                    $result = $mysqli->query($sql); ?>
                                                    <datalist id='list1'>
                                                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                                            <option value="<?php echo $row["e_id"] . " " . $row['e_name'] . " " . $row['e_surename'] ?>"></option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $mysqli = new mysqli('localhost', 'root', '', 'twinkris');
                                    mysqli_set_charset($mysqli, "utf8");
                                    $result = $mysqli->query("SELECT * FROM product ");
                                    ?>
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">สินค้า</label>
                                                <div class=" col-sm-9">
                                                    <input type="text" id="product_id" name="product_id" class="form-control" list='list2'>
                                                    <?php $sql = "SELECT * FROM product";
                                                    $result = $mysqli->query($sql); ?>
                                                    <datalist id='list2'>
                                                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                                            <option value="<?php echo $row["product_id"] . " " . $row['product_name']  ?>"></option>
                                                        <?php } ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">จำนวนที่ผลิต</label>
                                                <div class=" col-sm-9">
                                                    <input type="number" name="manufacture_amout" id="manufacture_amout" class="form-control" name="manufacture_amout" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">วันที่ผลิต</label>
                                                <div class=" col-sm-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="manufacture_date" name="manufacture_date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">วันที่หมดอายุ</label>
                                                <div class=" col-sm-9">
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="manufacture_date2" name="manufacture_date2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">สถานะ</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="status">
                                                        <option>สถานะ</option>
                                                        <option>กำลังผลิต</option>
                                                        <option>ผลิตเสร็จสิ้น</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- ***********************************DYINAMIC****************************************** -->

                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dynamic_field">
                                            <th class="text-center">
                                                ชื่อวัตถุดิบ
                                            </th>
                                            <th class="text-center">
                                                จำนวน
                                            </th>


                                            <tr>
                                                <td><input type="text" name="material_id[]" autocomplete="off" placeholder="Enter your Name" class="form-control name_list" list='list3' />
                                                    <?php $sql = "SELECT * FROM material";
                                                    $result = $mysqli->query($sql); ?>
                                                    <datalist id='list3'>
                                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                            <option value="<?php echo $row['material_id'] . " " . $row['material_name'] ?>">
                                                            </option>
                                                        <?php } ?>
                                                    </datalist>
                                                </td>

                                                <td>
                                                    <input type="number" name="amount[]" id="amount" placeholder="Enter number" class="form-control name_list" />
                                                </td>

                                                <td>
                                                    <button type="button" name="add" id="add" class=" btn btn-outline-success btn-rounded btn-icon ">

                                                        <span><i class="mdi mdi-plus"></i></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <br><br>
                                    <div align="center">
                                        <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-rounded btn-fw">บันทึก</button>&nbsp;
                                        <button typr="cancel" class="btn btn-outline-secondary  btn-rounded btn-fw" formaction="manufacture.php"> ยกเลิก</button>
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

    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" autocomplete="off" name="material_id[]" placeholder="Enter your Name" class="form-control name_list" list="list3"/></td><td><input type="number" name="amount[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '"<a class="btn btn-outline-danger btn-rounded btn-icon btn_remove "><i class="mdi mdi-minus"></i></button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
            $('#submit').click(function() {
                $.ajax({
                    url: "db-insertmanufacture.php",
                    method: "POST",
                    data: $('#add_name').serialize(),
                    success: function(data) {
                        alert(data);
                        $('#add_name')[0].reset();
                    }
                });
            });
        });
    </script>

</body>

</html>