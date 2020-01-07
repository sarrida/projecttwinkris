<?php
include('../../../lib/config.php');

$ID = $_REQUEST['id'];
$status = $_REQUEST['status'];
if ($status == 'ได้รับของแล้ว') {

    $sql = "UPDATE odrer_matr SET status = '$status'
   WHERE odrer_matr.odrer_matr_id = '$ID'";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM odrer_matr_datail WHERE odrer_matr_datail.odrer_matr_id = '$ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row3 = $result->fetch_assoc()) {
            $material_id = $row3['material_id'];
            $amuont = $row3['amuont'];

            $sql2 = "UPDATE material SET material_amout = material_amout + '$amuont'
            WHERE material.material_id = '$material_id'";
            mysqli_query($conn, $sql2);

        }
    }  

    header("location:../material/material.php");
}
else {
    $sql = "UPDATE odrer_matr
   SET status = '$status'
   WHERE odrer_matr.odrer_matr_id = '$ID'";
    mysqli_query($conn, $sql);

    header("location:ordermaterial.php");
}
mysqli_close($conn);
