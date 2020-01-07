<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM supplier WHERE supplier_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:supplier.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
