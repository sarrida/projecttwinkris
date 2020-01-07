<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];
$status = $_REQUEST['status'];

if ($status == 'กำลังผลิต') {

    $sql = "UPDATE manufacture SET status = '$status'
   WHERE manufacture.manufacture_id = '$ID'";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM mnf_dt WHERE mnf_dt.manufacture_id = '$ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row3 = $result->fetch_assoc()) {
            $manufacture_id = $row3['manufacture_id'];
            $amount = $row3['amount'];
        }
    }  

    $sql2 = "UPDATE material SET material_amout = material_amout - '$amount'
   WHERE material.material_id = '$material_id'";
    mysqli_query($conn, $sql2);

    header("location:../material/material.php");
}
else {
    $sql = "UPDATE manufacture
   SET status = '$status'
   WHERE manufacture.manufacture_id = '$ID'";
    mysqli_query($conn, $sql);

    header("location:manufacture.php");
}
mysqli_close($conn);
