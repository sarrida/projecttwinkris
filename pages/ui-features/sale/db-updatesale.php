<?php
include('../../../lib/config.php');


$ID = $_REQUEST['sale_id'];
$status = $_REQUEST['status'];

if ($status == 'ชำระแล้ว') {

    $sql = "UPDATE sale SET status = '$status'
    WHERE sale.sale_id = '$ID'";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM sale_detail WHERE sale_detail.sale_id = '$ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row3 = $result->fetch_assoc()) {
            $product_id = $row3['product_id'];
            $amount = $row3['amount'];

            $sql2 = "UPDATE product SET product_amout = product_amout - '$amount'
            WHERE product.product_id = '$product_id'";
            mysqli_query($conn, $sql2);
        }
    }   

//     $sql2 = "UPDATE product SET product_amout = product_amout - '$amount'
//    WHERE product.product_id = '$product_id'";
//     mysqli_query($conn, $sql2);

    header("location:../sale/sale.php");
}
else {
    $sql = "UPDATE sale
   SET status = '$status'
   WHERE sale.sale_id = '$ID'";
    mysqli_query($conn, $sql);

    header("location:sale.php");
}
mysqli_close($conn);
?>