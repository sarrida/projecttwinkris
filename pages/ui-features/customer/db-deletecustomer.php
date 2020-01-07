<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM customer WHERE c_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:customer.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
