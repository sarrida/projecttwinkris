<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];
$status = $_REQUEST['status'];

if ($status == 'ผลิตเสร็จสิ้น') {

    $sql = "UPDATE manufacture SET status = '$status'
   WHERE manufacture.manufacture_id = '$ID'";
    mysqli_query($conn, $sql);

    // ........................................................................//

    $sql = "SELECT * FROM manufacture WHERE manufacture.manufacture_id = '$ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row3 = $result->fetch_assoc()) {
            $product_id = $row3['product_id'];
            $manufacture_amout = $row3['manufacture_amout'];
            
            $sql2 = "UPDATE product SET product_amout = product_amout + '$manufacture_amout'
            WHERE product.product_id = '$product_id'";
            mysqli_query($conn, $sql2);
        }
    }   
    

    // --------------------------------------------------------------------/

    header("location:../manufacture/manufacture.php");
}
else {
    $sql = "UPDATE manufacture
   SET status = '$status'
   WHERE manufacture.manufacture_id = '$ID'";
    mysqli_query($conn, $sql);

    header("location:manufacture.php");
}
mysqli_close($conn);
