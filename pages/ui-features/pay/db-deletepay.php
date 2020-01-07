<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM pay WHERE pay_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:pay.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
