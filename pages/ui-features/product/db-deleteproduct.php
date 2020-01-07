<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM product WHERE product_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:product.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
